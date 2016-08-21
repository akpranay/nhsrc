<?php
 require_once 'dbconnect.php';
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
        
         
         <div id="title-bar">
    <div class ="container">
        
         
         <div class="row">
         <div class="col-sm-6"></div>
         <div class="col-sm-3">    
                        <div class="form-group"> 
                                                <form action="search.php">
                                                <div class="input-group">    
                                                <span class="input-group-addon" ><span class="glyphicon glyphicon-search"></span></span> 
                                               <div style="height: 10px"  > 
                                                <input type="text" name="query1" class="form-control" placeholder="name/state/city/type"  /> </div>
                                                     </form>  
                                                </div>
                                            </div>   </div>
         <div class="col-sm-3">   
         <div class="form-group">
                                                <div class="input-group"> 
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                                <div style="height: 15px"  >
                                                <a href="login.php">Log in</a> or <a href="reg1d.php">Create account</a> </span>
                                                </div>
                                            </div>   </div>  </div>
         
                                    
         </div>   
         
         </div>
    </div>
    </div>
    <div id="logo-bar">
        <div class="container">
            <div class="row">
                <!-- Logo / Mobile Menu -->
                <div  class="col-lg-3 col-sm-3 ">
                    <div id="logo">
                        <h1><a href="index.php"><img alt="logo" src="images/logo.png"/></a></h1>
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
                                <li class="active"><a href="index.php">Home</a> </li>

                                 
                                    <li><a href="#" >Health awareness</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="healthaware1.php">Dengue</a>
                                            
                                        </li>
                                        <li><a href="healthaware2.php">Malaria</a></li>
                                        <li><a href="healthaware3.php">Cancer</a></li>
                                        
                                    </ul>
                                </li>

                                <li><a href="#" >Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="aboutus.php">About Us</a>
                                            
                                        </li>
                                      
                                        <li><a href="faq.php">FAQ</a></li>
                                        
                                    </ul>
                                </li>

                               

                                <li><a href="#">Blog & news</a>
                                    
                                </li>

                                <li><a href="contactus.php">Contact Us</a>
                                    
                                    
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
                                <li><a href="index.php">Home</a></li>
                                
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
       $query=$_GET['query1'];


$min_length=0;
if(strlen($query)>=$min_length)
{
    $query=htmlspecialchars($query);
    $query=mysql_real_escape_string($query);
    $xyz="select * from final_hreg where hosname LIKE '".$query."' OR state LIKE '".$query."' OR city LIKE '".$query."' OR type LIKE '".$query."'";
    
    $raw_results=mysql_query($xyz) or die (mysql_error());
    if(mysql_num_rows($raw_results)>0)
    {
        ?>
         <table border = '2'>
        <thead>
        <tr>
        <th>hospital name</th>
        <th>city</th>
        <th>state</th>
        <th>type</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($results = mysql_fetch_array($raw_results))                       
    {
        ?>
        
        <tr>
        <td><?php echo "<p>" .$results['hosname']."</p>";?></td>
        <td><?php echo "<p>" .$results['city']."</p>";?></td>
        <td><?php echo "<p>" .$results['state']."</p>";?></td>
        <td><?php echo "<p>" .$results['type']."</p>";?></td>
        

        </tr>
    
        <?php
        }
        ?>
    </tbody>
        </table>
        <?php
    }
else
{
echo "no results" ;
}
}
else
{
echo "minimum length is" .$min_length ;
}
?>   </div>
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