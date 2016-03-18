<div id="page-wrapper">
<div class="container-fluid">

<?php if($type=="edit"):?>
<div class="row">
<div class="col-lg-12">
<a href="<?php echo site_url('users/userprofile'); ?>">user profile</a>
</div>
</div>
<?php endif;?>

<div class="row">
<div class="col-lg-12">
<h2><?php echo $title;?></h2>
</div>
</div>

<?php

$attributes = array('class' => '', 'id' => 'adminprofileform','name'=>'adminprofileform');
 if(isset($regerror))
  {echo $regerror;}
 
 if($type=="edit")
 echo form_open('users/editprofile',$attributes);
 else
 echo form_open('users/adduser',$attributes);
 echo form_hidden('formtype', $type);
 echo form_hidden('usertype', $usertype);
?>

<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Name', 'adminname');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'ename',
              'id'          => 'ename',
             'value'       => (isset($userinfo[0]->name)?$userinfo[0]->name:(isset($_POST['ename'])?$_POST['ename']:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
<?php
echo form_label('Email', 'adminemail');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   $data = array(
              'name'        => 'remail',
			  'type'        => 'email',
              'id'          => 'remail',
              'value'       => (isset($userinfo[0]->email)?$userinfo[0]->name:(isset($_POST["remail"])?$_POST["remail"]:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);

	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php
   echo form_label('Password', 'adminpassword');
   ?>
	</div>
	<div class="col-lg-10">
		<?php
	   $data = array(
              'name'        => 'epassword',
              'id'          => 'epassword',
    'value' => (isset($userinfo[0]->password)?$userinfo[0]->password:(isset($_POST['epassword'])?$_POST['epassword']:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_password($data);

	   ?>
	</div>
</div>
 <?php 
 if($type=="add"):
 ?>
<div class="row">
	<div class="col-lg-2">
	<?php
   echo form_label('Confirm Password', 'adminrepassword');
   ?>
	</div>
	<div class="col-lg-10">
		<?php
	   $data = array(
              'name'        => 'erpassword',
              'id'          => 'erpassword',
      'value'       =>(isset($_POST['erpassword'])?$_POST['erpassword']:''),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_password($data);

	   ?>
	</div>
</div>
<?php
endif;
?>
<div class="row">
	<div class="col-lg-2">
<?php
echo form_label('Phone', 'adminphone');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   $data = array(
              'name'        => 'ephone',
			  'id'          => 'ephone',
              'value'       => (isset($userinfo[0]->phone)?$userinfo[0]->phone:(isset($_POST['ephone'])?$_POST['ephone']:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);

	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php
echo form_label('Country', 'admincountry');
?>
	</div>
	<div class="col-lg-10">
		<?php
		$countryid=(isset($userinfo[0]->country_id)?$userinfo[0]->country_id:'');
	   echo form_dropdown('admincountry', $country, $countryid);
	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php
echo form_label('Address', 'adminaddress');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   	   $data = array(
              'name'        => 'eaddress',
			  'id'          => 'eaddress',
        'value'       => (isset($userinfo[0]->address)?$userinfo[0]->address:(isset($_POST['eaddress'])?$_POST['eaddress']:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

    echo form_textarea($data);
	   ?>
	</div>
</div>
<div class="row">
<div class="col-lg-12">
<?php echo form_submit('submitbut', 'Edit Profile');?>
</div>
</div>
<?php echo form_close();?>
</div>
</div>