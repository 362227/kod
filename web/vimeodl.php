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
<form action="dl.php" method="post">
URL: <input type="text" name="url">
<input type="submit" value="下载">
</form>

<h1>Your request is processing. Terminal output below:</h1>
<div class="box">
<?php
$url = $_POST['url'];
$lenth=strlen($url); //获取url长度
if ($lenth>8) {


//echo exec("yt-dlp $url 2>&1", $output);
//print_r($output);
echo exec("cd /app/web/vimeodl/ && yt-dlp $url > 1_下载日志.txt");
//$output = file_get_contents ("1.log");
//echo $output;

echo "Operation completed successfully.";
?>
</div>
<p>
<?php

echo "File saved as:";

echo exec("ls * 2>&1", $output1);
echo "$output1";

// Move new .mp3 file to desired location

}











function readableBytes($size0) {
    $i1 = floor(log($size0) / log(1024));
    $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

    return sprintf('%.02F', $size0 / pow(1024, $i1)) * 1 . ' ' . $sizes[$i1];
}

   $num=0;    //用来记录目录下的文件个数
   $dirname='./vimeodl/'; //要遍历的目录名字
   $dir_handle=opendir($dirname);
 
   echo '<table border="1" align="center" width="960px" cellspacing="0" cellpadding="0">';
   echo '<caption><h2>目录'.$dirname.'的内容</h2></caption>';
   echo '<tr align="left" bgcolor="#cccccc">';
   echo '<th>序号</th><th>名称</th><th>大小</th><th>类型</th><th>修改时间</th></tr>';
   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;

   	 	echo '<tr bgcolor='.$bgcolor.'>';
   	 	echo '<td>'.$num.'</td>';//序号
   	 	echo '<td><a href="'.$file.'" target="_blank">'.$file.'</a></td>'; //名称 链接
   	 	echo '<td>'.readableBytes(filesize($dirFile)).'</td>';//大小
   	 	echo '<td>'.filetype($dirFile).'</td>';//类型
   	 	echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';//修改时间
   	 	echo '</tr>';
   	 }
   }
   echo '</table>';
   closedir($dir_handle);
   echo '在<b>'.$dirname.'</b>目录下的子目录和文件共有<b>'.$num.'</b>个';
   
echo shell_exec("php vimeodl上传百度网盘.php"); 
	
	
?>
</p>

<h3>Please click below to download another song.</h3>
<p><a href="vimeodl上传百度网盘.txt">上传百度网盘日志</a></p>
<p><a href="vimeodl.php">刷新</a></p>

</body>
</html>
