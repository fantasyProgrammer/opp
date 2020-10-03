 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5

    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });

    class phpChild extends Php{

        public function cms(){

            echo "child class constasnt and class name ".__CLASS__."<br/>";
            echo "child class function and class name ".get_class($this)."<br/>";
        }
    }
    
    $me = new phpChild();
    $me->framework();

    // $java = new Java();
    // $java->javacoder();


   
    echo "<hr/>";
     $me->cms();
    echo "<hr/>";

   



   

?>