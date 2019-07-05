<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>峰泽摄影</title>
<link href="css/master.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jQuery.blockUI.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.js"></script>
<link href="css/banner.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/lrtk.css" />
<script type="text/javascript">
$(document).ready(function(){
	$('.box a').mouseover(function(){
		$(this).stop().animate({"top":"-30px"}, 200); 
	})
	$('.box a').mouseout(function(){		
		$(this).stop().animate({"top":"0"}, 200); 
	})
})
</script>
</head>

<body>
<?php
include'hanshu.php';
?>
<div class="topbg">
<div class="wrap">
<div class="l logo"><img src="images/logo.jpg" width="370" height="49" border="0" /></div>
<div class="r w580">
<div class="tel"><img src="images/tel.jpg" width="283" height="31" border="0" /></div>
<div class="menu">
<ul>
<li class="menu06"><a href="callus.php">联系我们<span>CONTACT</span></a></li>
<li class="menu05"><a href="news.php">新闻动态<span>NEWS</span></a></li>
<li class="menu04"><a href="news.php">技术交流<span>THEME</span></a></li>
<li class="menu03"><a href="works.php">摄影作品<span>WORKS</span></a></li>
<li class="menu02"><a href="about.php">机构简介<span>ABOUT</span></a></li>
<li class="menu01"><a href="index.php">首页<span>HOME</span></a></li>
</ul>
</div>
</div>
<div class="c"></div>
</div>
</div>

<div class="wrap">
<div class="nav"><b>最新公告：</b><?php hanshu8($conn);?></div>
</div>

<div class="wrap banner">

				<div id="slideBox" class="slideBox">
					<div class="hd">
						<ul><li>1</li><li>2</li><li>3</li></ul>
					</div>
					<div class="bd">
						<ul>
							<?php 
                           hanshu1($conn);
                             ?>
						</ul>
					</div>
				</div>
				<script type="text/javascript">jQuery(".slideBox").slide( { mainCell:".bd ul",effect:"left",autoPlay:true} );</script>


</div>

<div class="wrap line15"></div>

<div class="wrap">
<div class="tit01">摄影作品<span> / WORKS</span><div class="r more"><a href="works.php"><img src="images/more.jpg" width="29" height="5" border="0" /></a></div><div class="c"></div></div>

<div class="i_cp">
<ul class="box">
<?php hanshu9($conn);?>
</ul>
</div>
</div>

<div class="wrap line5"></div>

<div class="wrap">
<div class="l w348 mr15">
<div class="tit01">机构简介<span> / ABOUT</span><div class="r more"><a href="about.php"><img src="images/more.jpg" width="29" height="5" border="0" /></a></div><div class="c"></div></div>
<div class="i_about" style="height:290px; overflow:hidden;">
<span><?php hanshu11($conn)?><?php hanshu7($conn)?></span></div>
</div>

<div class="l w311">
<div class="tit01">新闻动态<span> / NEWS</span><div class="r more"><a href="news.php"><img src="images/more.jpg" width="29" height="5" border="0" /></a></div><div class="c"></div></div>
<div class="i_new" style="height:290px; overflow:hidden;"><h1><?php hanshu10($conn);?></h1>
<div class="i_newjs">旗下有个方块糖，"方块糖"并不是糖，但却充满着甜甜的幸福感，它就是...<a href="clickpage.php?classid=3&singart_id=7">[ 查看详情+ ]</a></div> 
<div class="dline"></div>
<div>
<ul>
<?php
hanshu3($conn);
?>
</ul>
</div></div>
</div>

<div class="r w311">
<div class="tit01">技术交流<span> / THEME</span><div class="r more"><a href="news.php"><img src="images/more.jpg" width="29" height="5" border="0" /></a></div><div class="c"></div></div>
<div class="i_new" style="height:290px; overflow:hidden;"><h1><?php hanshu10($conn);?></h1>
<div class="i_newjs">旗下有个方块糖，"方块糖"并不是糖，但却充满着甜甜的幸福感，它就是...<a href="clickpage.php?classid=3&singart_id=7">[ 查看详情+ ]</a></div> 
<div class="dline"></div>
<div>
<ul>
<?php
hanshu3($conn);
?>
</ul>
</div></div>
</div>


<div class="c"></div>
</div>

<div class="wrap line15"></div>
<?php
$sql4="select * from manage2 where manage_id=1";
$res4=mysqli_query($conn,$sql4);
while($row4 = mysqli_fetch_array($res4)){
?>
<div class="downbg">
<div class="wrap">
<div class="d_menu"><a href="index.php">首页</a> | <a href="about.php">机构简介</a> | <a href="works.php">摄影作品</a> | <a href="news.php">技术交流</a> | <a href="news.php">新闻动态</a> | <a href="about.php">联系我们</a></div>
<div class="down"> <?php echo $row4['bq'];?>版权所有 备案号：<?php echo $row4['ba'];?><br />
邮箱：<?php echo $row4['yx'];?>  咨询热线：<?php echo $row4['rx'];?>  QQ：<?php echo $row4['qq'];?><br />
合作机构：<?php echo $row4['hz'];?>
<div class="line10"></div>
<img src="images/ewm.jpg" width="100" height="100" border="0" /></div>
</div>
</div>
<?php } ?>
</body>
</html>
