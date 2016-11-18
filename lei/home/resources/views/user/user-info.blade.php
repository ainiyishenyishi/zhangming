<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
	<base href="http://www.study.com/lei/home/public/">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="{{URL('info')}}" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
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
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="img/take-photo.png">
					<input type="file" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="name" placeholder="请输入姓名" id="name"/>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="email" placeholder="请填写您的个人邮箱地址" class="email" />
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="phone" placeholder="请填写您的个人手机号码" />
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="home" placeholder="请填写您的家庭主机号码" />
			</li>+
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="yin" placeholder="请填写您的家庭移动电话号码" />
			</li>
			<li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <input type="text" name="user" placeholder="请选择户口是否迁移" id="user"/>
		       </div>
			</li>
			<li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <input type="text" name="face" placeholder="请选择您的政治面貌" id="face"/>
		       </div>
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="jphone" placeholder="请输入姓名" />
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="jxin" placeholder="请填写您与联系人1的关系" />
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" name="address" placeholder="所在地地址" id="add"/>
			    {{--<span class="goin"><i class="iconfont icon-right"></i></span>--}}
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="zhi" placeholder="请填写您的详细地址" id="xiang"/>
			</li>
		</ul>
		<div class="step-btn">
				<a href="{{URL('into')}}" class="ta-center_db" id="id">下一步</a>
		</div>
  <script src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/basic.js"></script>	
  <script type="text/javascript" src="js/rem.js"></script>	
  <script type="text/javascript" src="js/zhangming.js"></script>
	</body>
</html>
<script>
	$(function(){
$('#id').click(function(){
	var gname=$('#name').val();
    var gemail=$('.email').val();
    var gphone=$("input[name='phone']").val();
    var ghome=$("input[name='home']").val();
    var gyin=$("input[name='yin']").val();
    var guser=$("input[name='user']").val();
	var gface=$("#face").val();
	var jhone=$("input[name='jhone']").val();
    var jxin=$("input[name='jxin']").val();
    var gzhi=$("#add").val();
    var gaddress=$("#xiang").val();
	var data= {
		'name': gname,
		'email': gemail,
		'phone': gphone,
		'user': guser,
		'face': gface,
		'home': ghome,
		'yin': gyin,
		'jhone': jhone,
		'jxin': jxin,
		'add': gzhi,
		'xiang': gaddress,
	};
	var url="http://www.study.com/lei/admin/public/people?callback=?";
	getjson(url,data);

    });
})

</script>
