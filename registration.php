
<!DOCTYPE html>
<html class="no-js"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration | Nova</title>
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

  <!--Header-->
  <header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a id="logo" class="pull-left" href="home.php"></a>
        <div class="nav-collapse collapse pull-right">
          <ul class="nav">
            <li "><a href="home.php">Home</a></li>
            <li class="active"><a href="login.php">booking</a></li>
            <li><a href="terms.php">Terms</a></li>
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
  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>Registration</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li><a href="home.php">Home</a> <span class="divider">/</span></li>
            <li class="active">Registration</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->       

  <?php
$tbl_name = "user";
$tbl = "old";
$i="book";
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submits']))
{
    $n1 = $_POST['finame'];
    $n2 = $_POST['mail'];
    $n3 = $_POST['phone'];
    $n4 = $_POST['address'];
    $n5 = $_POST['password'];
    $n6 = $_POST['password_c'];
     $n=strlen($n5);
     $n9=strlen($n3);
    if (!filter_var($n2, FILTER_VALIDATE_EMAIL)) 
    {
        echo '<script type="text/javascript">alert("Invalid Email");</script>';

    }
    else if(is_numeric($n3) && ( $n9<10 || $n9>13))
    {
        echo '<script type="text/javascript">alert("Invalid Phone Number");</script>';
    }   
  else if($n<6)
    {
        echo '<script type="text/javascript">alert("PASSWORD LENGTH SHOULD BE MORE THAN SIX characters");</script>';
    }
    else
    {
    $sql = "INSERT INTO $tbl_name VALUES('$n1','$n4','$n3','$n2','$n5')";
    $x = "INSERT INTO $i VALUES('$n1','',0,0)";
    $s="INSERT INTO $tbl VALUES('$n2','$n5')";
  if($n5 == $n6)
  {
    $res = mysqli_query($connect, $sql);
    $ser = mysqli_query($connect, $s);
    $b= mysqli_query($connect,$x);
    ?>
    <script type='text/javascript'>alert('KUDOS!  Successfully Registered');  
      window.location="home.php";
      </script>;
  <?php
  }
  else
  {
    ?>
    <script type='text/javascript'>alert('Password Error');   
      window.location.href('home.php');
    </script>;
    <?php
  }
}
}
?>


  <section id="registration-page" class="container" style="background-image: url('back.jpg');background-repeat: no-repeat;background-position: right;">
    <form class="center" name="myform"  onsubmit="validate()" method="POST" style="position: relative;">
      <fieldset class="registration-form">
        <div class="control-group">
          <div class="controls">
            <input type="text" id="username" name="finame" placeholder="Name" class="input-xlarge" required>
          </div>
        </div>

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            <input type="text" id="email" name="mail" placeholder="E-mail" class="input-xlarge" required>
          </div>
        </div>

        <div class="control-group">
            <!--Phone Number-->
            <div class="controls">
            <input type="text" id="phone" name="phone" placeholder="Mobile Number " class="input-xlarge" required>
          </div>
        </div>

        <div class="control-group">
            <div class="controls">
            <input type="text" id="address" name="address" placeholder="Enter Address " class="input-xlarge" required>
          </div>
        </div>
        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="password" id="password_c" name="password_c" placeholder="Password (Confirm)" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <input  type="submit" name="submits" class="btn btn-success btn-large btn-block" value="Register">
          </div>
        </div>
      </fieldset>
    </form>
  </section>
  <!-- /#registration-page -->

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

<!--  Login fo1rm -->
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
        window.location.href = 'registration.php';
        </script>
        <?php
    }
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
            <input type="text" class="input-small" name="amail" placeholder="Email">
            <input type="password" class="input-small" name="apassword" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <input type="submit" class="btn btn-primary" name="submit">
        </form>
        <a href="forgot.php">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
