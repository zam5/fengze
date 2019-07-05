<?php
header("Content-Type: text/html; charset=utf-8");
$localhost="localhost";
$username="root";
$password="root";
$dbname="fengzedb";
$conn=mysqli_connect($localhost,$username,$password,$dbname);
if(!$conn){
	die("连接失败".mysqli_connect_error());
	}

?>