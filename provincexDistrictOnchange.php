<?php
    require("./connection_connect.php");
    $output='';
    $sql="SELECT * FROM thai_amphures WHERE province_id='".$_POST['provinceID']."' ORDER BY AP_name_th";
    $result = $conn->query($sql);
    $output .='<option value="" >-เลือกอำเภอ-</option>';
    while($my_row = $result->fetch_assoc()){
        $output .='<option value="'.$my_row["id_amphure"].'">'.$my_row["AP_name_th"].'</option>';
    }
    echo $output;
    require("./connection_close.php");
?>