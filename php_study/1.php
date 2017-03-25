<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/21
 * Time: 10:41
 */
class demo{
    /*传入一个状态码，进行对比*/
  public function fun($code){
      if($code=="hi"){
          echo "你好";
      }else if($code=='sorry'){
          echo "对不起";
      }else{
          echo "没有这个翻译";
      }
  }
}