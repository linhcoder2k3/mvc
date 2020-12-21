<?php 
namespace Core\config;

/**
* 
*/
class Database
{
    /**
     * Khai báo biến kết nối
     * @var [type]
     */
    public $link;

    public function __construct()
    {
        $this->link = mysqli_connect($_SERVER['DB_HOSTNAME'],$_SERVER['DB_USERNAME'],$_SERVER['DB_PASSWORD'],$_SERVER['DB_NAME']) or die ("<h1 style='text-align: center; color : red; font-weight: bold'> Kết nối database thất bại! </h1>");
        
        mysqli_set_charset($this->link,"utf8");
    }
   
    public function query($sql)
    {
       return mysqli_query($this->link, $sql);
    }
    
    public function input($value)
    {
        return mysqli_real_escape_string($this->link,xss_clean($value));
    }
    
    function numRows($sql)
    {
        return mysqli_num_rows($this->query($sql));
    }

    public function getRow($sql)
    {
        return mysqli_fetch_assoc($this->query($sql));
    }
    
}

?>