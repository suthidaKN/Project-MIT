<!DOCTYPE html>
<html lang="en">
<head>
    <title>แก้ไขข้อมูล</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#province").change(function(){
            var province_id=$(this).val();
            $.ajax({
                url:"provincexDistrictOnchange.php",
                method:"POST",
                data:{provinceID:province_id},
                success:function(data){
                    $("#district").html(data);
                }
            });
        });

    });
</script>
<style>
    @keyframes shine {
        0% {
            background-position-x: -500%;
        }
        100% {
            background-position-x: 500%;
        }
    }
    .column {
        width: 60%;
    }
 
    .box{
        background-color: #f6efff;
        padding: 30px;
        margin: 60px;
        height: 450px;
        border-radius: 50px;   
        text-align: start; 
    }
    .box:hover{background: #b0b0ff; color: #fff;}

    .column1 {
        width: 35%;
    }
 
    .box1{
        background-color: #320074;
        color: #f6efff;
        padding: 30px;
        margin: 20px;
        height: 200px;
        border-radius: 30px;   
        text-align: start; 
    }

    h2{
        font-size: 30;
    }
    h3{
        font-size: 18;
    }
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: none;
        width: 80%;
        background: #FEF5FF;
        border-radius: 10px;
    }

    form.example button {
        width: 20%;
        padding: 10px;
        background: #9122F3;
        color: white;
        border: none;
        font-size: 17px;
        border-left: none;
        cursor: pointer;
        border-radius: 10px;
    }

    form.example button:hover {
        background: #950BDA;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    p1 {
    font-weight: 200;
    text-align: center;
    font-size: 45px;
    font-family: 'Sriracha', cursive;
    color: #6A0088;
    
  }
  p2{
    text-align: center;
    font-size: 20px;
    color: #21005E;
    text-align: start;
  }
  form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: none;
          width: 40%;
          background: #f6efff; 
          color:#9122F3;
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
</head>
<body>
    <div style="background-image: linear-gradient(#ccccff,#cc99ff); background-repeat: no-repeat; background-size: 100% 80%px; text-align: center;">
        <div class="container-fluid" >
            

        <div style="text-align: center;">
          
          <form class="example" action="" method="GET" >
  
          <br><br>
  <br>
  <div class="form-group">
  <p1>แก้ไขข้อมูล</p1><br><br>

  <p2>ชื่อ </p2>
  <input type="text" name="offName" value="<?php echo $document->offName?>"><br><br>
  <p2>ตำแหน่ง</p2>
  <input type="text" name="offPos" value="<?php echo $document->offPos?>"><br><br>
 
  <input type="hidden" name="offID" value="<?php echo $document->offID ?>"/>

  </div>
      <div class="form-group">
          <input type="hidden" name="controller" value="AboutMe"/>
          <button type="submit" name="action" value="index">ยกเลิก</button>
          <button type="submit" name="action" value="updateMeConfrim">บันทึก</button>
      </div>
  
  </form>
  
  
        </div>
             
                
            <br><br><br><br><br><br>

        </div>
    </div>
</body>
</html>