<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>搜索结果</title>
</head>
<body>
<?php
$ak = 'Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G';
$query = $_POST['query'];
/*$lat = '30';
$lng = '103';*/
$lat = $_POST['lat'];/*纬度*/
$lng = $_POST['lng'];
$location = "$lat,$lng";
$url = "http://api.map.baidu.com/place/v2/search?query={$query}&page_size=10&page_num=0&scope=2&location={$location}&radius=1000&output=json&ak={$ak}";
$temp = file_get_contents($url);
$content =json_decode($temp,true);
$data = $content['results'];
?>

<ol>
    <?php
    if(!empty($data)){
        foreach ($data as $k => $v){
            echo "<li>";
            echo "".$query."名字：".$v['name']."<br/>";
            echo "".$query."地址：".$v['address']."<br/>";
            if(isset($v['telephone'])){
                echo "".$query."电话：".$v['telephone']."<br/>";
            }
            if(isset($v['detail_info']['overall_rating'])){
                echo "总体评分：".$v['detail_info']['overall_rating']."<br/>";

            }
            echo "</li>";
        }
    }else{
        echo "附近没有".$query."";
    }

    ?>
</ol>


</body>
</html>