<?php

namespace App\Http\Controllers;

use DB;
use memcache;
use App\Http\Requests;
use App\Http\Controllers\Controller;
header("content-type:text/html;charset=utf-8");

class UserController extends Controller
{
    //用户中心
    public function center()
    {
        return view('User/user-center');
    }
    //个人信息
    public function info()
    {
//        $mem=new Memcache;
//        $mem->connect("127.0.0.1",11211);
//        $re =  $mem->get('data');
//        print_R($re);die;
        return  view('user/user-info');
    }
    //宿舍预定
   public function into()
   {
       return view('user/dorm-book');
   }
    //报到单
   public function check()
   {
        $url="http://www.study.com/lei/admin/public/talk";
       //设置抓取的url
       $html=file_get_contents($url);
       $res=json_decode($html,true);
//       print_r($res);die;

       return view('user/reportCard',['res'=>$res]);
   }
}