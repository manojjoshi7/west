<!DOCTYPE html>
<!--[if lte IE 7]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie10"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us :: Big West Diesel</title>
<?php
  $this->load->view('head');
?>
<style>
<style> .error_strings {
 font-size: 16px;
 color:#F00;
}
.common {
	padding-top:15px;
}
</style>
</style>

</head>
<body>
<?php
  $this->load->view('header');
?>
<section id="section">
  <div class="global relative">
    <div class="container">
      <h1 class="rock wow fadeInLeft">CONTACT INFORMATION </h1>
    </div>
  </div>
  <div class="container wow fadeIn">
    <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-8" style="padding:5%;">
        <div class="alert alert-success"  style="padding:50px;">Your message has been sent successfully. <br />We will be in touch with you as soon as possible. Thanks
         <a href="<?php echo base_url(); ?>home" class="close btn" data-dismiss="alert">Go back</a><br />
        </div>
        
      </div>
    </div>
  </div>
    <!--row close--> 
    
  </div>
  </div>
  <div class="clearfix"></div>
  </div>
</section>
<?php
  $this->load->view('footer');
?>
</body>
</html>