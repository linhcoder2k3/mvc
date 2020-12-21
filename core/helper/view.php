<?php 
namespace Core\helper;
use Core\config\AutoLoad;
/**
* 
*/
class View extends AutoLoad
{

    public $engine;
    public function __construct()
    {
        $this->init();
        $foil = \Foil\Foil::boot([
            'folders' => [PATH_VIEW]
        ]);
        $this->engine =  $foil->engine();
    }
    
}

?>