<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h2><?php echo $title;?></h2>
</div>
</div>
<?php
$attributes = array('class' => '', 'id' => 'adminpartform','name'=>'adminpartform');
 if(isset($regerror))
  {echo $regerror;}
 
 if($type=="edit")
 {echo form_open('admin/editpart',$attributes);}
 else
 {echo form_open('admin/addpart',$attributes);}
 echo form_hidden('formtype', $type);
 if(isset($partid))
 echo form_hidden('partid', $partid);

?>

<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Name', 'partsname');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'pname',
              'id'          => 'pname',
             'value'       => (!empty($parts[0]->name)?$parts[0]->name:(isset($_POST['pname'])?$_POST['pname']:'')),
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
	<?php echo form_label('Quantity', 'partsquantity');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'pquantity',
              'id'          => 'pquantity',
             'value'       => (!empty($parts[0]->quantity)?$parts[0]->quantity:(isset($_POST['pquantity'])?$_POST['pquantity']:'')),
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
	<?php echo form_label('Price', 'pprice');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'pprice',
              'id'          => 'pprice',
             'value'       => (!empty($parts[0]->price)?$parts[0]->price:(isset($_POST['pprice'])?$_POST['pprice']:'')),
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
echo form_label('Details', 'partsdetails');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   	   $data = array(
       'name'        => 'pdetails',
	   'id'          => 'pdetails',
       'value'       => (!empty($parts[0]->details)?$parts[0]->details:(isset($_POST['pdetails'])?$_POST['pdetails']:'')),
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
echo form_submit('submitbut', 'Edit Parts');
else
echo form_submit('submitbut', 'Add Parts');
?>
</div>
</div>
<?php echo form_close();?>
</div>
</div>