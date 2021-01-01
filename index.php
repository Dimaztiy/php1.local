<?php
//require __DIR__ . '/classes/Cabinet.php';
//require __DIR__ . '/classes/Table.php';
require __DIR__ . '/classes/GuestBook.php';
//require __DIR__ . '/functions.php';

/*$table = new Table(1000, 4);
$table->color = 'red';
echo $table->show();

$cab = new Cabinet(5000, 2);
$cab->color = 'brown';
echo $cab->show();

echo "<br>";
echo "<br>";

echo get_class($table);
echo "<br>";
echo "<br>";

if($cab instanceof Item){ //определяется принадлежность объекта классу
    echo 'true';          // $cab принадлежит классу Cabinet,
}                         //  а также родительскому классу Item
*/

$guestBook = new GuestBook(__DIR__ . '/data.txt');
foreach ($guestBook->getRecords() as $record){
    echo $record->getMessage();
}


?>

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


<form action="/append.php" method="post">
    <textarea name="message"></textarea>
    <button type="submit">Отправить</button>
</form>

</body>
</html>
