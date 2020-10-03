<?php 
    class languages{

        private $catagory;
        private $framwork;

        function setCat($a){
            $this->catagory = $a; 
        }

        function getCat(){
            return $this->catagory;
        }

        function setFram($b){

            $this->framwork = $b;
        }

        function getFram(){
            return $this->framwork;
        }
    }
?>