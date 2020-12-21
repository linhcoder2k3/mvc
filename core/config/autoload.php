<?php
namespace Core\config;
use Core\config\Database;
use Core\helper\Date;
// AutoLoad
class AutoLoad{
    
    protected $DB;
    protected $Date;
    public function init() {
        $this->Date = new Date();
        $this->DB = new Database();
    }

}