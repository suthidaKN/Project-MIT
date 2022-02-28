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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<style>
  p1 {
    font-weight: 200;
    text-align: center;
    font-size: 50px;
    font-family: 'Sriracha', cursive;
    color: #7302E4;
    
  }
  p2{
    text-align: center;
    font-size: 50px;
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
          padding: 10px;
          font-size: 17px;
          border: none;
          width: 30%;
          background: #FEF5FF;
          border-radius: 15px;
      }
      form.example input[type=password] {
          padding: 10px;
          font-size: 17px;
          border: none;
          width: 30%;
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
</style>
<body style="font-family: 'Prompt', sans-serif;  background-image: linear-gradient(#ccccff,#e5ccff);">
      <div style="background-image: linear-gradient(#ccccff,#cc99ff);background-repeat: no-repeat; background-size: 100% 80%px;">
    <div style="height: 600px;">
      <br><br><br><br><br><br><br>
        <div style="text-align: center;">
        <p1>คุณต้องการลบ <p2><?php echo $location->nameLocation; ?></p2> ออกจากระบบหรือไม่? </p1><br><br><br>
        <form method="get" action="" class="example" >
        <div class="form-group">
          <input type="hidden" name="controller" value="AboutMe"/>
          <input type="hidden" name="ID" value="<?php echo $location->id_location; ?>"/>
          <button  type="submit" name="action" value="index">ยกเลิก</button>
          <button type="submit" name="action" value="delete">ตกลง</button>
      </div>
    </form>

      </div>
</div>
  </div>
</body>   

</html>



  
