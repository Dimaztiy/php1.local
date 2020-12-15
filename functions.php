<?php

require_once __DIR__ . '/classes/GuestBookRecord.php';

    function choseColor($color)
    {
        switch ($color) {
            case 'green' :
                echo 'Зеленый';
                break;
            case 'yellow' :
                echo 'Желтый';
                break;
            case 'red' :
                echo 'красный';
                break;
        }
        return $color;
    }

    function getGuestBookRecords(){
        $lines = file(__DIR__ . '/data.txt', FILE_IGNORE_NEW_LINES);
        $ret = [];
        foreach ($lines as $line){
            $ret[] = new GuestBookRecord($line);
        }
        return $ret;
    }