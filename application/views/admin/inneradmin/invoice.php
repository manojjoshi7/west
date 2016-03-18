<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-2"><h4>Name</h4></div>
<div class="col-lg-2"><h4>Quantity</h4></div>
<div class="col-lg-2"><h4>Price</h4></div>
<div class="col-lg-2"><h4>Details</h4></div>
<div class="col-lg-4"><h4>Action</h4></div>
</div>
<?php
foreach($parts as $row):
?>
<div class="row">
<div class="col-lg-2"><?php echo $row->name;?></div>
<div class="col-lg-2"><?php echo $row->quantity;?></div>
<div class="col-lg-2"><?php echo $row->price;?></div>
<div class="col-lg-2"><?php echo $row->details;?></div>
<div class="col-lg-2"><a href="<?php echo site_url('admin/editpart/'.$row->id.''); ?>" >Edit</a></div>
<div class="col-lg-2"><a href="<?php echo site_url('admin/deletepats/'.$row->id.''); ?>" onClick="return doconfirm(<?php echo "'".$row->name."'";?>)">Delete</a></div>
</div>

<?php
endforeach;
?>
</div>
</div>