<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$ak = 'Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G';
$query = $_POST['query'];
/*$lonlat2 = '30';
$lonlat = '103';*/
$lonlat2 = $_POST['lonlat2'];/*纬度*/
$lonlat = $_POST['lonlat'];
$location = "$lonlat2,$lonlat";
$url = "http://api.map.baidu.com/place/v2/search?query={$query}&page_size=10&page_num=0&scope=2&location={$location}&radius=1000&output=json&ak={$ak}";
$temp = file_get_contents($url);
$content =json_decode($temp,true);
$data = $content['results'];
?>

<ol>
    <?php
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
    ?>
</ol>


</body>
</html>