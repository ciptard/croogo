<div class="acl_actions form">
    <h2><?php echo $title_for_layout; ?></h2>

    <?php echo $this->Form->create('Aco', array('url' => array('controller' => 'acl_actions', 'action' => 'edit'))); ?>
        <fieldset>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('alias', array('rel' => 'in the format controllers/ControllerName/action_name'));
        ?>
        </fieldset>
    <?php echo $this->Form->end('Submit'); ?>
</div>