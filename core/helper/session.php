<?php 
namespace Core\helper;

/**
* 
*/
class Session
{
    /**
     * Khai báo biến kết nối
     * @var [type]
     */
    public function init()
    {
      @session_start();
    }
   
    public function set($name,$value)
    {
       return $_SESSION[$name] = $value;
    }

    public function get($name)
    {
       return isset($_SESSION[$name]) ? $_SESSION[$name] : '';
    }
    
}

?>