<?php
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
$arr = ["文件生成中"];
echo json_encode($arr);
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






$v2rayconfs = array(

    'v2rayheroku.json', //
    
    'v2rayheroku1.json'
);
$v2rayconf = array_rand($v2rayconfs, 1);		
$v2rayconf = $v2rayconfs[$v2rayconf];
	

shell_exec("pkill v2ray"); //杀死v2ray	
shell_exec("nohup /app/web/data/v2ray -config /app/web/data/$v2rayconf > v2ray.txt& sleep 2"); //后台运行v2ray	
//上传115网盘
unlink("/app/web/115/0000"); //删除空文件
shell_exec("find /app/web/115/* -type f -size -5M -delete"); //删除小文件

//上传115网盘
unlink("/app/web/115/0000"); //删除空文件
shell_exec("find /app/web/115/* -type f -size -5M -delete"); //删除小文件





echo shell_exec("pkill fake115uploader");


   echo shell_exec("find /app/web/115/* -type f -size -5M -delete"); //删除小文件
   
 

//删除.aria2残留文件   echo shell_exec("find /usr/share/nginx/kodexplorer/aria2c/temp -name '*.aria2' | xargs rm");

//暂时禁掉上传谷歌网盘   echo shell_exec("/usr/bin/rclone copy /usr/share/nginx/kodexplorer/aria2c/temp ysf2020:Temp --transfers=5 -P --contimeout 5h --local-no-check-updated --size-only --transfers=3 --config=/usr/share/nginx/kodexplorer/rclone.conf >> rclone.log 2>&1");
//暂时禁掉上传谷歌网盘   echo shell_exec("/usr/bin/rclone copy /usr/share/nginx/kodexplorer/aria2c/temp ysf2020:Temp --transfers=5 -P --contimeout 5h --local-no-check-updated --size-only --transfers=3 --config=/usr/share/nginx/kodexplorer/rclone.conf >> rclone1.log 2>&1");

 //  echo shell_exec("sleep 5");
 
 //  echo shell_exec("pkill -9 v2ray");
  // echo shell_exec("v2ray -config /usr/share/nginx/kodexplorer/v2rayheroku1.json");

      $num=0;    //用来记录目录下的文件个数
   $dirname='./115'; //要遍历的目录名字
   $dir_handle=opendir($dirname);

   while($file=readdir($dir_handle))
   {
   	 if($file!="."&&$file!="..")
   	 {
   	 	$dirFile=$dirname."/".$file;
   	 	if($num++%2==0)    //隔行换色
   	 		$bgcolor="#ffffff";
   	 	else 
   	 		$bgcolor="#cccccc";

   	 }
   }
 echo $num;    
 closedir($dir_handle);
   
if($num > 0) {
    echo shell_exec("curl https://362227.top/fake115uploader.json > /app/web/data/fake115uploader.json");
    echo shell_exec("/app/web/data/fake115uploader -retry 5 -e -c 2214093215491948252 -u /app/web/115/* >> '上传115.txt' 2>&1"); //上传“手机备份”文件夹
    echo shell_exec("/app/web/data/fake115uploader -retry 5 -e -c 2214093215491948252 -m /app/web/115/* >> '上传115.txt' 2>&1"); //上传“手机备份”文件夹
    echo shell_exec("/app/web/data/proxychains /app/web/data/fake115uploader -retry 5 -e -c 2214093215491948252 -u /app/web/115/* >> '上传115.txt' 2>&1"); //上传“手机备份”文件夹
    echo shell_exec("/app/web/data/proxychains /app/web/data/fake115uploader -retry 5 -e -c 2214093215491948252 -m /app/web/115/* >> '上传115.txt' 2>&1"); //上传“手机备份”文件夹 
}  











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
