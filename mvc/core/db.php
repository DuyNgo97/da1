<?php
    class db{
        public $conn;
        protected $host = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "da1";
        function __construct(){
            $this -> conn = mysqli_connect($this->host,$this->username,$this->password);
            mysqli_select_db($this -> conn,$this->dbname);
            mysqli_query($this->conn,"SET NAMES 'utf8'");
        }
    }
?>