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
    $this->data['content'] = 'dashboard/index';
    $this->data['page_title'] = 'Trang chủ';
    $this->render('layouts/dashboard', $this->data);
  }

  // Quản lý

  public function khoa_hoc()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/khoa_hoc';
    $this->data['parent'] = 'Quản lý';
    $this->data['page_title'] = 'Khóa học';


    $this->render('layouts/dashboard', $this->data);
  }


  public function hoc_ky()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/hoc_ky';
    $this->data['parent'] = 'Quản lý';

    $this->data['page_title'] = 'Học kỳ';

    $this->render('layouts/dashboard', $this->data);
  }

  public function mon_hoc()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/mon_hoc';
    $this->data['parent'] = 'Quản lý';

    $this->data['page_title'] = 'Môn học';

    $this->render('layouts/dashboard', $this->data);
  }

  public function loai_lop()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/loai_lop';
    $this->data['parent'] = 'Quản lý';

    $this->data['page_title'] = 'Loại lớp';
    $this->render('layouts/dashboard', $this->data);
  }


  public function diem()
  {
    # code...
    $this->data['content'] = 'dashboard/manager/diem';
    $this->data['parent'] = 'Quản lý';

    $this->data['page_title'] = 'Điểm';
    $this->render('layouts/dashboard', $this->data);
  }






  // Tiện ích

  public function thanh_ngu()
  {
    # code...
    $this->data['content'] = 'dashboard/extensions/thanh_ngu';
    $this->data['parent'] = 'Tiện ích';

    $this->data['page_title'] = 'Thành ngữ';
    $this->render('layouts/dashboard', $this->data);
  }

  public function profile()
  {
    # code...
    $this->data['content'] = 'dashboard/extensions/profile';
    $this->data['parent'] = 'Tiện ích';

    $this->data['page_title'] = 'Profile';
    $this->render('layouts/dashboard', $this->data);
  }




  // Lớp học



  public function lop_dang_day()
  {
    # code...
    $this->data['content'] = 'dashboard/classroom/lop-dang-day';
    $this->data['parent'] = 'Lớp học';

    $this->data['page_title'] = 'Lớp đang dạy';
    $this->render('layouts/dashboard', $this->data);
  }


  public function lop_da_day()
  {
    # code...
    $this->data['content'] = 'dashboard/classroom/lop-da-day';
    $this->data['parent'] = 'Lớp học';

    $this->data['page_title'] = 'Lớp đã dạy';
    $this->render('layouts/dashboard', $this->data);
  }



  // Sinh viên

  public function sv_gioi()
  {
    # code...
    $this->data['content'] = 'dashboard/sinhvien/sv_gioi';
    $this->data['parent'] = 'Sinh viên';

    $this->data['page_title'] = 'Sinh viên giỏi';
    $this->render('layouts/dashboard', $this->data);
  }

  public function sv_yeu()
  {
    # code...
    $this->data['content'] = 'dashboard/sinhvien/sv_yeu';
    $this->data['parent'] = 'Sinh viên';

    $this->data['page_title'] = 'Sinh viên yếu';
    $this->render('layouts/dashboard', $this->data);
  }


  // Liên kết

  public function links()
  {
    # code...
    $this->data['content'] = 'dashboard/links';
    $this->data['page_title'] = 'Liên kết';
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
