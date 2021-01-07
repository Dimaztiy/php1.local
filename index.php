<?php

require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$guestBook = new GuestBook();

//var_dump($guestBook);

$view = new View();
$view->assing('guestbook', $guestBook);

include __DIR__ . '/templates/index.php';