 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });


   
   $call = new calculation;
   echo "The result :".$call->getValue(55, 55)->result();
    
?>