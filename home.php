<?php
 session_start();
 ?>

<!DOCTYPE html>
<html class="no-js">
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home |BAI MY WAI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body style="background-image: back.jpg">

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="home.php" >
                </a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="registration.php">BOOK HERE !</a></li>
                        <li><a href="terms.php">Terms of Use</a></li>
                        <li><a href="contact-us.php">Contact</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <!--Slider-->
    <section id="slide-show" >
     <div id="slider" class="sl-slider-wrapper" >

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                    <br>
                    <br>
                        <img class="pull-right" src="images/sample/slider/download.png" alt="" />
                        <h2>HIRE ON WORK BASIS</h2>
                        <h3 class="gap">EASY TO CONTACT</h3>
                        <a class="btn btn-large btn-transparent" href="terms.php">Learn More</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="images/sample/slider/images.png" alt="" />
                        <h2>CALL &amp; BOOK</h2>
                        <h3 class="gap">GET ON TIME SERVICE</h3>
                        <a class="btn btn-large btn-transparent" href="terms.php">Learn More</a>
                    </div>
                </div>
            </div>
            <!--Slider Item2-->

            <!--Slider Item3-->
            <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                <div class="sl-slide-inner">
                   <div class="container">
                    <img class="pull-right" src="images/sample/slider/img3.png" alt="" />
                    <h2>GET 50 % Off</h2>
                    <h3 class="gap">IF OUR RESPRESENTATIVE IS 30 MIN LATE</h3>
                    <a class="btn btn-large btn-transparent" href="terms.php">Learn More</a>
                </div>
            </div>
        </div>
        <!--Slider Item3-->

    </div>
    <!--/Slider Items-->

    <nav id="nav-arrows" class="nav-arrows">
        <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
        <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
    </nav>
    <!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->           
</section>
<!--Services-->
<section id="services" style="background-image: back.jpg">
    <div class="container">
        <div class="center gap">
            <h3 style="color : #0E0B16">What We Offer</h3>
            <p class="lead">TYPES OF SERVICES WE OFFER</p>
        </div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="color : #0E0B16">PLUMBER</h4>
                        <p>WHENVER HAVING PROBLEM LIKE LEAKAGE OF WATER , TAP NOT WORKING , INSTALLING ANY EQUIPMENT IN YOUR WASHROOM OR KICTHEN and many more .. JUST CONTACT ADN GET YOUR WORK DONE .</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-thumbs-up-alt icon-medium"></i>
                    </div>
                    <div class="media-body" >
                        <h4 class="media-heading" style="color : #0E0B16">GARDENER</h4>
                        <p>GETTING GARDENERERS ARE EASIER THAN EVER . CALL OR SEND A MESSAGE TO US WITH YOUR REQUIREMENTS . WE WILL SEND YOU A GARDENER FOR GETTING YOUR JOB DONE .</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-leaf icon-medium icon-rounded"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="color : #0E0B16">COOK</h4>
                        <p>NEW TO TOWN OR HAVING PROBLEM IN COOKING FOOD .. DON'T WORRY GET THE BEST COOK NEAR YOU ON BAI THE WAY
                        .. PAY AS PER YOUR NEEDS AND EAT WANT YOU WANT
                        	</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-shopping-cart icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="color : #0E0B16">DRIVER</h4>
                        <p>WHY BOOK A CAB IF YOU HAVE YOUR OWN CAR ... BOOK A DRIVER INSTEAD ON CHEAPER RATES ... BAI MY WAY
                        PROVIDES YOU WITH DRIVERS AS WELL ON YOUR DEMAND AND AT YOUR HOME ... TRAVELLING JUST GOT EASIER ..</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="color : #0E0B16">MAID  &amp;  BUTLER</h4>
                        <p>WHEN EVER YOU FEEL THAT YOU CANNOT HANDLE YHE HOUSEHOLD WORK ... AS THE NAME SAYS ... BAI MY WAY GIVES
                        YOU BAI AND BUTLER'S AT YOUR DOORSTEP ON YOUR DEMANDS .. NOW YOU HAVE MANY OPTIONS TO CHOOSE FROM ...</p>
                    </div>
                </div>
            </div>            

            <div class="span4">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-medium"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading" style="color : #0E0B16">ELECTRICIAN</h4>
                        <p>
                        	ONE STOP SOLUTION FOR ALL YOUR ELECTRIC PROBLEMS .. FROM CHANGING A TUBELIGHT TO INSTALLING MCB'S ..
                        	EVERY JOB WHICH YOU WANT AT BY MY WAI .. NO NEED TO WANDER ABOUT LOOKING FOR ELECTRICIAN .. FIND AT BAI MY WAY.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="bottom" class="main" style="background-color: #96858f;height: 250px;">
    <!--Container-->
    <div class="container">
        <div class="row-fluid">
            <!--Contact Form-->
            <div class="span3" style="margin-left: 50px;">
                <h4 style="color: #062F4F">ADDRESS</h4>
                <ul class="unstyled address" style="color: #062F4F">
                    <li>
                        <i class="icon-home" style="color: #062F4F"></i><strong>Address:</strong>10/14 B BELI ROAD NEW KATRA <br>ALLAHABAD 211002
                    </li>
                    <li style="color: #062F4F">
                        <i class="icon-envelope" style="color: #062F4F"></i>
                        <strong>Email: </strong> ajiteshs10@gmail.com
                                            </li>
                    <li>
                        <i class="icon-globe" style="color: #062F4F"></i>
                        <strong>Website:</strong> www.domain.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Toll Free:</strong> 8896754394
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
            
                <div>
                <div class="mapouter">
                	<div class="gmap_canvas">
                		<iframe width="1500" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Allahabad%2C%20IN&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                			
                		</iframe>
                		<a href="http://www.embedgooglemap.net"></a>
                		</div>
                		<style>
                		.mapouter
                		{
                			overflow:hidden;height:300px;width:600px;
                		}
                		.gmap_canvas 
                		{
                			background:none!important;height:300px;width:600px;
                		}
                		</style>
                </div>

			

        </div>  
            </div>

            <div id="tweets" class="span3">
            
                <div>

                </div>  
            </div>
            



            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                     
            <div>
                </div> 
 
        </div>

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer" style="height: 30px;">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2017 <a target="_blank" href="" title="GET YOUR SERVICES">GAFA </a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<?php
$tbl_name="old";
$t="user";
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
{
    $usermail=$_POST['amail'];
    $userpassword=$_POST['apassword'];
    $sql="select * from $tbl_name where email='$usermail' and password='$userpassword'";
    $s="select name from $t where email='$usermail' and password='$userpassword'";
    $result=mysqli_query($connect,$sql);
    $r=mysqli_query($connect,$s);
    $row=mysqli_fetch_row($r);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        ?>
        <script type='text/javascript'>alert('Logged-In');
        window.location.href = "dash.php";
        </script>
        <?php
        
    }
    else
    {
        ?>
        <script type="text/javascript">alert('Incorrect Details')
        window.location.href = 'home.php';
        </script>
        <?php
    }
     $_SESSION["n"]=strtoupper($row[0]);
     $_SESSION["disc"]=1;
     
}
?>

<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email" name="amail" required>
            <input type="password" class="input-small" placeholder="Password" name="apassword" required>
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <input type="submit" class="btn btn-primary" name="submit" value="Sign-In">        
            </form>
        <a href="forgot.php">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>