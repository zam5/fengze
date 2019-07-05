<?php
include'public/head.php';
$manage_id=$_GET["manage_id"];
$sql="select * from manage where manage_id='".$manage_id."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 
ID：<input type="text" name="manage_id" value="<?php echo $row1['manage_id'];?>"/><br/><br/>
标题：<input type="text" name="manage_title" value="<?php echo $row1['manage_title'];?>"/><br/><br/>
内容：
<br/></br>
 <script id="container" name="content" type="text/plain" style="width:600px;height:200px;">
 <?php echo $row1['content'];?>
  </script>
  <!-- 配置文件 -->
  <script type="text/javascript" src="./ueditor/ueditor/ueditor/ueditor.config.js"></script>
  <!-- 编辑器源码文件 -->
  <script type="text/javascript" src="./ueditor/ueditor/ueditor/ueditor.all.js"></script>
  <!-- 实例化编辑器 -->
  <script type="text/javascript">
    var ue = UE.getEditor('container');
  </script>
<br/>
<br/>

<?php } ?>

<input value="点击修改" type="submit" name="submit1"/>
</form>

<?php
if(isset($_POST['submit1'])&&$_POST['submit1']){
    $manage_id=$_POST['manage_id'];
	$manage_title=$_POST['manage_title'];
	$content=$_POST['content'];
$sql="update manage set manage_id='".$manage_id."',manage_title='".$manage_title."',content='".$content."' where manage_id='".$manage_id."'  ";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='manage.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
