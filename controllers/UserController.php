<?php

namespace app\controllers;

use app\model\User;

class UserController extends Controller
{

    public function actionAdmin()
    {
        (new User())->auth();

    }

    public function actionLogout()
    {
        (new User())->logout();

    }

}