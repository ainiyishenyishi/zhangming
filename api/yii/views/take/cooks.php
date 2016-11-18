<?php
header("content-type:text/html;charset=utf-8");
?>
<form action="index.php?r=take/info" method="post" enctype="multipart/form-data">
    <table>
        <input type="hidden" name="_csrf" value="<?php echo Yii::$app->request->csrfToken; ?>"/>
        <tr>
          <td>文件名:</td>
           <td><input type="file" name="photo" value=""></td>
        </tr>
        <tr><td><input type="submit" value="上传"></td></tr>
    </table>
</form>
