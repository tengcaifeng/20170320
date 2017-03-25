
<?php
$ak = 'Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G';
$query = '饭店';
$location = '30.5886520000,103.9952550000';
$url = "http://api.map.baidu.com/place/v2/search?query={$query}&page_size=10&page_num=0&scope=2&location={$location}&radius=2000&output=json&ak={$ak}";
$temp = file_get_contents($url);
$content =json_decode($temp,true,512);
$data = $content;
var_dump($data);

