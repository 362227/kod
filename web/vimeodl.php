<?php

header("content-type:text/html;charset=utf-8");

echo "页面每15秒刷新一次
";
     

// 该函数每15秒钟刷新一次页面

header("Refresh:15 ; url=vimeodl2.php");

      

echo date('H:i:s Y-m-d');

    

?>

<html>
<head>
<title>youtube-dl</title>
<style>
body{
	background-color:#708890;
	font-family:Arial;
	color:white;
}
.box{
	border: 1px solid;
	width:70%;
	margin:auto;
}
</style>
</head>
<body>
<center>
<h1>youtube-dl</h1>
<p>Paste the URL below, and press GO.</p>
<form action="vimeodl.php" method="post">
URL: <input type="text" name="url">
<input type="submit" value="下载">
</form>

<p><a href="vimeodl2.php">刷新</a></p>
<h1>Your request is processing. Terminal output below:</h1>
<div class="box">
<?php
shell_exec("wget https://kod362227.herokuapp.com -nc -O kod10362227.txt");
shell_exec("wget https://kod362227.herokuapp.com -nc -O kod10362227-1.txt");	
	
$url = $_POST['url'];
$lenth=strlen($url); //获取url长度
if ($lenth>8) {

shell_exec("rm -rf /app/web/vimeodl/*.part"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl上传百度网盘.txt"); //删除临时文件
shell_exec("rm -rf /app/web/下载日志.txt"); //删除临时文件
shell_exec("pkill BaiduPCS-Go");
shell_exec("pkill yt-dlp");
sleep(3);
	
echo shell_exec("cd /app/web/vimeodl/ && /app/web/data/yt-dlp $url > /app/web/下载日志.txt");
//$output = file_get_contents ("1.log");
//echo $output;

echo "下载";
	
echo shell_exec("curl https://kod362227.herokuapp.com/vimeodl上传百度网盘.php"); 
$content = file_get_contents("https://kod362227.herokuapp.com/vimeodl上传百度网盘.php");	
//shell_exec("wget https://kod362227.herokuapp.com/vimeodl上传百度网盘.php -nc -O kod10362227-1-1.txt");
echo $content;

	
?>
</div>
<p>
<?php


	
}

   echo '<caption><h3>下载进度</h3></caption>';
$content = file_get_contents("下载日志.txt");
$content = preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
echo $content;

   echo '<caption><h3>上传百度网盘进度</h3></caption>';
$content = file_get_contents("/app/web/vimeodl上传百度网盘.txt");	
//shell_exec("wget https://kod362227.herokuapp.com/vimeodl上传百度网盘.php -nc -O kod10362227-1-1.txt");
echo $content;



function readableBytes($size0) {
    $i1 = floor(log($size0) / log(1024));
    $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

    return sprintf('%.02F', $size0 / pow(1024, $i1)) * 1 . ' ' . $sizes[$i1];
}

   $num=0;    //用来记录目录下的文件个数
   $dirname='./vimeodl/'; //要遍历的目录名字
   $dir_handle=opendir($dirname);
 
   echo '<table border="1" align="center" width="960px" cellspacing="0" cellpadding="0">';
   echo '<caption><h3>目录'.$dirname.'的内容</h3></caption>';
   echo '<tr align="left" bgcolor="#cccccc">';
   echo '<th>序号</th><th>名称</th><th>大小</th><th>类型</th><th>修改时间</th></tr>';
   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;

   	 	echo '<tr bgcolor='.$bgcolor.'>';
   	 	echo '<td>'.$num.'</td>';//序号
   	 	echo '<td><a href="/vimeodl/'.$file.'" target="_blank">'.$file.'</a></td>'; //名称 链接
   	 	echo '<td>'.readableBytes(filesize($dirFile)).'</td>';//大小
   	 	echo '<td>'.filetype($dirFile).'</td>';//类型
   	 	echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';//修改时间
   	 	echo '</tr>';
   	 }
   }
   echo '</table>';
   closedir($dir_handle);
   echo '在<b>'.$dirname.'</b>目录下的子目录和文件共有<b>'.$num.'</b>个';
   

?>
</p>

<p><a href="下载日志.txt">下载日志</a></p>
<p><a href="vimeodl上传百度网盘日志.php">上传百度网盘日志</a></p>


</body>
</html>
