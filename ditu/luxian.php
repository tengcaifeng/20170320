<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html {width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
        #allmap{height:500px;width:100%;}
        #r-result,#r-result table{width:100%;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G"></script>
    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <title>根据起终点名称驾车导航</title>
</head>
<body>
<div id="allmap"></div>
<div id="driving_way">
        起点：<input type="text" name="start1" id="start1" value="">
        终点：<input type="text" name="end1" id="end1" value="">
        <select>
            <option value="0">最少时间</option>
            <option value="1">最短距离</option>
            <option value="2">避开高速</option>
        </select>
        <input type="button" id="result1" value="查询"/>
</div>
<div id="r-result"></div>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(104.000285, 30.586164), 11);
    //三种驾车策略：最少时间，最短距离，避开高速
    var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
    $("#result1").click(function(){
        map.clearOverlays();
        var i=$("#driving_way select").val();
        var start1 = $("#driving_way #start1").val();
        var end1 = $("#driving_way #end1").val();
        search(start1,end1,routePolicy[i]);
        function search(start1,end1,route){
            var driving = new BMap.DrivingRoute(map, {renderOptions:{map: map, autoViewport: true},policy: route});
            driving.search(start1,end1);
        }
    });
</script>
