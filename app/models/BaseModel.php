<?php 
namespace App\models;
use Core\config\AutoLoad;
class BaseModel extends AutoLoad
{
    public function __construct() {
       $this->init();
    }
}
