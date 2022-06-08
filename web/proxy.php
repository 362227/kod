<?php
date_default_timezone_set('PRC');
$url=$_GET["url"]; 
$ref=$_GET["ref"]; 
$token=$_GET["token"];
$name=$_GET["name"];




$result = shell_exec("curl -L $url --Referer $ref"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);

if (strlen($result) > 6 && $content === "this video cannot be played here") {
    
$ch = curl_init();

$result = shell_exec("curl -L $url --Referer http://www.jonasakerlund.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
    if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.roguefilms.co.uk"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
         if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://christianbreslauer.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://boyinthecastle.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer http://www.305films.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.company3.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://electrictheatre.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://contrast.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://sesler.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.els.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://moxiepictures.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.lutimedia.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://dugdale.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://the-quarry.co.uk"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.finalcut-edit.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://therapystudios.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer http://www.chrisroebuck.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://blackdogfilms.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.tenthree.co.uk"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.oneshotmike.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://modernpost.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer http://friendlondon.tv"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer http://trimediting.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://makemakeentertainment.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://nomadedit.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://lockteditorial.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://editorjon.co.uk"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://believemedia.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.schemeengine.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://visionfilmco.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.kaisaul.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer https://www.echoartists.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer http://www.jonasakerlund.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
        
$result = shell_exec("curl -L $url --Referer http://www.jonasakerlund.com"); 
$content= preg_replace('/[\s\S]*this video cannot be played here[\s\S]*/','this video cannot be played here', $result);
        if ($content === "this video cannot be played here") {
   
        
$result = shell_exec("curl -L $url --Referer http://www.jonasakerlund.com"); 
echo $result;

}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}
else {
echo $result;
}
}

else {
echo $result;
}

}

else if  (strlen($result) > 6) {echo $result;}

else  {


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.heroku.com/apps/'.$name.'/dynos');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');


$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Accept: application/vnd.heroku+json; version=3';
$headers[] = 'Authorization: Bearer '.$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
file_put_contents('log.txt', $result);




$result = shell_exec("curl -L $url --Referer $ref"); 
echo $result;
}
