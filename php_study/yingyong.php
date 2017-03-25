<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/22
 * Time: 17:34
 */
$a = 5;
$b = $a;
$a = 6;
echo $b;
echo $a;

$c = 5;
$d = &$c;
$d = 6;
echo $c;
echo $d;