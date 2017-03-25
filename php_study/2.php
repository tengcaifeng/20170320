<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/21
 * Time: 10:41
 */
require './1.php';
$code=$_GET['code'];
/*demo::fun($code);*/
$demo = new demo();
$demo->fun($code);