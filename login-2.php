<?php
    session_start();
?>
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BOOKING | BAI THE WAY</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <!--Header-->
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
                    <a href="home.php"><input type="submit" action="home.php"  class="lo" name="bl" value="LOG-OUT"></a>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>

     <style type="text/css">
        .lo
        {
            background-color: #2dcc70;
            border : 0px;
        }

          .bl
        {
            height : 50px;
            font-size: 20px;
            width: 200px;
            box-shadow: 4px 4px #2dcc70;
            background-color: #fff;
            border : 4px 4px 4px 4px solid #000;
            border-color: #fff;
            opacity: 0.5;
            border-radius : 4px;
            font-family: 'Open Sans Condensed', sans-serif;
            transition: all 0.5s;
            cursor: pointer;
             position: absolute;
             top : 200px;
             left :1100px; 
        }
    </style>
    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6" style="font-size: 42px;">
                <br>
                        BOOKING
                </div>
                <div class="span6" style="font-size: 24px;">
                    <ul class="breadcrumb pull-right";>
                         <?php 
                            echo "Hi ".$_SESSION['n'];
                        ?>      
                    </ul>
                </div>

            </div>

        </div>
    </section>
            

    <section id="faqs" class="container" style="background-image: url('back.jpg');background-repeat: no-repeat;background-position: right;height: 500px;" >
        <div class="form-pad" >
        <a href="dash.php"><input type="submit" action="home.php"  class="bl" name="bl" value="  BACK "></a>
    <br>

        <div class="cover" style="border : 10px;padding: 10px">
            <form method="post">
            <label for="person" style="font-size: 16px;position: absolute;left: 150px;top : 170px;"><b>CHOOSE YOUR HELPER</label>
            <div class="inp" style="font-size: 16px;padding: 10px;position: absolute;left : 140px;top : 200px;font-family: 'Open Sans Condensed', sans-serif">
                <select name="type" id="ci" style="width: 235px;">
                    <option value="plumber">PLUMBER</option>
                    <option value="gardener">Gardener</option>
                    <option value="driver">Driver</option>
                    <option value="cook">Cook</option>
                    <option value="maid">Maid</option>
                    <option value="electrician">Electrician</option>
                </select>
            </div>
            <label for="people" style="font-size: 16px;position: absolute;left : 150px;top : 280px;"><b>NUMBER OF HELPERS</label>
            <div class="inp" style="font-size: 16px;padding: 10px;position: absolute;left : 140px;top : 310px;">
                      <select name="number" style="width: 235px;"> <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                </select>
            </div>
            <label for="time" style="font-size: 16px;position: absolute;left : 150px;top : 390px;"><b>FOR HOW MANY HOURS</b></label>
                <div class="inp"  style="font-size: 16px;padding: 10px;position: absolute;left : 140px;top : 420px;">
                <select style="width: 235px;" name="time">
                    <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                </select>
                 </div>   
                 <label for="code" style="font-size: 16px;position: absolute;left : 150px;top : 500px;"><b>ENTER PROMO CODE</b></label>
                 <input type="text" name="promo" placeholder="Enter Promo Code" style="width: 200px;height : 40px;border-radius: 1px;border : 2px;margin-left: 80px;position: absolute;left : 70px;top : 550px;">
                 <input type="submit" name="bo" onclick="receipt.php"  style="width: 100px;height : 40px;background-color: #2dcc70;border-radius: 1px;border : 2px;margin-left: 80px;position: absolute;left : 120px;top : 620px; ">

            </form>
        </div>
    </div>

    </section>
<?php
$connect=mysqli_connect('localhost','root','','project');
$t="book";

if(isset($_POST['bo']))
{
    $n1 = $_POST['type'];
    $n2 = $_POST['number'];
    $n3 = $_POST['time'];
    $n4 = $_POST['promo'];
    if($n4!=null)
    {
    if($n4=='BMB50')
    {
        $_SESSION['disc']='0.5';
        echo '<script type="text/javascript">alert("PROMO CODE APPLIED SUCCESFULLY KUDOS!");</script>';
    }
    else
    {
     $_SESSION['disc']='1';  
     echo '<script type="text/javascript">alert("Wrong Promo Code Entered  !Try Next Time Taking you to Payment Page");</script>'; 
    }
    }
    $sq="UPDATE $t SET type='$n1' , bai='$n2' , hours='$n3' where name='{$_SESSION['n']}'" ;
    $p=mysqli_query($connect,$sq);
    ?>
    <script>
        window.location="receipt.php";
       </script>
    <?php
}
?>
<!--Bottom-->
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
<?php

$tbl_name="old";
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
{
  $usermail=$_POST['amail'];
  $userpassword=$_POST['apassword'];
  $sql="select * from $tbl_name where email='$usermail' and password='$userpassword'";
  $result=mysqli_query($connect,$sql);
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    echo "<script type='text/javascript'>alert('Succesfully Logged In');</script>";
    header('refresh:0 URL=terms.php');
  }
  else
  {
    echo "<script type='text/javascript'>alert('Incorrect Email or Password');  </script>";
    header('refresh:0 URL=login.php');
  }
}
?>






<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="" method="post" id="form-login">
            <input type="text" name="amail" class="input-small" placeholder="Email">
            <input type="password" name="apassword" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <input type="submit" value="Sign-In" name="submit" class="btn btn-primary">
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
 