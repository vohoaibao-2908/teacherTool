<?php require_once 'app/views/include/head.php'; ?>
<div class="wrapper">
  <?php require_once 'app/views/include/dashboard/header.php'; ?>
  <?php require_once 'app/views/include/dashboard/sidebar.php'; ?>
  <main class="page-content">
    <?php $this->render($content); ?>
  </main>
  <?php require_once 'app/views/include/dashboard/widget.php'; ?>
</div>
<?php require_once 'app/views/include/end.php'; ?>