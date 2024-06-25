<?php
ob_start();
session_start();
?>

<body>
  <?php

  include_once('model/database.php');
  include_once('view/element/header.php');
  include_once('controller/controller.php');
  include_once('view/element/footer.php');

  ?>
  <link href="public/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap -->
  <link href="public/css/font-awesome.min.css" rel="stylesheet"> <!-- icon -->
  <link rel="stylesheet" type="text/css" href="public/css/main.css"> <!-- css -->
  <link rel="stylesheet" type="text/css" href="public/css/dangnhap.css"> <!-- css -->
  <link rel="stylesheet" type="text/css" href="public/css/style.css"> <!-- css -->
  <link rel="stylesheet" href="public/css/materialdesignicons.min.css"> <!-- css icon -->
  <link rel="stylesheet" href="public/css/error.css"> <!-- css trang error -->
  <link href="public/css/animate.css" rel="stylesheet"> <!-- css tự động -->


  <script src="public/js/jquery.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/price-range.js"></script>
  <script src="public/js/main.js"></script>
  <script src="public/js/jquery.scrollUp.min.js"></script>

  <script src="webroot/js/js.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>