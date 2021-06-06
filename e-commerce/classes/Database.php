<?php
session_start();

  class Database{
    private $server_name = "localhost";
    private $db_username = "root";
    private $db_password = '';
    private $database = "e-commerce";
    public $conn;

    //CONSTRUCTOR ~~ a method that is automatically created when an object is createed.
    public function __construct()
    {
        $this->conn = new mysqli($this->server_name,$this->db_username,$this->db_password, $this->database);



        if($this->conn->connect_error){
            die("Connection Failed: ".$this->conn->connect_error);
        }else{
           return $this->conn;
        }

       
    }
  }


?>