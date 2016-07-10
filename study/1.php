<?php
/**
 * Created by PhpStorm.
 * User: ljw
 * Date: 2016/1/24
 * Time: 22:33
 */

$num = 2;
echo var_dump($num);
echo gettype($num)."\r\n";
echo is_int($num)."\r\n";
echo is_integer($num)."\r\n";

$arr = array("abc",12,true);
echo var_dump($arr);
echo gettype($arr)."\r\n";
echo is_array($arr)."\r\n";

$str = "hello,world,java,php";
echo strpos($str, o)."\r\n";
print_r(explode(",",$str));

$arr2 = [];
for($i=0;$i<10;$i++){
    array_push($arr2,$i);
}
print_r($arr2);
