<!DOCTYPE >
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form enctype="multipart/form-data" method="post" name="upform" action="#">
广告ID：<input type="text" name="poster_id"/><br/><br/>
广告标题：<input type="text" name="poster_title"/><br/><br/>
链接地址：<input type="text" name="link_url"/><br/><br/>
广告排序：<input type="text" name="poster_order"/><br/><br/>
 图片地址：<input name="upfile" type="file"><br/><br/>
  
<input value="点击增加" type="submit" name="submit1"/>
</form>

<?php
$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
);

$max_file_size=20000000;     //上传文件大小限制, 单位BYTE
$destination_folder="uploadimg/"; //上传文件路径
$watermark=2;      //是否附加水印(1为加水印,其他为不加水印);
$watertype=1;      //水印类型(1为文字,2为图片)
$waterposition=1;     //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
$waterstring="http://www.lsf.cn/";  //水印字符串
$waterimg="xplore.gif";    //水印图片
$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);
$imgpreviewsize=1/5;    //缩略图比例
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!is_uploaded_file($_FILES["upfile"]['tmp_name']))
    //是否存在文件
    {
         echo "图片不存在!";
         exit;
    }

    $file = $_FILES["upfile"];
    if($max_file_size < $file["size"])
    //检查文件大小
    {
        echo "文件太大!";
        exit;
    }

    if(!in_array($file["type"], $uptypes))
    //检查文件类型
    {
        echo "文件类型不符!".$file["type"];
        exit;
    }

    if(!file_exists($destination_folder))
    {
        mkdir($destination_folder);
    }

    $filename=$file["tmp_name"];
    $image_size = getimagesize($filename);
    $pinfo=pathinfo($file["name"]);
    $ftype=$pinfo['extension'];
    $destination = $destination_folder.time().".".$ftype;
    if (file_exists($destination) && $overwrite != true)
    {
        echo "同名文件已经存在了";
        exit;
    }

    if(!move_uploaded_file ($filename, $destination))
    {
        echo "移动文件出错";
        exit;
    }

    $pinfo=pathinfo($destination);
    $fname=$pinfo['basename'];
    echo " <font color=red>已经成功上传</font><br>文件名:  <font color=blue>".$destination_folder.$fname."</font><br>";
    echo " 宽度:".$image_size[0];
    echo " 长度:".$image_size[1];
    echo "<br> 大小:".$file["size"]." bytes";

    if($watermark==1)
    {
        $iinfo=getimagesize($destination,$iinfo);
        $nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
        $white=imagecolorallocate($nimage,255,255,255);
        $black=imagecolorallocate($nimage,0,0,0);
        $red=imagecolorallocate($nimage,255,0,0);
        imagefill($nimage,0,0,$white);
        switch ($iinfo[2])
        {
            case 1:
            $simage =imagecreatefromgif($destination);
            break;
            case 2:
            $simage =imagecreatefromjpeg($destination);
            break;
            case 3:
            $simage =imagecreatefrompng($destination);
            break;
            case 6:
            $simage =imagecreatefromwbmp($destination);
            break;
            default:
            die("不支持的文件类型");
            exit;
        }

        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);

        switch($watertype)
        {
            case 1:   //加水印字符串
            imagestring($nimage,2,3,$image_size[1]-15,$waterstring,$black);
            break;
            case 2:   //加水印图片
            $simage1 =imagecreatefromgif("xplore.gif");
            imagecopy($nimage,$simage1,0,0,0,0,85,15);
            imagedestroy($simage1);
            break;
        }

        switch ($iinfo[2])
        {
            case 1:
            //imagegif($nimage, $destination);
            imagejpeg($nimage, $destination);
            break;
            case 2:
            imagejpeg($nimage, $destination);
            break;
            case 3:
            imagepng($nimage, $destination);
            break;
            case 6:
            imagewbmp($nimage, $destination);
            //imagejpeg($nimage, $destination);
            break;
        }

        //覆盖原上传文件
        imagedestroy($nimage);
        imagedestroy($simage);
    }

    if($imgpreview==1)
    {
    echo "<br>图片预览:<br>";
    echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
    echo " alt=\"图片预览:\r文件名:".$destination."\r上传时间:\">";
    }
}

 include'public/head.php';
if(isset($_POST['submit1'])&&$_POST['submit1']){
	$poster_id=$_POST['poster_id'];
	$poster_title=$_POST['poster_title'];
	$pic_url=$destination_folder.$fname;
	$link_url=$_POST['link_url'];
	$poster_order=$_POST['poster_order'];
$sql="insert into poster(poster_id,poster_title,pic_url,link_url,poster_order) 
values('".$poster_id."','".$poster_title."','".$pic_url."','".$link_url."','".$poster_order."')";
if(mysqli_query($conn,$sql)){
		echo "<script>alert('操作成功');location.href='poster.php';</script>";
		}else{
			echo "出错了".$sql.mysqli_error($conn);

			}
			mysqli_close($conn);
	}
	

?>
</body>
</html>
