<?php 
namespace Core\helper;

/**
* 
*/
class Date
{
   
    public function new($setting = 'Y-m-d H:i:s')
    {
      return date($setting);
    }

    public function format($time)
    {
      return date("Y-m-d H:i:s", $time);
    }
    
}

?>