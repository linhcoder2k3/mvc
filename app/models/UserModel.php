<?php 
namespace App\models;
class UserModel extends BaseModel
{
    protected $table;

    public function __construct() {
        parent::__construct();
        $this->table  = 'users';
    }

    function newUser(string $email, string $username, string $password)
    {
        return $this->DB->query("INSERT INTO `{$this->table}`(`email`, `username`, `password`) VALUES ('{$email}','{$username}','{$password}')");
    }

}
