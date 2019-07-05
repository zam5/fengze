<?php
include'public/head.php';
$del_id=$_GET["del_id"];

if($del_id==1){

    $class_id=$_GET["class_id"];
    $sql="delete from newsclass where class_id=".$class_id;
    $num=mysqli_query($conn,$sql);	  
       if($num==1){
	      echo "<script>alert('删除成功');location.href='newsclass.php';</script>";
        }else{
          echo "<script>alert('删除失败');</script>";
	    } 

 }else if($del_id==2){

    $news_id=$_GET["news_id"];
    $sql="delete from news where news_id=".$news_id;
    $num=mysqli_query($conn,$sql);	  
       if($num==1){
	      echo "<script>alert('删除成功');location.href='news.php';</script>";
       }else{
          echo "<script>alert('删除失败');</script>";
	   } 
   
 }else if($del_id==3){

    $poster_id=$_GET["poster_id"];
    $sql="delete from poster where poster_id=".$poster_id;
    $num=mysqli_query($conn,$sql);	  
       if($num==1){
	      echo "<script>alert('删除成功');location.href='poster.php';</script>";
       }else{
          echo "<script>alert('删除失败');</script>";
	   } 
   
 }else if($del_id==4){

    $singart_id=$_GET["singart_id"];
    $sql="delete from singart where singart_id=".$singart_id;
    $num=mysqli_query($conn,$sql);	  
       if($num==1){
	      echo "<script>alert('删除成功');location.href='singart.php';</script>";
       }else{
          echo "<script>alert('删除失败');</script>";
	   } 
   
 }else if($del_id==5){

    $picnews_id=$_GET["picnews_id"];
    $sql="delete from picnews where picnews_id=".$picnews_id;
    $num=mysqli_query($conn,$sql);	  
       if($num==1){
	      echo "<script>alert('删除成功');location.href='picnews.php';</script>";
       }else{
          echo "<script>alert('删除失败');</script>";
	   } 
   
 }else if($del_id==6){

    $manage_id=$_GET["manage_id"];
    $sql="delete from manage where manage_id=".$manage_id;
    $num=mysqli_query($conn,$sql);	  
       if($num==1){
	      echo "<script>alert('删除成功');location.href='manage.php';</script>";
       }else{
          echo "<script>alert('删除失败');</script>";
	   } 
   
 }else if($del_id==7){

    $admin_id=$_GET["admin_id"];
    if($admin_id==1){
        echo "<script>alert('此管理员不可删除！');location.href='administrator.php';</script>";
     }else{
    	$sql="delete from administrator where admin_id=".$admin_id;
        $num=mysqli_query($conn,$sql);	  
        if($num==1){
	      echo "<script>alert('删除成功');location.href='administrator.php';</script>";
        }else{
          echo "<script>alert('删除失败');</script>";
	   } 
   }
}

	mysqli_close($conn);


?>