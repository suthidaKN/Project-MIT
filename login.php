<?php session_start();?>
<?php
 include('connection_connect.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
 
</head>
<style>
  p1 {
    font-weight: 200;
    text-align: center;
    font-size: 45px;
    font-family: 'Sriracha', cursive;
    color: #7302E4;
    
  }
  p2{
    text-align: center;
    font-size: 20px;
    color: #fff;
  }
  @keyframes shine {
    0% {
      background-position-x: -500%;
    }
    100% {
      background-position-x: 500%;
    }
  }
  form.example input[type=text] {
          padding: 12px;
          font-size: 17px;
          border: none;
          width: 75%;
          background: #FEF5FF;
          border-radius: 15px;
          
      }
      form.example input[type=password] {
          padding: 12px;
          font-size: 17px;
          border: none;
          width: 75%;
          background: #FEF5FF;
          border-radius: 15px;
      }
  
      form.example button {
          width: 10%;
          padding: 10px;
          background: #9122F3;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;
      }
      
  
      form.example button:hover {
          background: #950BDA;
      }
  
      form.example::after {
          content: "";
          clear: both;
          display: table;
      }
      .row:after {
          content: "";
          display: table;
          clear: both;
      }

      .column {
          float: left;
          width: 40%;
      }
 
      .box{
          
          padding: 20px;
          text-align: center;
      }
</style>
<body style="font-family: 'Prompt', sans-serif;  background-image: linear-gradient(#ccccff,#e5ccff);">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #9933ff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./indexHead.php">
      <img src="./images/logo 23.png" style="width: 80px; height: 80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./indexSearch.php">ค้นหาเตียง</a>  
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="./BeforeRegis.php">ลงทะเบียน</a>  
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./BeforeLogin.php">เข้าสู่ระบบ</a>  
        </li>
      </ul>
    </div>
  </div>
</nav>
   

      <div style="background-image: linear-gradient(#ccccff,#cc99ff);background-repeat: no-repeat; background-size: 100% 80%px;">
    
    <div style="height: 600px;">
      <br><br><br><br><br>
        <div style="text-align: center;">
    

<form  name="formlogin" action="checklogin.php" method="POST" id="login" class="example">
  <p1>เข้าสู่ระบบสำหรับหน่วยงาน</p1><br><br>

          <div class="row">
     <div class="column">
      <div class="box" style="text-align: end;">
          <p2>ชื่อผู้ใช้ </p2><br><br>
          <br> <p2>รหัสผ่าน </p2>
          </div>
        </div>
     <div class="column">
      <div class="box" style="text-align: start;">
            <input type="text"  name="username" required placeholder="Username" required minlength="3"/><br><br>
            <input type="password" name="password" required placeholder="Password" required minlength="6" /><br><br>
          </div>
        </div>
        </div>
      
            <div class="form-group">
            <br> <a class="btn btn-default" style="width: 10%;
          padding: 10px;
          background: #9122F3;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;" href="./BeforeLogin.php">ยกเลิก</a>
            <button type="submit" class="btn btn-default" style="width: 10%;
          padding: 10px;
          background: #9122F3;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;" id="btn">
            <span class="glyphicon glyphicon-log-in"></span>
             เข้าสู่ระบบ </button></div>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
      
      </form>

      </div>
</div>
  </div>
        <footer class="text-center text-lg-start text-light"style="background-color: #9933ff">
          <div class="container p-4">
            <div class="row" >
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Member</h4>
                <h6>Pheeraya   Pechsangkoon       6220500695</h6>
                <h6>Nattawat   Sripatpiriyakul           6220502108</h6>
                <h6>Weerawut   Srikasem    6220502183</h6>
                <h6>Siripattha Pinyosamosorn      6220503350</h6>
                <h6>Suthida    Khrueanak          6220504798</h6>
              </div>
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Thanks</h4>
                <h6>คณะวิศวกรรมศาสตร์ กำแพงแสน</h6>
                <h6>ภาควิชาวิศวกรรมคอมพิวเตอร์</h6>
                <h6>ปีการศึกษา 2564</h6>
                <h6>ภาคปลาย</h6>
                
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



  
