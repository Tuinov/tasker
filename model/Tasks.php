<?php
namespace app\model;

use app\engine\Db;

class Tasks extends Db
{
    public $id;
    public $name_user;
    public $email;
    public $task_text;

    public static function getTableName() {
        return 'tasks';
    }
}