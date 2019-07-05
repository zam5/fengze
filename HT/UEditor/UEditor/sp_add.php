<?php
$con = mysql_connect("localhost","root","110");
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_query("set names 'utf8'",$con);
mysql_select_db("bzec", $con);
  
$sb_name=$_POST['sb_name'];
$sb_numandtype=$_POST['sb_numandtype'];
$sb_home=$_POST['sb_home'];
$sb_usedate=$_POST['sb_usedate'];
$sb_address=$_POST['sb_address'];
//$sb_updatetime=$_POST['sb_updatetime'];
$sb_updatetime=date("Y-m-d G:i:s");
$sb_remarks=$_POST['sb_remarks'];
  
//$nikename= trim($nikename);
  
/* 
if (!$nikename || !$email) //判断是否为空
{
echo '不能为空';
exit;
}
*/
  
$sql="INSERT INTO shebeidangan (sb_name,sb_numandtype,sb_home,sb_usedate,sb_address,sb_updatetime,sb_remarks)
VALUES
('$sb_name','$sb_numandtype','$sb_home','$sb_usedate','$sb_address','$sb_updatetime','$sb_remarks')";
   
   
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "ADD OK";
   
mysql_close($con)
?>