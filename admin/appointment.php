<?php
include "../class/speaker.class.php";
include "../class/edition.class.php";
$e=new edition();
$p=new speaker();
 $res1=$e->consultation_date();
 foreach($res1 as $r)
 {
  $x=$r[0];
  }
  
 
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="../plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="../css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

 <!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  
            </div>
            <div class="top-right">
                  <ul class="social-links">
                    <li>
                        <a href="../controleur/distroy.php">
                                    <i class="fa fa" aria-hidden="true">logout</i>
                              </a>
                  </li>
                        <li>
                              <a href="https://www.facebook.com/Tunisie.industrie4.0/">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://www.youtube.com/watch?v=yXpKQT5x0b4">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                              </a>
                        </li>
                        
                        
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.php">
                              <img src="../images/bb.png" alt="" width="130">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>industries4.0@iit.ens.tn</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>(+216) 74 46 50 20</span>
                        </li>
                  </ul>
                  
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.php">Home</a>
                        </li>
                        
                        <li>
                              <a href="appointment.php">speakers</a>
                        </li>
                        <li>
                              <a href="service.php">Program</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Previous Editions
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" >
                                    <li>
                                          <a href="#" style="color: currentColor;">1st Edition</a>
                                    </li>
                                    <li>
                                          <a href="#" style="color: currentColor;">2nd Edition</a>
                                    </li>
                                    
                              </ul>
                        </li> 
                        <li>
                              <a href="team.php">Team</a>
                        </li>
                        <li>
                              <a href="gallery.php">Gallery</a>
                        </li>
                        
                        <li>
                              <a href="about.php">Registration</a>
                        </li>
                        
                        <li>
                              <a href="contact.php">Contact</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">manage
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" >
                                    <li>
                                          <a href="addspk.php" style="color: currentColor;">speakers</a>
                                    </li>
                                    <li>
                                          <a href="addpers.php" style="color: currentColor;">Team</a>
                                    </li>
                                    <li>
                                          <a href="consultpart.php" style="color: currentColor;">participant</a>
                                    </li>
                                    <li>
                                          <a href="addsociety.php" style="color: currentColor;">society</a>
                                    </li>
                                    <li>
                                          <a href="addimage.php" style="color: currentColor;">image</a>
                                    </li>
                              </ul>
                        </li> 
                        
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(../images/slider/slider-bg-1.jpg)">
        
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(../images/slider/slider-bg-2.jpg);">
        
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(../images/slider/slider-bg-3.jpg)">
        
    </div>
</div>


<!--====  End of Page Slider  ====-->



<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Speakers
                
            </h3>
            
        </div>
        <div class="row">
          <?php
                          
                             $req=$p->consultation_id_ed($x);
                           
                            foreach($req as $r)
                            {
                           ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="../images/team/<?php echo $r[5]; ?>" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4><?php echo $r[1];echo "     "; echo $r[2]; ?></h4>
                        <p><?php echo $r[3]; ?></p>
                        <p><?php echo $r[4]; ?></p>
                    </div>
                    <div class="tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <?php echo"<li>";
                                          echo"<a href='../controleur/suppspk.php?id=$r[0]'>delete</a>";
                                          echo "</li>";
                                          ?>
                                        <?php echo"<li>";
                                          echo"<a href='modifspk.php?id=$r[0]'>modify</a>";
                                          echo "</li>";
                                          ?>
                                      </ul>
                                    </div>
                </div>
            </div>
             <?php } ?>
        </div>
    </div>
</section>
<!--End team section-->

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.php">
                  <img src="../images/bb.png" alt="">
                </a>
              </figure>
            </div>
           
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Rue Ibn Al Jazzar 3000 Sfax, Sfax</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>industries4.0@iit.ens.tn</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(+216) 74 46 50 20</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="https://www.facebook.com/Tunisie.industrie4.0/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.youtube.com/watch?v=yXpKQT5x0b4"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.php">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="about.php">About</a>
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="../plugins/jquery.js"></script>
<script src="../plugins/bootstrap.min.js"></script>
<script src="../plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="../plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="../plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="../plugins/google-map/gmap.js"></script>

<script src="../plugins/validate.js"></script>
<script src="../plugins/wow.js"></script>
<script src="../plugins/jquery-ui.js"></script>
<script src="../plugins/timePicker.js"></script>
<script src="../js/script.js"></script>
</body>

</html>
