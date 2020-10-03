 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5

    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });

    $java = new languages();
    $java->setCat("OOp");
    $java->setFram("PhP");
    echo $java->getCat()."<br/>";

    $php = clone $java;
    $java->setFram("shpirng");

    echo $java->getFram()."<br/>";
    echo $java->getCat()."<br/>";

    echo $php->getFram()."<br/>";
    echo $php->getCat()."<br/>";


    
   



   

?>