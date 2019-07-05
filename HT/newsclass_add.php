<!DOCTYPE >
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">

分类ID：<input type="text" name="class_id"/><br/><br/>
分类名称：<input type="text" name="class_name"/><br/><br/>


<input value="点击增加" type="submit" name="submit1"/>
</form>
<?php
 include'public/head.php';
if(isset($_POST['submit1'])&&$_POST['submit1']){
	$class_id=$_POST['class_id'];
	$class_name=$_POST['class_name'];
$sql="insert into newsclass(class_id,class_name) 
values('".$class_id."','".$class_name."')";
if(mysqli_query($conn,$sql)){
		echo "<script>alert('操作成功');location.href='newsclass.php';</script>";
		}else{
			echo "出错了".$sql.mysqli_error($conn);

			}
			mysqli_close($conn);
	}
	

?>
</body>
</html>
