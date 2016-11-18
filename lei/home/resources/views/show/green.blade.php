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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="{{URL('/')}}" class="back"><i class="iconfont icon-left"></i></a>
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
							<span class="book-tit">申请类型</span>
							<select name="find" placeholder="请选择您的申请类型" id="find" class="ta-center">
								<option class="checked">缓交学费</option>
								<option>助学贷款</option>
								<option>免交学费</option>
							</select>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="uname" placeholder="请输入姓名" id="uname"/>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="nation" placeholder="请填写您的民族类别" id="nation"/>
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="phone" placeholder="请填写您的个人手机号码" id="phone" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="birth" placeholder="请填写您的出生日期" id="birth" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="card" placeholder="请填写您的身份证号码" id="card" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="touch" placeholder="请填写您的手机联系号码" id="touch" />
								</li>
								<li>
										<span class="book-tit">户籍类型</span>
										<input type="text" name="register" placeholder="请选择您的户籍类型" id="register" />

								</li>
								<li>

										<span class="book-tit">政治面貌</span>
										<input type="text" name="face" placeholder="请选择您的政治面貌" id="face"/>

								</li>
								<li>
										<span class="book-tit">居住地址</span>
										<input type="text" name="live" placeholder="请所在地地址" id="live"/>
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="detail" placeholder="请填写您的详细地址" id="detail"/>
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="family1" placeholder="请填写家庭成员1的姓名" class="house-input" id="family1" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relation1" placeholder="请填写您与家庭成员1的关系" class="house-input" id="relation1" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="unit1" placeholder="请填写家庭成员1的工作单位" class="house-input" id="unit1" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="come1" placeholder="请填写家庭成员1的年收入情况" class="house-input" id="come1" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="famliy2" placeholder="请填写家庭成员2的姓名" class="house-input" id="famliy2" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relation2" placeholder="请填写您与家庭成员2的关系" class="house-input" id="relation2" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="unit2" placeholder="请填写家庭成员2的工作单位" class="house-input" id="unit2" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="come2" placeholder="请填写家庭成员2的年收入情况" class="house-input" id="come2" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" name="content" id="content"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a href="{{URL('entrance')}}" class="ta-center db" id="lost">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript" src="js/zhangming.js"></script>
		</body>
</html>
<script>
    $(function(){
        $('#lost').click(function(){
            var find=$('#find').val();
            var uname=$('#uname').val();
            var nation=$("#nation").val();
            var phone=$("#phone").val();
            var birth=$("#birth").val();
            var card=$("#card").val();
            var touch=$("#touch").val();
            var register=$("#register").val();
            var face=$("#face").val();
            var live=$("#live").val();
            var detail=$("#detail").val();
            var family1=$("#family1").val();
            var relation1=$("#relation1").val();
            var unit1=$("#unit1").val();
            var come1=$("#come1").val();
            var famliy2=$("#famliy2").val();
            var relation2=$("#relation2").val();
            var unit2=$("#unit2").val();
            var come2=$("#come2").val();
            var content=$("#content").val();

            var data= {
                'find': find,
                'uname': uname,
                'nation': nation,
                'phone': phone,
                ' birth': birth,
                'card': card,
                'touch': touch,
                'register': register,
                'face': face,
                'live': live,
                'detail': detail,
                'family1': family1,
                'relation1': relation1,
                'unit1': unit1,
                'come1': come1,
                'famliy2':famliy2,
                'relation2': relation2,
                'unit2': unit2,
                'come2': come2,
                'content':content,
            };
			var url="http://www.study.com/lei/admin/public/street?callback=?";
			getjson(url,data);
        })
    })
</script>
