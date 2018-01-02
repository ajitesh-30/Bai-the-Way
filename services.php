<?
    session_start();
?>
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php 
                    echo "".$_SESSION["n"];
                ?>| BAI THE WAY</title>
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

<body>
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="registration.php">BOOKING</a></li>
                        <li class="active"><a href="terms.php">Terms of Use</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->


    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1><?php 
                    echo "Hello  ".$_SESSION["n"];
                ?></h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="home.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->       
    <style type="text/css">
       
        #butt
        {
            margin-left:10px;margin-top: 10px;width: 200px;height : 50px;background-color: #fff;border : 2px;border-radius : 4px;font-family: 'Open Sans Condensed', sans-serif;"  -webkit-transition: width 3s; /* Safari */
    -webkit-transition-delay: 1s; /* Safari */
    transition: width 3s;
    transition-delay: 1s;

        }
        #butt-2
        {
            margin-left:50px;
    margin-top: 10px;
    margin-bottom : 0px;
    height : 50px;
    width: 200px;
    background-color: #fff;
    border : 2px;
    border-radius : 4px;
    font-family: 'Open Sans Condensed', sans-serif;
    -webkit-transition: width 3s; 
    -webkit-transition-delay: 1s; 
    transition: width 3s;
    transition-delay: 1s;

        }

        #butt:hover
        {
            background-color: #015249;
        }

        #butt-2:hover
        {
            background-color: #015249;
        }


    </style>

    
    <section class="services"  style="background-color: #57BC90">
        <div class="container" style="background-color: #57BC90">
            <div class="row-fluid" style="background-color: #57BC90">
                <div class="span4" style="background-color: #57BC90">
                    <div class="center" style="border : 4px  #015249;margin-left: 50px;width: 1200px;height: 300px;background-color: #57BC90";>
                        <input type="submit" name="update" value="Update Account" clas="butt" id="butt">
                        <input type="submit" value="Delete Account " name="delete" class="butt-2" id="butt-2">
                        <input type="text" name="review" style="width : 300px;height: 200px;margin-left: 100px;" placeholder="WRITE REVIEW">
                        <label for="Rating" style="margin-left: 0px;margin-right: 500px;font-size: 20px;"><strong><i>Rate Your Experience</i>    </strong></label>
                        <select name="rate" id="ri" style="width: 200px;margin-left: 10px;margin-right: 500px;margin-bottom: 0px">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                        </select>
                        <input type="submit" name="rating" style="width: 100px;margin-bottom: 50px;margin-right: 500px;">
                    </div>
                </div>

                </div>

            <hr>
               </section>
    <!--Bottom-->
    <section id="bottom" class="main">
        <!--Container-->
        <div class="container">

            <!--row-fluids-->
            <div class="row-fluid">

                <!--Contact Form-->
                <div class="span3">
                    <h4>ADDRESS</h4>
                    <ul class="unstyled address">
                        <li>
                            <i class="icon-home"></i><strong>Address:</strong> 10/14 B BELI ROAD NEW KATRA
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> ajiteshs10@gmail.com
                        </li>
                        <li>
                            <i class="icon-globe"></i>
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
                </div>
                <!--Important Links-->

                <!--Archives-->
                <div id="archives" class="span3">
                                    </div>
                <!--End Archives-->

                <div class="span3">
                                    </div>

            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">GAFA </a>. All Rights Reserved.
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

<!--  Login form--> 

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
        <script type="text/javascript">alert('Incorrect DEtails')
        window.location.href = 'home.php';
        </script>
        <?php
    }

     $_SESSION["n"]=strtoupper($row[0]);
}
?>
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="home.php" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
