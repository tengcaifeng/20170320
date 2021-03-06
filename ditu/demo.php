
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="百度地图地点搜索和鼠标点击地点获取经纬度，这些都是地图比较基本和实用的代码，其中还包括了根据用户IP进行地图的显示、改变地图上的鼠标样式、启用滚轮缩放" />
    <meta name="keywords" content="百度地图,地点搜索,获取经纬度,改变地图鼠标样式,启用滚轮缩放" />
    <title>百度地图API地点搜索-获取经纬度DEMO</title>

    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2"></script>

    <style type="text/css">
        *{ font-family: "微软雅黑";}
        #where,#lonlat,#lonlat2{ width:300px; height:30px; font-size:24px; color:blue;}
        #but{ width:100px; height:36px; font-size:20px;}
    </style>

</head>

<body>
<div>
    <h1>点击地图获取经纬度</h1><hr />
    <br />
    <form action="" method="post">
        <h2>
            <div style=" margin:auto;width:400px;height:300px;border:2px solid gray; margin-bottom:50px;" id="container"></div>
            <h3 style="color: red;">介绍：输入地点然后点击“地图查找”搜索，再点击地图地点获取相应经纬度</h3>
            <label >输入地点：</label>
            <input id="where" name="where" type="text" placeholder="请输入地址">
            <input id="but" type="button" value="地图查找" onClick="sear(document.getElementById('where').value);" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            经度：<input id="lonlat" name="lonlat" type="number" maxlength="10">
            纬度：<input id="lonlat2" name="lonlat2" type="number" maxlength="9">
        </h2>
    </form>
    <h3></h3>
</div>

</body>
</html>


<script type="text/javascript">

    var map = new BMap.Map("container");
    map.setDefaultCursor("crosshair");

    map.enableScrollWheelZoom();
    var point = new BMap.Point(103.9952550000,30.5886520000);
    map.centerAndZoom(point, 13);
    var gc = new BMap.Geocoder();

    map.addControl(new BMap.NavigationControl());
    map.addControl(new BMap.OverviewMapControl());
    map.addControl(new BMap.ScaleControl());
    map.addControl(new BMap.MapTypeControl());
    map.addControl(new BMap.CopyrightControl());

    var marker = new BMap.Marker(point);
    map.addOverlay(marker);

    marker.addEventListener("click", function(e)
    {
        document.getElementById("lonlat").value = e.point.lng;/*纬度*/
        document.getElementById("lonlat2").value =e.point.lat;/*经度*/

    });


    marker.enableDragging();

    marker.addEventListener("dragend",function(e)
    {
        gc.getLocation(e.point, function(rs)
        {
            showLocationInfo(e.point, rs);
        });
    });


    function showLocationInfo(pt, rs)
    {
        var opts = {  width : 250, height: 150, title : "当前位置" } ;
        var addComp = rs.addressComponents;
        var addr = "当前位置：" + addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber + "<br/>";
        addr += "纬度: " + pt.lat + ", " + "经度：" + pt.lng;
        var infoWindow = new BMap.InfoWindow(addr, opts);
        marker.openInfoWindow(infoWindow);
    }

    map.addEventListener("click", function(e)
    {
        document.getElementById("lonlat").value = e.point.lng;
        document.getElementById("lonlat2").value = e.point.lat;
    });


    var traffic = new BMap.TrafficLayer();
    map.addTileLayer(traffic);


    function iploac(result)
    {
        var cityName = result.name;
    }

    var myCity = new BMap.LocalCity();
    myCity.get(iploac);

    function sear(result)
    {
        var local = new BMap.LocalSearch(map, {renderOptions:{map: map} });
        local.search(result);
    }

</script>
