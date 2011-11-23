<?php
    $this->Html->script('/acl/js/acl_permissions.js', false);
?>
<div class="acl_permissions index">
    <h2><?php echo $title_for_layout; ?></h2>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Generate Actions'), array('controller' => 'acl_actions', 'action'=>'generate', 'permissions' => 1)); ?></li>
            <li><?php echo $this->Html->link(__('Edit Actions'), array('controller' => 'acl_actions', 'action'=>'index', 'permissions' => 1)); ?></li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0"> 
    <?php
        $roleTitles = array_values($roles);
        $roleIds   = array_keys($roles);

        $tableHeaders = array(
            __('Id'),
            __('Alias'),
        );
        $tableHeaders = array_merge($tableHeaders, $roleTitles);
        $tableHeaders =  $this->Html->tableHeaders($tableHeaders);
        echo $tableHeaders;
        
        $currentController = '';
    
        foreach ($acos AS $acoId => $acoAlias) {
            $aliasE = explode('/', $acoAlias);
            $controllerName = $aliasE['1'];
            $actionName = $aliasE['2'];
        
            // controller
            if ($controllerName != $currentController) {
                $row = array(
                    '',
                    $this->Html->div('controller expand', $controllerName)
                );
                foreach ($roles AS $roleId => $roleTitle) {
                    $row[] = '';
                }
                echo $this->Html->tableCells(array($row));
                $currentController = $controllerName;
            }
        
            // action
            $row = array(
                $acoId,
                $this->Html->div('level-1', $actionName)
            );
            foreach ($roles AS $roleId => $roleTitle) {
                $oddOptions = array('class' => 'hidden controller-'.$controllerName);
                $evenOptions = array('class' => 'hidden controller-'.$controllerName);
            
                if ($roleId != 1) {
                    if (in_array($acoId, $permissions[$roleId])) {
                        $row[] = $this->Html->image('/img/icons/tick.png', array(
                            'class' => 'permission-toggle', 
                            'rel' => $acoId.'-'.$rolesAros[$roleId],
                        ));
                    } else {
                        $row[] = $this->Html->image('/img/icons/cross.png', array(
                            'class' => 'permission-toggle', 
                            'rel' => $acoId.'-'.$rolesAros[$roleId],
                        ));
                    }
                } else {
                    $row[] = $this->Html->image('/img/icons/tick_disabled.png', array(
                        'class' => 'permission-disabled',
                    ));
                }
            }
            echo $this->Html->tableCells(array($row), $oddOptions, $evenOptions);
        }
        echo $tableHeaders;
    ?>
    </table>
</div>