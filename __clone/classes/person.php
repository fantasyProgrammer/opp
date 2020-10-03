<?php 
    class person{
        public $name    = "Abir";
        public $Age     = 30;
        public $skill   = "WEb_designer";

        private $email  = "abirbiswas5451@gmail.com";
        protected $pass = "here is my passsss";

        function interatiorInner(){
            foreach ($this as $key => $value) {
                echo "<pre>";
                echo "$key => $value";
                echo "<pre/>";
            }
        }

    }

    
?>