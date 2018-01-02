<?php
	session_start();
?>
<html>
<title > Bill Receipt </title>
<head><h1 align=center><br><u><i>BOOK MY BAI</i></u></h1></head>
<body style="background-color: #2dcc70">
<br><br>
<!--<h3  align=center > <font color="blue"> <u>Bill Receipt</u></font> </h3>-->
<TABLE border="1px" align=center cellpadding="4" width="700px">
	<th colspan="2">BILL RECEIPT</th>
	<tr bgcolor="white"> 
	<td><font = "14px"><b>NAME:</b></font></td>
	<td><?php 
		echo "<b>".strtoupper($_SESSION["n"]);
	?></td></tr>
	<tr bgcolor="white">
	<td><font = "14px"><b>ADDRESS:</b></font></td>
	<td><?php
$t="user";
$connect=mysqli_connect('localhost','root','','project');
    $s="select address from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);//For session
    $row=mysqli_fetch_row($r);
    echo "<b>".strtoupper($row[0]);
?></td></tr>
	<tr bgcolor="white">
	<td> <font = "14px"><b>PHONE:</b></font></td>
	<td>
		<?php
$t="user";
$connect=mysqli_connect('localhost','root','','project');
    $s="select phone from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);//For session
    $row=mysqli_fetch_row($r);
    echo "<b>".strtoupper($row[0]);
?>

	</td></tr>
	<tr>

	<tr bgcolor="white"> 
	<td><font = "14px"><b>TYPE OF BAI:</b></font></td>
	<td>
		
		<?php
$t="book";
$connect=mysqli_connect('localhost','root','','project');
    $s="select type from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);//For session
    $row=mysqli_fetch_row($r);
    echo "<b>".strtoupper($row[0]);
?>


	</td></tr>
	<tr bgcolor="white">
	<td ><font = "14px"><b>NUMBER OF BAI'S</b></font></td>
	<td>
		<?php
$t="book";
$connect=mysqli_connect('localhost','root','','project');
    $s="select bai from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);//For session
    $row=mysqli_fetch_row($r);
    echo "<b>".strtoupper($row[0]);
?>
	</td></tr>

	<tr bgcolor="white"> 
	<td><font = "14px"><b>NUMBER OF HOURS:</b></font></td>
	<td>
	<?php
$t="book";
$connect=mysqli_connect('localhost','root','','project');
    $s="select hours from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);//For session
    $row=mysqli_fetch_row($r);
    echo "<b>".strtoupper($row[0]);?>		
	</td></tr>
	<tr bgcolor="white">
	<td ><font = "14px"><b>Transaction ID:</b></font></td>
	<td><b>XXXXXXXXXXXX</b></td></tr>
	<tr bgcolor="white"> 
	<td><font = "14px"><b>TOTAL AMOUNT:</b></font></td>
	<td>
		<?php
$t="book";
$j="service";
	$connect=mysqli_connect('localhost','root','','project');
	$aa="select type from $t where name='{$_SESSION['n']}'";
	$am=mysqli_query($connect,$aa);
	$arow=mysqli_fetch_row($am);
	$bb="select PRICE from $j where SERVICE='$arow[0]'";
	$bm=mysqli_query($connect,$bb);
	$brow=mysqli_fetch_row($bm);
    $s="select hours from $t where name='{$_SESSION['n']}'";
    $l="select bai from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);
    $p=mysqli_query($connect,$l);
    $row=mysqli_fetch_row($r);
    $row2=mysqli_fetch_row($p);
    $rp=$row[0]*$row2[0]*$brow[0]*$_SESSION['disc'];
   	echo "$rp";
   	date_default_timezone_set("Asia/Kolkata");
   	$t1=date("Y-m-d")." ".date("h:i:sa");
   	$hist="INSERT INTO history VALUES('{$_SESSION['n']}','$arow[0]','$rp','$t1')"; 
   	$connect_hist=mysqli_query($connect,$hist);
?>
	</td></tr>
	<tr bgcolor="white">
	<td ><font = "14px"><b>ORDER ID:</b></font></td>
	<td><b>
	<?php 
		$a=rand();
		echo $a;
		$sql="INSERT INTO checkid values ('$a') ";
		$connect=mysqli_connect('localhost','root','','project');
		$ans=mysqli_query($connect,$sql);		



	$t="book";
	$j="service";

	$aa="select type from $t where name='{$_SESSION['n']}'";
	$am=mysqli_query($connect,$aa);
	$arow=mysqli_fetch_row($am);
	$bb="select PRICE from $j where SERVICE='$arow[0]'";
	$bm=mysqli_query($connect,$bb);
	$brow=mysqli_fetch_row($bm);
	
    
    $s="select hours from $t where name='{$_SESSION['n']}'";
    $l="select bai from $t where name='{$_SESSION['n']}'";
    $r=mysqli_query($connect,$s);
    $p=mysqli_query($connect,$l);
    $row=mysqli_fetch_row($r);
    $row2=mysqli_fetch_row($p);
    $rp=$row[0]*$row2[0]*$brow[0]*$_SESSION['disc'];
    

		$headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: BAI THE WAY TEAM <info@address.com>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

		$recipient="root@localhost";
	 	$subject="Bai The Way Order Confirmation";
	 	$mail_body="ORDER ID = '$a' 
	 		TYPE OF BAI SELECTED = '$arow[0]' 
	 		 DURATION='$row[0]'
	 		NUMBER OF BAI'S='$row2[0]'
	 		TOTAL AMOUNT PAID='$rp'";
		mail($recipient, $subject, $mail_body,$headers);
	?></b></td></tr>
</TABLE>
<input type="submit" name="update" onclick="print()" class="butt" value="Print" id="butt" style="position: absolute;left :440px;top:480px;"></a>
	<a href="dash.php"><input type="submit"  onclick="back()" value="Book another"  id="butt" style="position: absolute;left : 560px;top:480px;"></a>
<a href="home.php"><input type="submit"  onclick="home()" value="Log Out" id="butt" style="position: absolute;left : 680px;top:480px;"></a>
<a href="track.php"><input type="submit" name="" class="butt" value="Track" id="butt" style="position: absolute;left :800px;top:480px;"></a>
<style type="text/css">
	#butt
        {
            height : 50px;
            width: 100px;
            background-color: #fff;
            border : 10px;
            box-shadow: 4px 4px #2dcc70;
            opacity: 0.5;
            border-radius : 0px;
            font-size: 12px;
            font-family: 'Open Sans Condensed', sans-serif;
            position: absolute;
           opacity: 0.5;
            transition: all 0.5s;
            cursor: pointer;
        }

</style>
<script type="text/javascript">
	function print()
	{
		window.print();
	}
</script>

</body>
</html>