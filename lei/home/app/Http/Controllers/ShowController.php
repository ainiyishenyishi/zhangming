<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
header("content-type:text/html;charset=utf-8");

class ShowController extends Controller
{
    /**
     *前台首页页面
     */
    public function index()
    {
        //轮播
        $url = "http://www.study.com/lei/admin/public/";
        /*$html=file_get_contents($url);
        $res=json_decode($html);*/

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
        $res = json_decode($data, true);
        //print_r($res);die;
        //新闻
        $url1 = "http://www.study.com/lei/admin/public/introduce";
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data1 = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //print_r($data);die;
        $res1 = json_decode($data1, true);
//       print_r($res1);die;
        //资讯
        $url2 = "http://www.study.com/lei/admin/public/news";
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url2);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data2 = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //print_r($data);die;
        $row = json_decode($data2, true);

       return view("show/lists",['res'=>$res,'res1'=>$res1,'row'=>$row]);

    }
        public function delay()
                             {
        return view('show/delay');
    }
    //入学须知
    public function must()
    {
        return view('show/must-know');
    }
    //通知公告
    public function notice()
    {
        return view('show/notice');
    }
    //资料下载
    public function data()
    {
        return view('show/data');
    }
    //咨询帮助
    public function ask()
    {
        return view('show/ask');
    }

}