<?php

namespace HandlingFile;

class FileManager
{
    private $handle;
    public function __construct(public $filename, public $mode)
    {
        $this->handle = fopen($this->filename,$this->mode);
    }

    public function read(): false|string
    {
        return fread($this->handle, filesize($this->filename));
    }

    public function readLineByLine(): array
    {
        $lines=[];
        while(!feof($this->handle)){
            $lines[] = fgets($this->handle);
        }
        return $lines;
    }

    public function write($content): false|int
    {
        return fwrite($this->handle, $content);
    }

    public function writeToCsv($data): false|int
    {
        return fputcsv($this->handle, $data);
    }

    public function readCsv(): array
    {
        $data = [];
        while(($row = fgetcsv($this->handle)) !== false){
            $data[] = $row;
        }
        return $data;
    }

    public function __destruct()
    {
        if($this->handle){
            fclose($this->handle);
        }
    }
}