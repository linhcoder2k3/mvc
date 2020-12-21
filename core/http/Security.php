<?php

namespace Core\Http;

/**
 * 
 * Class Security
 * 
 */
class Security
{
    private $CSRF_Name;
    public function __construct() {
        $this->CSRF_Name = $_SERVER['CSRF_Name'] || 'CSRF_Token';
    }
    public function loadCSRF()
    {
        if (empty($_SESSION[$this->CSRF_Name])) {
            $this->newCSRF();
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $this->checkCSRF();
        }
    }
    public function checkCSRF()
    {
        $token = $_POST[$this->CSRF_Name];
        if(empty($token) || $token !== $_SESSION[$this->CSRF_Name]){
             die('Vui lòng xác thực CSRF Token!');
        }
    }
    public function newCSRF()
    {
       $_SESSION[$this->CSRF_Name] = md5(randomString(255));
    }
}
