<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<h2><?php echo $title;?></h2>
</div>
</div>

<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Invoice To', 'invoice_to');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'ito',
              'id'          => 'ito',
             'value'       => (!empty($parts[0]->name)?$parts[0]->name:(isset($_POST['ito'])?$_POST['ito']:'')),
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);?>
	</div>
</div>

<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Invoice From', 'invoice_from');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'ifrom',
              'id'          => 'ifrom',
             'value'       => (!empty($parts[0]->name)?$parts[0]->name:(isset($_POST['ifrom'])?$_POST['ifrom']:'')),
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Scanned Copy', 'softcopy');?>
	</div>
	<div class="col-lg-10">
	<?php
	$data = array(
              'name'        => 'softcopy',
              'id'          => 'softcopy',
             'value'       => (!empty($parts[0]->name)?$parts[0]->name:(isset($_POST['softcopy'])?$_POST['softcopy']:'')),
              'style'       => 'width:25%',
			  'required'=> 'required'
            );

echo form_input($data);?>
	</div>
</div>




<div class="row">
	<div class="col-lg-2">
	<?php
echo form_label('Other Details', 'odetails');
?>
	</div>
	<div class="col-lg-10">
		<?php
	   	   $data = array(
       'name'        => 'odetails',
	   'id'          => 'odetails',
       'value'       => (!empty($parts[0]->details)?$parts[0]->details:(isset($_POST['odetails'])?$_POST['odetails']:'')),
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
echo form_submit('submitbut', 'Edit Invoice');
else
echo form_submit('submitbut', 'Add Invoice');
?>
</div>
</div>
<?php echo form_close();?>
</div>
</div>