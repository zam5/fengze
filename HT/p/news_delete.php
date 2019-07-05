<?php
include'public/head.php';
$news_id=$_GET["news_id"];
$sql="delete from news where news_id=".$news_id;
$num=mysqli_query($conn,$sql);	  
  if($num==1){
	 echo "<script>alert('删除成功');location.href='news.php';</script>";
    }else{
     echo "<script>alert('删除失败');</script>";
	} 
	mysqli_close($conn);


?>