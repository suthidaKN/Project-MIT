<?php
    class TiiangController{
     
        public function searchTo(){
            require_once("./views/Tiiang/searchTo.php");
        }
        public function bedAll(){
            $key = $_GET['key'];
            $tiiang = location::sentCountSearch($key);
            $tiiangList = location::search($key);
            require_once("./views/Tiiang/bedAll.php");
        }
        public function index(){
            $tiiang_list = location::getAll();
            $tiiang = location::sentCountAll();
            require_once("./views/Tiiang/index_Tiiang.php");
        }
        public function search(){
            $key = $_GET['key'];
            $tiiang = location::sentCountSearch($key);
            $tiiang_list = location::search($key);
            if(empty($tiiang_list ))
                require_once("./views/Tiiang/emptyBed.php");
            else
                require_once("./views/Tiiang/index_Tiiang.php");
        }
    }
?>