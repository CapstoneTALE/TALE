<div class="users form">
<?php echo $this->Form->create('User');
echo $this->Form->input('first_name', array(
  'div' => array('align'=>'left'),
  'label' => 'First Name',
  'type' => 'text',
  'class' => 'form-control input-sm',
        'style'=>'width: 200px'
));

echo $this->Form->input('last_name', array(
  'div' => array('align'=>'left'),
  'label' => 'Last Name',
  'type' => 'text',
  'class' => 'form-control input-sm',
        'style'=>'width: 200px'
));

echo $this->Form->input('email', array(
  'div' => array('align'=>'left'),
  'label' => 'Email',
  'type' => 'email',
  'class' => 'form-control input-sm',
        'style'=>'width: 200px'
));

echo $this->Form->input('username', array(
  'div' => array('align'=>'left'),
  'label' => 'Username',
  'type' => 'text',
  'class' => 'form-control input-sm',
        'style'=>'width: 200px'
));

echo $this->Form->input('password', array(
  'div' => array('align'=>'left'),
  'label' => 'Password',
  'type' => 'password',
  'class' => 'form-control input-sm',
        'style'=>'width: 200px'
));

?>
<br>
<div class="submit">
   <button type="submit" class="btn btn-lg btn-primary">Submit</button>
</div>
<br><br>
</div>
<?php
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Homepage",   array('action'=>'index') );
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') );
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') );
}
?>
