<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8">
<h2>Admin Profile</h2>
</div>
<div class="col-lg-4">
<a href="<?php echo site_url('admin/editprofile'); ?>">Edit</a>
</div>

</div>
<div class="row">
	<div class="col-lg-2">
	Name
	</div>
	<div class="col-lg-10">
	<?php
	
	echo $userinfo[0]->name; 
	?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	Email
	</div>
	<div class="col-lg-10">
		<?php
	   echo $userinfo[0]->email; 
	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	Phone
	</div>
	<div class="col-lg-10">
		<?php
	   echo $userinfo[0]->phone; 
	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	Country
	</div>
	<div class="col-lg-10">
		<?php
	   echo $userinfo[0]->country_name; 
	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	State
	</div>
	<div class="col-lg-10">
		<?php
	   echo $userinfo[0]->state; 
	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	Postcode
	</div>
	<div class="col-lg-10">
		<?php
	   echo $userinfo[0]->postcode; 
	   ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-2">
	Street Address
	</div>
	<div class="col-lg-10">
		<?php
	   echo $userinfo[0]->address; 
	   ?>
	</div>
</div>
</div>
</div>