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
  <title>咨询解答</title>
	<body style="background: #eee;">
		<div class="header">
				<span>咨询解答</span>
				<a href="{{URL('ask')}}" class="back"><i class="iconfont icon-left"></i></a>
			</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="answer-box">
			<ul class="answer-content">
				@foreach($res as $val)
				<li class="answer-list">
					<h3 class="list-tit">{{$val['name']}}</h3>
				    <p class="list-txt">
                    {{$val['content']}}
				    </p>
				</li>
				@endforeach
			</ul>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
