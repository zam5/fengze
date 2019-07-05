<?php
include'public/head.php';
$username=$_POST["username"];
$password=$_POST["pwd"];
$sql = "select * from administrator where admin_name='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
   if($num>0){
         session_start();
         $_SESSION["username"]=$username;
         echo "<script> alert('登陆成功'); location.href='index.php';</script>"; }else {
         echo "<script> alert('用户名或密码错误！'); location.href='login.html';</script>";
     }
mysqli_close();

?>