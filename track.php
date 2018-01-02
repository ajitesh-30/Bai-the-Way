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
<body  style="background-image: url('giphy.gif');">

<label style="font-size: 24px;position : absolute;left : 530px;top :10px;">WE WILL REACH YOU WITHIN</label>
<p id="demo" style="border : 4px solid black;border-width: 10px"></p>
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

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
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


<form method="post" style="margin-left: 600px;">
<label style="font-size: 14px;margin-top : 400px;margin-left: -90px;">PLEASE ENTER THE UNIQUE CODE FOR CONFIRMATION</label><br>
<input type="text" name="t1"  required>
<br>
<input type="submit" value="Submit" name="submit" id="butt-2">
</form>
<style type="text/css">
    #butt
    {
        background-color: #2dcc70;
        width: 150px;
        height: 30px;
        border : 0px;
        margin-left: 610px;
        margin-top: 100px;
    }
    .t1
    {
        background-color: #2ff370;
    }
    #butt-2
    {
        background-color: #2dcc70;
        width: 150px;
        height: 30px;
        border : 0px;margin-left: 10px;
        margin-top: 50px;
    } 


</style>
</body>
</html>