<?php
session_start();
$_SESSION['n']='PLEASE LOGIN AGAIN';
header("location:/home.php");
exit();
