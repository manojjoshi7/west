<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-1"><h4>Name</h4></div>
<div class="col-lg-2"><h4>Email</h4></div>
<div class="col-lg-1"><h4>Phone</h4></div>
<div class="col-lg-1"><h4>Country</h4></div>
<div class="col-lg-1"><h4>State</h4></div>
<div class="col-lg-1"><h4>Postcode</h4></div>
<div class="col-lg-3"><h4>Address</h4></div>
<div class="col-lg-2"><h4>Action</h4></div>
</div>
<?php
foreach($customer as $row):
?>
<div class="row">
<div class="col-lg-1"><?php echo $row->name;?></div>
<div class="col-lg-2"><?php echo $row->email;?></div>
<div class="col-lg-1"><?php echo $row->phone;?></div>
<div class="col-lg-1"><?php echo $row->country_name;?></div>
<div class="col-lg-1"><?php echo $row->state;?></div>
<div class="col-lg-1"><?php echo $row->postcode;?></div>
<div class="col-lg-3"><?php echo $row->address;?></div>
<div class="col-lg-1"><a href="<?php echo site_url('admin/editprofile/'.$row->id.''); ?>" >Edit</a></div>
<div class="col-lg-1"><a href="<?php echo site_url('admin/deletecus/'.$row->id.''); ?>" onclick="return doconfirm(<?php echo "'".$row->name."'";?>)">Delete</a></div>
</div>

<?php
endforeach;
?>
</div>
</div>