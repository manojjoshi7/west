<div id="page-wrap">
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
}" name="useraddress" placeholder="Enter Address"><?php echo isset($invoice[0]->address)?$invoice[0]->address:'';?></textarea>
    </div>
  </div>
  <table id="meta" style="margin-top:20px; width:100%">
    <tr>
      <td class="meta-head">Invoice #</td>
      <td class="metadat"><div><?php echo isset($invoice[0]->invoice_id)?$invoice[0]->invoice_id:''; ?></div></td>
      <td class="meta-head">Date</td>
      <td class="metadat"><div><?php echo isset($invoice[0]->billdate)?$invoice[0]->billdate:''; ?></div></td>
      <td class="meta-head">Amount Due</td>
      <td class="metadat"><?php echo isset($invoice[0]->duedate)?$invoice[0]->duedate:''; ?></td>
    </tr>
  </table>
  <div style="clear:both"></div>
  
  <table id="items">
    <tr>
      <th>SKU</th>
      <th>Part #</th>
      <th>Description</th>
      <th>Units</th>
      <th>Unit Price</th>
      <th>Price</th>
    </tr>
    <?php foreach ($invoicerows as $newrow):?>
	<tr class="item-row" id="invoicerow1">
      <td><?php echo isset($newrow->sku)?$newrow->sku:''; ?></td>
      <td class="item-name"><?php echo isset($newrow->name)?$newrow->name:''; ?></td>
      <td class="description"><?php echo isset($newrow->details)?$newrow->details:''; ?></td>
      <td><?php echo isset($newrow->qty)?$newrow->qty:''; ?></td>
      <td><?php echo "$".isset($newrow->saleprice)?$newrow->saleprice:''; ?></td>
      <td><?php echo "$".($newrow->qty*$newrow->saleprice);?></td>
    </tr>
    <?php  endforeach; ?>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">Subtotal</td>
      <td class="total-value"><div id="subtotal"><?php echo isset($invoice[0]->total)?"$".$invoice[0]->total:''; ?></div></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">GST</td>
      <td class="total-value"><div id="gst"><?php echo isset($invoice[0]->tax)?"$".$invoice[0]->tax:''; ?></div></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">Total &nbsp;(Inc. GST)</td>
      <td ><div id="ty"><?php echo isset($invoice[0]->subtotal)?"$".$invoice[0]->subtotal:''; ?></div></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line">Amount Paid</td>
      <td class="total-value"><?php echo isset($invoice[0]->paid)?"$".$invoice[0]->paid:''; ?></td>
    </tr>
    <tr>
      <td colspan="3" class="blank"></td>
      <td colspan="2" class="total-line balance">Balance Due</td>
      <td class="total-value balance"><div class="due" id="duepay"><?php echo isset($invoice[0]->blance)?"$".$invoice[0]->blance:''; ?></div></td>
    </tr>
  </table>
  <div id="terms">
    <h5>Banking Details</h5>
    <div class="bank">BSB: 062443 &nbsp; &nbsp;ACCOUNT NO: 11150197 <br />
      <small style="font-weight:normal;">(Please quote invoice number as reference. Thank You.)</small></div>
  </div>

</div>

