<?php
class AboutMeController{

    public function home(){
        require_once("./views/AboutMe/home.php");
    }
    public function index(){
        $ID = $_SESSION["user"];
        echo "ID=$ID";
        $tiiangList = location::getAllUser($ID);
        $test = location::sentAllUser($ID);
   
        
        $document = Register::getID($ID);
        require_once("./views/AboutMe/index_AboutMe.php");
    }
    
}
?>
