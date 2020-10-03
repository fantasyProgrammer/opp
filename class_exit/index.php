 <?php 
    include("student.php");


    if(class_exists("student")){
        $st = New student();
        if(method_exists($st,"detail")){
            $st->detail();
        }else{
            echo "Method not found";
        }
   
    }else{
        echo" Class no found";
    }
    
?>