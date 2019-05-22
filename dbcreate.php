<?php
$link = mysqli_connect('localhost', 'root', '123');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}

$sql = 'CREATE DATABASE my_db;';
if (mysqli_query($link, $sql)) {
    echo "База my_db успешно создана\n";
} else {
    echo 'Ошибка при создании базы данных: ' . mysqli_error($link) . "\n";
}
