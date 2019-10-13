<?php
/** @var \app\model\Tasks $tasks  */
?>
<h3>Список задач</h3>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th><a href="/?c=task&a=index&b=id">id</a></th>
            <th><a href="/?c=task&a=index&b=name_user">name</a></th>
            <th><a href="/?c=task&a=index&b=email">email</a></th>
            <th><a href="/?c=task&a=index&b=task_text">task</a></th>
            <th><a href="/?c=task&a=index&b=done">done</a></th>
            <? if ($_COOKIE['user'] == 'admin'): ?>
            <th><a href="/?c=task&a=edit">edit</a></th>
            <? endif; ?>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($tasks as $task): ?>
        <tr>
            <th scope="row"><?=$task['id']?></th>
            <td><?=$task['name_user']?></td>
            <td><?=$task['email']?></td>
            <td><?=$task['task_text']?></td>
            <td><?=$task['done']?></td>

            <? if ($_COOKIE['user'] == 'admin'): ?>
            <td><a href="/?c=task&a=edit&id=<?=$task['id']?>">редактировать</a></td>
            <? endif; ?>
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="?c=task&a=index" aria-label="Previous">
                <span aria-hidden="true">1</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php for ($i = 1; $i < ($count / 3); $i++): ?>
            <li class="page-item"><a class="page-link" href="?c=task&a=index&page=<?=$i?>"><?=($i+1)?></a></li>
        <?php endfor ?>

    </ul>
</nav>


<h3>Новая задача</h3>
<form action="/?c=task&a=create" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Ваше имя</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Имя" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Ваш Емаил</label>
        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Емаил" name="email">
        <small id="emailHelp" class="form-text text-muted">Введите вашу почту.</small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Задача:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="task"></textarea>
    </div>
<!--    <input type="submit" value="Написать письмо">-->
    <button type="submit" class="btn btn-primary" name="submit">отправить задачу</button>
</form>