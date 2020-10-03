 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });

   $java = new Java();
   $ruby = new Ruby();
   $php  = new Php();
    
?>