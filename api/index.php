<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 14:50
 */

function http_post_data($url, $data) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($data))
    );
    ob_start();
    curl_exec($ch);
    $return_content = ob_get_contents();
    ob_end_clean();

    $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    return array($return_code, $return_content);
}

$origin = '30.5886520000,103.9952550000';
$destination = '30.6353530000,104.0053600000';
$output = 'json';
$tactics_incity = $_POST['tactics_incity'];
$ak = "Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G";
$url = "http://api.map.baidu.com/direction/v2/transit?origin={$origin}&destination={$destination}&$tactics_incity={$tactics_incity}&output={$output}&ak={$ak}";

$temp = file_get_contents($url);
$data = json_decode($temp,true);

/*$result = $data['result'];
$routes1 = $result['routes'];*/
$routes = $data['result']['routes'][2]['steps'];
var_dump($routes);