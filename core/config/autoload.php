<?php
namespace Core\config;
use Core\config\Database;
use Core\helper\Session;
use Core\helper\Date;
// AutoLoad
class AutoLoad{
    
    protected $DB;
    protected $Session;
    protected $Date;
    public function init() {
        $this->Session = new Session();
        $this->Session->init();
        $this->Date = new Date();
        $this->DB = new Database();
    }

}