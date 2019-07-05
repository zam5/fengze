<?php
include'head.php';
$classid=$_GET["classid"];
if($classid==1){
 $news_id=$_GET["news_id"];
 $sql1="select * from news where news_id=".$news_id;
 $res1=mysqli_query($conn,$sql1);
 while($row1 = mysqli_fetch_array($res1)){
 echo"<h3 align='center'>".$row1['news_title']."</h3>";
 echo $row1['content'];
    }
}
if($classid==2){
 $picnews_id=$_GET["picnews_id"];
 $sheying="../HT/";
 $sql1="select * from picnews where picnews_id=".$picnews_id;
 $res1=mysqli_query($conn,$sql1);
 while($row1 = mysqli_fetch_array($res1)){
echo "<img src='".$sheying.$row1['pic_url']."' width='600' height='350' text-align:center/>";
    }
}
if($classid==3){
 $singart_id=$_GET["singart_id"];
 $sql1="select * from singart where singart_id=".$singart_id;
 $res1=mysqli_query($conn,$sql1);
 while($row1 = mysqli_fetch_array($res1)){
 echo"<h3 align='center'>".$row1['singart_title']."</h3>";
 echo $row1['content'];
    }
}
?>