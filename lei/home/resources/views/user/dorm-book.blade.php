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
  <title>宿舍预定</title>
	<body>
		<div class="header">
			<span>宿舍预定</span>
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
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
		    <span class="book-tit">校区</span>
		    <input type="text" name="school" placeholder="请选择你所在的校区" id="qu"/>
		    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">楼栋号</span>
		        <input type="text" name="num" placeholder="请填写您宿舍的楼栋号" id="num"/>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">宿舍类型</span>
		        <input type="text" name="find" placeholder="请填写您的宿舍类型" id="find"/>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">房间号</span>
		        <input type="text" name="home" placeholder="请选择您的房间号" id="home"/>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <input type="text" name="bed" placeholder="请选择您的床铺位置" id="bed" />
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			
		</ul>
		<div class="step-btn">
				<a href="{{URl('info')}}">上一步</a>
				<a href="{{URL('arrive')}}" id="first">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/rem.js"></script>	
      <script type="text/javascript" src="js/zhangming.js"></script>
	</body>
</html>
<script>
	$(function(){
		$('#first').click(function(){
			var qu=$('#qu').val();
			var num=$('#num').val();
			var find=$('#find').val();
			var home=$('#home').val();
			var bed=$('#bed').val();

			var data= {
				'qu': qu,
				'num': num,
				'find': find,
				'home': home,
				'bed': bed,
			};
			var url="http://www.study.com/lei/admin/public/dorm?callback=?";
			getjson(url,data);
		})
	})
</script>
