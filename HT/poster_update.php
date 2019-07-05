<?php
include'public/head.php';
$poster_id=$_GET["poster_id"];
$sql="select * from poster where poster_id='".$poster_id."'";
$res1=mysqli_query($conn,$sql);
while($row1 = mysqli_fetch_array($res1)){
?>
<form action="#" method="post"> 

广告ID：<input type="text" name="poster_id" value="<?php echo $row1['poster_id'];?>"><br/><br/>
广告标题：<input type="text" name="poster_title" value="<?php echo $row1['poster_title'];?>"><br/><br/>
链接地址：<input type="text" name="link_url" value="<?php echo $row1['link_url'];?>"><br/><br/>
广告排序：<input type="text" name="poster_order" value="<?php echo $row1['poster_order'];?>"><br/><br/>
图片地址：<input type="text" name="pic_url" value="<?php echo $row1['pic_url'];?>"><br/><br/>
<?php } ?>

<input value="点击修改" type="submit" name="submit1"/>
</form>

<?php
if(isset($_POST['submit1'])&&$_POST['submit1']){
  $poster_id=$_POST['poster_id'];
  $poster_title=$_POST['poster_title'];
  $pic_url=$_POST['pic_url'];
  $link_url=$_POST['link_url'];
  $poster_order=$_POST['poster_order'];
$sql="update poster set poster_id='".$poster_id."',poster_title='".$poster_title."',pic_url='".$pic_url."',link_url='".$link_url."',poster_order='".$poster_order."' where poster_id='".$poster_id."' ";
if(mysqli_query($conn,$sql)){
	echo "<script>alert('操作成功');location.href='poster.php?';</script>";;
	}else{
		echo "出错了".$sql.mysqli_error($conn);
		}
		mysqli_close($conn);}
?>
