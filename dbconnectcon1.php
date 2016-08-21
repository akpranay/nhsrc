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
   error_reporting(E_ERROR);
$link = mysqli_connect("localhost", "root", "", "final");

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{
    
    
    
$name=$_POST['name'];
 $email =$_POST['email'];
 $comt =$_POST['comt'];
 $cno =$_POST['cno'];
 $state =$_POST['State'];
 $city =$_POST['city'];


  
 if($name==NULL OR $city==NULL OR $state==NULL OR $email==NULL OR $cno==NULL OR $comt==NULL )
     {
         //echo "empty details not allowed";      
         $errTyp = "warning";
               $errMSG = "Sorry Enter Every Details ...";
     }    
     
 else 
     {
           $sql = "INSERT INTO cont(name,city,state,cno,email,comt)
           VALUES ('$name','$city','$state','$cno','$email','$comt')";
           echo $sql; 
           if(mysqli_query($link,$sql)){
           $errTyp = "warning";
               $emg = "Thankyou for your feedback";
           }
     }
   
} 

else
{
          $errTyp = "warning";
               $errMSG = "Sorry There is some problem ...";
    
}


mysqli_close($link);
?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>National Health Care System</title>
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
                                               <li><a href="regp.php">Treatment</a></li>
                                            </ul>
                                        </li>       
                                        

                                        

                                    </ul>
                                </li>

                                <li><a href="#">Blog & news</a>
                                    
                                </li>

                                <li><a href="contactuss.php">Contact Us</a>
                                <li><a href="logout.php?logout">Sign out</a></li>
                                     
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Header-->

    <!--start wrapper-->
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="home.php">Home</a>/</li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="content portfolio large-images">
            <div class="container">
                <div class="row sub_content">  
                
                
                        
                                             
  


 <?php
            if ( isset($errMSG) ) {
                
                ?>
                <div class="form-group">
                <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
                </div>
                
                <a href="contactuss.php"><h3>Go to Contact Us</h3></a>
                <?php
            }
            else if(isset($emg)){
                ?>
                <div class="form-group">
                 <div class="alert alert-<?php echo ($eTyp=="success") ? "success" : $eTyp; ?>">
                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $emg; ?>
                
                </div>
                
                   <a href="contactuss.php"><h3>Go to Contact Us</h3></a>
                <?php
            }
            
                ?>


        </section>
    </section>
      
    <!--end wrapper-->

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


</body>
</html>
