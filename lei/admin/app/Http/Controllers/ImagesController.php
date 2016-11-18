<?php
namespace App\Http\Controllers;

header("content-type:text/html;charset=utf-8");

use DB;
use App\libs\querys;
use Symfony\Component\Translation\Dumper\QtFileDumper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Redis;

class ImagesController extends Controller
{
    //查询图片
    public function images()
    {
       $data=querys::look('lunbo');
        //print_r($data);die;
        return $data;
    }
    //校园简介
    public function introduce(Request $request)
    {
        $data=querys::look('news');
        //print_r($data);die;
        return $data;
    }
    //校园资讯
    public function news()
    {
        $data=querys::look('zixun');
        return $data;
    }
    //八个按钮
    public function happy(){
       $data=querys::look('happy');
        return $data;
    }
     //个人信息
    public function people()
    {

        $res=$_GET['callback'];//接收值
         $data = $_GET;
        unset($data['callback']);
        unset($data['_']);

        $re=querys::adds('old',$data);
          echo  $res.'('.json_encode($re).')';
    }
    //宿舍预订
    public function dorm()
    {
      $row=$_GET['callback'];
        $data=$_GET;
//        print_r($data);die;
       unset($data['callback']);
       unset($data['_']);
        $qu=$data['qu'];
        $num=$data['num'];
        $find=$data['find'];
        $home=$data['home'];
        $bed=$data['bed'];
        //获取最新添加数据的id开始
     $res=DB::table('shen')->insertGetId([
         'qu'=>$qu,
         'num'=>$num,
         'find'=>$find,
         'home'=>$home,
         'bed'=>$bed,
     ]);
        $result=DB::table('old')->where('id','=',$res)->update(['sid'=>$res]);
//获取最新添加数据的id结束
        if($result){
            echo $row.'('.json_encode($res).')';
        }
    }
    //抵校登记
    public function school()
    {
        $row=$_GET['callback'];
        $data=$_GET;
//        print_r($data);die;
        unset($data['callback']);
        unset($data['_']);

          $car=$data['car'];
          $map=$data['map'];
          $start=$data['start'];
          $end=$data['end'];
          $keep=$data['keep'];
          $num=$data['num'];
        //获取刚刚插入的id开始
        $res=DB::table('deng')->insertGetId([
            'car'=>$car,
            'map'=>$map,
            'start'=>$start,
            'end'=>$end,
            'keep'=>$keep,
             'num'=>$num,
        ]);
        $result=DB::table('old')->where('id','=',$res)->update(['did'=>$res]);
        //获取刚刚插入的id结束
        if($result){
            echo $row.'('.json_encode($res).')';
        }
    }
    //绿色通道
    public function street()
    {
        $row=$_GET['callback'];
        $data=$_GET;
//        print_r($data);die;
        unset($data['callback']);
        unset($data['_']);
        $res=querys::adds('street',$data);
        if($res){
            echo $row.'('.json_encode($res).')';
        }
    }
    //推迟报到
    public function push()
    {
        $row=$_GET['callback'];
        $data=$_GET;
//        print_r($data);die;
        unset($data['callback']);
        unset($data['_']);
        $res=querys::adds('push',$data);
        if($res){
            echo $row.'('.json_encode($res).')';
        }
    }
    //报到单
    public function talk()
    {
      $data=DB::select('select * from old,shen,push where old.sid=shen.sid=push.tid order by old.id desc limit 1');
//        print_r($data);die;
        return json_encode($data);
    }
       //我要提问
      public function asker()
      {
          $row=$_GET['callback'];
          $data=$_GET;
//        print_r($data);die;
          unset($data['callback']);
          unset($data['_']);
          $res=querys::adds('ask',$data);
          if($res){
              echo $row.'('.json_encode($res).')';

          }
      }
    //我的提问
    public function question()
    {
        $data=querys::look('ask');
        return $data;
    }
    //资讯解答
    public function solve()
    {
        $data=querys::look('ask');
        return $data;
    }
}
