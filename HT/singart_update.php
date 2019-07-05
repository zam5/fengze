<?php
include'public/head.php';
$singart_id=$_GET["singart_id"];
$sql="select * from singart where singart_id='".$singart_id."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 
ID：<input type="text" name="singart_id" value="<?php echo $row1['singart_id'];?>"/><br/><br/>
标题：<input type="text" name="singart_title" value="<?php echo $row1['singart_title'];?>"/><br/><br/>
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
    $singart_id=$_POST['singart_id'];
	$singart_title=$_POST['singart_title'];
	$content=$_POST['content'];
$sql="update singart set singart_id='".$singart_id."',singart_title='".$singart_title."',content='".$content."' where singart_id='".$singart_id."' ";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='singart.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
