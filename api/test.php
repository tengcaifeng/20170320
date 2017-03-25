<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 16:33
 */

function curl_file_get_contents($durl){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $durl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}

$ak = "Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G";
$url = "http://api.map.baidu.com/direction/v2/transit?origin=40.056878,116.30815&destination=31.222965,121.505821&ak=Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G";

$temp = curl_file_get_contents($url);
var_dump($temp);