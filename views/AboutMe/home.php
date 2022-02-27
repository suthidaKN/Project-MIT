<!DOCTYPE html>
<html lang="en">
<head>
<title>Me-Tiiang</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <style>
p1 {
  font-weight: 700;
  text-align: center;
  font-size: 150px;
  font-family: 'Sriracha', cursive;
  background: linear-gradient(#0000cc,#b266ff);
  letter-spacing: 5px;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  background-repeat: no-repeat;
  background-size: 80%;
  animation: shine 5s linear infinite;
  position: relative;
}
@keyframes shine {
  0% {
    background-position-x: -500%;
  }
  100% {
    background-position-x: 500%;
  }
}
</style>
</head>
<body>
<div style="background-image: linear-gradient(#ccccff,#cc99ff);background-repeat: no-repeat; background-size: 100% 80%px;">
<?php
$user = $_GET['user'];
$pass = $_GET['password'];
echo "key === $user,$pass" ;
?>





        <form class="example" action="indexLogin.php" method="GET" onSubmit="JavaScript:return fncSubmit();">
        <input type="hidden" name="user" value="<?php echo $_GET['user'];?>" />
        <input type="hidden" name="password" value="<?php echo $_GET['password']; ?>" />
<div class="form-group">
    <a class="btn btn-default" style="width: 10%;
          padding: 10px;
          background: #9122F3;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;" href="./BeforeLogin.php">ยกเลิก</a>
        <button type="submit" name="action" value="Save">เข้าสู่ระบบ</button>
    </div><br><br><br><br><br>
    
</form>






        <div style="height: 800px;">
          <br><br><br><br><br>
            <div style="height: 400px;  background-color: rgba(255, 255, 255, 0.2); text-align: center;">
          <br><br><br>
          <p1>ME - TiiANG</p1>
        </div>
        </div>
</div>
</body>
</html>