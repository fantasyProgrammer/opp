 <?php 
   class userData{
       public $user;
       public $id;
        //constant 
        const NAME = "Abir Biswas";

        // Static

        public static $age = "30";

        public function display (){
            echo "this user full name is ".userData::NAME."<br/>"; //constant
            echo "This user age is:".self::$age."<br/>"; //static
        }

        public static function show(){

            echo "Again user age showing by static:".self::$age;
        }


       public function __construct($name, $Id){
            $this->user = $name;
            $this->id = $Id;
            echo "This user name id {$this->user} and This user id is {$this->id}";

       }

       public function __destruct(){
        unset($this->user);
        unset($this->id);

       }
   }
   $userName ="Abir";
   $id = "565";
   $userName ="Abir";
   $ur = new userData($userName, $id);
   $ur->display();
   userData::show();

 ?>