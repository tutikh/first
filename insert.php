<?php

$link = mysqli_connect('localhost', 'root', '123', 'my_db')
or die("Ошибка " . mysqli_error($link));

$query ="insert into user (id, name, login, password)
    values ('1', 'Иван Иванов', 'Ivan', 'qwerty')";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Запись успешно добавлена";
}