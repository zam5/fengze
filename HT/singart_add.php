<!DOCTYPE >
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">

ID：<input type="text" name="singart_id"/><br/><br/>
标题：<input type="text" name="singart_title"/><br/><br/>
内容：<br/></br>
 <script id="container" name="content" type="text/plain" style="width:600px;height:200px;">
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

<input value="点击增加" type="submit" name="submit1"/>
</form>
<?php
 include'public/head.php';
if(isset($_POST['submit1'])&&$_POST['submit1']){
	$singart_id=$_POST['singart_id'];
	$singart_title=$_POST['singart_title'];
	$content=$_POST['content'];
$sql="insert into singart(singart_id,singart_title,content) 
values('".$singart_id."','".$singart_title."','".$content."')";
if(mysqli_query($conn,$sql)){
		echo "<script>alert('操作成功');location.href='singart.php';</script>";
		}else{
			echo "出错了".$sql.mysqli_error($conn);

			}
			mysqli_close($conn);
	}
	

?>
</body>
</html>
