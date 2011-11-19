<?php
    $this->Html->script('/acl/js/acl_permissions.js', false);
    $this->Html->scriptBlock("$(document).ready(function(){ AclPermissions.documentReady(); });", array('inline' => false));
?>
<div class="acos index">
    <h2><?php echo $title_for_layout; ?></h2>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Action', true), array('action'=>'add')); ?></li>
            <li><?php echo $this->Html->link(__('Generate Actions', true), array('action'=>'generate')); ?></li>
        </ul>
    </div>


    <table cellpadding="0" cellspacing="0"> 
    <?php
        $tableHeaders = array(
            __('Id', true),
            __('Alias', true),
            __('Actions', true),
        );
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
                    $this->Html->div('controller expand', $controllerName),
                    '',
                );
                echo $this->Html->tableCells(array($row));
                $currentController = $controllerName;
            }
        
            // action
            $actions  = $this->Html->link(__('Edit', true), array('action' => 'edit', $acoId));
            $actions .= ' ' . $this->Html->link(__('Delete', true), array(
                'action' => 'delete',
                $acoId,
                'token' => $this->params['_Token']['key'],
            ), null, __('Are you sure?', true));
            $row = array(
                $acoId,
                $this->Html->div('level-1', $actionName),
                $actions,
            );
            $oddOptions = array('class' => 'hidden controller-'.$controllerName);
            $evenOptions = array('class' => 'hidden controller-'.$controllerName);
            echo $this->Html->tableCells(array($row), $oddOptions, $evenOptions);
        }
        echo $tableHeaders;
    ?>
    </table>
</div>