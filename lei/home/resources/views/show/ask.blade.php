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
  <title>咨询帮助</title>
	<body class="bge">
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<ul class="ask-box">
			<li class="ask-item">
				<a href="{{URL('see')}}">
					  <i class="iconfont icon-question"></i>
				    <span class="ask-word">常见问题</span>
				    <span class="goin"><i class="iconfont icon-right"></i></span>
				</a>
			</li>
			<li class="ask-item">
				<a href="{{URL('question')}}">
					  <i class="iconfont icon-ask1"></i>
				    <span class="ask-word">咨询解答</span>
				    <span class="goin"><i class="iconfont icon-right"></i></span>
				</a>
			</li>
			<li class="ask-item">
				<a href="{{URL('asker')}}">
					  <i class="iconfont icon-ask"></i>
				    <span class="ask-word">我的提问</span>
				    <span class="goin"><i class="iconfont icon-right"></i></span>
				</a>
			</li>
			<li class="ask-item nobor">
				<a href="{{URL('need')}}">
					  <i class="iconfont icon-answer"></i>
				    <span class="ask-word">我要提问</span>
				    <span class="goin"><i class="iconfont icon-right"></i></span>
				</a>
			</li>
		</ul>
		<div class="footer">
    	<ul class="footer-page clearfix">
    		<li class="page-item">
    			<a href="{{URL('/')}}" class="active">
    				<i class="iconfont icon-index"></i>
    				<p>首页</p>
    			</a>
    		</li>
    		<li class="page-item">
    			<a href="{{URL('entrance')}}">
    				<i class="iconfont icon-computer"></i>
    				<p>自助入学</p>
    			</a>
    		</li>
    		<li class="page-item active">
    			<a href="{{URL('ask')}}">
    				<i class="iconfont icon-ask"></i>
    				<p>咨询帮助</p>
    			</a>
    		</li>
    		<li class="page-item">
    			<a href="{{URL('center')}}">
    				<i class="iconfont icon-person1"></i>
    				<p>个人中心</p>
    			</a>
    		</li>
    	</ul>
    </div>
	 <script src="js/jquery.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/basic.js"></script>
		<script src="js/rem.js"></script>	
	</body>
</html>
