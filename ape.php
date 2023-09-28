<?php 
    // require ('animal.php');
    class ape extends animal{

        public $legs=2;
        // public function _costruct($name){
        //     parent ::_construct ($name);
        // }
        public function yell(){
            return "Yell : Auooo";
        }
    }
?>