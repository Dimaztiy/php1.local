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
//echo 'Hello, world!!!';
//$color = 'jhfy';

//include __DIR__ . '/functions.php';
//echo choseColor('Желтый');

// МАССИВЫ

$x = [22, 45, 69];
//var_dump($x);
?>
<table border="1">
    <?php
    foreach ($x as $key => $val){
        ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $val; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>
