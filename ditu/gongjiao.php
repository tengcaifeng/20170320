<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #l-map{height:300px;width:100%;}
        #r-result,#r-result table{width:100%;font-size:12px;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G"></script>

    <title>展示公交换乘的结果面板</title>
</head>
<body>
<div id="l-map"></div>
<div id="gj_way">
    起点：<input type="text" name="start2" id="start2" value="">
    终点：<input type="text" name="end2" id="end2" value="">
    <input type="button" id="result2" value="查询">
</div>
<div id="r-result2"></div>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("l-map");
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);

    var transit = new BMap.TransitRoute(map, {
        renderOptions: {map: map, panel: "r-result2"}
    });
    transit.search("武侯立交", "成都信息工程大学");
</script>
