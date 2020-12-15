<?php
//функция с раскрытием списка аргументов
require __DIR__ . '/functions.php';
require __DIR__ . '/classes/User.php';
require __DIR__ . '/classes/Item.php';

function test(User $user, $message) //User - typehinting - указание типа аргумента
                                    //$user принадлежит классу User
{
    echo $user->email . ' --> ' . $message;
}


$user = new User;
$user->email = 'test@mail.ru';

$item = new Item(1000);


test($user, 'Hello');