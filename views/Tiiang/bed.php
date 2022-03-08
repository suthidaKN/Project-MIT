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
        height: 420px;
        border-radius: 50px;   
        text-align: start; 
    }
    .box:hover{background: #b0b0ff; color: #fff;}

    h2{
        font-size: 30;
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
    h3{
        font-size: 18;
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
        <div class="container-fluid" style="height: 620px;">
         <br><br>


<center>
   
<div class="column">
                    <div class="box">
                        <?php if($tiiang->provinceID =="1"){  echo "$tiiang->amphureName_th"; } ?>
                        <?php if($tiiang->provinceID!="1"){  echo "อำเภอ$tiiang->amphureName_th";} ?>
                        <?php if($tiiang->id_level=="1"){ ?> <p1><?php echo "$tiiang->name_level";?></p1><br> <?php } ?>
                        <?php if($tiiang->id_level=="2"){ ?> <p2><?php echo "$tiiang->name_level";?></p2><br> <?php } ?>
                        <?php if($tiiang->id_level=="3"){ ?> <p3><?php echo "$tiiang->name_level";?></p3><br> <?php } ?>
                        <?php if($tiiang->id_level=="4"){ ?> <p4><?php echo "$tiiang->name_level";?></p4><br> <?php } ?>
                        <h2><?php echo "$tiiang->nameLocation";?></h2><br>
                
                            <img src="./images/accept.png" style="width: 30px; height: 30px;"/>
                            <?php echo "$tiiang->name_status";?>
                            <img src="./images/hospital-bed (1).png" style="width: 30px; height: 30px;"/>
                            <?php 
                            settype($tiiang->quatity,"integer");
                            settype($tiiang->use,"integer");
                            $sum = $tiiang->quatity-$tiiang->use;
                            echo "มีเตียง : $sum";?>
                            <br>
                             <h3><?php echo "ช่องทางการติดต่อ : ";?><br></h3>
                             <?php if(is_null($tiiang->tel ) || $tiiang->tel ==''){echo "tel : ไม่ได้ระบุ";}
                            else{  echo "tel : $tiiang->tel";} ?><br>
                            <?php if(is_null($tiiang->facebook  )|| $tiiang->facebook==''){echo "Facebook : ไม่ได้ระบุ";}
                            else{  echo "Facebook : $tiiang->facebook"; } ?><br>
                            <?php if(is_null($tiiang->web) || $tiiang->web ==""){echo "Website : ไม่ได้ระบุ";}
                            else{  echo "Website : $tiiang->web"; } ?><br>
                            <?php if(is_null($tiiang->line) || $tiiang->line==''){echo "Line : ไม่ได้ระบุ";}
                            else{  echo "Line : $tiiang->line"; }?><br>
                            <?php echo "ที่อยู่ : $tiiang->address";?>
                            <?php if($tiiang->provinceID =="1"){  echo "$tiiang->amphureName_th"; } ?>
                            <?php if($tiiang->provinceID!="1"){  echo "อำเภอ$tiiang->amphureName_th";} ?>
                            <?php echo "จังหวัด$tiiang->provinceName_th";?> <br><br>
                   <div style="text-align:start;">
                    <a class="btn btn-default" style="background-color:  #56C45F; color: #fff; border-radius: 15px; "href=?controller=Tiiang&action=bedAll&<?php echo "key=$key"?>>ย้อนกลับ</a><br>
                    </div> 
                </div> <br><br>
                </div> 
            </center>
        </div>
                </body>
</html>