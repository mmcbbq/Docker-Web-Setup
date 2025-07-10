<?php

abstract class AbstractRepository
{
    protected string $tablename;
    protected static PDO $pdo;

    public function __construct()
    {
        $this->tablename = str_replace('Repository','',static::class);
    }

    protected function Dbcon():PDO
    {
        if (!isset(self::$pdo)){
            self::$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4", DB_USER, DB_PASS);
        }
        return self::$pdo;
    }

    protected function query(string $sql,array $data = [] ):array|false
    {
        $dbcon = self::Dbcon();
        $stm = $dbcon->prepare($sql);
        $result = $stm->execute($data);
        $return = $stm->fetchAll(PDO::FETCH_CLASS,$this->tablename);
        $id = $dbcon->lastInsertId();
        if ($id){
            $return = ['id'=> $id];

        }
        return $return;
    }
    public function findAll():array
    {
        $sql = 'SELECT * FROM '.  $this->tablename;

        return $this->query($sql);
    }
}