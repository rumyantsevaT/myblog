<?php
class QueryBuilder
{
    public $pdo;
    
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
    }
    
    // Список пород
    public function all($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $results;
    }
    
    //Вывод одной породы
    public function getOneById($table, $id)
    {
        //$sql = "SELECT * FROM breeds WHERE id=:id";
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        $results = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $results;
    }
    
    // Записать породу
    public function insert($table)
    {
        $sql = "INSERT INTO $table (title, content, image, short_content) VALUES (:title, :content, :image, :short_content)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":title", $_POST['title']);
        $statement->bindParam(":content", $_POST['content']);
        $statement->bindParam(":image", $_FILES['image']['name']);
        $statement->bindValue("short_content", $short_content);
        $statement->execute();
    }
    //Редактировать породу
    
    public function updateOne($table, $id)
    {
        $sql = "UPDATE $table SET title=:title, content=:content WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->bindParam(":title" , $_POST['title']);
        $statement->bindParam(":content", $_POST['content']);
        $statement->execute();
    }
    //Удалить породу
}