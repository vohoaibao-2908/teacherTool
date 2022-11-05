<?php

$routes[''] = 'dashboard';
$routes['default_controller'] = 'dashboard';


// Quản lý
$routes['quan-ly'] = 'dashboard/quan_ly';
$routes['quan-ly/khoa-hoc'] = 'dashboard/khoa_hoc';
$routes['quan-ly/hoc-ky'] = 'dashboard/hoc_ky';
$routes['quan-ly/mon-hoc'] = 'dashboard/mon_hoc';
$routes['quan-ly/loai-lop'] = 'dashboard/loai_lop';
$routes['quan-ly/diem'] = 'dashboard/diem';



// Lớp học
$routes['lop-hoc'] = 'dashboard/lop_hoc';
$routes['lop-hoc/lop-dang-day'] = 'dashboard/lop_dang_day';
$routes['lop-hoc/lop-da-day'] = 'dashboard/lop_da_day';


// Sinh viên
$routes['sinh-vien'] = 'dashboard/sinh_vien';
$routes['sinh-vien/sinh-vien-gioi'] = 'dashboard/sv_gioi';
$routes['sinh-vien/sinh-vien-yeu'] = 'dashboard/sv_yeu';



// Tiện ích

$routes['tien-ich'] = 'dashboard/tien_ich';
$routes['tien-ich/thanh-ngu'] = 'dashboard/thanh_ngu';
$routes['tien-ich/profile'] = 'dashboard/profile';


$routes['tien-ich/downloads'] = 'dashboard/downloads';
$routes['logout'] = 'dashboard/logout';



// Liên kết

$routes['lien-ket'] = 'dashboard/links';
$routes['lien-ket/khac'] = 'dashboard/links_others';
$routes['lien-ket/giang-day'] = 'dashboard/links_giang_day';
