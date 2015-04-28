<div class="users form center-block text-center">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <h2 class="form-signin-heading">Please Log In</h2>
    <?php
     echo $this->Form->input('username', array(
	     'div' => array('align'=>'left'),
	     'type' => 'text',
	     'class' => 'form-control',
	     'placeholder' => 'Username',
	     'style'=>'width: 300px',
	     'label' => false
     ));

      echo $this->Form->input('password', array(
	     'div' => array('align'=>'left'),
	     'type' => 'password',
	     'class' => 'form-control',
	     'placeholder' => 'Password',
	     'style'=>'width: 300px',
	     'label' => false
     ));
      ?>
      <br>
      <div class="submit">
	<button type="submit" class="btn btn-lg btn-primary">Log In</button>
      </div>
</div>
<?php echo $this->Html->link( "Add A New User",   array('action'=>'add') ); ?>

<!--
<div class="users form">
<h1>Log In</h1>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php echo $this->Html->link( "Add A New User",   array('action'=>'add') ); ?>





<h2>Login</h2>
<?php
echo $this->Form->create('User', array(
    'url' => array(
        'controller' => 'users',
        'action' => 'login'
    )
));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('Login');
?>

-->
