<?php 
include 'config/db.php';

class Todo {
    private $name;
    private $status;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    private $connection;

    public function __construct($name, $status)
    {
        $this->connection = DB::getConnection();
        $this->name = $name;
        $this->status = $status;
    }

    public static function All(){
        $conn = DB::getConnection();
        $sql = "SELECT * FROM todo ORDER BY created_at Desc";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function save(){
        $now = date("Y-m-d H:i:s",time());
        $sql = "INSERT INTO todo (name, status, created_at, updated_at) VALUES ('$this->name', False, '$now', '$now')";
        return $this->connection->exec($sql);
    }
}
?>