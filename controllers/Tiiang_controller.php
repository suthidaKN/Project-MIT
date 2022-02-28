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
            echo "key = $key";
            $key2 = $_GET['key2'];
            echo "key2 = $key2";
            $tiiang = location::sentCountSearch($key);
            $tiiang_list = location::search($key);
            if(empty($tiiang_list ))
                require_once("./views/Tiiang/emptyBed.php");
            else
                require_once("./views/Tiiang/index_Tiiang.php");
        }
        public function searchPlace(){
            $key = $_GET['key'];
            echo "key = $key";
            $key2 = $_GET['key2'];
            echo "key2 = $key2";
            $tiiang = location::sentCountSearchPlace($key,$key2);
            $tiiang_list = location::searchPlace($key,$key2);
            require_once("./views/Tiiang/index_Tiiang.php");
          
        }
        public function bed(){
            $ID = $_GET['ID'];
            $key = $_GET['key'];
            $tiiang = location::getID($ID);
            require_once("./views/Tiiang/bed.php");
        }
        public function bedPlace(){
            $ID = $_GET['ID'];
            echo "ID = $ID";
            $key = $_GET['key'];
            echo "key = $key";
            $key2 = $_GET['key2'];
            echo "key2 = $key2";
            $tiiang = location::getID($ID);
            require_once("./views/Tiiang/bedPlace.php");
        }
    }
?>