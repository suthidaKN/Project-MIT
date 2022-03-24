<?php
class AboutMeController{

    public function index(){
        $ID = $_SESSION["user"];
        $tiiangList = location::getAllUser($ID);
        $test = location::sentAllUser($ID);
        $document = Register::getID($ID);
        require_once("./views/AboutMe/index_AboutMe.php");
    }
    
    public function newLocation(){
        $ID = $_SESSION["user"];
        $offID = Register::sentOffIDFromAcc($ID);
        $locationID = location::sentCountAll();
        $contactID = location::sentCountContactAll();
        require_once("./views/AboutMe/newLocation.php");
    }
    public function addLocation(){
        $id_location = $_GET['locationID'];
        $nameLocation= $_GET['name_location'];
        $id_level = $_GET['level'];
        $id_status = $_GET['status'];
        $use = $_GET['use'];
        $quatity = $_GET['quatity'];
        date_default_timezone_set('asia/bangkok');
        $date = date('Y-m-d');
        $offID = $_GET['offID'];
        $address = $_GET['address'];
        $amphureID = $_GET['id_amphure'];
        $contactID = $_GET['contactID'];
        $tel = $_GET['tel'];
        $line = $_GET['line'];
        $facebook = $_GET['face'];
        $web = $_GET['web'];

         Register::addCon($contactID,$facebook,$line,$tel,$web,$offID);
        location::addLocation($id_location,$nameLocation,$id_level,$id_status,$use,$quatity,$date,$contactID,$address,$amphureID);

        AboutMeController::index();

    }
    public function deleteConfirm(){
        $ID = $_GET['ID'];
        $location=location::getID($ID)  ;
        require_once("./views/AboutMe/DeleteLocation.php");
    }
    public function delete(){
        $ID = $_GET['ID'];
        location::Deletelocation($ID);
        AboutMeController::index();
    }
    public function updateForm(){
        $ID = $_GET['ID'];
        $location=location::getID($ID);
        require_once("./views/AboutMe/updateForm.php");
    }
    public function update(){
        $id_location = $_GET['locationID'];
        $nameLocation= $_GET['name_location'];
        $id_level = $_GET['level'];
        $id_status = $_GET['status'];
        $use = $_GET['use'];
        $quatity = $_GET['quatity'];
        date_default_timezone_set('asia/bangkok');
        $date = date('Y-m-d');
        $offID = $_GET['offID'];
        $address = $_GET['address'];
        $amphureID = $_GET['id_amphure'];
        $contactID = $_GET['contactID'];
        $tel = $_GET['tel'];
        $line = $_GET['line'];
        $facebook = $_GET['face'];
        $web = $_GET['web'];

        Register::updateCon($contactID,$facebook,$line,$tel,$web);
        location::updateLocation($id_location,$nameLocation,$id_level,$id_status,$use,$quatity,$date,$address,$amphureID);
      
        AboutMeController::index();
    }
    public function updateME(){
        $ID = $_SESSION["user"];
        $document = Register::getID($ID);
        require_once("./views/AboutMe/updateME.php");
    }
    public function updateMeConfrim(){
        $offID = $_GET['offID'];
        $offName = $_GET['offName'];
        $offPos = $_GET['offPos'];
        Register::updateOff($offID,$offName,$offPos);
        AboutMeController::index();

    }
}
?>

