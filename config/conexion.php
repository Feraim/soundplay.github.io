<?php
class Database{
    protected $host='localhost';
    protected $user='root';
    protected $password=' ';
    protected $db='soundplay';
    

    public function conectar(){ 
    $dns="mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
       $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try{
    $pdo=new pdo($dns,$this->user,$this->password,$options)
    }catch(\PDOException $e){
        exit("No se ha podido conectar, el error fue".$e->getMessage());
    } 
    }

    
}
?>