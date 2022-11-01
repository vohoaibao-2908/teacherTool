<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

$DB = new Database;



function myFilter($var)
{
  return ($var == NULL && $var == FALSE && $var == "");
}


function error($e)
{
  # code...
  if (file_exists('app/views/error/' .  $e . '.php')) {
    require_once 'app/views/error/' . $e . '.php';
  }
}
