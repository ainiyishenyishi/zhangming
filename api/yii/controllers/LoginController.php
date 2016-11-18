<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
header("content-type:text/html;charset=utf-8");
class LoginController extends Controller
{
      public function actionAdds(){

          return $this->render('index');
      }
    public function actionInfo(){
        $requests=Yii::$app->request;
         $name=$requests->post('uname');
         $pwd=$requests->post('upwd');
        $token=md5($name);
        $url="http://www.study.com/api/lavarel/public/api?username={$name}&pwd={$pwd}";
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //print_r($data);die;
        $res=json_decode($data,true);
        //print_r($res);die;
        $tokens=$res['token'];
        if($token!=$tokens){
            exit("亲,用户名不存在!");
        }
        else{
            $this->redirect('index.php?r=login/lists');
        }
    }
    public function actionLists(){
        echo "登录成功!";
    }

}
