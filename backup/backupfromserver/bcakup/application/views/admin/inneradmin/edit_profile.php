<div id="page-wrapper">
<div class="container-fluid">
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
 {echo form_open('admin/editprofile',$attributes);}
 else
 {echo form_open('admin/adduser',$attributes);}
 
 echo form_hidden('formtype', $type);
 echo form_hidden('usertype', $usertype);
 if(isset($userid))
 echo form_hidden('userid', $userid);
 if(isset($forpage))
 echo form_hidden('forpage', $forpage);
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
             'value'       => (!empty($userinfo[0]->name)?$userinfo[0]->name:(isset($_POST['ename'])?$_POST['ename']:'')),
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
              'value'       => (!empty($userinfo[0]->email)?$userinfo[0]->name:(isset($_POST["remail"])?$_POST["remail"]:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);

	   ?>
	</div>
</div>
<?php
if($type!="add"):
?>
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
    'value' => (!empty($userinfo[0]->password)?$userinfo[0]->password:(isset($_POST['epassword'])?$_POST['epassword']:'')),
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
 <?php 
 if($type!="add" && $type!="edit"):
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
              'value'       => (!empty($userinfo[0]->phone)?$userinfo[0]->phone:(isset($_POST['ephone'])?$_POST['ephone']:'')),
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
	$data = array(
              'name'        => 'country',
			  'id'          => 'country',
              'value'       => (!empty($country[0]->country_name)?$country[0]->country_name:(isset($_POST['country'])?$_POST['country']:'')),
              'maxlength'   => '1000',
              'size'        => '25',
              'style'       => 'width:25%',
			  'required'=> 'required',
			  'readonly'=>true
            );

echo form_input($data);
$countryid=(isset($country[0]->id)?$country[0]->id:'');
echo form_hidden('admincountry', $countryid);
	 ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
<?php
echo form_label('State', 'adminstate');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   $data = array(
              'name'        => 'estate',
			  'id'          => 'estate',
              'value'       => (!empty($userinfo[0]->state)?$userinfo[0]->state:(isset($_POST['estate'])?$_POST['estate']:'')),
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
echo form_label('Postcode', 'adminpost');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   $data = array(
              'name'        => 'epostcode',
			  'id'          => 'epostcode',
    'value'       => (!empty($userinfo[0]->postcode)?$userinfo[0]->postcode:(isset($_POST['epostcode'])?$_POST['epostcode']:'')),
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
echo form_label('Street Address', 'adminaddress');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   	   $data = array(
              'name'        => 'eaddress',
			  'id'          => 'eaddress',
        'value'       => (!empty($userinfo[0]->address)?$userinfo[0]->address:(isset($_POST['eaddress'])?$_POST['eaddress']:'')),
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

<?php 
if($type=="edit")
echo form_submit('submitbut', 'Edit Profile');
else
echo form_submit('submitbut', 'Add');
?>
</div>
</div>
<?php echo form_close();?>
</div>
</div>