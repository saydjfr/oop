<?php
    class animal {
        public $name;
        public $legs=4;
        public $cold_blooded="No";
    
        public function __construct($name){
            $this->name = $name;
        }

        public function infoanimal(){
            return "
                Nama : {$this->name} <br/>
                legs : {$this->legs}<br/>
                cold Blooded : {$this->cold_blooded}<br/>
                ";
        }
    
    }
?>