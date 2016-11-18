<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>展示</title>
</head>
<body>
<div id="div"></div>
</body>
</html>
<script src="jquery-1.8.3.min.js"></script>
<div id="div"></div>
<script type="text/javascript">
    $.ajax({
        url:"http://www.study.com/laravel-test/public/showlist",
        dataType:'jsonp',
        data:'get',
        jsonp:'callback',
        success:function(msg) {
            //alert(msg);
            var str='<h1 align=center>展示页面</h1><table border=1 align=center><tr><th>编号</th><th>名称</th><th>作者</th><th>简介</th></tr>'
            for(var i=0;i<msg.length;i++)
            {
                str+='<tr>'
                str+='<td>'+msg[i].b_id+'</td>'
                str+='<td>'+msg[i].b_name+'</td>'
                str+='<td>'+msg[i].b_actor+'</td>'
                str+='<td>'+msg[i].b_content+'</td>'
                str+='</tr>'
            }
            str+='</table>'
            $('#div').html(str)
        }

    });
</script>