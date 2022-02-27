<?php
class Provinces{
    public $id;
    public $name_th;
    public $name_en;

    public function __construct($id,$name_th,$name_en)
    {
        $this->id = $id;
        $this->name_en = $name_en;
        $this->name_th = $name_th;
    }

    public static function getAll(){
        $provincesList = [];
        require("./connection_connect.php");
        $sql = "SELECT * FROM thai_provinces";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            
            $id = $my_row['PV_id'];
            $name_th = $my_row['PV_name_th'];
            $name_en = $my_row['PV_name_en'];
            $provincesList = new Provinces($id,$name_th,$name_en);
        }
        require("./connection_close.php");
    
        return $provincesList;
    }
}

?>