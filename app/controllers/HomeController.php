<?php

namespace App\Controllers;
if (empty(PATH_ROOT)) {
  die('bad request!');
}
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

}
