<?php 
namespace App\middlewares;
class AuthMiddleware extends BaseMiddleware
{
    public function isLogin() {
        if(empty($this->Session->get('isLogin'))){
            redirect('/auth/login'); exit();
        }
    }
}