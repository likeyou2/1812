<?php

namespace App\Http\Controllers\User;

use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    //
    public function user(){
        $arr = [
            'u_name' => '犬夜叉',
            'u_pwd' => '1qaz2wsx'
        ];
        $res = UserModel::insertGetId($arr);
        var_dump($res);	//打印结果
    }
    public function redisTest(){
        $res = Redis::get('name');
        //Redis::expire('name','60');
        var_dump($res);
    }
}
