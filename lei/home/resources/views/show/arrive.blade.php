<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
			<a href="{{URL('/')}}" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
			    <input type="text" name="car" placeholder="请填写您到达学校的交通工具" id="car"/>
		   </div>
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" name="map" placeholder="请选择您目的地的站点位置" id="map"/>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" name="start" placeholder="请填写您的出发时间" id="start"/>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" name="end" placeholder="请选择您的预计到达时间" id="end"/>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <input type="text" name="keep" placeholder="请选择是否有人陪同" id="keep"/>
		        </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" name="num" placeholder="请填写您的陪同人数" id="num" />
			</li>
		</ul>
		<div class="step-btn">
			    <a href="{{URL('into')}}">上一步</a>
				<a href="{{URL('check')}}" id="day">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
      <script type="text/javascript" src="js/zhangming.js"></script>
	</body>
</html>
<script>
    $(function(){
        $('#day').click(function(){
            var car=$('#car').val();
            var map=$('#map').val();
            var start=$('#start').val();
            var end=$('#end').val();
            var keep=$('#keep').val();
            var num=$('#num').val();

            var data= {
                'car': car,
                'map': map,
                'start': start,
                'end': end,
                'keep': keep,
                'num':num
            };
			var url="http://www.study.com/lei/admin/public/school?callback=?";
			getjson(url,data);
        })
    })
</script>
