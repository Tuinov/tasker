<?php


namespace app\engine;

use app\model\Tasks;

class Db
{
    public $connection = null;

    // подключение к бд
    public function getConnection()
    {
        if ($this->connection == null) {
            $dsn = DB_DRIVER . ":host=" . HOST . ";port=" . PORT . ";dbname=" . DB;
            $this->connection = new \PDO($dsn, USER, PASS);

            // режим получения данных по умолчанию - режим ассоциативного массива
            // $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }

        return $this->connection;
    }

    public function queryAll ($order, $page = 0)
    {
        self::getConnection();

        $stmt = $this->connection->prepare("SELECT * FROM tasks order by $order LIMIT $page, 3");
        $stmt->execute();
        return  $stmt->fetchAll();
    }

    public function queryInsert ($name, $email, $task)
    {
        self::getConnection();

        $stmt = $this->connection->prepare("INSERT INTO `tasks` (`name_user`, `email`, `task_text`) VALUES (:name_user, :email, :task_text)");


        $params = [
            ':name_user' => $name,
            ':email' => $email,
            ':task_text' => $task
        ];
        $stmt->execute($params);
    }

    public function queryUpdate ($id, $task, $done)
    {
        self::getConnection();

        $stmt = $this->connection->prepare("UPDATE tasks SET task_text = :task, done = :done WHERE id = :id");
        $params = [
            ':id' => $id,
            ':done' => $done,
            ':task' => $task
        ];
        $stmt->execute($params);

    }

    public function queryCount ()
    {
        self::getConnection();
        $stmt = $this->connection->prepare("SELECT COUNT(*) FROM tasks");
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function queryOne ($id)
    {
        self::getConnection();

        $stmt = $this->connection->prepare("SELECT * FROM tasks where id = $id");
       $stmt->execute();
        return $stmt->fetch();
    }



}