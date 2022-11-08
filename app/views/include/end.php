<script>
  var KTAppOptions = {
    colors: {
      state: {
        brand: "#5d78ff",
        dark: "#282a3c",
        light: "#ffffff",
        primary: "#5867dd",
        success: "#34bfa3",
        info: "#36a3f7",
        warning: "#ffb822",
        danger: "#fd3995",
      },
      base: {
        label: ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
        shape: ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"],
      },
    },
  };
</script>



<script src="<?= BASE_URL('assets/theme/vendors/vendors.bundle.js') ?>" type="text/javascript"></script>
<script src="<?= BASE_URL('assets/theme/js/scripts.bundle.js') ?>" type="text/javascript"></script>

<?php
if ($target == "dashboard") { ?>
  <script src="<?= BASE_URL('assets/theme/vendors/datatables.bundle.js"') ?>" type="text/javascript"></script>
  <script src="<?= BASE_URL('assets/js/script.js"') ?>" type="text/javascript"></script>

  <script>
    $('.otp-term-modal').click();
    $('.is-valid-phone-all-modal').click();
    $('.show-noti-student').click();
  </script>

<?php } elseif ($target == "auth") { ?>
  <link href="<?= BASE_URL('assets/theme/js/auth.js') ?>" rel="stylesheet" type="text/css" />
<?php } ?>




</body>

</html>