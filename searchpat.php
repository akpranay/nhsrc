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
                                               <li><a href="treat.php">Treatment</a></li>
                                            </ul>
                                        </li>
                                        
                                        

                                        
     
                                    </ul>
                                </li>

                                <li><a href="#">Blog & news</a>
                                    
                                </li>

                                <li><a href="contactuss.php">Contact Us</a>
                                  <li><a href="logout.php?logout">Sign out </a></li>  
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
                            

    <!--start wrapper-->
    <section class="wrapper">
        <section class="page_head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>RESULT</h2>
                        </div>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
        </section>
    </section>
       </div>
       </div>
       </div>
       </div>
       
       <section class="content faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
       <?php
       if(isset($_POST['btn-login']))
{
      $query=$_POST['uid'];


$min_length=0;
if(strlen($query)>=$min_length)
{
      $query=htmlspecialchars($query);
    $query=mysql_real_escape_string($query);
     $sql="select uid,uname,gend from final_preg where uid ='".$query."'" ;
      $res=mysql_query($sql) or die (mysql_error());
       $nrows= mysql_num_rows($res);
       if($nrows==0)
       {
           echo"This UID is not registered";
       }
       else
       { 
            $resu= mysql_fetch_array($res);
         ?>  
            <table border = '2'>
        <thead>
        <tr>
        <th>UID</th>
        <th>Name</th>
        <th>Gender</th>
       
        </tr>
        </thead>
        <tbody>
        <tr>
        <td><?php echo "<p>" .$resu['uid']."</p>";?></td>
        <td><?php echo "<p>" .$resu['uname']."</p>";?></td>
        <td><?php echo "<p>" .$resu['gend']."</p>";?></td>
        
        

        </tr></tbody>
        </table>
        <?php
    $xyz="select * from final_treat where uid ='".$query."'" ;
    //echo $xyz;
    $raw_results=mysql_query($xyz) or die (mysql_error());
    $numrows= mysql_num_rows($raw_results);
    if(mysql_num_rows($raw_results)==0)
    {
             echo "No Results ...";
    }
    else          
    {
     $i=0;
     ?>
    <table border = '1'>
        <thead>
        <tr>
        <th>Hospital name</th>
        <th>Doctor name</th>
        <th>Checkup date</th>
        <th>problem</th>
        <th>reports</th>
        <th>prescription</th>
        </tr>
        </thead>
        <tbody> 
        <?php     
    while($i < $numrows){ 
        $results = mysql_fetch_array($raw_results);
        
       /*$hosname = $results['hosname'];
        $docname = $results['docname'];
        $check_dt=$results['check_dt'];
        $prob=$results['prob'];
        $rep=$results['rep'];
        $pres=$results['pres']; */ 
        
        
        ?>        
       
                     <tr>
                      <td><?php echo "<p>" .$results['hosname']."</p>";?></td>
                      <td><?php echo "<p>" .$results['docname']."</p>";?></td>
                      <td><?php echo "<p>" .$results['check_dt']."</p>";?></td>
                      <td><?php echo "<p>" .$results['prob']."</p>";?></td>
                      <td><?php echo "<p>" .$results['report']."</p>";?></td>
                      <td><?php echo "<p>" .$results['pres']."</p>";?></td>
                      </tr>
        
         <?Php
        $i++;   
    }
       ?>
        </tbody>
        </table>
        <?php 
}
}    
}   

else
{
  echo "minimum length is" .$min_length ;
}}
?> </div>
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
        </body  >
        
</html>
