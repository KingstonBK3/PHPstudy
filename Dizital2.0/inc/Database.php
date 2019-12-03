<?php
class Database
{
    private $conn;
    private $host;
    private $user;
    private $pass;
    private $NameDB;
    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '123';
        $this->NameDB = 'dizital_news';
        $this->connect();
    }
    public function __destruct(){
        $this->disconnect();
    }
    public function connect(){
        try{
            $this->conn = new PDO('mysql:host='.$this->host.''
            .';dbname='.$this->NameDB.'',
            $this->user,
            $this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }catch(Exception $e){
            die('Connection failed : '.$e->getMessage());
        }
        return $this->conn;
    }
    public function disconnect(){
        if($this->conn){
            $this->conn = null;
        }
    }
    public function getOne($query){
        $stmt = $this->conn->prepare($query);
        $stmt = execute();
        $stmt = setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetch();       
        return $response;

    }
    public function executeRun($query){
        $response = $this->conn->exec($query);
        return $response;
    }

    public function getAll($query){
        $stmt = $this->conn->prepare($query);
        $stmt = execute();
        $stmt = setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetchAll();
        return $response;
    }
    public function getLastId(){
        $GetlastId = $this->conn->lastInsertId();
        return $GetlastId;
    }
}