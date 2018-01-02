<?php

	$connect=mysqli_connect('localhost','root','','project');
	if(isset($_POST['submite'])
	{
		$em=$_POST['email'];
		$sql="SELECT * FROM user where email='$em'";
		$res=mysqli_query($connect,$sql);
		if($res!=null)
		{
			$a=rand();
			$headers =  'MIME-Version: 1.0' . "\r\n"; 
			$headers .= 'From: BAI THE WAY TEAM <info@address.com>' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
			$recipient="root@localhost";
			$subject="Bai The Way Order Confirmation";
			$mail_body="Your Security Code is = '$a' ";
			mail($recipient, $subject, $mail_body,$headers);
		}

	
	}




?>




<?php





?>