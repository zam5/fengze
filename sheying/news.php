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
<div class="l w240">
<div class="tit02">机构简介</div>
<div class="lmenu">
<ul>
<li><a href="about.php">◥ 机构简介</a></li>
<li><a href="clickpage.php?classid=3&singart_id=2">◥ 机构荣誉</a></li>
<li><a <a href="clickpage.php?classid=3&singart_id=3">◥ 团队</a></li>
</ul>
</div>

<div class="tit03">最新动态</div>
<div class="i_new">
<div>
<ul>
<?php 
hanshu3($conn);
?>
</ul>
</div></div>
</div>

<div class="r w745">
<div class="tit01">新闻动态<span> / NEWS</span><div class="r dzw">当前位置 > <a href="index.php">首页</a> > 新闻动态</div><div class="c"></div></div>
<div class="nei font14 news">
<ul>
<?php 
hanshu5($conn);
?>
</ul>
</div>
<div class="page">
<a href="#">首页</a><a href="#">1</a><a href="#" class="hover">2</a><a href="#">3</a><a href="#">尾页</a>
  </div>
</div>

<div class="c"></div>

</div>

<div class="wrap line15"></div>

<div class="downbg">
<div class="wrap">
<div class="d_menu"><a href="index.php">首页</a> | <a href="about.php">机构简介</a> | <a href="works.php">摄影作品</a> | <a href="news.php">技术交流</a> | <a href="news.php">新闻动态</a> | <a href="about.php">联系我们</a></div>
<div class="down">峰泽摄影工作室版权所有  备案号：豫ICP备14036666号-6<br />
邮箱：admin@126.com  咨询热线：0379-66668888  QQ：32237384<br />
合作机构：百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网
<div class="line10"></div>
<img src="images/ewm.jpg" width="100" height="100" border="0" /></div>
</div>
</div>
</body>
</html>
