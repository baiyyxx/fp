<?php
/**
 * Created by PhpStorm.
 * User: baiyangxinxin
 * Date: 2019-02-19
 * Time: 19:58
 */

require_once './vendor/autoload.php';
if (!function_exists('fp')){
    /**
     * 自定义打印输出
     * @param mixed $data
     * @return void
     */
    function fp($data){
        echo '<pre>';
        var_dump($data);
    }
}

if (!function_exists('bd')){
    function bd($data){
        d($data);
    }
}

if (!function_exists('bdd')){
    function bdd($data){
        d($data);
    }
}