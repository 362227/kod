<?php
date_default_timezone_set('PRC');










header("content-type:text/html;charset=utf-8");

echo "页面每15秒刷新一次
";
     

// 该函数每15秒钟刷新一次页面

header("Refresh:15 ; url=vimeodl1.php");

      

echo date('H:i:s Y-m-d');

    

?>

<html>
<head>
<title>youtube-dl</title>
<style>
body{
	background-color:#EAECEE;
	font-family:Arial;
	color:black;
}
.box{
	border: 1px solid;
	min-width:250px;
	margin:auto;
}

        label{
            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            text-align: right;
            width: 150px;
            vertical-align: top;
        }
</style>
</head>
<body>
<center>
<h1>youtube-dl</h1>
<p></p>
<form action="vimeodl1.php" method="get">
        <fieldset>
        <p>
            <label for="url" >输入链接（URL）：</label>
            <input type="text" id="url" name="url" align="left" style="font-size:20px">
        </p>
        <p>
            <label for="rename">重命名（可留空）：</label>
            <input type="text" id="rename" name="rename" align="left" style="font-size:20px">
        </p>
        <p>
            <input type="submit">
        </p>
        </fieldset>
</form>



<p><a href="vimeodl1.php"><u>点击刷新</u></a></p>
<h1></h1>
<div class="box">
<?php
$A=strtotime("now");
if(file_exists("vimeodl1上传百度网盘.txt")){ 
    $F=date(filemtime("vimeodl1上传百度网盘.txt"));
    $Y = $A- $F;  //上传百度网盘最后修改
    $fp = file("vimeodl1上传百度网盘.txt");
    $lastline = $fp[count($fp)-1]; //最后一行
    if($Y < 7 || preg_match_all('/.*检测秒传中, 请稍候|准备上传.*/', $lastline, $lastline)) {echo '<caption><h3><font color="#FF0000">正在执行上传任务，请勿添加新链接，否则本任务会被强行取消</font></h3></caption>';}
}

if(file_exists("vimeodl1下载日志.txt")){ 
    $G=date(filemtime("vimeodl1下载日志.txt"));
    $X = $A- $G;
    if($X < 7) {echo '<caption><h3><font color="#FF0000">正在执行下载任务，请勿添加新链接，否则本任务会被强行取消</font></h3></caption>';}
}


unlink("/app/web/vimeodl1/0000");
unlink("/app/web/115/0000");
$actual_link = 'https://'.$_SERVER['HTTP_HOST'];
shell_exec("wget $actual_link -nc -O kod10362227.txt");
shell_exec("curl -L $actual_link");	
	
$url = $_GET['url'];
$rename = $_GET['rename'];
$lenth=strlen($url); //获取url长度
$renamelenth=strlen($rename); //获取rename长度
if ($lenth>8) {
file_put_contents('vimeodl1url.txt', $url);
$date = date('Y-m-d-H-i-s');
shell_exec("mkdir $date");
	
shell_exec("rm -rf /app/web/vimeodl1/*.part"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl1/*.ytdl"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl1/*.part-Frag*"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl1上传百度网盘.txt"); //删除临时文件
shell_exec("rm -rf /app/web/vimeodl1下载日志.txt"); //删除临时文件
//shell_exec("pkill BaiduPCS-Go");
shell_exec("pkill youtube-dl");
sleep(3);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
header("Content-type:text/html;charset=utf-8");
ignore_user_abort(true); // 后台运行，不受前端断开连接影响
set_time_limit(7600); // 脚本最多运行3个小时
//后台运行的后面还要，set_time_limit(0); 除非在服务器上关闭这个程序，否则下面的代码将永远执行下去止到完成为止。
//如果程序运行不超时,在没有执行结束前,程序不会自动结束的.
//=========================================
//PHP中，在客户端发出请求触发脚本执行，然后在服务器端执行一段代码，页面关闭了也要继续执行，并且要先返回一些状态给客户端，避免前端等待超时。
ob_end_clean();//清除之前的缓冲内容，这是必需的，如果之前的缓存不为空的话，里面可能有http头或者其它内容，导致后面的内容不能及时的输出
header("Connection: close");//告诉浏览器，连接关闭了，这样浏览器就不用等待服务器的响应
header("HTTP/1.1 200 OK"); //可以发送200状态码，以这些请求是成功的，要不然可能浏览器会重试，特别是有代理的情况下
//return false;//加了这个下面的就不执行了，不加这个无法返回页面状态，浏览器一直在等待状态，可以关闭，但不是要的效果。
//die(); 或 return ;也一样不执行下面的
//runRack();自定义函数
//register_shutdown_function("runRack");
//return  ;
ob_start();//开始当前代码缓冲
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>div居于页面正中间</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            background-color: #EAEAEA;
        }

        .center-in-center{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="center-in-center"><p><h1>已添加成功。勿刷新该页面！<a href="/vimeodl1.php" class="item project">点击返回查看进度</a></h1></p></div>
</body>
</html>';
	
//下面输出http的一些头信息
$size = ob_get_length();
header("Content-Length: $size");
ob_end_flush();//输出当前缓冲
flush();//输出PHP缓冲
//在Yii2框架下，上面代码可能不会立即返回给客户端，所以需要加如下的代码，即可实现立即返回给客户端
//具体可查看此文章： http://www.lampnick.com/php/375

if (function_exists("fastcgi_finish_request")) {
fastcgi_finish_request(); /* 响应完成, 关闭连接 */
}
/*
 休眠PHP，也就是当前PHP代码的执行停止，20秒钟后PHP被唤醒，
 PHP唤醒后，继续执行下面的代码，但这个时候上面代码的结果已经输出浏览器了，
 也就是浏览器从HTTP头中知道了服务端关闭了连接，浏览器将不在等待服务器的响应，
 反应给客户的就是页面不会显示处于加载状态，换句话说用户可以关掉当前页面，或者关掉浏览器，
 PHP唤醒后继续执行下面的代码，这也就实现了PHP后台执行的效果，
 休眠的作用只是让php先把前面的输出作完，不要急于马上执行下面的代码，休息一下而已，也就是说下面的代码
 执行的时候前面的输出应该到达浏览器了
*/
sleep(3);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
if ($renamelenth>1) {
    echo shell_exec("cd /app/web/vimeodl1/ && /app/web/data/youtube-dl '$url' -o '$rename' --no-mtime > /app/web/vimeodl1下载日志.txt");}
    else  {
        echo shell_exec("cd /app/web/vimeodl1/ && /app/web/data/youtube-dl '$url' --no-mtime > /app/web/vimeodl1下载日志.txt");}
//$output = file_get_contents ("1.log");
//echo $output;

echo "下载";
	

//$content = file_get_contents("https://kod362227.herokuapp.com/vimeodl1上传百度网盘.php");	
//shell_exec("wget https://kod362227.herokuapp.com/vimeodl1上传百度网盘.php -nc -O kod10362227-1-1.txt");
//echo $content;
echo shell_exec("php vimeodl1上传百度网盘.php");

	
echo '这里的输出用户看不到，后台运行的';
//下面代码的任何输出都不会输出给浏览器，因为http连接已经关了，
//所以下面的代码的执行属于后台运行的
ignore_user_abort(true); // 后台运行，这个只是运行浏览器关闭，并不是直接就中止返回200状态。
set_time_limit(7600); // 脚本最多运行1个小时
runRack();
function runRack()
{
file_put_contents("/usr/share/nginx/kodexplorer/data/User/admin/home/10362227/runBack.txt", "后台运行输出结果");
}
	
	
?>
</div>
<p>
<?php


	
}
$B=date(filemtime("上传115.txt"));
$A=strtotime("now");
$C=$A - $B;

if($C < 4) {echo '<caption><h1><font color="#FF0000">正在上传115，请只打开一个网站，否则可能崩溃</font></h1></caption>';}


$url1 = file_get_contents("vimeodl1url.txt");
$url2 = preg_replace('/(^http|^youtube|^vimeo|^www)([\s\S]{8,50}).*/','$1$2', $url1); //取url前8-50个作为超链名字
echo '<p>链接：<a href="'.$url1.'">'.$url2.'</a></p>';

echo '<caption><h3>下载进度</h3></caption>';
$content = file_get_contents("vimeodl1下载日志.txt");
$content = preg_replace('/[\s\S]*(\[download\].*)/','$1', $content);
echo $content;

   echo '<caption><h3>上传百度网盘进度</h3></caption>';
$content = file_get_contents("/app/web/vimeodl1上传百度网盘.txt");	
//shell_exec("wget https://kod362227.herokuapp.com/vimeodl1上传百度网盘.php -nc -O kod10362227-1-1.txt");
echo $content;




$actual_link = 'https://'.$_SERVER['HTTP_HOST']; 
$page = file_get_contents($actual_link.'/encodeexplorer.index.php?m&sort_by=mod&sort_as=desc&dir=115/');

$page = str_replace("src=\"?img","src=\"encodeexplorer.index.php?img",$page);
$page = str_replace("<a href=\"?s&amp;dir=115/\">","<a href=\"encodeexplorer.index.php?sort_by=mod&sort_as=desc&dir=115/\">",$page);
echo '<hr /><br>'.$page;
	
	
	

?>
</p>

<p><a href="vimeodl1下载日志.txt"><font size="2">下载日志</font></a>  ·  <a href="vimeodl1上传百度网盘日志.php"><font size="2">上传百度网盘日志</font></a>  ·  <a href="上传115.txt"><font size="2">上传115网盘日志</font></a></p>

</body>
</html>
