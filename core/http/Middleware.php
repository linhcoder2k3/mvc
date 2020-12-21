<?php

namespace Core\Http;

/**
 * 
 * Class Middleware
 * 
 */
class Middleware
{
  public function loadMiddleware($arr)
  {
      foreach ($arr as $row) {
          $ex = explode('@',$row);
          if(empty($ex)){
             die('Middleware không hợp lệ, đinh dạng đúng: Class@function, Class là tên lớp, function là tên hàm');
          }
          $name = '\App\\middlewares\\'.$ex[0];
          $class = new $name;
          if(!method_exists($class , $ex[1]) ){
            die("Không tìm thấy hàm {$ex[1]} trong class {$ex[0]}");
          }
          call_user_func_array([$class, $ex[1]], []);
      }
  }
}
