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

shell_exec("rm -rf /app/web/vimeodl1/*.part"); //删除临时文件

echo shell_exec("/app/web/data/BaiduPCS-Go login -cookies='XFT=T7BdQ2kj9qaOHLNQBzLXecEDq0NSMR1/cFI9Pg7+cP4=; XFCS=A0BAA1D3C3AFF60D8A9501F61A5316EB2F44DC96D5D069E28D965E876B51558D; BAIDUID_BFESS=1FAD127BAC0642BD179AE9232E9D3EAC:FG=1; __yjs_duid=1_b83edfa36c48d34c5d422654ad9291ff1632462458498; BAIDUID=EB8C0978CD2A3182C0C963B26A4F83BC:FG=1; BDUSS=zBnQnprSmR3c0xvSDh1Wk5vT3pkMmpSN2tTTlc4R2g1dUJKS2pKUnhpSnVGM1poRVFBQUFBJCQAAAAAABAAAAEAAAD2Tdr6REO088rlMjAxOQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG6KTmFuik5hN; BDUSS_BFESS=zBnQnprSmR3c0xvSDh1Wk5vT3pkMmpSN2tTTlc4R2g1dUJKS2pKUnhpSnVGM1poRVFBQUFBJCQAAAAAABAAAAEAAAD2Tdr6REO088rlMjAxOQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG6KTmFuik5hN; pan_login_way=1; csrfToken=Q7ezNP5m-MPzubHlXKXZKmR0; STOKEN=a035eb4833e11aabcfaf438a90d977308679fbe717aa1381ff4a276541884cbe; ZD_ENTRY=empty; PANPSC=6330118974698879948:HSTAF2XekfrDfJxofQvIR8/yqoAddd3nU4bHmv7k1lQb6OtHeDgTZITtPba1v5pWKB+Q1NY39EqaV1QHy3lx2+uwJgkIjG1NcDLxProYXAAu/GN14ZZ7XobjAuQ0lbzSIpBwzouoN4Fjy4bwAz5jQiHq5mg/cPBDsGdcW9T0tiRm65hzsZIwfARwtfBixKqXMKjxtxPUcwo='
");
echo shell_exec("/app/web/data/BaiduPCS-Go config set -pcs_addr c4.pcs.baidu.com");
echo shell_exec("/app/web/data/BaiduPCS-Go config set -max_upload_parallel 99");



//百度网盘

//echo shell_exec("/app/web/data/BaiduPCS-Go config set -proxy=127.0.0.1:8100");
echo shell_exec("/app/web/data/BaiduPCS-Go config set -pcs_addr c4.pcs.baidu.com");
echo shell_exec("/app/web/data/BaiduPCS-Go upload /app/web/vimeodl1/* /files --retry 14 > /app/web/vimeodl1上传百度网盘.txt");

//删除文件
//echo shell_exec("rm -rf /app/web/vimeodl1/*");

//移动到115文件夹，准备上传115网盘
echo shell_exec("mv /app/web/vimeodl1/* /app/web/115");




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
