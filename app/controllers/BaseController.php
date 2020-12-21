<?php 
namespace App\Controllers;
use Core\helper\View;
if(empty(PATH_ROOT)) { die('bad request!'); }
class BaseController extends View
{
    public function __construct() {
       parent::__construct();
    }
    
    public function Render($file,$data= [])
    {
        $data['DB'] = $this->DB;
        $data['Session'] = $this->Session;
        $data['Date'] = $this->Date;
        echo $this->engine->render($file.'.php', $data);
    }
}
