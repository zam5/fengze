<?php
include'public/head.php';
$news_id=$_GET["news_id"];
$sql="select * from news where news_id='".$news_id."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 
新闻ID：<input type="text" name="news_id" value="<?php echo $row1['news_id'];?>"><br/><br/>
分类ID：<input type="text" name="class_id" value="<?php echo $row1['class_id'];?>"><br/><br/>
新闻标题：<input type="text" name="news_title" value="<?php echo $row1['news_title'];?>"><br/><br/>

副标题：<input type="text" name="second_title" value="<?php echo $row1['second_title'];?>"><br/><br/>

是否推荐：<input type="text" name="recommend" value="<?php echo $row1['recommend'];?>"><br/><br/>

是否置顶：<input type="text" name="topmost" value="<?php echo $row1['topmost'];?>"><br/><br/>

seo关键字：<input type="text" name="seo_keyword" value="<?php echo $row1['seo_keyword'];?>"><br/><br/>
seo描述：<input type="text" name="seo_describe" value="<?php echo $row1['seo_describe'];?>"><br/><br/>


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
    $news_id=$_POST['news_id'];
	$class_id=$_POST['class_id'];
	$news_title=$_POST['news_title'];
	$second_title=$_POST['second_title'];
	$content=$_POST['content'];
	$recommend=$_POST['recommend'];
	$topmost=$_POST['topmost'];
	$seo_keyword=$_POST['seo_keyword'];
	$seo_describe=$_POST['seo_describe'];
$sql="update news set news_id='".$news_id."',class_id='".$class_id."',news_title='".$news_title."',second_title='".$second_title."',content='".$content."',recommend='".$recommend."',topmost='".$topmost."',seo_keyword='".$seo_keyword."',seo_describe='".$seo_describe."' where news_id='".$news_id."'";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='news.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
