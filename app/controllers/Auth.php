<?php

class Auth extends Controller
{

  public $data = array();
  public $model_home;



  public function __construct()
  {
    # code...
    $this->data['target'] = 'auth';
    $this->model_home = $this->model('AuthModel');
    $this->data = array_merge($this->data, $this->model_home->data);
  }

  public function login()
  {
    # code...
    $this->data['content'] = 'auth/login';
    $this->data['page_title'] = 'Đăng nhập';
    $this->render('layouts/auth', $this->data);
  }

  public function register()
  {
    # code...
    $this->data['content'] = 'auth/register';
    $this->data['page_title'] = 'Đăng ký';
    $this->render('layouts/auth', $this->data);
  }
}
