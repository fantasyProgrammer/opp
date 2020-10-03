<?php 
    class person {

        public $name;
        public $age;
        public function __construct( $name , $age){
            $this->name = $name;
            $this->age = $age;
        }
        public function personDetails(){
            echo "Person name is {$this->name} and person age is {$this->age}";
        }
    }

    $personOne = new person( " Abir", "28");
    $personOne->personDetails();
?>