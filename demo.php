<?php
/**
 * Created by PhpStorm.
 * User: baiyangxinxin
 * Date: 2019-02-19
 * Time: 20:11
 */

require_once './vendor/autoload.php';

$data = [
    [
        'name' => 'baiyang', 'age' => 28
    ],
    [
        'name' => '白银', 'age' => 29,
    ],
    [
        'name' => '黄金', 'age' => 28,
    ],
    [
        'name' => 'hello', 'age' => 39,
    ],
];

fp($data);
echo '<hr>';
d($data);
echo '<hr>';
bd($data);
echo '<hr>';
dd($data); //die ,下边不再执行了
echo '<hr>';
bdd($data);