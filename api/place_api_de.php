
<?php
$ak = 'Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G';
$query = '电影院';
$location = '30,103';
$url = "http://api.map.baidu.com/place/v2/search?query={$query}&page_size=10&page_num=0&scope=2&location={$location}&radius=20&output=json&ak={$ak}";
$temp = file_get_contents($url);
$content =json_decode($temp,true)['results'];
$data = $content;
var_dump($data);

