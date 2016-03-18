<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-2"><h4>Name</h4></div>
<div class="col-lg-2"><h4>Quantity</h4></div>
<div class="col-lg-2"><h4>Price</h4></div>
<div class="col-lg-2"><h4>SalePrice</h4></div>
<div class="col-lg-2"><h4>Details</h4></div>
<div class="col-lg-2"><h4>Action</h4></div>
</div>
<?php
foreach($parts as $row):
?>
<div class="row">
<div class="col-lg-2"><?php echo $row->name;?></div>
<div class="col-lg-2"><?php echo $row->quantity;?></div>
<div class="col-lg-2"><?php echo "$".$row->price;?></div>
<div class="col-lg-2"><?php echo "$".$row->saleprice;?></div>
<div class="col-lg-2"><?php echo $row->details;?></div>
<div class="col-lg-2"><a href="<?php echo site_url('admin/viewpart/'.$row->id.''); ?>" >View</a>&nbsp;|&nbsp;<a href="<?php echo site_url('admin/deletepats/'.$row->id.''); ?>" onClick="return doconfirm(<?php echo "'".$row->name."'";?>)">Delete</a></div>
</div>

<?php
endforeach;
?>
</div>
<div class="row">
<div class="col-lg-12">
&nbsp;
</div>
</div>
<div class="row">
<div class="col-lg-5">
</div>
<div class="col-lg-7">
<p><?php echo $links; ?></p>
</div>
</div>
</div>