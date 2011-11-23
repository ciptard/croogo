<?php
/**
 * AclActions Controller
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
class AclActionsController extends AclAppController {
    public $name = 'AclActions';
    public $uses = array('Acl.AclAco');
    public $components = array('Acl.AclGenerate');

    public function admin_index() {
        $this->set('title_for_layout', __('Actions'));

        $acos = $this->Acl->Aco->find('list', array(
            'conditions' => array(
                'Aco.alias LIKE' => 'controllers%',
            ),
            'fields' => array(
                'id',
                'alias',
            ),
            'recursive' => -1,
            'order' => 'Aco.alias ASC',
        ));
        $this->set(compact('acos'));
    }

    public function admin_add() {
        $this->set('title_for_layout', __('Add Action', true));

        if (!empty($this->data)) {
            $hasAco = $this->Acl->Aco->hasAny(array('alias' => $this->data['Aco']['alias']));
            if ($hasAco) {
                $this->redirect(array(
                    'plugin' => 'acl', 
                    'controller' => 'acl_permissions', 
                    'action' => 'index',
                ));
            }
            
            $this->Acl->Aco->create();
            if ($this->Acl->Aco->save($this->data['Aco'])) {
                $this->Session->setFlash(__('The ACO has been saved'), 'default', array('class' => 'success'));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The ACO could not be saved. Please, try again.'), 'default', array('class' => 'error'));
            }
        }
    }

    public function admin_edit($id = null) {
        $this->set('title_for_layout', __('Edit Action'));

        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid Action'), 'default', array('class' => 'error'));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            $hasAco = $this->Acl->Aco->hasAny(array('alias' => $this->data['Aco']['alias']));
            if ($hasAco) {
                $this->redirect(array(
                    'plugin' => 'acl', 
                    'controller' => 'acl_permissions', 
                    'action' => 'index',
                ));
            }
            
            if ($this->Acl->Aco->save($this->data['Aco'])) {
                $this->Session->setFlash(__('The Action has been saved'), 'default', array('class' => 'success'));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Action could not be saved. Please, try again.'), 'default', array('class' => 'error'));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Acl->Aco->read(null, $id);
        }
    }

    public function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for Action'), 'default', array('class' => 'error'));
            $this->redirect(array('action'=>'index'));
        }
        if (!isset($this->params['named']['token']) || ($this->params['named']['token'] != $this->params['_Token']['key'])) {
            $blackHoleCallback = $this->Security->blackHoleCallback;
            $this->$blackHoleCallback();
        }
        if ($this->Acl->Aco->delete($id)) {
            $this->Session->setFlash(__('Action deleted'), 'default', array('class' => 'success'));
            $this->redirect(array('action'=>'index'));
        }
    }

    public function admin_generate() {
        $controllerPaths = $this->AclGenerate->listControllers();
        foreach ($controllerPaths AS $controllerName => $controllerPath) {
            $methods = $this->AclGenerate->listActions($controllerName, $controllerPath);
            foreach ($methods AS $method) {
                $hasAco = $this->Acl->Aco->hasAny(array(
                    'Aco.alias' => 'controllers/' . $controllerName . '/' . $method,
                ));
                if (!$hasAco) {
                    $this->Acl->Aco->create(array(
                        'alias' => 'controllers/' . $controllerName . '/' . $method,
                    ));
                    $this->Acl->Aco->save();
                }
            }
        }

        if (isset($this->params['named']['permissions'])) {
            $this->redirect(array('plugin' => 'acl', 'controller' => 'acl_permissions', 'action' => 'index'));
        } else {
            $this->redirect(array('action' => 'index'));
        }
    }

}
?>