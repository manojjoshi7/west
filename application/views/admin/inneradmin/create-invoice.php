<input type="hidden" value="<?php echo base_url();?>" id="baseurl"/>
<div id="page-wrap">
<?php 
$attributes = array('class' => '', 'id' => 'invoiceform','name'=>'invoiceform');
echo form_open('invoice/saveIncoiceInfo',$attributes);
?>
<div><a href="javascript:void(0);" id="billgenerate">Generate Bill</a></div>
  <div id="identity">
    <div   class="comp-add"><span class="comp_name"><em >Big West</em> <br />
      Diesel Service</span> <br />
      <b>ABN</b> 123456<br />
      <b>ACN</b> 20-nov-2015 <br />
    </div>
    <div   class="comp-add"> 
	<img src="<?php echo base_url("images/all.jpg"); ?>" width="150"> <br />
      <img src="<?php echo base_url("images/bulldozer.jpg"); ?>" width="75"> <img src="<?php echo base_url("images/exca.png"); ?>" width="75"><br />
    </div>
    <div   class="comp-add"><b>Invoice From</b><br />
      Big West Diesel Service PTY Ltd 
      2/177-181 Newton Road<br />
      Wetherill Park 2164<br />
      <b>PHONE:</b>+61 (401) 341 087 <b>EMAIL:</b>leo@bigwestdiesel.com.au </div>
    <div   class="comp-add" style="float:right !important; width:20%;"><b>Billing To:</b>
      <textarea id="useraddress" style="float: right;
  clear: both;
  width: 100%;
}" name="useraddress" placeholder="Enter Address"></textarea>
    </div>
  </div>
  <table id="meta" style="margin-top:20px; width:100%">
    <tr>
      <td class="meta-head">Invoice #</td>
      <td class="metadat"><input type="text" value="<?php echo uniqid();?>" readonly="readonly" name="readinvoice"/></td>
      <td class="meta-head">Date</td>
      <td class="metadat"><input type="date" value="<?php echo date("Y-m-d");?>" id="billdate" name="billdate"/></td>
      <td class="meta-head">Amount Due</td>
      <td class="metadat"><input type="date" value="<?php echo date("Y-m-d");?>" id="duedate" name="duedate"/></td>
    </tr>
  </table>
  <div style="clear:both"></div>
  <div id="customer"> 
    <!--<textarea id="customer-title">ABN 90 603 932 930</textarea>--> 
    
  </div>
  <table id="items">
    <tr>
      <th>SKU</th>
      <th>Part #</th>
      <th>Description</th>
      <th>Units</th>
      <th>Unit Price</th>
      <th>Price</th>
    </tr>
    <tr class="item-row" id="invoicerow1">
      <td><input type="text" id="sku1" value="" class="sku" name="sku[]"/></td>
      <td class="item-name">
	  <input type="text" readonly="readonly" id="name1" name="name[]"/></td>
      <td class="description"><textarea style="height:60px" name="descrip[]" id="des1" readonly="readonly"></textarea></td>
      <td><input type="text" class="cost" value="" id="qty1" name="qty[]"/></td>
      <td><input type="text" class="qty" id="cost1" name="cost[]" readonly="readonly"/></td>
      <td><input type="text" class="price" readonly="readonly" id="rowtotalprice1"/></td>
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
      <td class="total-value"><textarea id="paid" name="paid" style="font-size:17px; font-family:Arial, Helvetica, sans-serif;"></textarea></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line balance">Balance Due</td>
      <td class="total-value balance"><div class="due" id="duepay"></div></td>
    </tr>
  </table>
  <input type="hidden" value="" id="hidsubtotal" name="hidsubtotal"/>
  <input type="hidden" value="" id="hidgst" name="hidgst"/>
  <input type="hidden" value="" id="hidty" name="hidty"/>
  <input type="hidden" value="" id="hidduepay" name="hidduepay"/>
  <div id="terms">
    <h5>Banking Details</h5>
    <div class="bank">BSB: 062443 &nbsp; &nbsp;ACCOUNT NO: 11150197 <br />
      <small style="font-weight:normal;">(Please quote invoice number as reference. Thank You.)</small></div>
  </div>
<?php echo form_close();?>
</div>

