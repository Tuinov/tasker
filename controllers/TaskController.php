<?php

namespace app\controllers;


use app\engine\Db;
use app\model\Tasks;

class TaskController extends Controller
{

    public function actionIndex()
    {
        $page = ($_GET['page'] * 3) ?: 0;
        $order = $_GET['b'] ?: 'id';
        $count = (new Tasks())->queryCount();
        $tasks = (new Tasks)->queryAll($order, $page);
        echo $this->render('index', [
            'tasks' => $tasks,
            'count' => $count,
        ]);
    }

    public function actionOrder() {
       $order = $_GET['b'];
        $tasks = (new Tasks())->queryAll($order);
        echo $this->render('index', [
            'tasks' => $tasks
        ]);
    }

    public function actionEdit()
    {
        $id = $_GET['id'];
        $task = (new Tasks())->queryOne($id);
        echo $this->render('view', [
            'task' => $task
        ]);
    }

    public function actionCreate()
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $task = $_POST['task'];

        (new Db)->queryInsert($name, $email, $task);
        header("Location: /");

    }

    public function actionUpdate()
    {
        $id = $_GET['id'];
        $task = $_POST['task'];
        $done = $_POST['done'];
        (new Tasks())->queryUpdate($id, $task, $done);
        header("Location: /");

    }

}