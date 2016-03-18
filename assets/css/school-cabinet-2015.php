<?php 

include('inc/db.php');

include('inc/functions.php');

?>

<!DOCTYPE HTML>

<!--[if lte IE 7]> <html class="ie7"> <![endif]-->

<!--[if IE 8]>     <html class="ie8"> <![endif]-->

<!--[if IE 9]>     <html class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->



<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Starex School</title>

<link rel="stylesheet" href="<?php echo $sitename; ?>css/style.css">

<!--[if lt IE 9]>

<script src="js/html5shiv.js"></script>

<script  src="js/placeholders.min.js"></script> 

<![endif]-->

</head>

<body>

<div id="wrapper">

  <?php include('inc/header.php'); ?>

  <section id="section">

    <div class="middle">

      <div class="banner">

        <?php include('inc/top-sidebar-menu.php'); ?>

        <div class="right-banner pl-left">

          <div class="slider-wrapper theme-default">

            <div id="slider" class="nivoSlider"> <img src="<?php echo $sitename; ?>images/School-Co-ordinators.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/Senior-Academic-Staff.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/Kindergarten-Staff.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/Academic-Staff-Of-PrimaryWing.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/Science.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/hindi.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/maths.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/English.jpg"   alt="" /> <img src="<?php echo $sitename; ?>images/Commerce.jpg"   alt="" /> </div>

          </div>

        </div>

      </div>

      <div class="clear"></div>

      <div class="contents global pl-left">

        <div class="ct-box c-sub-menu pl-left">

          <h1>About Us</h1>

          <a href="aboutus.php">Know Starex </a><a href="mission.php">Mission &amp; Vision</a> <a href="chairman.php">Chairman Message</a> <a href="chairperson.php">Chairperson Message</a> <a href="principle.php">Principal Message</a><a href="staff-school.php" class="active">Staff in school (2014-2015) </a>  <a href="school-cabinet.php" > school Cabinet </a> <a href="infrastructure.php">Infrastructure </a> <a href="achievement-awards.php">Achievement </a> </div>

        <div class="ct-box ct-box1 pl-left">

          <h2>Staff in school</h2>

          <div class="table">

            <div class="t-body">

              <div class="td pl-left list">

                <div class="al-center" style="z-index: 730;">

                  <select name="ddlYear" id="selectField">

                    <option value="option1">All Staff In School</option>

                    <option value="option2">Senior Academic Staff</option>

                    <option value="option3">Academic Staff Of Primary Wing</option>

                    <option value="option4">English</option>

                    <option value="option5">Hindi</option>

                    <option value="option6">Mathematics</option>

                    <option value="option7">Science</option>

                    <option value="option8">Commerce</option>

                    <option value="option9">School Co-ordinators</option>

                    <option value="option10">Kindergarten Staff</option>

                  </select>

                </div>

              </div>

            </div>

          </div>

          <div id="option1" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Academic Staff (Senior Wing) </strong> </div>

                <div class="clear"></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left ">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td ">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Kusumlata Jamwal</div>

                <div class="td pl-left last-td">PGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mohit Bhatia</div>

                <div class="td pl-left last-td">PGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Shweta Puri</div>

                <div class="td pl-left last-td">PGT Commerse</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Nidhi </div>

                <div class="td pl-left last-td">PGT Commerse</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Swati  Soni</div>

                <div class="td pl-left last-td">PGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">8</div>

                <div class="td pl-left">Sonika </div>

                <div class="td pl-left last-td">TGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">9</div>

                <div class="td pl-left">Shashi </div>

                <div class="td pl-left last-td">TGT Social Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">10</div>

                <div class="td pl-left">Manju Yadav</div>

                <div class="td pl-left last-td">TGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">11</div>

                <div class="td pl-left">Sunita Yadav</div>

                <div class="td pl-left last-td">TGT Hindi</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">12</div>

                <div class="td pl-left">Rajeev Ahuja</div>

                <div class="td pl-left last-td">TGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">13</div>

                <div class="td pl-left">Ashok</div>

                <div class="td pl-left last-td">TGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">14</div>

                <div class="td pl-left">Archana</div>

                <div class="td pl-left last-td">TGT So.Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">15</div>

                <div class="td pl-left">Mangal Bharadwaj</div>

                <div class="td pl-left last-td">TGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">16</div>

                <div class="td pl-left">Ashok Pandey</div>

                <div class="td pl-left last-td">TGT Sanskrit</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">17</div>

                <div class="td pl-left">Deepti Kadian</div>

                <div class="td pl-left last-td">Computer Instructor</div>

              </div>

            </div>

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Academic Staff (Primary Wing) </strong> </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Mrs. Suchitra Victor</div>

                <div class="td pl-left last-td">Co-Ordinator [Primary Wing]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Mrs. Deepti Mudgal</div>

                <div class="td pl-left last-td">Asst. Co-Ordinator [Primary Wing]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mrs.Rashmi Saraf</div>

                <div class="td pl-left last-td">TGT [Science]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Mrs.Kavita Aggarwal</div>

                <div class="td pl-left last-td">PRT[ Hindi]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Mrs.Sunita Hooda</div>

                <div class="td pl-left last-td">PRT [Hindi]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Miss.Reetu Saini</div>

                <div class="td pl-left last-td">PRT [English]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">8</div>

                <div class="td pl-left">Miss. Sapna Saini</div>

                <div class="td pl-left last-td">PRT [Maths]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">9</div>

                <div class="td pl-left">Mrs.Poonam Dogra</div>

                <div class="td pl-left last-td">Mother Teacher</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">10</div>

                <div class="td pl-left">Mrs.Sheetal Yadav</div>

                <div class="td pl-left last-td">Mother Teacher</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">11</div>

                <div class="td pl-left">Mrs.Kavita Yadav</div>

                <div class="td pl-left last-td">Mother Teacher </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">12</div>

                <div class="td pl-left">Mrs.Veerpal Kaur</div>

                <div class="td pl-left last-td">Mother Teacher</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">13</div>

                <div class="td pl-left">Mrs. Meena Kamiya</div>

                <div class="td pl-left last-td">Mother Teacher </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">14</div>

                <div class="td pl-left">Miss. Sakshi Singla</div>

                <div class="td pl-left last-td">Mother Teacher </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">15</div>

                <div class="td pl-left">Miss. Heena</div>

                <div class="td pl-left last-td">Gk Teacher</div>

              </div>

            </div>

          </div>

          <div id="option2" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Academic Staff (Senior Wing) </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/Senior-Academic-Staff.jpg"   alt="" /></p>

                </div>

                <div class="clear"></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left ">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td ">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Kusumlata Jamwal</div>

                <div class="td pl-left last-td">PGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mohit Bhatia</div>

                <div class="td pl-left last-td">PGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Shweta Puri</div>

                <div class="td pl-left last-td">PGT Commerse</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Nidhi </div>

                <div class="td pl-left last-td">PGT Commerse</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Swati  Soni</div>

                <div class="td pl-left last-td">PGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">8</div>

                <div class="td pl-left">Sonika </div>

                <div class="td pl-left last-td">TGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">9</div>

                <div class="td pl-left">Shashi </div>

                <div class="td pl-left last-td">TGT Social Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">10</div>

                <div class="td pl-left">Manju Yadav</div>

                <div class="td pl-left last-td">TGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">11</div>

                <div class="td pl-left">Sunita Yadav</div>

                <div class="td pl-left last-td">TGT Hindi</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">12</div>

                <div class="td pl-left">Rajeev Ahuja</div>

                <div class="td pl-left last-td">TGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">13</div>

                <div class="td pl-left">Ashok</div>

                <div class="td pl-left last-td">TGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">14</div>

                <div class="td pl-left">Archana</div>

                <div class="td pl-left last-td">TGT So.Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">15</div>

                <div class="td pl-left">Mangal Bharadwaj</div>

                <div class="td pl-left last-td">TGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">16</div>

                <div class="td pl-left">Ashok Pandey</div>

                <div class="td pl-left last-td">TGT Sanskrit</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">17</div>

                <div class="td pl-left">Deepti Kadian</div>

                <div class="td pl-left last-td">Computer Instructor</div>

              </div>

            </div>

          </div>

          <div id="option3" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Academic Staff (Primary Wing) </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/Academic-Staff-Of-PrimaryWing.jpg"   alt="" /></p>

                </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Mrs. Suchitra Victor</div>

                <div class="td pl-left last-td">Co-Ordinator [Primary Wing]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Mrs. Deepti Mudgal</div>

                <div class="td pl-left last-td">Asst. Co-Ordinator [Primary Wing]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mrs.Rashmi Saraf</div>

                <div class="td pl-left last-td">TGT [Science]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Mrs.Kavita Aggarwal</div>

                <div class="td pl-left last-td">PRT[ Hindi]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Mrs.Sunita Hooda</div>

                <div class="td pl-left last-td">PRT [Hindi]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Miss.Reetu Saini</div>

                <div class="td pl-left last-td">PRT [English]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">8</div>

                <div class="td pl-left">Miss. Sapna Saini</div>

                <div class="td pl-left last-td">PRT [Maths]</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">9</div>

                <div class="td pl-left">Mrs.Poonam Dogra</div>

                <div class="td pl-left last-td">Mother Teacher</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">10</div>

                <div class="td pl-left">Mrs.Sheetal Yadav</div>

                <div class="td pl-left last-td">Mother Teacher</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">11</div>

                <div class="td pl-left">Mrs.Kavita Yadav</div>

                <div class="td pl-left last-td">Mother Teacher </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">12</div>

                <div class="td pl-left">Mrs.Veerpal Kaur</div>

                <div class="td pl-left last-td">Mother Teacher</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">13</div>

                <div class="td pl-left">Mrs. Meena Kamiya</div>

                <div class="td pl-left last-td">Mother Teacher </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">14</div>

                <div class="td pl-left">Miss. Sakshi Singla</div>

                <div class="td pl-left last-td">Mother Teacher </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">15</div>

                <div class="td pl-left">Miss. Heena</div>

                <div class="td pl-left last-td">Gk Teacher</div>

              </div>

            </div>

          </div>

          <div id="option4" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Faculty For English </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/English.jpg"   alt="" /></p>

                </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Suchitra Victor</div>

                <div class="td pl-left last-td">PGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mohit Bhatia</div>

                <div class="td pl-left last-td">PGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Rajeev Ahuja</div>

                <div class="td pl-left last-td">TGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Manju Yadav</div>

                <div class="td pl-left last-td">TGT English</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Reetu Saini</div>

                <div class="td pl-left last-td">PRT English</div>

              </div>

            </div>

          </div>

          <div id="option5" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Faculty For Hindi Department </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/hindi.jpg"   alt="" /></p>

                </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Sunita Yadav</div>

                <div class="td pl-left last-td">TGT Hindi</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mamta </div>

                <div class="td pl-left last-td">TGT Hindi</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Mr.Ashok Pandey</div>

                <div class="td pl-left last-td">TGT Hindi/Sanskrit</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Kavita Rani</div>

                <div class="td pl-left last-td">PRT Hindi</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Sunita Hooda</div>

                <div class="td pl-left last-td">PRT Hindi</div>

              </div>

            </div>

          </div>

          <div id="option6" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Faculty For Mathematics Department </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/maths.jpg"   alt="" /></p>

                </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Kusumlata Jamwal</div>

                <div class="td pl-left last-td">PGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Nidhi</div>

                <div class="td pl-left last-td">PGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Sonika</div>

                <div class="td pl-left last-td">TGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Mangal Bharadwaj</div>

                <div class="td pl-left last-td">TGT Mathematics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Sapna  Saini </div>

                <div class="td pl-left last-td">PRT Mathematics</div>

              </div>

            </div>

          </div>

          <div id="option7" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Faculty For Science Department </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/Science.jpg"   alt="" /></p>

                </div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher’s Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Swati Soni</div>

                <div class="td pl-left last-td">PGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Supreet</div>

                <div class="td pl-left last-td">PGT Physics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Anjali</div>

                <div class="td pl-left last-td">TGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Ashok Yadav</div>

                <div class="td pl-left last-td">TGT Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Rashmi Saraf </div>

                <div class="td pl-left last-td">TGT Science</div>

              </div>

            </div>

          </div>

          <div id="option8" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Faculty For Commerce Department </strong>

                  <p class="al-center" style="padding-top:10px"> <img src="<?php echo $sitename; ?>images/Commerce.jpg"   alt="" /></p>

                </div>

              </div>

              

               <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher's Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left ">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td ">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Mrs. Manu Sharma</div>

                <div class="td pl-left last-td">Senior Wing Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Asst.Co-Ordinator (Seb.Wing)</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mrs. Sweta Puri </div>

                <div class="td pl-left last-td">PGT Commerce</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Mrs.Nidhi</div>

                <div class="td pl-left last-td">PGT Economics</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Mrs.Archana</div>

                <div class="td pl-left last-td">TGT So. Science</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left">Mrs.Shashi</div>

                <div class="td pl-left last-td">TGT So. Science</div>

              </div>

              

            </div>

          </div>

          <div id="option9" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School School Co-ordinators </strong>

                  <p class="al-center" style="padding-top:10px"><img src="<?php echo $sitename; ?>images/School-Co-ordinators.jpg"   alt="" /> </p>

                </div>

              </div>

              

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher's Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left ">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td ">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">Mrs. Manu Sharma</div>

                <div class="td pl-left last-td">Senior Wing Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left">Thakur Narendra Pratap Singh</div>

                <div class="td pl-left last-td">Asst.Co-Ordinator (Seb.Wing)</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">Mrs. Suchitra Victor</div>

                <div class="td pl-left last-td">Primary Wing Co-Ordinator</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left">Mrs. Deepti Mudgal</div>

                <div class="td pl-left last-td">Asst.Co-Ordinator (Pri. Wing)</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">Mrs. Nisha Chauhan </div>

                <div class="td pl-left last-td">Kindergarten Co-Ordinator</div>

              </div>

            </div>

          </div>

          <div id="option10" class="s-box">

            <div class="table">

              <div class="t-body">

                <div class="td pl-left list"><strong>Starex International School

                  Kindergarten Staff </strong>

                  <p class="al-center" style="padding-top:10px"><img src="<?php echo $sitename; ?>images/Kindergarten-Staff.jpg"   alt="" /></p>

                </div>

              </div>

              <?php /*<p class="al-center">----------Content Needed-----------------</p>*/ ?>

              <div class="t-body te-list">

                <div class="td pl-left first"><strong>S.No.</strong></div>

                <div class="td pl-left al-center"><strong>Teacher's Name</strong></div>

                <div class="td pl-left last-td al-center"><strong>Designation</strong></div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">1</div>

                <div class="td pl-left ">Mrs.Pushpa Yadav</div>

                <div class="td pl-left last-td ">Principal</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">2</div>

                <div class="td pl-left">MRS.SUCHITRA VICTOR</div>

                <div class="td pl-left last-td">PRIMARY WING CO-ORDINATOR</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">3</div>

                <div class="td pl-left ">MRS.NISHA CHAUHAN</div>

                <div class="td pl-left last-td ">KINDERGARTEN CO-ORDINATOR</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">4</div>

                <div class="td pl-left">MRS.PRIYANKA SINGH</div>

                <div class="td pl-left last-td">MOTHER TEACHER(KINDERGARTEN)</div>

              </div><div class="t-body te-list">

                <div class="td pl-left first">5</div>

                <div class="td pl-left ">MISS.JYOTI CHAUHAN</div>

                <div class="td pl-left last-td ">MOTHER TEACHER(KINDERGARTEN)</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">6</div>

                <div class="td pl-left">MRS.RASHMI MALIK</div>

                <div class="td pl-left last-td">MOTHER TEACHER(KINDERGARTEN)</div>

              </div><div class="t-body te-list">

                <div class="td pl-left first">7</div>

                <div class="td pl-left ">MRS. RENU YADAV</div>

                <div class="td pl-left last-td ">MOTHER TEACHER(KINDERGARTEN)</div>

              </div>

              <div class="t-body te-list">

                <div class="td pl-left first">8</div>

                <div class="td pl-left">MISS.PRIYANKA BAJAJ</div>

                <div class="td pl-left last-td">MOTHER TEACHER(KINDERGARTEN)</div>

              </div>

               <div class="t-body te-list">

                <div class="td pl-left first">9</div>

                <div class="td pl-left">MRS. MANJU RAINA</div>

                <div class="td pl-left last-td">ASSISTANT TEACHER</div>

              </div>

              

            <div style="padding:15px;">

                <p style="padding-bottom:20px">The child is the most precious and valuable gift of our lives. All our aims, purposes, processes, choices, decisions change as soon as we become parents. The focus and centre of our lives changes completely. Being sensitive to this fact, we have created an environment that your child deserves, an environment that you can trust, that expresses your love and our care and concern.</p>

                <p style="padding-bottom:20px">We offer the best infrastructure, methodology; curriculum well trained team and good educational equipments.</p>

                <p style="padding-bottom:25px">Welcome parents to Starex International School for a joyful journey towards light.</p>

                <p style="padding-bottom:25px">Our environment is a space which the child enters but is so lured that he is unable to withdraw from it. Our space is an experience that stays with the child and becomes a part of his self. He internalizes all the environment has to offer- as knowledge, as confidence, as capabilities, as expressions of aptitudes, as his impeccable social skills, behavior and purposeful demeanor.<br>Our environment embodies the three-way interaction process.</p>

                <h3 style="margin-bottom:10px; font-weight:bold;">CHILD AND THE TEACHER</h3>

                <p style="padding-bottom:20px">The teacher in relation to the child is a second mother. She is a facilitator, a guide and a nurturer. The teacher would introduce and methodically present the environment and its micro components to the child. The child then has the freedom to choose according to his needs, interest and aptitude and is also free to learn at his own pace.</p>

                <p style="padding-bottom:20px">A child who learns thus excels in what he is interested in and is consequently motivated to work on what else the environment has to offer. If given the freedom of pace of learning at this stage, the child remains forever eager and spontaneous to learn. This is unlike when the pressure to perform within a time frame is set.</p>

                <p style="padding-bottom:20px">Our environment is a space which the child enters but is so lured that he is unable to withdraw from it. Our space is an experience that stays with the child and becomes a part of his self. He internalizes all the environment has to offer- as knowledge, as confidence, as capabilities, as expressions of aptitudes, as his impeccable social skills, behavior and purposeful demeanor.

Our environment embodies the three-way interaction process.

</p>

            </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <?php include('inc/footer.php'); ?>

</div>

<script>

 $(document).ready(function () {

    $('.s-box').hide();

    $('#option1').show();

    $('#selectField').change(function () {

        $('.s-box').hide();

        $('#'+$(this).val()).show();

    });

});

</script>

</body>

</html>