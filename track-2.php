<!DOCTYPE HTML>
<html>
<head>
<style>
p {
  text-align: center;
  font-size: 60px;
}
</style>
</head>
<body>

<p id="demo"></p>

<script>



var d = new Date(); // for now
 // => 9
d.getMinutes(); // =>  30
d.getSeconds();
var min=d.getMinutes()+5;
var hr=d.getHours();
if(min>60)
{

hr=hr+1;
min=min-60;
}

var countDownDate = new Date(" 5 July,2017, "+hr+":"+min+":25").getTime();   //July 4, 2017 
var x = setInterval(function() 
{

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    if (distance < 0)
     {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Sorry For The Delay.Here is a Small Gift from our end .Get 50% Off on Your Next Booking ";
        //document.write("<a href='page.php'>alert('see coupon')</a>");
                    alert('YOUR CODE IS BMB50!');
                    window.location='login-2.php';
        }
}, 1000);
</script>



<?php
$connect=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
{
    $n=$_POST["t1"];
    $sqll="SELECT * FROM checkid where orderid='$n'";
    $ress=mysqli_query($connect,$sqll);
    $roww=mysqli_fetch_row($ress);
    if($roww[0]==$n)
    {
        echo "<script>alert('Thank You') 
        window.location='login-2.php'</script>";

    }
    else
    {
        echo "<script>alert('wrong entry')</script>";
    }
}





?>




<form method="post">
<input type="text" name="t1" required>
<br>
<input type="submit" value="Submit" name="submit">

</form>




</body>
</html>
