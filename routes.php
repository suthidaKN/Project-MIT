<?php

$controllers = array('pages'=>['home', 'error'],'Tiiang'=>['searchTo','index','search','bedAll','searchPlace','bed','bedPlace'],'Register'=>['regis','success'],'AboutMe'=>['index','home','newLocation','addLocation','deleteConfirm','delete','updateForm','update','updateME','updateMeConfrim']);
function call($controller, $action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":  $controller = new PagesController();
                      break;
        case "Tiiang": require_once("./models/locationModel.php");
                      require_once("./models/provincesModel.php");
                      $controller = new TiiangController();
                      break;
        case "Register":require_once("./models/locationModel.php");
                      require_once("./models/registerModel.php");
                      $controller = new RegisterController();
                      break;
        case "AboutMe" :require_once("./models/locationModel.php");
                        require_once("./models/registerModel.php");
                        $controller = new AboutMeController();
                        break;
    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{    if(in_array($action, $controllers [$controller]))
    {    call($controller, $action); }
    else
    {    call('pages', 'error'); }

}
else
{    call('pages', 'error');} 
?>