<?php 
    class calculation{
        

        public function getValue( array $x){
            foreach ($x as $key => $value) {
                echo $value[0];
                echo " : ";
                echo $value[1]*$value[2]."<br/>";
            }
        }

    }
      
?>