<?php
    ob_start();
    session_start();
    require_once 'dbconnect.php';
    
    if( !isset($_SESSION['user']) ) {
        header("Location: login.php");
        exit;
    } 
    // select loggedin users detail
    //$res=mysql_query("SELECT * FROM final_hreg WHERE huname =".$_SESSION['user']);
    //$userRow=mysql_fetch_array($res);
?> 
<?php
      require_once 'dbconnect.php';
      if( isset($_POST['btn-login']) ) {    
        $query = $_POST['uid'];
        $min_length=0;
if(strlen($query)>=$min_length)
{
      $query=htmlspecialchars($query);
    $query=mysql_real_escape_string($query);
    $xyz="select * from final_preg where uid ='".$query."'" ;
    
    $raw_results=mysql_query($xyz) or die (mysql_error());
    if(mysql_num_rows($raw_results)>0)
    {
            $ty="Patient is registered";
    }
    else
    {
        $ty="patient is not Registered";
    }
}
    
         

else
{
  echo "minimum length is" .$min_length ;
}  
      }
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $_SESSION['user']; ?></title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home">
<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 top-info hidden-xs">
                    <span><i class="fa fa-phone"></i>Phone: </span>
                    <span><i class="fa fa-envelope"></i>Email: </span>
                </div>
                <div class="col-sm-4 top-info">
                    <ul>
                        <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                        <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      <div id="title-bar">
    <div class ="container">
        
         
         <div class="row">
         <div class="col-sm-6"></div>
         <div class="col-sm-3">    
                        <div class="form-group"> 
                                                <form action="search1.php">
                                                <div class="input-group">    
                                                <span class="input-group-addon" ><span class="glyphicon glyphicon-search"></span></span> 
                                               <div style="height: 10px"  > 
                                                <input type="text" name="query1" class="form-control" placeholder="name/state/city/type"  /> </div>
                                                     </form>  
                                                </div>
                                            </div>   </div>
                                            </div></div>
    <div id="logo-bar">
        <div class="container">
            <div class="row">
                <!-- Logo / Mobile Menu -->
                <div  class="col-lg-3 col-sm-3 ">
                    <div id="logo">
                        <h1><a href="home.php"><img alt="logo" src="images/logo.png"/></a></h1>
                    </div>
                </div>
                <!-- Navigation
                ================================================== -->
                <div class="col-lg-9 col-sm-9">
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <!--  <div class="container">-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="home.php">Home</a> </li>

                                   <li><a href="#" >Health awareness</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="healthware1.php">Dengue</a>
                                            
                                        </li>
                                        <li><a href="healthware2.php">Malaria</a></li>
                                        <li><a href="healthware3.php">Cancer</a></li>
                                        
                                    </ul>
                                </li>


                                <li><a href="#" >Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="aboutuss.php">About Us</a>
                                            
                                        </li>
                                       
                                        <li><a href="faqs.php">FAQ</a></li>
                                        
                                    </ul>
                                </li>

                                <li><a href="#">Hospitals</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Patients</a>
                                            <ul class="dropdown-menu">
                                               <li><a href="regp.php">New Registraion</a></li>
                                               <li><a href="treat.php">Treatment</a></li>
                                            </ul>
                                        </li>  
     
                                    </ul>
                                </li>

                                <li><a href="#">Blog & news</a>
                                    
                                </li>

                                <li><a href="contactuss.php">Contact Us</a>  </li>
                                <li><a href="logout.php?logout">Sign out </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="wrapper">
    <div class="slider-wrapper">
        <div class="slider">
            <div class="fs_loader"></div>
            <div class="slide">
                <img src="images/fraction-slider/base.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />

            <!--     <img src="images/fraction-slider/slider-boy.png" width="600" height="600" data-position="30,1100" data-in="left" data-out="right" data-delay="700"/>        --> 
                <p class="slide-1" data-position="50,610" data-in="fade" data-out="fade" data-delay="800">Centralized Responsive platform</p>
                <p class="slide-1" data-position="100,560" data-in="fade" data-out="fade" data-delay="1200">Lucid Hospital management system</p>
                <p class="slide-1" data-position="150,500" data-in="fade" data-out="fade" data-delay="1600">Reliable treatments</p>

                <p class="slide-1a" data-position="220,770" data-in="bottom" data-out="bottom" data-delay="2000" data-ease-in="easeOutBounce">&nbsp All Authorized Hospitals and clinics</p>
                <p class="slide-1a" data-position="267,698" data-in="bottom" data-out="bottom" data-delay="3200"  data-ease-in="easeOutBounce">Search hospitals and required treatments</p>
                <p class="slide-1a" data-position="314,760" data-in="bottom" data-out="bottom" data-delay="4200"  data-ease-in="easeOutBounce">&nbsp &nbsp No more file handling </p>
                <p class="slide-1a" data-position="361,753" data-in="bottom" data-out="bottom" data-delay="5200"  data-ease-in="easeOutBounce">&nbsp &nbsp &nbsp Transparency in treatments</p>
            </div>

            <div class="slide">
                <img src="images/fraction-slider/base_2.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />

          <!--      <img src="images/fraction-slider/slider-girl.png" width="600" height="545" data-position="20,400" data-in="right" data-0ut="bottom" data-delay="500"/>   -->

                <p class="slide-2 " data-position="120,900" data-in="bottom" data-out="top" data-delay="2000">Health Management</p>
                <p class="slide-2a " data-position="210,900" data-in="left" data-out="right" data-delay="3000">Reliable system</p>
                <p class="slide-2b " data-position="270,900" data-in="top" data-out="bottom" data-delay="4000" data-ease-in="easeOutBounce">For Your Prestigious Health !</p>
            </div>

             <div class="slide">
                <img src="images/fraction-slider/base_3.jpg"  width="1920" height="auto" data-in="fade" data-out="fade" />

                <p class="slide-heading" data-position="130,370" data-in="top" data-out="top" data-ease-in="easeOutBounce" data-delay="1500">NHSRC</p>

                <p class="sub-line" data-position="230,370" data-in="right" data-out="left" data-delay="2500">National Health System And Resource Centre</p>


            <!--    <img src="images/fraction-slider/gadgets/laptop.png" width="456" height="272" data-position="115,1180" data-in="bottom" data-out="bottom" data-delay="400">

                <img src="images/fraction-slider/gadgets/mack.png" width="357" height="313" data-position="90,1040" data-in="top" data-out="bottom" data-delay="200">

                <img src="images/fraction-slider/gadgets/ipad.png" width="120" height="170" data-position="230,1030" data-in="left" data-out="left" data-delay="300">

                <img src="images/fraction-slider/gadgets/smartphone.png" width="70" height="140" data-position="270,1320" data-in="right" data-out="right" data-delay="300">    -->

               
            </div>
        </div>
    </div>
    <div class="grey_bg">
        <div class="container"> 
            <div class="row sub_content">
            
             <?php
            if ( isset($ty) ) {
                
                ?>
                <div class="form-group">
                <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $ty; ?>">
               <h2> <span class="glyphicon glyphicon-info-sign"> <?php echo $ty; ?> <a href="searchpa.php">  Patient History  </a>  </span></h2>
                </div>
                </div>
                <?php
            }
            ?>
                
               
                 <div class="form-group"> 
                                                <form method="post">
                                                <div class="input-group">    
                                                <span class="input-group-addon" ><span class="glyphicon glyphicon-search"></span></span> 
                                               <div style="height: 10px"  > <div class="col-sm-3"> 
                                                <input type="text" name="uid" class="form-control" placeholder="UID"  
                                                onKeyPress="return submitenter(this,event)"><BR>
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-primary" name="btn-login">SEARCH</button>
                                            </div>
                                            </div >
                                            </div>
                                            
                 
                                                 </div>
                                                     </form>  
                                                </div>
    </div>
        </div>
            </div>
                

    <section>
        <div class="container">
            <div class="row sub_content">
                <div class="col-md-12">
                    <div class="dividerHeading">
                        <h4><span>Recent Work</span></h4>
                       
                    </div>
                    <div id="recent-work-slider" class="owl-carousel">
                        <div class="recent-item box">
                            <figure class="touching ">
                              <!-- <img src="images/portfolio/portfolio_1.png" alt=""/>    -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                      <!--  <a href="images/portfolio/full/portfolio_1.png" class="fa fa-search mfp-image"></a>    -->
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="recent-item box">
                            <figure class="touching ">
                               <!-- <img src="images/portfolio/portfolio_2.png" alt=""/>     -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_2.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="recent-item box">
                            <figure class="touching ">
                             <!--   <img src="images/portfolio/portfolio_3.png" alt=""/>  -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_3.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="recent-item box">
                            <figure class="touching ">
                           <!--     <img src="images/portfolio/portfolio_4.png" alt=""/>   -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_4.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="recent-item box">
                            <figure class="touching ">
                            <!--    <img src="images/portfolio/portfolio_5.png" alt=""/>    -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_5.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="recent-item box">
                            <figure class="touching ">
                            <!--    <img src="images/portfolio/portfolio_6.png" alt=""/>     -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_6.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>

                        <div class="recent-item box">
                            <figure class="touching ">
                           <!--     <img src="images/portfolio/portfolio_7.png" alt=""/>     -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_7.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>

                        <div class="recent-item box">
                            <figure class="touching ">
                               <!-- <img src="images/portfolio/portfolio_8.png" alt=""/>    -->
                                <div class="option inner">
                                    <div>
                                        <h5>Touch and Swipe</h5>
                                        <a href="images/portfolio/full/portfolio_8.png" class="fa fa-search mfp-image"></a>
                                        <a href="portfolio_single.html" class="fa fa-link"></a>
                                        <span>Mobile</span>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="grey-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 super_sub_content clearfix same-height">
                    <div class="col-sm-6">
                        <div class="serviceBox_1">
                            <div class="service-icon">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="service-content">
                                <h3>Clean &amp; Minimal</h3>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="serviceBox_1">
                            <div class="service-icon">
                                <i class="fa fa-diamond"></i>
                            </div>
                            <div class="service-content">
                                <h3>Moto</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="serviceBox_1">
                            <div class="service-icon">
                                <i class="fa fa-anchor"></i>
                            </div>
                            <div class="service-content">
                                <h3>Modern Design</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="serviceBox_1">
                            <div class="service-icon">
                                <i class="fa fa-gears"></i>
                            </div>
                            <div class="service-content">
                                <h3>Quick Support</h3>
                               
                            </div>        
                        </div>
                    </div>
                </div>
              <!--  <div class="col-md-6 inner-image same-height hidden-sm hidden-xs" style="background: url('images/awesome-1.png') no-repeat center;"></div>     -->
            </div>
        </div>
    </div>   

    

   <!-- <div class="super_sub_content grey_bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mrgt-70">
                    <div class="serviceBox_7 right">
                        <div class="service-icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <h3>SEO Ready</h3>
                        <p>
                            Drag more traffic to your website with our SEO Friendly theme: simply bank...
                        </p>
                    </div>

                    <div class="serviceBox_7 right">
                        <div class="service-icon">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <h3>Retina Ready</h3>
                        <p>
                            All our themes come with extensive HTML Documentation that teaches you how...
                        </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <img src="images/phones.png" class="img-responsive center-block">
                </div>

                <div class="col-sm-4 mrgt-70">
                    <div class="serviceBox_7">
                        <div class="service-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <h3>easy customizable</h3>
                        <p>
                            All our themes include advanced options which makes them super flexible for...
                        </p>
                    </div>
                    <div class="serviceBox_7">
                        <div class="service-icon">
                            <i class="fa fa-gears"></i>
                        </div>
                        <h3>global features</h3>
                        <p>
                            We made sure images on your website would look stunning on any device. Our...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>         -->

   

<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>About Us</span></h4>
                </div>
                <div class="widget_content">
                    
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: </p></li>
                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#"></a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Recent Posts</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="links">
                        <li><a href="#"></span></a></li>
                        <li><a href="#"></span></a></li>
                        <li><a href="#"></span></a></li>
                        <li><a href="#"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Twitter</span></h4>

                </div>
                <div class="widget_content">
                    <ul class="tweet_list">
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#"> </a> </p>
                            <span class="time"></span>
                        </li>
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#"> </a></p>
                            <span class="time"></span>
                        </li>
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#"> </a> </p>
                            <span class="time"></span>
                        </li>
                    </ul>
                </div>
                <div class="widget_content">
                    <div class="tweet_go"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Flickr Gallery</span></h4>
                </div>
                <div class="widget_content">
                    <div class="flickr">
                        <ul id="flickrFeed" class="flickr-feed"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->

<section class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="copyright">&copy;   </p>
            </div>

            <div class="col-sm-6 ">
                <div class="footer_social">
                    <ul class="footbot_social">
                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                        <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
<script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
<script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jflickrfeed.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery-hoverdirection.min.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="js/swipe.js"></script>
<script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/main.js"></script>

<!-- Start Style Switcher -->
<div class="switcher"></div>
<!-- End Style Switcher -->

<script>
      /*portfolio*/
    (function($) {
        "use strict";
        var $container = $('.portfolio'),
                $items = $container.find('.portfolio-item'),
                portfolioLayout = 'fitRows';

        if( $container.hasClass('portfolio-centered') ) {
            portfolioLayout = 'masonry';
        }

        $container.isotope({
            filter: '*',
            animationEngine: 'best-available',
            layoutMode: portfolioLayout,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {
            }
        }, refreshWaypoints());

        function refreshWaypoints() {
            setTimeout(function() {
            }, 1000);
        }

        $('ul#filter li').on('click', function() {
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector }, refreshWaypoints());
            $('ul#filter li').removeClass('selected');
            $(this).addClass('selected');
            return false;
        });

        function getColumnNumber() {
            var winWidth = $(window).width(),
                    columnNumber = 1;

            if (winWidth > 1200) {
                columnNumber = 5;
            } else if (winWidth > 950) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 250) {
                columnNumber = 1;
            }
            return columnNumber;
        }

        function setColumns() {
            var winWidth = $(window).width(),
                    columnNumber = getColumnNumber(),
                    itemWidth = Math.floor(winWidth / columnNumber);

            $container.find('.portfolio-item').each(function() {
                $(this).css( {
                    width : itemWidth + 'px'
                });
            });
        }

        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        $container.imagesLoaded(function () {
            setPortfolio();
        });

        $(window).on('resize', function () {
            setPortfolio();
        });
    })(jQuery);
</script>

<!-- WARNING: Wow.js doesn't work in IE 9 or less -->
<!--[if gte IE 9 | !IE ]><!-->
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
    // WOW Animation
    new WOW().init();
</script>

<![endif]-->

</body>
</html>