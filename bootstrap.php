<?php

define('_DIR_ROOT', __DIR__);


if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
  $base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
} else {
  $base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/duan_1/';
  // $base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
}


function BASE_URL($url)
{
  global $base_url;
  return $base_url . $url;
}




if (!empty($_SERVER['PATH_INFO'])) {
  $url = $_SERVER['PATH_INFO'];
} else {
  $url = '/';
}

$route = array_filter(explode('/', $url));
$route  = array_values($route);


function route($index)
{
  global $route;
  if (isset($route[$index])) {

    return $route[$index];
  } else {
    return false;
  }
}




require_once  'configs/Database.php';
require_once  'configs/Function.php';
require_once  'configs/Routes.php';
require_once  'core/Route.php';
require_once  'core/Controller.php';

require_once  'core/Model.php';
require_once 'app/App.php';
