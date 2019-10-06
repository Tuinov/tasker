<h3>Редактировать задачу</h3>
<form action="/?c=task&a=update&id=<?=$task[0]?>" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Имя</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$task[1]?>" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Емаил</label>
        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$task[2]?>" name="email">
        <small id="emailHelp" class="form-text text-muted">Введите вашу почту.</small>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">done</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="<?=$task[4]?>" name="done">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Задача:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="task"><? echo $task[3] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Сохранить задачу</button>
</form>
