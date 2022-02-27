<?php
class Register{
    public $offID ;
    public $offName ;
    public $offPos ;
    public $contactID ;
    public $tel;
    public $line;
    public $face;
    public $web;
    public $user;
    public $pass;
    public $row ;

    public function __construct($row,$contactID,$face,$line,$offID,$offName,$offPos,$pass,$tel,$user,$web)
    {
        $this->contactID = $contactID;
        $this->face = $face;
        $this->line = $line;
        $this->offID = $offID;
        $this->offName = $offName;
        $this->offPos = $offPos;
        $this->pass = $pass;
        $this->tel = $tel;
        $this->user = $user;
        $this->web = $web;
        $this->row = $row;
    }

    public static function getAll(){
        
        $registerList = [];
        require("./connection_connect.php");
        $sql = "SELECT * from account
        LEFT JOIN officer on account.nameID = officer.officer_id
        LEFT JOIN contact on contact.offID = officer.officer_id";
        $result = $conn->query($sql);
        $row=0;
        while($my_row = $result->fetch_assoc()){
    
            $contactID = $my_row['contactID'];
            $face = $my_row['facebook'];
            $line = $my_row['line'];
            $offID = $my_row['officer_id'];
            $offName = $my_row['officer_name'];
            $offPos = $my_row['officer_position'];
            $pass = $my_row['pass'];
            $tel = $my_row['tel'];
            $user = $my_row['user'];
            $web = $my_row['website'];
            $registerList[] = new Register($row,$contactID,$face,$line,$offID,$offName,$offPos,$pass,$tel,$user,$web);

        }
        require("./connection_close.php");
        return $registerList ;

    }

    public static function getID($ID){
        
        require("./connection_connect.php");
        $sql = "SELECT * from account
        LEFT JOIN officer on account.nameID = officer.officer_id
        LEFT JOIN contact on contact.offID = officer.officer_id
        WHERE account.user = '$ID'";
        $result = $conn->query($sql);
        $row=0;
        $my_row = $result->fetch_assoc();
        $contactID = $my_row['contactID'];
        $face = $my_row['facebook'];
        $line = $my_row['line'];
        $offID = $my_row['officer_id'];
        $offName = $my_row['officer_name'];
        $offPos = $my_row['officer_position'];
        $pass = $my_row['pass'];
        $tel = $my_row['tel'];
        $user = $my_row['user'];
        $web = $my_row['website'];

        require("./connection_close.php");
        return new Register($row,$contactID,$face,$line,$offID,$offName,$offPos,$pass,$tel,$user,$web);

    }

    public static function sentOffID(){
        require("./connection_connect.php");
        $sql = "SELECT * FROM `officer`";
        $result = $conn->query($sql);
        $row=0;
        while($result->fetch_assoc()){
            $row=$row+1;
        }
        require("./connection_close.php");
        return $row;
    }

    public static function addAcc($user,$pass,$offID){
        
        require("./connection_connect.php");
        $sql = "INSERT INTO `account` (`user`, `pass`, `nameID`) 
        VALUES ('$user', '$pass', '$offID')";
        $result = $conn->query($sql);
        require("./connection_close.php");
        return $result ;

    }
    public static function addOff($offID,$offName,$offPos){
        
        require("./connection_connect.php");
        $sql = "INSERT INTO `officer` (`officer_id`, `officer_name`, `officer_position`) 
        VALUES ('$offID', '$offName','$offPos')";
        $result = $conn->query($sql);
        require("./connection_close.php");
        return $result ;

    }
    public static function addCon($contactID,$face,$line,$tel,$web){
        
        require("./connection_connect.php");
        $sql = "INSERT INTO `contact` (`contactID`, `tel`, `line`, `facebook`, `website`) 
        VALUES ('$contactID', '$tel', '$line', '$face','$web')";
        $result = $conn->query($sql);
        require("./connection_close.php");
        return $result ;

    }
}
?>