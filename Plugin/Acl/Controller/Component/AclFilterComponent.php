<?php
/**
 * AclFilter Component
 *
 * PHP version 5
 *
 * @category Component
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class AclFilterComponent extends Component {

    protected $controller = null;

/**
 * @param object $controller controller
 * @param array  $settings   settings
 */
    public function initialize(&$controller) {
        $this->controller =& $controller;
    }

/**
 * acl and auth
 *
 * @return void
 */
    public function auth() {
        //Configure AuthComponent
        $this->controller->Auth->authenticate = array(
            AuthComponent::ALL => array(
                'userModel' => 'User',
                'fields' => array(
                    'username' => 'username',
                    ),
                'scope' => array(
                    'User.status' => 1,
                    ),
                ),
            'Form',
            );
        $actionPath = 'controllers';
        $this->controller->Auth->authorize = array(
            AuthComponent::ALL => array('actionPath' => $actionPath),
            'Actions',
            );
        $this->controller->Auth->loginAction = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login',
        );
        $this->controller->Auth->logoutRedirect = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login',
        );
        $this->controller->Auth->loginRedirect = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'index',
        );

        if ($this->controller->Auth->user() && $this->controller->Auth->user('role_id') == 1) {
            // Role: Admin
            $this->controller->Auth->allowedActions = array('*');
        } else {
            if ($this->controller->Auth->user()) {
                $roleId = $this->controller->Auth->user('role_id');
            } else {
                $roleId = 3; // Role: Public
            }

            $aro = $this->controller->Acl->Aro->find('first', array(
                'conditions' => array(
                    'Aro.model' => 'Role',
                    'Aro.foreign_key' => $roleId,
                ),
                'recursive' => -1,
                'cache' => array(
                    'name' => 'acl_filter_role_' . $roleId,
                    'config' => 'acl_filter',
                ),
            ));
            $aroId = $aro['Aro']['id'];

            $acoAlias = 'controllers/' . $this->controller->name . '/' . $this->controller->params['action'];
            $aco = $this->controller->Acl->Aco->find('first', array(
                'conditions' => array(
                    'Aco.alias' => $acoAlias,
                ),
                'recursive' => -1,
                'cache' => array(
                    'name' => 'acl_filter_aco_' . Inflector::underscore($acoAlias),
                    'config' => 'acl_filter',
                ),
            ));
            $acoId = $aco['Aco']['id'];

            $permission = $this->controller->Acl->Aco->Permission->find('first', array(
                'conditions' => array(
                    'Permission.aro_id' => $aroId,
                    'Permission.aco_id' => $acoId,
                    'Permission._create' => 1,
                    'Permission._read' => 1,
                    'Permission._update' => 1,
                    'Permission._delete' => 1,
                ),
                'cache' => array(
                    'name' => 'acl_filter_permission_' . $aroId . '_' . $acoId,
                    'config' => 'acl_filter',
                ),
            ));
            $allow = array();
            if (!empty($permission['Permission']['id'])) {
                $allow[] = $this->controller->params['action'];
            }
            $this->controller->Auth->allowedActions = $allow;
        }
    }

}
?>