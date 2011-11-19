<?php
/**
 * AclPermissions Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class AclPermissionsController extends AclAppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
    public $name = 'AclPermissions';
/**
 * Models used by the Controller
 *
 * @var array
 * @access public
 */
    public $uses = array(
        'Acl.AclAco',
        'Acl.AclAro',
        'Acl.AclArosAco',
        'Role',
    );
    
    public function admin_index() {
        $this->set('title_for_layout', __('Permissions', true));
        
        $acos = $this->Acl->Aco->find('list', array(
            'conditions' => array(
                'parent_id' => null,
                'foreign_key' => null,
                'alias LIKE' => 'controllers%',
            ),
            'fields' => array(
                'id',
                'alias',
            ),
            'order' => 'Aco.alias ASC',
            'recursive' => -1,
        ));
        $roles = $this->Role->find('list');
        $this->set(compact('acos', 'roles'));
        
        $rolesAros = $this->AclAro->find('all', array(
            'conditions' => array(
                'AclAro.model' => 'Role',
                'AclAro.foreign_key' => array_keys($roles),
            ),
        ));
        $rolesAros = Set::combine($rolesAros, '{n}.AclAro.foreign_key', '{n}.AclAro.id');
        
        $permissions = array(); // acoId => roleId => bool
        foreach ($rolesAros AS $roleId => $aroId) {
            $rolePermissions = $this->Acl->Aco->Permission->find('list', array(
                'conditions' => array(
                    'Permission.aro_id' => $aroId,
                    'Permission._create' => 1,
                    'Permission._read' => 1,
                    'Permission._update' => 1,
                    'Permission._delete' => 1,
                ),
                'fields' => array(
                    'id',
                    'aco_id',
                ),
                'recursive' => -1,
            ));
            $permissions[$roleId] = array_values($rolePermissions);
        }
        $this->set(compact('permissions', 'rolesAros'));
    }

    public function admin_toggle($acoId, $aroId) {
        if (!$this->RequestHandler->isAjax()) {
            $this->redirect(array('action' => 'index'));
        }

        // see if acoId and aroId combination exists
        $conditions = array(
            'AclArosAco.aco_id' => $acoId,
            'AclArosAco.aro_id' => $aroId,
        );
        if ($this->AclArosAco->hasAny($conditions)) {
            $data = $this->AclArosAco->find('first', array('conditions' => $conditions));
            if ($data['AclArosAco']['_create'] == 1 &&
                $data['AclArosAco']['_read'] == 1 &&
                $data['AclArosAco']['_update'] == 1 &&
                $data['AclArosAco']['_delete'] == 1) {
                // from 1 to 0
                $data['AclArosAco']['_create'] = 0;
                $data['AclArosAco']['_read'] = 0;
                $data['AclArosAco']['_update'] = 0;
                $data['AclArosAco']['_delete'] = 0;
                $permitted = 0;
            } else {
                // from 0 to 1
                $data['AclArosAco']['_create'] = 1;
                $data['AclArosAco']['_read'] = 1;
                $data['AclArosAco']['_update'] = 1;
                $data['AclArosAco']['_delete'] = 1;
                $permitted = 1;
            }
        } else {
            // create - CRUD with 1
            $data['AclArosAco']['aco_id'] = $acoId;
            $data['AclArosAco']['aro_id'] = $aroId;
            $data['AclArosAco']['_create'] = 1;
            $data['AclArosAco']['_read'] = 1;
            $data['AclArosAco']['_update'] = 1;
            $data['AclArosAco']['_delete'] = 1;
            $permitted = 1;
        }

        // save
        $success = 0;
        if ($this->AclArosAco->save($data)) {
            $success = 1;
        }

        $this->set(compact('acoId', 'aroId', 'data', 'success', 'permitted'));
    }
    
}
?>