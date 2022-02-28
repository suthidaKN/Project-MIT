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
    font-family: 'Sriracha', cursive;
    color: #3F0069;
  }
  p6 {
    font-size: 40px;
    font-family: 'Sriracha', cursive;
    color: #3F0069;
  }
    


</style>
</head>
<body>
    <div style="background-image: linear-gradient(#ccccff,#cc99ff); background-repeat: no-repeat; background-size: 100% 80%px; text-align: center;">
        <div class="container-fluid" >
            <br>  
        
            <center>
            <br><p6><?php echo "ข้อมูลของฉัน";?></p6><br><br>
            <a class="btn btn-default" style="background-color: #F4FF5B; color: #2E3D46 ; border-radius: 30px; width:15% ;" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>เพิ่มสถานที่</a>
 
            <div class="column1">
                    <div class="box1">
                    <div style="text-align: end;">
                    <a class="btn btn-default" style="background-color:  #56C45F; color: #fff; border-radius: 15px; "href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>แก้ไขข้อมูล</a><br>
                    </div>
                        <?php echo "username : $document->user";?> <br>
                        <?php echo "password : $document->pass";?> <br>
                        <?php echo "name: $document->offName";?> <br>
                        <?php echo "position : $document->offPos";?> <br>
                    </div>
                </div>
               
              <?php if($test == 0) { ?>  
           <br><p5><?php echo "ยังไม่มีข้อมูลสถานที่ของคุณ";?></p5><br>
                    <br><a class="btn btn-default" style="background-color: #F4FF5B; color: #2E3D46 ; border-radius: 30px; width:15% ;" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>เพิ่มสถานที่</a>
       <?php }
        else { ?>
               <br><p5><?php echo "ข้อมูลสถานที่ของฉัน";?></p5><br>
                <?php foreach($tiiangList as $tiiang){?>
                <div class="column">
                    <div class="box">
                        <div style="text-align: end;">
                            <a class="btn btn-default" style="background-color: #56C45F; color: #fff; border-radius: 15px;" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>แก้ไขข้อมูล</a>
                            <a class="btn btn-default" style="background-color: #D63E3E; color: #fff; border-radius: 15px;" href=?controller=Tiiang&action=bedAll&<?php echo "key=red"?>>ลบข้อมูล</a>
                        </div>
                        <?php if($tiiang->provinceID =="1"){  echo "$tiiang->amphureName_th"; } ?>
                        <?php if($tiiang->provinceID!="1"){  echo "อำเภอ$tiiang->amphureName_th";} ?>
                        <?php if($tiiang->id_level=="1"){ ?> <p1><?php echo "$tiiang->name_level";?></p1><br> <?php } ?>
                        <?php if($tiiang->id_level=="2"){ ?> <p2><?php echo "$tiiang->name_level";?></p2><br> <?php } ?>
                        <?php if($tiiang->id_level=="3"){ ?> <p3><?php echo "$tiiang->name_level";?></p3><br> <?php } ?>
                        <?php if($tiiang->id_level=="4"){ ?> <p4><?php echo "$tiiang->name_level";?></p4><br><?php } ?>
                        <h2><?php echo "$tiiang->nameLocation";?></h2><br>
                
                        <?php if($tiiang->id_status=="1"){ ?>
                            <img src="./images/accept.png" style="width: 30px; height: 30px;"/>
                            <?php echo "$tiiang->name_status";?>
                            <img src="./images/hospital-bed (1).png" style="width: 30px; height: 30px;"/>
                            <?php 
                            settype($tiiang->quatity,"integer");
                            settype($tiiang->use,"integer");
                            $sum = $tiiang->quatity-$tiiang->use;
                            echo "มีเตียง : $sum";?><br><br>
                           <h3><?php echo "ช่องทางการติดต่อ : ";?><br></h3>
                            <?php if(!is_null($tiiang->tel )){  echo "tel : $tiiang->tel";} ?><br>
                            <?php if(!is_null($tiiang->facebook )){  echo "Facebook : $tiiang->facebook"; } ?><br>
                            <?php if(!is_null($tiiang->web )){  echo "Website : $tiiang->web"; } ?><br>
                            <?php if(!is_null($tiiang->line)){  echo "Line : $tiiang->line"; }?><br>
                            <?php echo "ที่อยู่ : $tiiang->address";?>
                            <?php if($tiiang->provinceID =="1"){  echo "$tiiang->amphureName_th"; } ?>
                            <?php if($tiiang->provinceID!="1"){  echo "อำเภอ$tiiang->amphureName_th";} ?>
                            <?php echo "จังหวัด$tiiang->provinceName_th";?> <br>
                        <?php } ?>
                        <?php if($tiiang->id_status =="2"){  ?> 
                            <img src="./images/cancel.png" style="width: 30px; height: 30px;"/>
                            <?php echo "$tiiang->name_status";?><br>
                        <?php } ?><br>
        
                        <?php echo "อัพเดตล่าสุด : $tiiang->date";?> <br>
                         
                    </div>
                </div>
<?php
            }
        }
            ?>
        
                  
 
                
             
                
            <br><br><br><br><br><br>
            
            </center>

        </div>
    </div>
</body>
</html>