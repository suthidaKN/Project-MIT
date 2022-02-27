<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'Register';
    $action = 'success';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body style="font-family: 'Prompt', sans-serif;  background-image: linear-gradient(#ccccff,#e5ccff);">
<?php

       echo '<script>
       setTimeout(function() {
        swal({
            title: "สมัครสมาชิกสำเร็จ",
            text: "กรุณารอระบบ Login ใน Workshop ต่อไป",
            type: "success"
        }, function() {
            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
        });
      }, 50);
  </script>';
?>
<body style="font-family: 'Prompt', sans-serif;  background-image: linear-gradient(#ccccff,#e5ccff);">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #9933ff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./indexLogin.php">
      <img src="./images/logo 23.png" style="width: 80px; height: 80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<div style="background-color: #9933ff; text-align: center;" class="text-light">
        <?php
            echo "file:CheckRegister : controller=".$controller.",action= ".$action;
        ?>
      </div>
      <div style="height: 600px;">
      
        <?php require_once("routes.php") ?>
        </div>
        <footer class="text-center text-lg-start text-light"style="background-color: #9933ff">
          <div class="container p-4">
            <div class="row" >
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Member</h4>
                <h6>Suthida Khrueanak              6220504798</h6>
              </div>
            
            </div>
          </div>
          <div class="text-center p-3 text-dark" style="background-color: #e5ccff">
            © 2021 Copyright:
            <a class="text-dark" href="http://158.108.207.4/db21/db21_007/?controller=pages&action=home">db21_007</a>
          </div>
        </footer>
</body>   
</html>