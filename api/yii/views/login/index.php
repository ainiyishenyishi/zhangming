<?php
header("content-type:text/html;charset=utf-8");
?>
<title><h2>登录界面</h2></title>
<form action="index.php?r=login/info" method="post">
    <table>
        <input type="hidden" name="_csrf" value="<?php echo Yii::$app->request->csrfToken; ?>"/>
      <tr>
       <td>用户名:</td>
      <td><input type="text" name="uname"></td>
      </tr>
     <tr>
      <td>密码:</td>
       <td><input type="password" name="upwd"></td>
     </tr>
      <tr><td><input type="submit" value="登录"></td></tr>
    </table>
</form>
