<?php

$url=$_GET["url"]; 


$result = shell_exec("curl -L $url" );
echo $result;
