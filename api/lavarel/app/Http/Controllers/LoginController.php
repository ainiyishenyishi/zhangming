<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
header("content-type:text/html;charset=utf-8");
//后台登录接口
class LoginController extends Controller
{

    public function login(Request $request){

        $name = $request->input('username');
        $pwd = $request->input('pwd');

//        echo $name;die;
        $arr=DB::table('yue')->where(array("uname"=>$name))->first();
        if( empty($arr) ){//判断用户名
            $code="0";
            $message="用户名不正确";
            $token="";
            $arr=array("code"=>$code,"message"=>$message,"token"=>$token);
            return json_encode($arr);
        }
        else{//判断密码
            $upwd = $arr->upwd;
            /*$utoken = $arr->utoken;*/
            if($upwd==$pwd) {
                $code = "200";
                $message = "密码正确";
                $token=md5($name);
                $request->session()->put('uToken', $token);
                $token1=$request->session()->get('uToken');
                $arr = array('code' => $code, 'message' => $message,"token"=>$token1);
                return json_encode($arr);
                /*$token=$_SESSION['uToken'];
                $utoken=$request->input('utoken');
                if($token!=$utoken){//判断token
                    $code = "200";
                    $message = "token错误";
                    $arr = array('code' => $code, 'message' => $message);
                    return json_encode($arr);
                }*/
            }else{
              $code="2";
              $message="密码输入不正确";
                $token="";
              $arr=array('code'=>$code,'message'=>$message,"token"=>$token);
                return json_encode($arr);
            }
        }
    }
}
