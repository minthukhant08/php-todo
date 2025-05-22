<?php 
class DB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "password";
    private $database = "todo";
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
    }

    public function select($sql){
        try {
           $stmt = $this->connection->prepare($sql);
           $stmt->execute();
           return $stmt->fetchAll();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function update($sql){
        try {
            return $this->connection->exec($sql);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

?>