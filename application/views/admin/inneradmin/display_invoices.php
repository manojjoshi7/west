<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-2"><h4>Invoice id</h4></div>
<div class="col-lg-1"><h4>Bill Date</h4></div>
<div class="col-lg-1"><h4>Due Date</h4></div>
<div class="col-lg-1"><h4>Address</h4></div>
<div class="col-lg-1"><h4>Total</h4></div>
<div class="col-lg-1"><h4>Tax</h4></div>
<div class="col-lg-1"><h4>Subtotal</h4></div>
<div class="col-lg-1"><h4>Blance</h4></div>
<div class="col-lg-1"><h4>Paid</h4></div>
<div class="col-lg-2"><h4>Action</h4></div>
</div>
<?php
foreach($invoice as $row):
?>
<div class="row">
<div class="col-lg-2"><?php echo $row->invoice_id;?></div>
<div class="col-lg-1"><?php echo $row->billdate;?></div>
<div class="col-lg-1"><?php echo $row->duedate;?></div>
<div class="col-lg-1"><?php echo $row->address;?></div>
<div class="col-lg-1"><?php echo "$".$row->total;?></div>
<div class="col-lg-1"><?php echo "$".$row->tax;?></div>
<div class="col-lg-1"><?php echo "$".$row->subtotal;?></div>
<div class="col-lg-1"><?php echo "$".$row->blance;?></div>
<div class="col-lg-1"><?php echo "$".$row->paid;?></div>
<div class="col-lg-2"><a <a href="<?php echo site_url('invoice/viewinvoice/'.$row->invoice_id.''); ?>">View</a></div>
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