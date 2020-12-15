<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

//var_dump($_GET);

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}else{
    $name = 'Новый пользователь';
}

// Вместо скрипта выше есть более короткая запись:
$name = $_GET['name'] ?? null; // данная запись действительна с php 7. Это "ОПЕРТАОР ВЫБОРА" ОДНОГО ИЗ ДВУХ ЗНАЧЕНИЙ

echo 'Привет, '.$name;