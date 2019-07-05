<?php
include'public/head.php';
session_start();
$admin_name=$_SESSION["username"];
$sql = "select * from administrator where admin_name='".$admin_name."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 

管理员ID：<input type="text" name="admin_id" value="<?php echo $row1['admin_id'];?>"><br/><br/>
管理员名称：<input type="text" name="admin_name" value="<?php echo $row1['admin_name'];?>"><br/><br/>
密码：<input type="text" name="password" value="<?php echo $row1['password'];?>"><br/><br/>
管理员备注：<input type="text" name="remark" value="<?php echo $row1['remark'];?>"><br/><br/>
权限等级：<input type="text" name="admin_rank" value="<?php echo $row1['admin_rank'];?>"><br/><br/>
<?php } ?>

<input value="点击修改" type="submit" name="submit1"/>
</form>

<?php
if(isset($_POST['submit1'])&&$_POST['submit1']){
  $admin_id=$_POST['admin_id'];
  $admin_name=$_POST['admin_name'];
  $password=$_POST['password'];
  $remark=$_POST['remark'];
  $admin_rank=$_POST['admin_rank'];
$sql="update administrator set admin_id='".$admin_id."',admin_name='".$admin_name."',password='".$password."',remark='".$remark."',admin_rank='".$admin_rank."' where admin_id='".$admin_id."' ";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='administrator.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
