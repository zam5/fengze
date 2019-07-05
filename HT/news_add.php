<!DOCTYPE >
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">
新闻ID：<input type="text" name="news_id"/><br/><br/>
分类ID：<input type="text" name="class_id"/><br/><br/>
新闻标题：<input type="text" name="news_title"/><br/><br/>
副标题：<input type="text" name="second_title"/><br/><br/>
是否推荐：<input type="text" name="recommend"/><br/><br/>
是否置顶：<input type="text" name="topmost"/><br/><br/>
SEO关键字：<input type="text" name="seo_keyword"/><br/><br/>
SEO描述：<input type="text" name="seo_describe"/><br/><br/>


内容：
<br/></br>
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
	$news_id=$_POST['news_id'];
	$class_id=$_POST['class_id'];
	$news_title=$_POST['news_title'];
	$second_title=$_POST['second_title'];
	$content=$_POST['content'];
	$recommend=$_POST['recommend'];
	$topmost=$_POST['topmost'];
	$seo_keyword=$_POST['seo_keyword'];
	$seo_describe=$_POST['seo_describe'];
$sql="insert into news(news_id,class_id,news_title,second_title,content,recommend,topmost,seo_keyword,seo_describe) 
values('".$news_id."','".$class_id."','".$news_title."','".$second_title."','".$content."','".$recommend."','".$topmost."','".$seo_keyword."','".$seo_describe."')";
if(mysqli_query($conn,$sql)){
		echo "<script>alert('操作成功');location.href='news.php';</script>";
		}else{
			echo "出错了".$sql.mysqli_error($conn);

			}
			mysqli_close($conn);
	}
	

?>
</body>
</html>
