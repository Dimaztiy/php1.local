<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';

$guestBook = new GuestBook(__DIR__ . '/data.txt');
$record = new GuestBookRecord($_POST['message']);

$guestBook->append($record);
$guestBook->save();

header('Location: /');