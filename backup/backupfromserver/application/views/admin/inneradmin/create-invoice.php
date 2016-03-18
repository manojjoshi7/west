<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/admin/css/style.css');?>' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/admin/css/print.css');?>' media="print" />
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/admin/css/custom.css');?>'  />
<script type='text/javascript' src='<?php echo base_url('assets/admin/js/jquery.js');?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/admin/js/example.js');?>'></script>
</head>

<body>
<div id="page-wrap">
  <div id="identity">
    <div   class="comp-add"><span class="comp_name"><em >Big West</em> <br />
      Diesel Service</span> <br />
      <b>ABN</b> 123456<br />
      <b>ACN</b> 20-nov-2015 <br />
    </div>
    <div   class="comp-add"> <img src="<?php echo base_url("images/all.jpg"); ?>" width="150"> <br />
      <img src="<?php echo base_url("images/bulldozer.jpg"); ?>" width="75"> <img src="<?php echo base_url("images/exca.png"); ?>" width="75"><br />
    </div>
    <div   class="comp-add"><b>Invoice From</b><br />
      Big West Diesel Service PTY Ltd 
      2/177-181 Newton Road<br />
      Wetherill Park 2164<br />
      <b>PHONE:</b>+61 (401) 341 087 <b>EMAIL:</b>leo@bigwestdiesel.com.au </div>
    <div   class="comp-add" style="float:right !important; width:20%;"><b>Billing To:</b>
      <textarea id="address" style="float: right;
  clear: both;
  width: 100%;
}">Enter Address

</textarea>
    </div>
  </div>
  <table id="meta" style="margin-top:20px; width:100%">
    <tr>
      <td class="meta-head">Invoice #</td>
      <td class="metadat"><textarea>000123</textarea></td>
      <td class="meta-head">Date</td>
      <td class="metadat"><textarea id="date" >    <?php
echo date('d-m-Y');
?></textarea></td>
      <td class="meta-head">Amount Due</td>
      <td class="metadat"><div class="due"></div></td>
    </tr>
  </table>
  <div style="clear:both"></div>
  <div id="customer"> 
    <!--<textarea id="customer-title">ABN 90 603 932 930</textarea>--> 
    
  </div>
  <table id="items">
    <tr>
      <th>S.No</th>
      <th>Part #</th>
      <th>Description</th>
      <th>Units</th>
      <th>Unit Price</th>
      <th>Price</th>
    </tr>
    <tr class="item-row">
      <td><textarea></textarea></td>
      <td class="item-name"><div class="delete-wpr">
          <textarea></textarea>
          <a class="delete" href="javascript:;" title="Remove row" style="display:block;">X</a></div></td>
      <td class="description"><textarea style="height:60px"></textarea></td>
      <td><textarea class="cost"></textarea></td>
      <td><textarea class="qty"></textarea></td>
      <td><span class="price"></span></td>
    </tr>
    <tr id="hiderow">
      <td colspan="6" style="border:0px;"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">Subtotal</td>
      <td class="total-value"><div id="subtotal"></div></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">GST</td>
      <td class="total-value"><div id="gst"></div></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">Total &nbsp;(Inc. GST)</td>
      <td ><div id="ty"></div></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">Amount Paid</td>
      <td class="total-value"><textarea id="paid" style="font-size:17px; font-family:Arial, Helvetica, sans-serif;"></textarea></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line balance">Balance Due</td>
      <td class="total-value balance"><div class="due"></div></td>
    </tr>
  </table>
  <div id="terms">
    <h5>Banking Details</h5>
    <div class="bank">BSB: 062443 &nbsp; &nbsp;ACCOUNT NO: 11150197 <br />
      <small style="font-weight:normal;">(Please quote invoice number as reference. Thank You.)</small></div>
  </div>
</div>
</body>
</html>