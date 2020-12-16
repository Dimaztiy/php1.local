<?php

require_once __DIR__ . '/GuestBookRecord.php';
class GuestBook
{
    protected $data;
    protected $path;


    public function __construct($path)
    {
        $this->path = $path;
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line){
            $this->data[] = new GuestBookRecord($line);
        }
    }

    public function getRecords()
    {
        $lines = file($path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line){
            $this->data[] = new GuestBookRecord($line);
        }
        return $this->data;
    }

    public function append($record)
    {
        $this->data[] = $record;
    }

    public function save()
    {
        $lines[];
        foreach ($this->data as $record) {
            $lines[] = $record->getMessage();
            file_put_contents($this->path, implode("\n", $lines));
        }

    }

}