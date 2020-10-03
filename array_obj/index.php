 <?php 
    
    // function __autoload($class){
    //     echo $class ."<br/>";
    //     include("classes/".$class.".php");
    // } //php 5.5
/*
    spl_autoload_register(function($class){
        include "classes/".$class.".php";
    });

*/

 $arr =  array("Html", "CSS" , "PHP" , "JavaSssscript");

 $coder = new ArrayObject($arr);
 $iterator = $coder->getIterator();
 $iterator->append("new code");
 while ($iterator->valid()){
     echo $iterator->current()."<br/>   ";
     echo $iterator->next();
 }


    
   



   

?>