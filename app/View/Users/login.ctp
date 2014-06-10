<div class="users form">
<?php echo $this->Session->flash('auth', array(
    'element' => 'alert',
    'params' => array('plugin' => 'TwitterBootstrap'),
)); ?>
<?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>

    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username', array(
            'label' => 'Enter your username',
            'type' => 'text',
            'class' => 'span2',
            'prepend' => '@',
            'helpBlock' => '',
        )); ?>
        <?php echo $this->Form->input('password', array(
            'label' => 'Enter your password',
            'type' => 'password',
            'class' => 'span2',
            'prepend' => '@',
            
        )); ?>
        
       <div class="form-actions">
            <?php echo $this->Form->submit('Login', array(
                'div' => false,
                'class' => 'btn btn-primary',
            )); ?>
            <button class="btn">Cancel</button>
        </div>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>