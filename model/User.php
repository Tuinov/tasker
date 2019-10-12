<?php
namespace app\model;

class User
{
    public $login = 'admin';
    public $pass = 123;

    public function auth() {

        if($_POST['login'] == $this->login) {
            setcookie("user", "admin");
        }
        header("Location: /");
    }

    public function logout()
    {
        setcookie ("user", "", time() - 3600);
        header("Location: /");
    }
}