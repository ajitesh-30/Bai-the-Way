<?php
    session_start();
?>
<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
    <?php 
        echo "".$_SESSION["n"];
    ?>| BAI THE WAY
    </title>
    <meta name="description" content=""
    >
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
                    <form action="out.php">
                        <input type="submit"  
                        class="lo" name="bl" value="LOG-OUT"></a>
                     </form>
                    </ul>        
                </div>
            </div>
        </div>
    </header>
    <style type="text/css">
        .lo
        {
            background-color: #2dcc70;
            border : 0px;
        }
    </style>

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>
                    <?php 
                        echo "HELLO  ".$_SESSION["n"];
                    ?>
                    </h1>
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
            margin-left:50px;
            margin-top: 10px;
            margin-bottom : 0px;
            height : 50px;
            width: 200px;
            background-color: #fff;
            border : 10px;
            box-shadow: 4px 4px #2dcc70;
            opacity: 0.5;
            border-radius : 0px;
            font-size: 20px;
            font-family: 'Open Sans Condensed', sans-serif;
            position: absolute;
            top : 200px;
            left :100px; 
            opacity: 0.5;
            transition: all 0.5s;
            cursor: pointer;
        }
        #butt-2
        {
            margin-left:50px;
            margin-top: 20px;
            margin-bottom : 0px;
            height : 50px;
            font-size: 20px;
            width: 200px;
            box-shadow: 4px 4px #2dcc70;
            background-color: #fff;
            border : 4px 4px 4px 4px solid #000;
            opacity: 0.5;
            border-radius : 0px;
            font-family: 'Open Sans Condensed', sans-serif;
             position: absolute;
             top : 320px;
             left :100px; 
             transition: all 0.5s;
            cursor: pointer;
        }

        #butt-3
        {
            margin-left:50px;
            margin-top: 10px;
            margin-bottom : 0px;
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
             top : 450px;
             left :100px; 
             
        }
        #butt:hover
        {
            background-color:#33ff7a;
        }
        #butt-2:hover,#butt-3:hover,#butt-4:hover
        {
            background-color: #33ff7a;
        }
        #butt-4
        {
            margin-left:50px;
            margin-top: 10px;
            margin-bottom : 0px;
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
             top : 580px;
             left :100px; 
             
      
</style>

<?php 
if(isset($_POST['book']))
{
    $na=$_SESSION['n'];
    $connect=mysqli_connect('localhost','root','','project');
    $sq="SELECT * FROM history WHERE name='$na'";
    $res=mysqli_query($connect,$sq);
 
    echo "<table>"; // start a table tag in the HTML

    while($row = mysqli_fetch_array($res))
    {   //Creates a loop to loop through results
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] .  "</td><td>" . $row['last_pay'] ."</td><td>".$row['date']."</td></tr>";  //$row['index'] the index here is a field name
    }
    echo "</table>";
    } //Close the table in HTML
 //Make sure to close out the database connection   
?>


    
        <section class="services"  style="border : 4px solid skyblue;height: 450px;background-image: url('back.jpg');background-repeat: no-repeat;background-position: right;">
        <div class="container">
            <div class="row-fluid" >
                <div class="span4" >
                    <div class="center" style="border : 4px ;margin-left: 50px;width: 1200px;height: 300px;";>
                        <a href="faq.php"><input type="submit" name="update" class="butt" value="Update Account" id="butt"></a>
                        <a href="login-2.php"><input type="submit" value="Book Your Helper" name="book" class="butt-2" id="butt-2"></a>
                        <a href="booking_history.php"><input type="submit" value="Booking History" name="book" class="butt-3" id="butt-3"></a>
                     
                        <br>    
                       <!-- position: absolute;top: 500px;left: 100px;-->
                    </div>
                </div>
                </div>
            
               </section>

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
<!--  /Login form-->

<?php
$tbl_name="old";
$t="user";
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
{
    $usermail=$_POST['amail'];
    $userpassword=$_POST['apassword'];
    $sql="select * from $tbl_name where email='$usermail' and password='$userpassword'";
    $s="select name,email from $t where email='$usermail' and password='$userpassword'";

    $result=mysqli_query($connect,$sql);//For login
    $r=mysqli_query($connect,$s);//For session
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
    
     }
?>

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
