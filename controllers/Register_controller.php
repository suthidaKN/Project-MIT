<?php
class RegisterController{

    public function regis(){
        $rigister_list = Register::getAll();
        require_once("./views/Register/newRegis.php");
    }
    public function BeforeRegis(){
        require_once("./views/Register/BeforeRegis.php");
    }
    public function success(){
        $user = $_GET['User'];
        $pass = $_GET['Pass'];
        $offName = $_GET['Name'];
        $offPos = $_GET['Pos'];  
        $countOff = Register::sentOffID();
        settype($countOff,"integer");
        $offID = $countOff+1;
        settype($offID,"string");
        Register::addOff($offID,$offName,$offPos);
        Register::addAcc($user,$pass,$offID);
        
    }
    public function no(){
        
    }
}
?>