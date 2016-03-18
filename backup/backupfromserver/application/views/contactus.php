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
<?php echo $map['js']; ?>
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
    
      <div class="col-lg-6">
        <div class="contact-section">
          <div class="contact-image"> </div>
          <div class="contact-enquiry">
            <h4 style="color:#ab1c16; font-weight:bold;"> Contact us if you have any questions</h4>
            <p>All Fields are required</p>
            <span style=" font-size:10px; line-height:9px; padding:0px; margin:0px; color:red !important;"><?php echo validation_errors(); ?></span>
            <?php echo form_open('/contact/sendemail'); ?>
            <div class="common">
              <div class="row">
                <div class="col-lg-12 col-sm-12"> <?php echo form_label(' Your Name'); ?> <br>
                  <?php echo form_input(array('id' => 'comp_name', 'name' => 'comp_name','class' => 'form-control','required' => 'required','value'=> set_value('comp_name'))); ?> </div>
              </div>
            </div>
            <div class="common">
              <div class="row">
                <div class="col-lg-12 col-sm-12"> <?php echo form_label('Email Address'); ?> <br>
                  <?php echo form_input(array('id' => 'email', 'name' => 'email','type' => 'email', 'class' => 'form-control','required' => 'required','value'=> set_value('email'))); ?> </div>
              </div>
            </div>
            <div class="common">
              <div class="row">
                <div class="col-lg-12 col-sm-12"> <?php echo form_label('Phone Number'); ?> <br>
                  <?php echo form_input(array('id' => 'phone', 'name' => 'phone','class' => 'form-control','required' => 'required','value'=> set_value('phone'))); ?> </div>
              </div>
            </div>
            <div class="common">
              <div class="row">
                <div class="col-lg-12 col-sm-12"> <?php echo form_label('Subject'); ?> <br>
                  <?php echo form_input(array('id' => 'subject', 'name' => 'subject','class' => 'form-control','required' => 'required','value'=> set_value('subject'))); ?> </div>
              </div>
            </div>
            <div class="common">
              <div class="row">
                <div class="col-lg-12 col-sm-12"> <?php echo form_label('Message/Comments'); ?> <br>
                  <?php echo form_textarea(array('id' => 'message', 'name' => 'message','class' => 'form-control','required' => 'required','value'=> set_value('message'))); ?> </div>
              </div>
            </div>
            <div class="common text-right"> <?php echo form_submit(array('id' => 'send','type' => 'submit','name' => 'send', 'value' => 'Send Email', 'class'=>'btn btn-default button my-btn')); ?> </div>
            <?php echo form_close(); ?> </div>
        </div>
        <!--contact-enquiry close--> 
        
      </div>
      <!--contact-section close--> 
      
      <!--col-lg -8 close-->
      <div class="col-lg-5">
        <div class="contact-image">
          <p class="add_detail"><br />
            <b>ADDRESS</b><span class="addr"><br />
            Big West Diesel Service PTY Ltd <br />
            2/177-181 Newton Road<br />
            Wetherill Park 2164 </span></p>
          <p class="add_detail" > <b>PHONE</b><br />
            <span class="addr"> +61 (401) 341 087 </span></p>
          <p class="add_detail"> <b>EMAIL</b><br />
            <span class="addr"> <a href="mailto:leo@bigwestdiesel.com.au ">leo@bigwestdiesel.com.au</a> </span></p>
          <p> <?php echo $map['html']; ?> </p>
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
<script src="<?php echo base_url("assets/js/gen_validatorv4.js"); ?>"></script>
</body>
</html>