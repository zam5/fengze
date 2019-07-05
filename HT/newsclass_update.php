<?php
include'public/head.php';
$class_id=$_GET["class_id"];
$sql="select * from newsclass where class_id='".$class_id."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 

分类ID：<input type="text" name="class_id" value="<?php echo $row1['class_id'];?>"><br/><br/>
分类名称：<input type="text" name="class_name" value="<?php echo $row1['class_name'];?>"><br/><br/>
<?php } ?>

<input value="点击修改" type="submit" name="submit1"/>
</form>

<?php
if(isset($_POST['submit1'])&&$_POST['submit1']){
  $class_id=$_POST['class_id'];
  $class_name=$_POST['class_name'];
$sql="update newsclass set class_id='".$class_id."',class_name='".$class_name."' where class_id='".$class_id."'";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='newsclass.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
