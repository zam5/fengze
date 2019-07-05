<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.SuperSlide.js"></script>
  <script type="text/javascript">
  $(function(){
      $(".sideMenu").slide({
         titCell:"h3", 
         targetCell:"ul",
         defaultIndex:0, 
         effect:'slideDown', 
         delayTime:'500' , 
         trigger:'click', 
         triggerTime:'150', 
         defaultPlay:true, 
         returnDefault:false,
         easing:'easeInQuint',
         endFun:function(){
              scrollWW();
         }
       });
      $(window).resize(function() {
          scrollWW();
      });
  });
  function scrollWW(){
    if($(".side").height()<$(".sideMenu").height()){
       $(".scroll").show();
       var pos = $(".sideMenu ul:visible").position().top-38;
       $('.sideMenu').animate({top:-pos});
    }else{
       $(".scroll").hide();
       $('.sideMenu').animate({top:0});
       n=1;
    }
  } 

var n=1;
function menuScroll(num){
  var Scroll = $('.sideMenu');
  var ScrollP = $('.sideMenu').position();
  /*alert(n);
  alert(ScrollP.top);*/
  if(num==1){
     Scroll.animate({top:ScrollP.top-38});
     n = n+1;
  }else{
    if (ScrollP.top > -38 && ScrollP.top != 0) { ScrollP.top = -38; }
    if (ScrollP.top<0) {
      Scroll.animate({top:38+ScrollP.top});
    }else{
      n=1;
    }
    if(n>1){
      n = n-1;
    }
  }
}
  </script>
</head>

<body>

   <div class="side">
        <div class="sideMenu" style="margin:0 auto">
           <h3>新闻分类管理</h3>
          <ul>
            <li class="on"> <a href="newsclass.php" target="rightFrame">新闻分类表</a></li>
          </ul>

          <h3>新闻管理</h3>
          <ul>
            <li> <a href="news.php" target="rightFrame">新闻表</a></li>
          </ul>

          <h3>广告管理</h3>
          <ul>
            <li><a href="poster.php" target="rightFrame">广告位表</a></li>
          </ul>

          <h3>单篇文章管理</h3>
          <ul>
            <li><a href="singart.php" target="rightFrame">单篇文章表</a></li>
          </ul>

          <h3>图片新闻管理</h3>
          <ul>
            <li ><a href="picnews.php" target="rightFrame">图片新闻表</a></li>
          </ul>

          <h3>网站管理</h3>
          <ul>
            <li><a href="manage.php" target="rightFrame">网站管理表</a></li>
          </ul>

          <h3>管理员管理</h3>
          <ul>
            <li><a href="administrator.php" target="rightFrame">管理员权限表</a></li>
            <li><a href="administrator_update.php" target="rightFrame">修改密码</a></li>
          </ul>
 
 
 

       </div>
    </div>
</body>
</html>
