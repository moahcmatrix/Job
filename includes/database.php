<?php
class Database
{
    private $connection;

    public static function connect($server, $dbname, $username, $password)
    {

        $database = null;

        try {
            $connection = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $database = new Database();
            $database->connection = $connection;
        } catch (PDOException $ex) {
            echo $ex;
        }

        return $database;
    }

    public function in(&$query, &$values)
    {
        $stmt = $this->connection->prepare($query);

        if ($values != null) {
            foreach ($values as $name => $value) {
                $stmt->bindValue($name, $value);
            }
        }

        return $stmt;
    }

    public function execute($query, $params)
    {
        $stmt = $this->in($query, $params);
        $stmt->execute();
    }

    public function query($query, $values)
    {
        $stmt = $this->in($query, $values);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();


        return $stmt->fetchAll();
    }
}