<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>my_API</title>
    <style type="text/css">
        html {
            height: 100%
        }

        body {
            height: 100%;
            margin: 0px;
            padding: 0px
        }

        #container {
            width: 100%;
            height: 100%;
            margin:0 auto;
        }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Lim3MZ2qFNRKoNhgjXMQdEQLXOGwdH2G">
        //v2.0版本的引用方式：src="http://api.map.baidu.com/api?v=2.0&ak=您的密钥"
        //v1.4版本及以前版本的引用方式：src="http://api.map.baidu.com/api?v=1.4&key=您的密钥&callback=initialize"
    </script>
</head>

<body>
<div id="container"></div>
<script type="text/javascript">
    var map = new BMap.Map("container");          // 创建地图实例
    var point = new BMap.Point(103.995542, 30.591636);/*经度，纬度*/ // 创建点坐标
    map.centerAndZoom(point, 14);                 // 初始化地图，设置中心点坐标和地图级别

    map.enableScrollWheelZoom();                    //鼠标滚轮
    map.setDefaultCursor("crosshair");              //设置鼠标样式


    map.addControl(new BMap.NavigationControl());   //地图平移缩放控件，PC端默认位于地图左上方，它包含控制地图的平移和缩放的功能。移动端提供缩放控件，默认位于地图右下方。
    map.addControl(new BMap.OverviewMapControl());  //缩略地图控件，默认位于地图右下方，是一个可折叠的缩略地图。
    map.addControl(new BMap.ScaleControl());    //比例尺控件，默认位于地图左下方，显示地图的比例关系。
    map.addControl(new BMap.MapTypeControl());  //地图类型控件，默认位于地图右上方。
    //map.addControl(new BMap.CopyrightContro());  //版权控件，默认位于地图左下方。
    //map.addControl(new GeolocationControl());  //定位控件，针对移动端开发，默认位于地图左下方。


   /* map.addEventListener("click", function(e)
    {
        map.panTo(new BMap.Point(e.point.lng, e.point.lat));
    });*/
</script>
</body>
</html>