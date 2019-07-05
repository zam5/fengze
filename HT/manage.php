<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息管理系统界面</title>
 <head>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="css/main.css">
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="js/common.js"></script>
   
   <script type="text/javascript">
      $(function(){  
        $(".list_table").colResizable({
          liveDrag:true,
          gripInnerHtml:"<div class='grip'></div>", 
          draggingClass:"dragging", 
          minWidth:30
        }); 
        
      }); 
   </script>
   <title>Document</title>
 </head>


 <body style="overflow-x:hidden;overflow-y:auto;">
     <div id="table" class="mt10">
        <div class="box span10 oh">
              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
              <tr width="100"><a href="manage_add.php">添加</a></tr><br/></br>
                <tr>
                   <th width="30">全选</th>
                   <th width="30">ID</th>
                   <th width="100">标题</th>
                    <th width="100">操作</th>
                </tr>

               
               <?php
                  include'public/head.php';
                  $sql="select * from manage";
                  $res=mysqli_query($conn,$sql);

                    $num_all = mysqli_num_rows($res);
                    $num=9;
                    $page_num_all=ceil($num_all/$num);
                    $page=empty($_GET['page'])?1:$_GET['page'];
                    $list=($page-1)*$num;
                    $sql1="select * from manage limit $list,$num";
                    $res1=mysqli_query($conn,$sql1);


               while($row=mysqli_fetch_array($res1)){
                   echo" <tr class='tr'> ";
                  echo"<td class='td_center'><input type='checkbox'></td>"; 
                  echo"<td>".$row['manage_id']."</td>";
                  echo"<td>".$row['manage_title']."</td>";
                  echo"<td><a href = 'manage_update.php?manage_id=".$row['manage_id']."'>修改</a>&nbsp&nbsp&nbsp&nbsp";
                  echo"<a href = 'do_delete.php?manage_id=".$row['manage_id']."&del_id=6'>删除</a></td>";
                   echo"</tr>";
                }

                $px = ($page>=$page_num_all ? $page_num_all : $page+1 );
                $ps = ($page<=1 ? 1 : $page-1 );
            ?>
            
              </table>
              <div class="page mt10">
                <div class="pagination">
                  <ul>
                      <li class="first-child"><a href="manage.php">首页</a></li>
                      <li ><a href="manage.php?page=<?php echo $ps?>">上一页</a></li>
                      <li ><a href="manage.php?page=1">1</a></li>
                      <li><a href="manage.php?page=2">2</a></li>
                      <li><a href="manage.php?page=<?php echo $px?>">下一页</a></li>
                      <li class="last-child"><a href="manage.php?page=<?php echo $page_num_all;?>">末页</a></li>
                  </ul>
                </div>

              </div>
        </div>
     </div>
     
     
   
 </body>
 </html>
  