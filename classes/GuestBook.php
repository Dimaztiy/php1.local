<?php


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
        foreach ($this->data as $record) {
            file_put_contents($this->path, explode('/n', $record));
        }

    }

}