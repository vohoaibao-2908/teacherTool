<?php

class Page extends  Controller
{

  public $data = array();
  public $model_home;


  public function index()
  {
    # code...

    $this->data['content'] = 'pages/index';
    $this->render('layouts/page', $this->data);
  }
}
