<?php 
    class calculation{
        public $a = 0;
        public $b = 0;
        public $result;

        public function getValue($x, $y){
            $this->a = $x;
            $this->b = $y;
           // $this->$result;
            return $this;
        }

        public function result(){
            $this->result = $this->a * $this->b;
            return $this->result;
        }
    }
?>