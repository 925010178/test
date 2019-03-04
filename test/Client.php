<?php
/**
 * Created by PhpStorm.
 * User: 92501
 * Date: 2019/3/4
 * Time: 22:33
 */
namespace MyGreeter;
ini_set('date.timezone','Asia/Shanghai');

class Client{
    public function getGreet(){
        $hours=date('H');
        if($hours>=0 && $hours<12){
            echo 'Good morning';
        }elseif($hours>=12 && $hours<18){
            echo 'Good afternoon';
        }else{
            echo 'Good evening';
        }
    }
}
$Client=new \MyGreeter\Client();
$Client->getGreet();

/*
 *实在想不出来说点什么，测试很简单
 * */
