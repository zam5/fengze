<?php
include 'head.php';
function hanshu1($con){
$sql1="select * from poster";
$sheying="../HT/";
$res1=mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($res1)){
echo "<li><img src='".$sheying.$row1['pic_url']."' width='1000' height='320' border='0' /></li>";
    }
}

function hanshu2($con){
$sql2="select * from singart where singart_id=1";
$res2=mysqli_query($con,$sql2);
while($row2 = mysqli_fetch_array($res2)){
echo $row2['content'];
    }
}
function hanshu3($con){
$sql3="select * from news limit 6";
$res3=mysqli_query($con,$sql3);
while($row3 = mysqli_fetch_array($res3)){
echo"<li><a href='clickpage.php?classid=1&news_id=".$row3['news_id']."'>".$row3['news_title']."</a></li>";
    }
}

function hanshu5($con){
$sql3="select * from news";
$res3=mysqli_query($con,$sql3);
while($row3 = mysqli_fetch_array($res3)){
echo"<li><a href='clickpage.php?classid=1&news_id=".$row3['news_id']."'>".$row3['news_title']."</a></li>";
    }
}

function hanshu6($con){
$sql6="select * from picnews limit 9";
$sheying="../HT/";
$res6=mysqli_query($con,$sql6);
while($row6 = mysqli_fetch_array($res6)){
echo"<li><a href='clickpage.php?classid=2&picnews_id=".$row6['picnews_id']."'><div class='toll_img'><img src='".$sheying.$row6['pic_url']."'width='220' height='220' border='0' /></div> <div class='toll_info'><p>儿童摄影实景照</p></div> </a></li>";
    }
}

function hanshu7($con){
$sql7="select * from singart where singart_id=5";
$res7=mysqli_query($con,$sql7);
while($row7 = mysqli_fetch_array($res7)){
echo "<a href = 'about.php'>".$row7['content']."</a>";
    }
}

function hanshu8($con){
$sql8="select * from singart where singart_id=6";
$res8=mysqli_query($con,$sql8);
while($row8 = mysqli_fetch_array($res8)){
echo "<a href = 'clickpage.php?classid=3&singart_id=6'>".$row8['singart_title']."</a>";
    }
}

function hanshu9($con){
$sql9="select * from picnews limit 8";
$sheying="../HT/";
$res9=mysqli_query($con,$sql9);
while($row9 = mysqli_fetch_array($res9)){
echo"<li><a href='clickpage.php?classid=2&picnews_id=".$row9['picnews_id']."'><div class='toll_img'><img src='".$sheying.$row9['pic_url']."'width='220' height='220' border='0' /></div> <div class='toll_info'><p>儿童摄影实景照</p></div> </a></li>";
    }
}

function hanshu10($con){
$sql10="select * from singart where singart_id=7";
$res10=mysqli_query($con,$sql10);
while($row10 = mysqli_fetch_array($res10)){
echo "<a href = 'clickpage.php?classid=3&singart_id=7'>".$row10['singart_title']."</a>";
    }
}


function hanshu11($con){
$sql11="select * from picnews where picnews_id=10";
$sheying="../HT/";
$res11=mysqli_query($con,$sql11);
while($row11 = mysqli_fetch_array($res11)){
echo"<a href='clickpage.php?classid=2&picnews_id=".$row11['picnews_id']."'><img src='".$sheying.$row11['pic_url']."'width='300' height='180' border='0' /></a>";
    }
}

function hanshu12($con){
$sql12="select * from singart where singart_id=4";
$res12=mysqli_query($con,$sql12);
while($row12 = mysqli_fetch_array($res12)){
echo "<p align='center'>".$row12['content']."</p>";
    }
}
?>