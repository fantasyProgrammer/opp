<?php 
    class Java{
            public $hinting;

        function __construct(Php $value){
            $this->hinting = $value;
            $this->hinting->framework();
            $this->hinting->cms();
        }
    }

?>