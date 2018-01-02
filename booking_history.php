<?php
    session_start();
?>


<!-- REMOVE ADDRESS-->
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
    <header class="navbar navbar-fixed-top" >
        <div class="navbar-inner" >
            <div class="container" >
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

    <!-- /header -->
    <style type="text/css">
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
             top : 230px;
             left :80px; 
        }

           .lo
        {
            background-color: #2dcc70;
            border : 0px;
            height: 40px;
        }
</style>
    <section class="title"  style="height: 50px;">
    <br>
        <label style="font-size: 32px;">YOUR BOOKING HISTORY</label>
         <a href="dash.php"><input type="submit" action="home.php"  class="bl" name="bl" value="  BACK "></a>

    </section>
            <div class="container" style="height: 400px;margin-left: 200px;margin-top: 60px;">     
                    <?php 
                         $na=$_SESSION['n'];
                        $connect=mysqli_connect('localhost','root','','project');
                        $sq="SELECT * FROM history WHERE name='$na'";
                        $res=mysqli_query($connect,$sq);
                        echo "<table>"; // start a table tag in the html
                        echo  "<th>NAME</th>";
                        echo "<th>TYPE</th>";
                        echo "<th>AMOUNT</th>";
                        echo "<th>TIME</th>";
                    while($row = mysqli_fetch_array($res))
                    {   
                        echo "<tr><td><b>" . $row['name'] . "</td><td><b>" . strtoupper($row['type']) .  "</td><td><b>" . $row['last_pay'] ."</td><td><b>".$row['date']."</td></tr>";  //$row['index'] the index here is a field name
                    }
                    echo "</table>";
 //Close the table in HTML
 //Make sure to close out the database connection   
                    ?>  

                    <style type="text/css">
                        .table
                        {
                            background-color: blue;
                        }

                    </style>              
              </div>
          </div>
                </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--Bottom-->
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
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
