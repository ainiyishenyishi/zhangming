<?php
namespace App\libs;
use DB;
class querys
{
   static public  function look($table){
       $arr=DB::table($table)->get();
       return json_encode($arr);
    }
    //添加
    public static function adds($table,$data){
        print_r($data);
        $res=DB::table($table)->insert($data);
        return json_encode($res);
    }
}