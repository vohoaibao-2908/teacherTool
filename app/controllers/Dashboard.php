<?php

class Dashboard extends  Controller
{

  public $data = array();
  public $model_home;



  public function __construct()
  {
    # code...
  }

  public function index()
  {
    # code...
    header('location: quan-ly');
    $this->data['content'] = 'dashboard/index';
    $this->render('layouts/dashboard', $this->data);
  }







  // Quản lý
  public function quan_ly()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/index';
    $this->render('layouts/dashboard', $this->data);
  }
  public function khoa_hoc()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/khoa_hoc';
    $this->render('layouts/dashboard', $this->data);
  }


  public function hoc_ky()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/hoc_ky';
    $this->render('layouts/dashboard', $this->data);
  }

  public function mon_hoc()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/mon_hoc';
    $this->render('layouts/dashboard', $this->data);
  }

  public function loai_lop()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/loai_lop';
    $this->render('layouts/dashboard', $this->data);
  }


  public function diem()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/diem';
    $this->render('layouts/dashboard', $this->data);
  }






  // Tiện ích
  public function tien_ich()
  {
    # code...
    $this->data['content'] = 'dashboard/extensions/index';
    $this->render('layouts/dashboard', $this->data);
  }

  public function thanh_ngu()
  {
    # code...
    $this->data['content'] = 'dashboard/extensions/thanh_ngu';
    $this->render('layouts/dashboard', $this->data);
  }

  public function profile()
  {
    # code...
    $this->data['content'] = 'dashboard/extensions/profile';
    $this->render('layouts/dashboard', $this->data);
  }


  public function downloads()
  {
    # code...
    $this->data['content'] = 'dashboard/extensions/downloads';
    $this->render('layouts/dashboard', $this->data);
  }


  // Lớp học

  public function lop_hoc()
  {
    # code...
    $this->data['content'] = 'dashboard/classroom/index';
    $this->render('layouts/dashboard', $this->data);
  }


  public function lop_dang_day()
  {
    # code...
    $this->data['content'] = 'dashboard/classroom/lop-dang-day';
    $this->render('layouts/dashboard', $this->data);
  }


  public function lop_da_day()
  {
    # code...
    $this->data['content'] = 'dashboard/classroom/lop-da-day';
    $this->render('layouts/dashboard', $this->data);
  }



  // Sinh viên


  public function sinh_vien()
  {
    # code...
    $this->data['content'] = 'dashboard/student/index';
    $this->render('layouts/dashboard', $this->data);
  }


  public function sv_gioi()
  {
    # code...
    $this->data['content'] = 'dashboard/student/sv_gioi';
    $this->render('layouts/dashboard', $this->data);
  }

  public function sv_yeu()
  {
    # code...
    $this->data['content'] = 'dashboard/student/sv_yeu';
    $this->render('layouts/dashboard', $this->data);
  }





  // Liên kết

  public function links()
  {
    # code...
    $this->data['content'] = 'dashboard/links/index';
    $this->render('layouts/dashboard', $this->data);
  }

  public function links_giang_day()
  {
    # code...
    $this->data['content'] = 'dashboard/links/giang_day';
    $this->render('layouts/dashboard', $this->data);
  }

  public function links_other()
  {
    # code...
    $this->data['content'] = 'dashboard/links/other';
    $this->render('layouts/dashboard', $this->data);
  }



  // Other




  public function logout()
  {
    # code...
    session_start();
    session_destroy();
    exit();
  }
}
