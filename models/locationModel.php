<?php
    class location{
        public $id_location;
        public $nameLocation;
        public $id_level;
        public $name_level;
        public $id_status;
        public $name_status;
        public $use;
        public $quatity;
        public $date;
        public $offID;
        public $offName;
        public $offPos;
        public $address;
        public $amphureID;
        public $amphureName_th;
        public $amphureName_en;
        public $provinceID;
        public $provinceName_th;
        public $provinceName_en;
        public $geographyID;
        public $geographyName_th;
        public $geographyName_en;
        public $contactID;
        public $tel;
        public $line;
        public $facebook;
        public $web;
        public $id_bed;
        public $bed;
        public $row;
        
        public function __construct($row,$id_location,$nameLocation,$id_level,$name_level,$id_status,$name_status,$use,$quatity,$date,$offID,$offName,$offPos,$address,$amphureID,$amphureName_th,$amphureName_en,$provinceID,$provinceName_th,$provinceName_en,$geographyID,$geographyName_th,$geographyName_en,$contactID,$tel,$line,$facebook,$web)
        {
            $this->row=$row;
            $this->id_location = $id_location;
            $this->nameLocation = $nameLocation;
            $this->id_level = $id_level;
            $this->name_level = $name_level;
            $this->id_status = $id_status;
            $this->name_status = $name_status;
            $this->use = $use;
            $this->quatity = $quatity;
            $this->date = $date;
            $this->offID = $offID;
            $this->offName = $offName;
            $this->offPos = $offPos;
            $this->address = $address;
            $this->amphureID = $amphureID;
            $this->amphureName_th = $amphureName_th;
            $this->amphureName_en = $amphureName_en;
            $this->provinceID = $provinceID;
            $this->provinceName_th = $provinceName_th;
            $this->provinceName_en = $provinceName_en;
            $this->geographyID = $geographyID;
            $this->geographyName_th = $geographyName_th;
            $this->geographyName_en = $geographyName_en;
            $this->contactID = $contactID;
            $this->tel = $tel;
            $this->line = $line;
            $this->facebook = $facebook;
            $this->web = $web;
        }
        public static function getAll(){

            $locationList = [];
            require("./connection_connect.php");
            $sql = "SELECT *from location
            LEFT JOIN level on location.level = level.ID_level
            LEFT JOIN status on location.status = status.ID_status
            left join contact on location.contactID = contact.contactID
            left join thai_amphures on location.amphures = thai_amphures.id_amphure
            LEFT join thai_provinces on thai_provinces.PV_id = thai_amphures.province_id
            left join thai_geography on thai_geography.id = thai_provinces.PV_geography_id
            left join officer on officer.officer_id = contact.offID
            order by location.ID_location desc";
            $result = $conn->query($sql);
            $row=0;
            while($my_row = $result->fetch_assoc()){
    
                $id_location = $my_row['ID_location'];
                $nameLocation = $my_row['name_location'];
                $id_level = $my_row['ID_level'];
                $name_level = $my_row['name_level'];
                $id_status = $my_row['ID_status'];
                $name_status = $my_row['name_status'];
                $use = $my_row['use'];
                $quatity = $my_row['quantity'];
                $date = $my_row['Date'];
                $offID = $my_row['officer_id'];
                $offName = $my_row['officer_name'];
                $offPos = $my_row['officer_position'];
                $address = $my_row['address'];
                $amphureID = $my_row['id_amphure'];
                $amphureName_th = $my_row['AP_name_th'];
                $amphureName_en = $my_row['AP_name_en'];
                $provinceID = $my_row['PV_id'];
                $provinceName_th = $my_row['PV_name_th'];
                $provinceName_en = $my_row['PV_name_en'];
                $geographyID = $my_row['id'];
                $geographyName_th = $my_row['name'];
                $geographyName_en = $my_row['name'];
                $contactID = $my_row['contactID'];
                $tel = $my_row['tel'];
                $line = $my_row['line'];
                $facebook = $my_row['facebook'];
                $web = $my_row['website'];
                $locationList[] = new location($row,$id_location,$nameLocation,$id_level,$name_level,$id_status,$name_status,$use,$quatity,$date,$offID,$offName,$offPos,$address,$amphureID,$amphureName_th,$amphureName_en,$provinceID,$provinceName_th,$provinceName_en,$geographyID,$geographyName_th,$geographyName_en,$contactID,$tel,$line,$facebook,$web);

            }
            require("./connection_close.php");
    
            return $locationList;
        }


        public static function getID($ID){

            require("./connection_connect.php");
            $sql = "SELECT *from location
            LEFT JOIN level on location.level = level.ID_level
            LEFT JOIN status on location.status = status.ID_status
            left join contact on location.contactID = contact.contactID
            left join thai_amphures on location.amphures = thai_amphures.id_amphure
            LEFT join thai_provinces on thai_provinces.PV_id = thai_amphures.province_id
            left join thai_geography on thai_geography.id = thai_provinces.PV_geography_id
            left join officer on officer.officer_id = contact.offID
            WHERE location.ID_location = '$ID'";
            $result = $conn->query($sql);
            $row=0;
            $my_row = $result->fetch_assoc();

            $id_location = $my_row['ID_location'];
            $nameLocation = $my_row['name_location'];
            $id_level = $my_row['ID_level'];
            $name_level = $my_row['name_level'];
            $id_status = $my_row['ID_status'];
            $name_status = $my_row['name_status'];
            $use = $my_row['use'];
            $quatity = $my_row['quantity'];
            $date = $my_row['Date'];
            $offID = $my_row['officer_id'];
            $offName = $my_row['officer_name'];
            $offPos = $my_row['officer_position'];
            $address = $my_row['address'];
            $amphureID = $my_row['id_amphure'];
            $amphureName_th = $my_row['AP_name_th'];
            $amphureName_en = $my_row['AP_name_en'];
            $provinceID = $my_row['PV_id'];
            $provinceName_th = $my_row['PV_name_th'];
            $provinceName_en = $my_row['PV_name_en'];
            $geographyID = $my_row['id'];
            $geographyName_th = $my_row['name'];
            $geographyName_en = $my_row['name'];
            $contactID = $my_row['contactID'];
            $tel = $my_row['tel'];
            $line = $my_row['line'];
            $facebook = $my_row['facebook'];
            $web = $my_row['website'];

    
            require("./connection_close.php");
    
            return new location($row,$id_location,$nameLocation,$id_level,$name_level,$id_status,$name_status,$use,$quatity,$date,$offID,$offName,$offPos,$address,$amphureID,$amphureName_th,$amphureName_en,$provinceID,$provinceName_th,$provinceName_en,$geographyID,$geographyName_th,$geographyName_en,$contactID,$tel,$line,$facebook,$web);
        }

        public static function search($key){

            $locationList = [];
            require("./connection_connect.php");
            $sql = "SELECT *from location
            LEFT JOIN level on location.level = level.ID_level
            LEFT JOIN status on location.status = status.ID_status
            left join contact on location.contactID = contact.contactID
            left join thai_amphures on location.amphures = thai_amphures.id_amphure
            LEFT join thai_provinces on thai_provinces.PV_id = thai_amphures.province_id
            left join thai_geography on thai_geography.id = thai_provinces.PV_geography_id
            left join officer on officer.officer_id = contact.offID
            WHERE level.name_level LIKE '%$key%' 
            or location.name_location LIKE '%$key%' 
            or status.name_status LIKE '%$key%' 
            or thai_amphures.AP_name_th like '%$key%' 
            or thai_amphures.AP_name_en like '%$key%' 
            or thai_provinces.PV_name_th like '%$key%' 
            or thai_provinces.PV_name_en like '%$key%'
            order by location.ID_location desc";
            $result = $conn->query($sql);
            $row=0;
            while($my_row = $result->fetch_assoc()){
    
    
                $id_location = $my_row['ID_location'];
                $nameLocation = $my_row['name_location'];
                $id_level = $my_row['ID_level'];
                $name_level = $my_row['name_level'];
                $id_status = $my_row['ID_status'];
                $name_status = $my_row['name_status'];
                $use = $my_row['use'];
                $quatity = $my_row['quantity'];
                $date = $my_row['Date'];
                $offID = $my_row['officer_id'];
                $offName = $my_row['officer_name'];
                $offPos = $my_row['officer_position'];
                $address = $my_row['address'];
                $amphureID = $my_row['id_amphure'];
                $amphureName_th = $my_row['AP_name_th'];
                $amphureName_en = $my_row['AP_name_en'];
                $provinceID = $my_row['PV_id'];
                $provinceName_th = $my_row['PV_name_th'];
                $provinceName_en = $my_row['PV_name_en'];
                $geographyID = $my_row['id'];
                $geographyName_th = $my_row['name'];
                $geographyName_en = $my_row['name'];
                $contactID = $my_row['contactID'];
                $tel = $my_row['tel'];
                $line = $my_row['line'];
                $facebook = $my_row['facebook'];
                $web = $my_row['website'];
                $locationList[] = new location($row,$id_location,$nameLocation,$id_level,$name_level,$id_status,$name_status,$use,$quatity,$date,$offID,$offName,$offPos,$address,$amphureID,$amphureName_th,$amphureName_en,$provinceID,$provinceName_th,$provinceName_en,$geographyID,$geographyName_th,$geographyName_en,$contactID,$tel,$line,$facebook,$web);
  
            }
            require("./connection_close.php");
    
            return $locationList;
        }
        public static function searchPlace($key,$key2){

            $locationList = [];
            require("./connection_connect.php");
            $sql = "SELECT *from location
            LEFT JOIN level on location.level = level.ID_level
            LEFT JOIN status on location.status = status.ID_status
            left join contact on location.contactID = contact.contactID
            left join thai_amphures on location.amphures = thai_amphures.id_amphure
            LEFT join thai_provinces on thai_provinces.PV_id = thai_amphures.province_id
            left join thai_geography on thai_geography.id = thai_provinces.PV_geography_id
            left join officer on officer.officer_id = contact.offID
            WHERE (level.name_level LIKE '%$key2%') and thai_provinces.PV_name_th like '%$key%' 
            order by location.ID_location desc;";
            $result = $conn->query($sql);
            $row=0;
            while($my_row = $result->fetch_assoc()){
    
                $id_location = $my_row['ID_location'];
                $nameLocation = $my_row['name_location'];
                $id_level = $my_row['ID_level'];
                $name_level = $my_row['name_level'];
                $id_status = $my_row['ID_status'];
                $name_status = $my_row['name_status'];
                $use = $my_row['use'];
                $quatity = $my_row['quantity'];
                $date = $my_row['Date'];
                $offID = $my_row['officer_id'];
                $offName = $my_row['officer_name'];
                $offPos = $my_row['officer_position'];
                $address = $my_row['address'];
                $amphureID = $my_row['id_amphure'];
                $amphureName_th = $my_row['AP_name_th'];
                $amphureName_en = $my_row['AP_name_en'];
                $provinceID = $my_row['PV_id'];
                $provinceName_th = $my_row['PV_name_th'];
                $provinceName_en = $my_row['PV_name_en'];
                $geographyID = $my_row['id'];
                $geographyName_th = $my_row['name'];
                $geographyName_en = $my_row['name'];
                $contactID = $my_row['contactID'];
                $tel = $my_row['tel'];
                $line = $my_row['line'];
                $facebook = $my_row['facebook'];
                $web = $my_row['website'];
                $locationList[] = new location($row,$id_location,$nameLocation,$id_level,$name_level,$id_status,$name_status,$use,$quatity,$date,$offID,$offName,$offPos,$address,$amphureID,$amphureName_th,$amphureName_en,$provinceID,$provinceName_th,$provinceName_en,$geographyID,$geographyName_th,$geographyName_en,$contactID,$tel,$line,$facebook,$web);
  
            }
            require("./connection_close.php");
    
            return $locationList;
        }
        public static function addLocation($id_location,$nameLocation,$id_level,$id_status,$use,$quatity,$date,$contactID,$address,$amphureID){
        
            require("./connection_connect.php");
            $sql = "INSERT INTO `location` (`ID_location`, `name_location`, `level`, `status`, `use`, `quantity`, `Date`, `contactID`, `address`) 
            VALUES ('$id_location', '$nameLocation', '$id_level', '$id_status', '$use', '$quatity', '$date', '$contactID', '$address', '$amphureID')";
            $result = $conn->query($sql);
            require("./connection_close.php");
            return $result ;
    
        }
        public static function sentCountAll(){
            require("./connection_connect.php");
            $sql = "SELECT *from location";
            $result = $conn->query($sql);
            $row=$result->fetch_all();
            $row = count($row);
            require("./connection_close.php");
            return $row;
        }
        public static function sentCountID($ID){
            require("./connection_connect.php");
            $sql = "SELECT *from location
            LEFT JOIN level on location.level = level.ID_level
            LEFT JOIN status on location.status = status.ID_status
            left join contact on location.contactID = contact.contactID
            left join thai_amphures on location.amphures = thai_amphures.id_amphure
            LEFT join thai_provinces on thai_provinces.PV_id = thai_amphures.province_id
            left join thai_geography on thai_geography.id = thai_provinces.PV_geography_id
            left join officer on officer.officer_id = contact.offID
            WHERE location.ID_location = '$ID'";
            $result = $conn->query($sql);
            $row=$result->fetch_all();
            $row = count($row);
            require("./connection_close.php");
            return $row;
        }
        public static function sentCountSearch($key){
            require("./connection_connect.php");
            $sql = "SELECT *from location
            LEFT JOIN level on location.level = level.ID_level
            LEFT JOIN status on location.status = status.ID_status
            left join contact on location.contactID = contact.contactID
            left join thai_amphures on location.amphures = thai_amphures.id_amphure
            LEFT join thai_provinces on thai_provinces.PV_id = thai_amphures.province_id
            left join thai_geography on thai_geography.id = thai_provinces.PV_geography_id
            left join officer on officer.officer_id = contact.offID
            WHERE level.name_level LIKE '%$key%' 
            or location.name_location LIKE '%$key%' 
            or status.name_status LIKE '%$key%' 
            or thai_amphures.AP_name_th like '%$key%' 
            or thai_amphures.AP_name_en like '%$key%' 
            or thai_provinces.PV_name_th like '%$key%' 
            or thai_provinces.PV_name_en like '%$key%'
            order by location.ID_location desc";
            $result = $conn->query($sql);
            $row=$result->fetch_all();
            $row = count($row);
            require("./connection_close.php");
            return $row;
        }
        // $id_location;
        // $nameLocation;
        // $id_level;
        // $name_level;
        // $id_status;
        // $name_status;
        // $use;
        // $quatity;
        // $date;
        // $offID;
        // $offName;
        // $offPos;
        // $address;
        // $amphureID;
        // $amphureName_th;
        // $amphureName_en;
        // $provinceID;
        // $provinceName_th;
        // $provinceName_en;
        // $geographyID;
        // $geographyName_th;
        // $geographyName_en;
        // $contactID;
        // $tel;
        // $line;
        // $facebook;
    }
?>