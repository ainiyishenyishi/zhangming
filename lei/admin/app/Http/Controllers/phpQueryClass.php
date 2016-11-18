<?php
namespace App\Http\Controllers;

use DB;

class phpQuery{
    //查询
    public function look($table)
    {
        $arr=DB::table($table)->get();
        return json_encode($arr);
    }
    //添加
    public function adds($table,$data)
    {
        $res=DB::table($table)->insert($data);
        return json_encode($res);
    }
    //删除
    public function del($table,$id)
    {
        $res=DB::table($table)->where($id)->delete();
        return json_encode($res);
    }
}