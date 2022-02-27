<?php
class AboutMeController{

    public function home(){
        require_once("./views/AboutMe/home.php");
    }
    public function index(){
        $ID = $_SESSION["user"];
        echo "ID=$ID";
        $register_list = location::getAll();
        $document = Register::getID($ID);
        require_once("./views/AboutMe/index_AboutMe.php");
    }
    
}
?>
