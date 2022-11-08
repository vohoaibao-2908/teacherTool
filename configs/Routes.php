<?php

$routes[''] = 'dashboard';
$routes['default_controller'] = 'dashboard';


//Auth
$routes['login'] = 'auth/login';
$routes['register'] = 'auth/register';


// Quản lý
$routes['quan-ly/khoa-hoc'] = 'dashboard/khoa_hoc';
$routes['quan-ly/hoc-ky'] = 'dashboard/hoc_ky';
$routes['quan-ly/mon-hoc'] = 'dashboard/mon_hoc';
$routes['quan-ly/loai-lop'] = 'dashboard/loai_lop';
$routes['quan-ly/diem'] = 'dashboard/diem';



// Lớp học
$routes['lop-hoc/dang-day'] = 'dashboard/lop_dang_day';
$routes['lop-hoc/da-day'] = 'dashboard/lop_da_day';


// Sinh viên
$routes['sinh-vien/sinh-vien-gioi'] = 'dashboard/sv_gioi';
$routes['sinh-vien/sinh-vien-yeu'] = 'dashboard/sv_yeu';



// Tiện ích

$routes['tien-ich/thanh-ngu'] = 'dashboard/thanh_ngu';
$routes['tien-ich/profile'] = 'dashboard/profile';

$routes['logout'] = 'dashboard/logout';



// Liên kết

$routes['lien-ket'] = 'dashboard/links';
