<?php
//登录判断
header("Content-Type: text/html; charset=utf-8");
session_start();
if(!isset($_SESSION["USERNAME"])){
echo "<script>alert('请登录后再访问');location.href='login.html';</script>";}
?>