<?php

$link = mysqli_connect('localhost', 'root', '123', 'my_db')
or die("Ошибка " . mysqli_error($link));

$query ='CREATE Table user
(
    id INT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    login VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL
)';
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Создание таблицы прошло успешно";
}
