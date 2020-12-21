<?php 
namespace App\middlewares;
class AuthMiddleware extends BaseMiddleware
{
    public function isLogin() {
        if(empty($_SESSION['isLogin'])){
            redirect('/auth/login'); exit();
        }
    }
}