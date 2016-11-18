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
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
				<a href="index.html" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
							<span class="book-tit delay">推迟报到类型</span>
							<select name="find" class="delayinput" id="find">
								<option class="checked">事假</option>
								<option>病假</option>
								<option>服兵役</option>
							</select>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" name="uname" placeholder="请填写您的姓名" class="delayinput" id="uname"/>
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" name="num" placeholder="请填写您的考生号" class="delayinput" id="num"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" name="collect" placeholder="请填写您所在的学院" class="delayinput" id="collect"/>
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" name="major" placeholder="请填写您的专业" class="delayinput" id="major"/>
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" name="card" placeholder="请填写您的身份证号码" class="delayinput" id="card"/>
								</li>
								<li>
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="ctime" placeholder="请填选择" class="delayinput" id="ctime"/>
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" name="content" id="content"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="step-btn">
					<a href="{{URL('entrance')}}" class="ta-center db" id="test">提交</a>
			</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript" src="js/zhangming.js"></script>
		</body>
    <script>
        $(function(){
            $('#test').click(function(){
                var find=$('#find').val();
                var uname=$('#uname').val();
                var num=$("#num").val();
                var collect=$("#collect").val();
                var major=$("#major").val();
                var card=$("#card").val();
                var ctime=$("#ctime").val();
                var content=$("#content").val();

                var data= {
                    'find': find,
                    'uname': uname,
                    'num':num,
                    'collect':collect,
                    'major': major,
                    'card': card,
                    'ctime': ctime,
                    'content':content,
                };
				var url="http://www.study.com/lei/admin/public/push?callback=?";
				getjson(url,data);
            })
        })
    </script>
