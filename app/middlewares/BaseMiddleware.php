<?php 
namespace App\middlewares;
use Core\config\AutoLoad;
if(empty(PATH_ROOT)) { die('bad request!'); }
class BaseMiddleware extends AutoLoad
{
    public function __construct() {
        $this->init();
    }
}
