<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<? if ($_COOKIE['user'] == 'admin'): ?>
    Вы вошли как администратор! <a href="/?c=user&a=logout">Выйти</a>
<? else: ?>
    <form action="/?c=user&a=admin" method="post">
        Админ?
        <input type="text" name="login" placeholder="login">
        <input type="password" name="pass" placeholder="password">
        <button type="submit" class="btn btn-primary" name="submit">Войти</button>

    </form>
<? endif; ?>

    <a href="/"><h3>Главная</h3></a>
    <br>
    <?=$content?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>