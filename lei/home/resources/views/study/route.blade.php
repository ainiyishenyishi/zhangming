<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/slick.css" />
	<link rel="stylesheet" type="text/css" href="css/base.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
	<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#l-map{height:300px;width:100%;}
		#r-result {width:100%; font-size:14px;line-height:20px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7NpPaA7DffqIsssZyLchtY60043RHIoI"></script>
	<title>到校路线</title>

<body style="background: #eee;">
<div class="header">
	<span>到校路线</span>
	<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
</div>
<div class="banner">
	<img src="img/self-report.png">
</div>
<div class="contain">
	<div class="route-box">
		<div class="content-top">
			<ul>
				<li>
					<span class="route-icon"><i class="iconfont icon-map"></i></span>
								<span class="route-word">输入搜索地方后出结果：
								<input type="text" id="qi" placeholder="请输入起点位置" style="width:300px;height:50px;">=>
								<input type="text" id="shi" placeholder="请输入终点位置" style="width:300px;height:50px;">
								<button style="width:100px;height:50px;background:red;" id="click" >查询</button>

								</span>
				</li>
				<div id="l-map"></div>
				<div id="r-result"></div>
			</ul>
		</div>

	</div>
</div>

<script src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/basic.js"></script>
<script type="text/javascript" src="js/rem.js"></script>
</body>

</html>
<script type="text/javascript">
	$("#click").click(function(){
		var qi=$("#qi").val()
		var shi=$("#shi").val()
		var map = new BMap.Map("l-map");
		// 百度地图API功能
		map.centerAndZoom(new BMap.Point(116.404, 39.915), 10);
		map.enableScrollWheelZoom();

		var transit = new BMap.TransitRoute(map, {renderOptions: {map: map},onSearchComplete: function(result){
			if (transit.getStatus() == BMAP_STATUS_SUCCESS){
				var firstPlan = result.getPlan(0);
				// 绘制步行线路
				for (var i = 0; i < firstPlan.getNumRoutes(); i++){
					var walk = firstPlan.getRoute(i);
					if (walk.getDistance(false) > 0){
						// 步行线路有可能为0
						map.addOverlay(new BMap.Polyline(walk.getPath(), {lineColor: "green"}));
					}
				}
				// 绘制公交线路
				for (i = 0; i < firstPlan.getNumLines(); i++){
					var line = firstPlan.getLine(i);
					map.addOverlay(new BMap.Polyline(line.getPath()));
				}
				// 输出方案信息
				var s = [];
				for (i = 0; i < result.getNumPlans(); i++){
					s.push((i + 1) + ". " + result.getPlan(i).getDescription(false));
				}
				document.getElementById("r-result").innerHTML = s.join("<br/>");
			}
		}
		});
		transit.search(qi,shi);
	})


</script>

