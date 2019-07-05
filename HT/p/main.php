<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
              <tr width="100"><a href="news_add.php">添加新闻</a></tr>
                <tr>
                   <th width="30"> </th>
                   <th width="30">ID</th>
                   <th width="70">分类</th>
                   <th width="100">新闻标题</th>
                   <th width="100">副标题</th>
                   <th width="200">内容</th>
                   <th width="50">是否推荐</th>
                   <th width="50">是否置顶</th>
                   <th width="100">seo关键字</th>
                   <th width="100">seo描述</th>
                   <th width="100">操作</th>
                </tr>
                <tr class="tr">
                   
               <?php
                  include'public/head.php';
                  $sql="select * from news";
                  $res=mysqli_query($conn,$sql);
               while($row=mysqli_fetch_array($res)){
                   echo"<tr>";
                  echo"<td class='td_center'><input type='checkbox'></td>"; 
                  echo"<td>".$row['news_id']."</td>";
                  echo"<td>".$row['class_id']."</td>";
                  echo"<td>".$row['news_title']."</td>";
                  echo"<td>".$row['second_title']."</td>";
                  echo"<td>".$row['content']."</td>";
                  echo"<td>".$row['recommend']."</td>";
                  echo"<td>".$row['topmost']."</td>";
                  echo"<td>".$row['seo_keyword']."</td>";
                  echo"<td>".$row['seo_describe']."</td>";
                  echo"<td><a href = 'news_update.php?news_id=".$row['news_id']."'>修改</a>&nbsp&nbsp&nbsp&nbsp";
                  echo"<a href = 'news_delete.php?news_id=".$row['news_id']."'>删除</a></td>";
                   echo"</tr>";
                  
                }
            ?>
            </tr>
            </table>
              <div class="page mt10">
                <div class="pagination">
                  <ul>
                      <li class="first-child"><a href="#">首页</a></li>
                      <li class="disabled"><span>上一页</span></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">下一页</a></li>
                      <li class="last-child"><a href="#">末页</a></li>
                  </ul>
                </div>

              </div>
        </div>
     </div>
     
     
   
 </body>
 </html>
  