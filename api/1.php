<?php

function curl_file_get_contents($durl){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $durl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
    $r = curl_exec($ch);
    curl_close($ch);
    return $r;
}
//将内容进行UNICODE编码，编码后的内容格式：\u56fe\u7247 （原始：图片）
function unicode_encode($name)
{
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2)
    {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0)
        {    // 两个字节的文字
            $str .= '\u'.base_convert(ord($c), 10, 16).base_convert(ord($c2), 10, 16);
        }
        else
        {
            $str .= $c2;
        }
    }
    return $str;
}

// 将UNICODE编码后的内容进行解码，编码后的内容格式：\u56fe\u7247 （原始：图片）
function unicode_decode($name)
{
    // 转换编码，将Unicode编码转换成可以浏览的utf-8编码
    $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';
    preg_match_all($pattern, $name, $matches);
    if (!empty($matches))
    {
        $name = '';
        for ($j = 0; $j < count($matches[0]); $j++)
        {
            $str = $matches[0][$j];
            if (strpos($str, '\\u') === 0)
            {
                $code = base_convert(substr($str, 2, 2), 16, 10);
                $code2 = base_convert(substr($str, 4), 16, 10);
                $c = chr($code).chr($code2);
                $c = iconv('UCS-2', 'UTF-8', $c);
                $name .= $c;
            }
            else
            {
                $name .= $str;
            }
        }
    }
    return $name;
}


$query = '酒店';
$location = '30.5886520000,103.9952550000';
$radius = '2000';
$output = 'json';
$scope = '2';
$ak = 'Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G';
/*$url = "http://api.map.baidu.com/place/v2/search?query={$query}&location={$location}&radius={$radius}&ak={$ak}";*/
$url = "http://api.map.baidu.com/place/v2/search?query={$query}&location={$location}&radius={$radius}&output={$output}&ak={$ak}";


$temp = file_get_contents($url);
$data = json_decode($temp);
var_dump($data);