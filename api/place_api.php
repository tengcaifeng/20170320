<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$ak = 'Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G';
$query = '饭店';
$location = '30.5886520000,103.9952550000';
$url = "http://api.map.baidu.com/place/v2/search?query={$query}&page_size=10&page_num=0&scope=2&location={$location}&radius=2000&output=json&ak={$ak}";
$temp = file_get_contents($url);
$content =json_decode($temp,true);
$data = $content['results'];
?>

<ol>
    <?php
        foreach ($data as $k => $v){
            echo "<li>";
            echo "酒店名字：".$v['name']."<br/>";
            echo "酒店地址：".$v['address']."<br/>";
            echo "酒店电话：".$v['telephone']."<br/>";
            echo "总体评分：".$v['detail_info']['overall_rating']."<br/>";
            echo "</li>";
        }
    ?>
</ol>


</body>
</html>