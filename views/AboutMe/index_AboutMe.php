<!DOCTYPE html>
<html lang="en">
<head>
    <title>ค้นหาเตียง</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
 
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
        height: 400px;
        border-radius: 50px;   
        text-align: start; 
    }
    .box:hover{background: #b0b0ff; color: #fff;}

    
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
    p1{
        color: #cc0066;
        font-weight: 500;
        font-size: 20px;
        font-family: cursive;
        position: relative;;
    }
    p2{
        color: #009900;
        font-weight: 500;
        font-size: 20px;
        font-family: cursive;
        position: relative;;
    }
    p3{
        color: #FFE019;
        font-weight: 500;
        font-size: 20px;
        font-family: cursive;
        position: relative;;
    }
    p4{
        color: #FF8B17;
        font-weight: 500;
        font-size: 20px;
        font-family: cursive;
        position: relative;;
    }
    p5 {
    font-size: 30px;
    color: #3F0069;
  }
    


</style>
</head>
<body>
    <div style="background-image: linear-gradient(#ccccff,#cc99ff); background-repeat: no-repeat; background-size: 100% 80%px; text-align: center;">
        <div class="container-fluid" >
            <br>  
        
            <center>
            <br><p5><?php echo "ข้อมูลของฉัน";?></p5><br>
            <a class="btn btn-default" style="background-color: #ff0000; color: #fff" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>เพิ่มสถานที่</a>
 
            <div class="column">
                    <div class="box">
                    <a class="btn btn-default" style="background-color: #4400FF; color: #fff" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>แก้ไขข้อมูล</a><br>
                        <?php echo "user : $document->user";?> <br>
                        <?php echo "password : $document->pass";?> <br>
                        <?php echo "name: $document->offName";?> <br>
                        <?php echo "position : $document->offPos";?> <br>
                    </div>
                </div>
                <br><p5><?php echo "ข้อมูลสถานที่ของฉัน";?></p5><br>
                <div class="column">
                    <div class="box">
                    <a class="btn btn-default" style="background-color: #0051FF; color: #fff" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>แก้ไข</a>
                    <a class="btn btn-default" style="background-color: #00FF80; color: #fff" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>ลบ</a><br>
 
                        <?php echo "user : $document->user";?> <br>
                        <?php echo "password : $document->pass";?> <br>
                        <?php echo "name: $document->offName";?> <br>
                        <?php echo "position : $document->offPos";?> <br>
                    </div>
                </div>
                
            <br><br><br><br><br><br>
            
            </center>

        </div>
    </div>
</body>
</html>