<?php
include'public/head.php';
$class_id=$_GET["class_id"];
$sql="delete from newsclass where class_id=".$class_id;
$num=mysqli_query($conn,$sql);	  
  if($num==1){
	 echo "<script>alert('删除成功');location.href='newsclass.php';</script>";
    }else{
     echo "<script>alert('删除失败');</script>";
	} 
	mysqli_close($conn);


?>