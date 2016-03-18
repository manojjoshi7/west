<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8">
<h2><?php echo $title;?></h2>
</div><div class="col-lg-4">
<a href="<?php echo site_url('admin/editpart/'.$parts[0]->id.''); ?>">Edit</a>
</div>

</div>

<div class="row">
<div class="col-lg-2">
	<?php echo form_label('Image', 'partsimg');?>
	</div>
	<div class="col-lg-10">
		<?php
		echo img('assets/parts_images/thumb/'.str_replace(' ','_',$parts[0]->name).'_thumb.jpg');
		?>
		</div>
</div>
<div class="row">
<div class="col-lg-2">
	<?php echo form_label('Name', 'partsname');?>
	</div>
	<div class="col-lg-10">
	<p><?php echo $parts[0]->name;?></p>
	</div>
</div>
<div class="row">
<div class="col-lg-2">
	<?php echo form_label('Company Name', 'partscompanyname');?>
	</div>
	<div class="col-lg-10">
	<p><?php echo $parts[0]->company_name;?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Size', 'partssize');?>
	</div>
	<div class="col-lg-10">
<p><?php echo $parts[0]->size;?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Weight', 'partsweight');?>
	</div>
	<div class="col-lg-10">
<p><?php echo $parts[0]->weight;?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('SKU', 'partssku');?>
	</div>
	<div class="col-lg-10">
<p><?php echo $parts[0]->sku;?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Price', 'pprice');?>
	</div>
	<div class="col-lg-10">
<p><?php echo $parts[0]->price;?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php echo form_label('Sale Price', 'psaleprice');?>
	</div>
	<div class="col-lg-10">
	
<p><?php echo $parts[0]->saleprice;?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	<?php
   echo form_label('Details', 'partsdetails');
   ?>
	</div>
	<div class="col-lg-10">
	<p>
	   <?php 
	   echo $parts[0]->details;
	   ?>
	   </p>
	</div>
</div>

</div>
</div>