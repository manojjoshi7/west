<span>
<?php if(isset($regerror))echo $regerror;?>
<?php
$attributes = array('class' => '', 'id' => 'adminregform','name'=>'adminregform');
echo form_open('admin',$attributes);
?>
<h1>
Sing Up
</h1>
<div>
<?php
echo form_label('Name', 'adminname');
$data = array(
              'name'        => 'ename',
              'id'          => 'ename',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);
?>
</div>
<div>
<?php
echo form_label('Email', 'adminemail');
$data = array(
              'name'        => 'remail',
			  'type'        => 'email',
              'id'          => 'remail',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);
?>
</div>
<div>
<?php
echo form_label('Password', 'adminpassword');
$data = array(
              'name'        => 'epassword',
              'id'          => 'epassword',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_password($data);
?>
</div>
<div>
<?php
echo form_label('Re Enter Password', 'adminrepassword');
$data = array(
              'name'        => 'erepassword',
              'id'          => 'erepassword',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_password($data);
?>
</div>
<div>
<?php
echo form_label('Phone', 'adminphone');
$data = array(
              'name'        => 'ephone',
			  'id'          => 'ephone',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);
?>
</div>
<div>
<?php echo form_submit('submitbut', 'Sign Up');?>
</div>
<?php echo form_close();?>
</span>