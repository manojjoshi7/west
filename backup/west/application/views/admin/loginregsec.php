<section>
<a href=<?php echo site_url('users/adduser');?>>Add Customer</a>
</section>
<section>
<div>
<span>
<h1>
Sing In
</h1>
<?php if(isset($logerror))echo $logerror;?>
<?php 

$attributes = array('class' => '', 'id' => 'adminlogform','name'=>'adminlogform');
echo form_open('users',$attributes);
?>
<div>
<?php
echo form_label('Email', 'adminemail');
$data = array(
              'name'        => 'lemail',
			  'type'        => 'email',
              'id'          => 'lemail',
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
echo form_label('Password', 'adminlogpassword');
$data = array(
              'name'        => 'lpassword',
              'id'          => 'lpassword',
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
<?php echo form_submit('submitbut', 'Sign In');?>
</div>
<?php echo form_close();?>
</span>
</div>
</section>