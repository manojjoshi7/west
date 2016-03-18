<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SB Admin - Bootstrap Admin Template</title>
<link href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/sb-admin.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/sb-admin.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/custom.css');?>" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/admin/css/style.css');?>' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/admin/css/print.css');?>' media="print" />
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/admin/css/custom.css');?>'  />
<script type='text/javascript' src='<?php echo base_url('assets/admin/js/jquery.js');?>'></script>
<script type='text/javascript' src='<?php echo base_url('assets/admin/js/example.js');?>'></script>
<script>
var obj;
var selectid=1;
$(function()
{
 $(".sku").on("keyup", function()
 {
   
   resetval(selectid);
	$(".filter").remove();
    obj=$(this);
    $.post($("#baseurl").val()+"invoice/get_sku_info",{sku:obj.val()}, function(data, status){
    obj.after(data)
    });

 });
 $("#billgenerate").click(function()
 {
 try
 {
    var start_date=new Date($("#billdate").val());
    var end_date=new Date($("#duedate").val())
    if(start_date>end_date)
    throw "Amount Due Date gater or equle to Date!"
	if($("#useraddress").val().trim()=="")
	throw "Enter user address!"
	if($("#subtotal").html()=="$0" || $("#subtotal").html()=="" || $("#ty").html()=="$0" || $("#ty").html()=="")
	throw "Enter invice details!"
	if($("#paid").val().trim()=="" || $("#paid").val().trim()=="$")
	throw "Enter Amount Paid!"
	if($("#duepay").html()=="$NaN")
	throw "Enter Amount Valid Format!"
	$("#hidsubtotal").val($("#subtotal").html())
    $("#hidgst").val($("#gst").html())
	$("#hidty").val($("#ty").html())
	$("#hidduepay").val($("#duepay").html())

	$("#invoiceform").submit();
 }catch(err)
 {
    alert(err)	
    
 }
 })
})

function resetval(selectid)
{

   $("#name"+selectid).val('');
  $("#qty"+selectid).val('');
  $("#des"+selectid).val('');
  $("#cost"+selectid).val('');
  $("#rowtotalprice"+selectid).html('');
  $("#subtotal").html('');
  $("#gst").html('');
  $("#ty").html('');
  $("#due").html('');
  $("#paid").val('')
  $("#duepay").html('');
}
function filter(id)
{  
   selectid=id;
   resetval(selectid)
   $(".filter").remove();
   $.post($("#baseurl").val()+"invoice/get_sku_info",{sku:$("#sku"+id).val()}, function(data, status)
   {
    $("#sku"+id).after(data)
   });
}
function display(sku,name,des,saleprice)
{
  $("#sku"+selectid).val(sku);
  $("#name"+selectid).val(name);
  $("#qty"+selectid).val(0);
  $("#des"+selectid).val(des);
  $("#cost"+selectid).val(saleprice);
  $(".filter").remove();
}
</script>

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    <a class="navbar-brand" href="index.php">SB Admin</a> </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
      <ul class="dropdown-menu message-dropdown">
        <li class="message-preview"> <a href="#">
          <div class="media"> <span class="pull-left"> <img class="media-object" src="http://placehold.it/50x50" alt=""> </span>
            <div class="media-body">
              <h5 class="media-heading"><strong>John Smith</strong> </h5>
              <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
              <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
          </div>
          </a> </li>
        <li class="message-preview"> <a href="#">
          <div class="media"> <span class="pull-left"> <img class="media-object" src="http://placehold.it/50x50" alt=""> </span>
            <div class="media-body">
              <h5 class="media-heading"><strong>John Smith</strong> </h5>
              <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
              <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
          </div>
          </a> </li>
        <li class="message-preview"> <a href="#">
          <div class="media"> <span class="pull-left"> <img class="media-object" src="http://placehold.it/50x50" alt=""> </span>
            <div class="media-body">
              <h5 class="media-heading"><strong>John Smith</strong> </h5>
              <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
              <p>Lorem ipsum dolor sit amet, consectetur...</p>
            </div>
          </div>
          </a> </li>
        <li class="message-footer"> <a href="#">Read All New Messages</a> </li>
      </ul>
    </li>
    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
      <ul class="dropdown-menu alert-dropdown">
        <li> <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a> </li>
        <li> <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a> </li>
        <li> <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a> </li>
        <li> <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a> </li>
        <li> <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a> </li>
        <li> <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a> </li>
        <li class="divider"></li>
        <li> <a href="#">View All</a> </li>
      </ul>
    </li>
    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name; ?> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li> <a href="<?php echo site_url('admin/userprofile'); ?>"><i class="fa fa-fw fa-user"></i> Profile</a> </li>
        <li class="divider"></li>
        <li> <a href="<?php echo site_url('admin/adminlogout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a> </li>
      </ul>
    </li>
  </ul>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      
      <li> <a href="javascript:;" data-toggle="collapse" data-target="#parts"><i class="fa fa-fw fa-arrows-v"></i> Parts <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="parts" class="collapse">
          <li> <a href="<?php echo site_url('admin/addpart');?>"><i class="fa fa-fw fa-gear"></i> Add Parts</a> </li>
          <li> <a href="<?php echo site_url('admin/displaypart');?>"><i class="fa fa-fw fa-gear"></i> Display Parts</a> </li>
        </ul>
      </li>
      <li> <a href="javascript:;" data-toggle="collapse" data-target="#customer"><i class="fa fa-fw fa-arrows-v"></i> Customers <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="customer" class="collapse">
          <li> <a href="<?php echo site_url('admin/adduser');?>"><i class="fa fa-fw fa-envelope"></i>Add Customer</a> </li>
          <li> <a href="<?php echo site_url('admin/displayuser');?>"><i class="fa fa-fw fa-gear"></i> Display Customer</a> </li>
        </ul>
        
      </li>
        <li> <a href="javascript:;" data-toggle="collapse" data-target="#invoices"><i class="fa fa-fw fa-arrows-v"></i> Invoices <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="invoices" class="collapse">
          <li> <a href="<?php echo site_url('invoice/createInvoice');?>"><i class="fa fa-fw fa-gear"></i> Create New Invoice</a> </li>
          <li> <a href="<?php echo site_url('invoice/displayInvoices');?>"><i class="fa fa-fw fa-gear"></i>View Invoice List</a> </li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse --> 
</nav>
