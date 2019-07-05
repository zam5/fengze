<!DOCTYPE >
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">

ID：<input type="text" name="manage_id"/><br/><br/>
标题：<input type="text" name="manage_title"/><br/><br/>
内容：<input type="text" name="content"/><br/><br/>

<input value="点击增加" type="submit" name="submit1"/>
</form>
<?php
 include'public/head.php';
if(isset($_POST['submit1'])&&$_POST['submit1']){
	$manage_id=$_POST['manage_id'];
	$manage_title=$_POST['manage_title'];
	$content=$_POST['content'];
$sql="insert into manage(manage_id,manage_title,content) 
values('".$manage_id."','".$manage_title."','".$content."')";
if(mysqli_query($conn,$sql)){
		echo "<script>alert('操作成功');location.href='manage.php';</script>";
		}else{
			echo "出错了".$sql.mysqli_error($conn);

			}
			mysqli_close($conn);
	}
	

?>
</body>
</html>
