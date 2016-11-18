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
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="{{URL('ask')}}" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" name="name" id="name"></textarea>
			</div>
			</div>
			<div class="step-btn">
				<a href="{{URL('ask')}}" class="ta-center db" id="last">提交</a>
			</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript" src="js/zhangming.js"></script>
		</body>
</html>
<script>
	$(function(){
		$('#last').click(function(){
			var name=$('#name').val();

			var data= {
				'name':name,
			};
			var url="http://www.study.com/lei/admin/public/asker?callback=?";
			getjson(url,data);
		})
	})
</script>
