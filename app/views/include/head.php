<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?> | Fpoly</title>
  <!-- <link href="https://ap.poly.edu.vn/theme/student_v2/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> -->
  <link rel="shortcut icon" href="<?= BASE_URL('assets/images/favicon.ico') ?>" />
  <link href="<?= BASE_URL('assets/theme/vendors/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />
  <link href="<?= BASE_URL('assets/theme/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />

  <?php
  if ($target == "dashboard") { ?>
    <link href="<?= BASE_URL('assets/theme/css/skins/header/base/light.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= BASE_URL('assets/theme/css/skins/header/menu/light.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= BASE_URL('assets/theme/css/skins/brand/light.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= BASE_URL('assets/theme/css/skins/aside/light.css') ?>" rel="stylesheet" type="text/css" />

  <?php } elseif ($target == "auth") { ?>
    <link href="<?= BASE_URL('assets/theme/css/auth.css') ?>" rel="stylesheet" type="text/css" />
  <?php };
  $array = explode("/", $content);
  $cssFile = $array[count($array) - 1];
  if (file_exists("assets/css/" . $cssFile . ".css")) {
  ?>
    <link rel="stylesheet" href="<?= BASE_URL('assets/css/' . $cssFile . '.css') ?>">
  <?php
  }
  ?>

  <link href="<?= BASE_URL('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />


  <!-- <link href="https://ap.poly.edu.vn/theme/student_v2/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" /> -->

  <!-- <link href="https://ap.poly.edu.vn/css/popup.css" id="theme" rel="stylesheet" /> -->


  <style>
    #show-newsletter-student {
      max-height: 60vh !important;
      overflow: auto;
      overflow-x: hidden;
    }

    #show-newsletter-student::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      background-color: #f5f5f5;
    }

    #show-newsletter-student::-webkit-scrollbar {
      width: 1px;
      background-color: #f5f5f5;
    }

    #show-newsletter-student::-webkit-scrollbar-thumb {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      background-color: #ede6e6;
    }
  </style>
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right
kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed
kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">