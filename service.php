<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Medic | Medical HTML Template</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

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
                   <form name="f" method="post" action="controleur/verif_session.php">
           
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login admin</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
                    <input type="text" name="login"  id="login" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="motdepasse"  id="motdepasse" required="">
                </div>
        </div>
        <div class="modal-footer">
          
          <button type="submit" name="submit"  id="submit" class="btn btn-info btn-lg">Login</button>
          
        </div>
      </div>
    </div>
  </div>
</div>
</form>

                        <li>
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
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
                              <img src="images/bb.png" alt="" width="130">
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
<nav class="navbar navbar-default" style="background-color:rgb(15, 5, 107);">
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
                              <a href="index.php" style="color:#CC9E06;">Home</a>
                        </li>
                        
                        <li>
                              <a href="appointment.php" style="color:#CC9E06;">speakers</a>
                        </li>
                        <li>
                              <a href="service.php" style="color:#CC9E06;">Program</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="color:#CC9E06;">Previous Editions
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" >
                                    <li>
                                          <a href="edition1.php" style="color: currentColor;" style="color:#CC9E06;">1st Edition</a>
                                    </li>
                                    <li>
                                          <a href="edition2.php" style="color: currentColor;">2nd Edition</a>
                                    </li>
                                    
                              </ul>
                        </li> 
                        <li>
                              <a href="team.php" >Team</a>
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
    <div class="slider-item slide1" style="background-image:url(images/slider/slider-bg-1.jpg)">
        
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-2.jpg);">
        
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
        
    </div>
</div>

<!--====  End of Page Slider  ====-->


<section class="service-overview section">
    <div class="container">
        <div class="row">
            
                <div class="content-block" >
                    <h2>Program</h2>
                    
                </div>
            
            
                <div class="accordion-section">
                    <div class="accordion-holder">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                                          8:00-9:00     Accueil et inscription
                                        </a>
                                    </h4>
                                </div>
                                
                            </div>
                            <div class="panel panel-default" >
                                <div class="panel-heading" role="tab" id="headingTwo" ">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo" >
                                            9:00-9:15     Session d'ouverture
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" >
                                    <div class="panel-body">
                                       <ul class="ul">
                                            <li class="li">
                                                Dr.Chafik Abid Fondateur et directeur de l'IIT
                                            </li>
                                            <li class="li">
                                                M.Adel Khabtheni Gouverneur de sfax 
                                            </li>
                                            <li class="li">
                                                M.Fetah krichen ,Directeur Technopole de sfax 
                                            </li>
                                            <li class="li">
                                                M.Ahmed Ben Messaoud, Peésident UPMI
                                            </li>
                                          </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            9:15-10:00      Débat sur l'Industrie du futur
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul class="ul">
                                            <li class="li">
                                                M.Fetah krichen ,Directeur Technopole de sfax 
                                            </li>
                                            <li class="li">
                                                M.Wassim Zouari, Vice-Président de la Minicipalité de sfax 
                                            </li>
                                            <li class="li">
                                                M.Abdelaziz Makhlouf, Chef D'entreprise, CHO 
                                            </li>
                                            <li class="li">
                                                M.Rochdi Ellouze ,Sous-Directeur ,Groupe Triki
                                            </li>
                                            <li class="li">
                                                M.Hatem jarraya ,Directeur ,Freedom Of Dev
                                            </li>
                                            <li class="li">
                                                M.Ilyes Zouari ,Directeur ,Groupe ZEN
                                            </li>
                                            <li class="li">
                                                M.Ameur Abdennadher ,Géeant ,Groupe CEFER
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            10:00-10:30     Session 1 Diditalisation des usines:potentiels et conditions de succé
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                    <div class="panel-body">
                                       <ul class="ul">
                                            
                                            <li class="li">
                                                M.Lassaad Belhiba ,Directeur DATAXION ,Groupe poulina Holsing
                                            </li>
                                            <li class="li">
                                                M.Mahjoub langar ,Responsable sécurité de l'information DATAXION
                                            </li>
                                            
                                          </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading5">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            10:30-11:30     Session 2 Appui a la transition vers l'industrie 4.0 : Smart Grid and Energy Efficiency                         </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                    <div class="panel-body">
                                       <ul class="ul">
                                            <li class="li">
                                                M.Cai Sheng Senior Director of energy Sector ,HUAWEI
                                            </li>
                                            <li class="li">
                                                M.Houssem Aouinit ,IT Solution Sales Manager ,HUAWEI 
                                            </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading6">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false"
                                            aria-controls="collapse6">
                                            11:30-12:00     Piéce théatrale :Forum des métiers
                                        </a>
                                    </h4>
                                </div>
                                
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading8">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false"
                                            aria-controls="collapse8">
                                            12:00-12:30     Pause Brunch
                                        </a>
                                    </h4>
                                </div>
                                
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading7">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false"
                                            aria-controls="collapse7">
                                            12:30-13:00      Session 3 l'industrie 4.0 : Facteurs clés pour réussir la mutation vers l'indutrie 4.0    
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                    <div class="panel-body">
                                       <ul class="ul">
                                            
                                            <li class="li">
                                                M.Mouhamed louati Directeur général LOGIDAS
                                            </li>
                                            <li class="li">
                                                Mme.Emna Gaddour Expert en energie GIZ-STEG
                                            </li>
                                           </ul>

                                    </div>
                                </div>
                            </div>
                               <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading9">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false"
                                            aria-controls="collapse9">
                                            13:00-14:00      Table rond :Dévelopement des compétences :Succes Stories 
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                    <div class="panel-body">
                                       <ul class="ul">
                                            
                                            <li class="li">
                                                M.Mouhamed louati Directeur général LOGIDAS
                                            </li>
                                            <li class="li">
                                                Mme.Emna Gaddour Expert en energie GIZ-STEG
                                            </li>
                                           
                                          </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading10">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false"
                                            aria-controls="collapse10">
                                            14:00-14:30     Session cloture
                                        </a>
                                    </h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
        
 </div>
    </div>
</section>


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
                  <img src="images/bb.png" alt="">
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

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>
