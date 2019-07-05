<!DOCTYPE >
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">

管理员ID：<input type="text" name="admin_id"/><br/><br/>
管理员名称：<input type="text" name="admin_name"/><br/><br/>
密码：<input type="text" name="password"/><br/><br/>
管理员备注：<input type="text" name="remark"/><br/><br/>
权限等级：<input type="text" name="admin_rank"/><br/><br/>
<input value="点击增加" type="submit" name="submit1"/>
</form>
<?php
 include'public/head.php';
if(isset($_POST['submit1'])&&$_POST['submit1']){
	$admin_id=$_POST['admin_id'];
	$admin_name=$_POST['admin_name'];
	$password=$_POST['password'];
	$remark=$_POST['remark'];
	$admin_rank=$_POST['admin_rank'];
$sql="insert into administrator(admin_id,admin_name,password,remark,admin_rank) 
values('".$admin_id."','".$admin_name."','".$password."','".$remark."','".$admin_rank."')";
if(mysqli_query($conn,$sql)){
		echo "<script>alert('操作成功');location.href='administrator.php';</script>";
		}else{
			echo "出错了".$sql.mysqli_error($conn);

			}
			mysqli_close($conn);
	}
	

?>
</body>
</html>
