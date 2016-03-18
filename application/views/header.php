<?php 
$url="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?><header id="header">
  <div class="top  wow slideInLeft">
    <div class="container">
    <div class="row text-right col-lg-12 ">
     <span  class="top-icon col-lg-3 col-md-4 pull-right"><i class=" icon icon-print ">
     </i>(02) 972 531 61</span>
     <span class="top-icon col-lg-3 col-md-4 pull-right" > <i class="icon icon-phone-sign"></i> 
     +61 (972) 531 61</span><span class="top-icon col-lg-3 col-md-4 pull-right "><i class="icon icon-envelope "></i> leo@bigwestdiesel.com.au</span>
     </p>
  <span class="glyphicon glyphicon-envelope"></span>
    </div></div>
  </div>
  <div class="logo-section  wow ">
    <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 wow slideInLeft"><a href="index.php"><span class="log">Big <i> West</i></span></a></div>
      <div class="col-md-9 col-sm-9 text-right wow fadeIn">
      
      <div class="navbar navbar-default wow bounce" role="navigation ">
    
     
      <nav>
        <ul class="nav navbar-nav ">
          <li <?php if(strpos($url, "home")==true || $url=='/') { ?>class="active" <?php }?>>
          <?php echo anchor('home', 'Home', ''); ?>
          </li>
          <li <?php if(strpos($url, "about")==true || $url=='/') { ?>class="active" <?php }?>>
          
          <?php echo anchor('about', 'About Us', ''); ?>
        </li>
           <li <?php if(strpos($url, "services")==true || $url=='/') { ?>class="active" <?php }?>>
            <?php echo anchor('services', 'Services', ''); ?>
           </li>
          <?php /*?><li <?php if(strpos($url, "customer")==true || $url=='/') { ?>class="active" <?php }?>>
        
          
          <?php echo anchor('customers', 'Customers', ''); ?>
          </li><?php */?>
            <li <?php if(strpos($url, "faq")==true || $url=='/') { ?>class="active" <?php }?>>
        
          
          <?php echo anchor('faq', 'FAQs', ''); ?>
          </li>
    
 
          <li <?php if(strpos($url, "contact")==true || $url=='/') { ?>class="active" <?php }?>>
          
            <?php echo anchor('contact', 'Conatct us', ''); ?>
          </li>
        </ul>
        </nav>
     
      <!--/.nav-collapse -->
     
    </div>
  </div>
      
      </div>
    </div>
  </div>
  
</header>