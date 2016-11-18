<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
header("content-type:text/html;charset=utf-8");

class StudyController extends Controller
{
    //自助入学
    public function entrance()
    {

     return view('study/entrance');
    }
    //到校路线
    public function street()
    {

        return view('study/route');
    }
    //常见问题
    public function see()
    {
      return view('study/commonquestion');
    }
    //资讯解答
    public function question()
    {
        $url="http://www.study.com/lei/admin/public/solve";
        //设置抓取的url
        $html=file_get_contents($url);
        $res=json_decode($html,true);
      return view('study/answer',['res'=>$res]);
    }
    //我的提问
    public function asker()
    {
        $url="http://www.study.com/lei/admin/public/question";
        //设置抓取的url
        $html=file_get_contents($url);
        $res=json_decode($html,true);
       // print_r($res);die;

      return view('study/myanswer',["res"=>$res]);
    }
    //我要提问
    public function need()
    {
      return view("study/tiwen");
    }

}