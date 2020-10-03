 <?php 
    //Absturct Classs

     abstract class Student{
        public $name;
        public $age;

        public function details(){
            echo $this->name . " is " .$this->age . " years old.<br/>";
        }

        abstract public function school();
    }

    class boy extends Student{

        public function describe(){
            return parent::details(). "And i am a high school student.<br/>";
        }

        public function school(){
            return "I like to read boook";
        }
    }

    $st = new boy();
    $st->name ="Kamal";
    $st->age = "45";
     echo $st->describe();// for using retrun.
     echo $st->school();

 ?> 