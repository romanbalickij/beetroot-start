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
    public  function insert($table,$param){
          $query  = sprintf('INSERT INTO %s(%s) VALUES (%s)',
          $table,
          implode(', ',  array_keys($param)),
           ':'.implode(', :',array_keys($param))
          );

          try{
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($param);

              return true;
          }catch (\PDOException $exception) {
              return false;
          }
    }
}