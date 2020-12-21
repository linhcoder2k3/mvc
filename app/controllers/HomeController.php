<?php

namespace App\Controllers;
class HomeController extends BaseController
{
  public $data;
  public $UserModel;

  function __construct()
  {
    parent::__construct();
    $this->data = [];
    $this->UserModel = new \App\models\UserModel();
  }

  public function index()
  {
    $this->data['title'] = 'Trang chủ';
    $this->UserModel->newUser('iamgffdsf','fdsfs','fadfs');
    return $this->Render('home', $this->data);
  }

  public function test(int $var = null)
  {
     echo $var;
  }
}
