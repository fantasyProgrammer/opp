<?php 
    class dataBase{
        public $host     = DB_HOST;
        public $user     = DB_USER;
        public $pass     = DB_PASS;
        public $dbname   = DB_NAME;

        public $link;
        public $error;

        public function __construct(){
            $this->connectDb();
        }

        public function connectDb(){
            $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if(!$this->link){
                $this->error = "Connection fail" .$this->link->connect_error;
                return false;
            }
        }

        //select function

        public function select($query){
            $reslut = $this->link->query($query) or die ($this->link->error.__LINE__);
            if($reslut->num_rows > 0){
                return $reslut;
            }else {
                return false;
            }

        }

        public function insert($query){
            $show = $this->link->query($query) or die ($this->link->error.__LINE__);
            if($show){
                header("Location: index.php?msg=".urlencode("Data submited succesfully"));
                exit();
            }else{
                die("Error:(".$this->link->errno.")".$this->link->error);
            }
        }
    }
?>