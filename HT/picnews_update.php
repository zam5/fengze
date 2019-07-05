<?php
include'public/head.php';
$picnews_id=$_GET["picnews_id"];
$sql="select * from picnews where picnews_id='".$picnews_id."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 

ID：<input type="text" name="picnews_id" value="<?php echo $row1['picnews_id'];?>"><br/><br/>
标题：<input type="text" name="picnews_title" value="<?php echo $row1['picnews_title'];?>"><br/><br/>
图片地址：<input type="text" name="pic_url" value="<?php echo $row1['pic_url'];?>"><br/><br/>
内容：<br/></br>
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
  $picnews_id=$_POST['picnews_id'];
  $picnews_title=$_POST['picnews_title'];
  $pic_url=$_POST['pic_url'];
  $content=$_POST['content'];
$sql="update picnews set picnews_id='".$picnews_id."',picnews_title='".$picnews_title."',pic_url='".$pic_url."',content='".$content."' where picnews_id='".$picnews_id."' ";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='picnews.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
