<?php

class QueryBuilder{
    /**
     * @var PDO
     * */
      protected $pdo;
      function __construct($pdo)
    {

            $this->pdo =$pdo;
    }

    public  function selectAll($table,$className){
        $stmt = $this->pdo->query("SELECT * FROM $table");
        return $tasks = $stmt->fetchAll(PDO::FETCH_CLASS,$className);
    }
    public  function delete($table,$id){
        $this->pdo->query("DELETE FROM $table WHERE id=$id");

    }

}