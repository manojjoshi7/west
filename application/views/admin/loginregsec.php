<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SB Admin - Bootstrap Admin Template</title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo base_url('assets/admin/css/sb-admin.css');?>" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php echo base_url('assets/admin/css/sb-admin.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin/css/custom.css');?>" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background:#fff;">

<div id="container" class="col-lg-6 log_form">



<span  style=" color: #5cb85c;
    font-size: 20px;
    font-weight: bold;">Admin Login</span>
<br /><br />

<div class="row">
                    <div class="col-lg-12">
<?php if(isset($logerror))echo $logerror;?>
<?php 

$attributes = array('class' => '', 'id' => 'adminlogform','name'=>'adminlogform');
echo form_open('admin',$attributes);
?>

                            <div class="form-group">
                                <label><?php echo form_label('Email', 'adminemail');?></label>
                                <?php

$data = array(
              'name'        => 'lemail',
			  'type'        => 'email',
              'id'          => 'lemail',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
			   'class'        => 'form-control',  
             
			  'required'=> 'required'
            );

echo form_input($data);
?>
                               
                            </div>

                            <div class="form-group">
                                <label><?php echo form_label('Password', 'adminlogpassword');?></label>
                                <?php

$data = array(
              'name'        => 'lpassword',
              'id'          => 'lpassword',
              'value'       => '',
              'maxlength'   => '1000',
              'size'        => '25',
			  'class'        => 'form-control',      
             
			  'required'=> 'required'
            );

echo form_password($data);
?>
                            </div>

                     

                       <?php echo form_submit('submitbut', 'Sign In');?>
                       <?php echo form_reset('reset1', 'reset');?>
                            

                        <?php echo form_close();?>

                    </div>
                    
                </div>

</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
	<script src="<?php echo base_url('assets/admin/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>"></script>

  
</body>

</html>
