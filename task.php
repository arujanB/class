<?php
//Задача
//
//Дан текстовый файл размером >= 2ГБ.
//Напишите класс, реализующий интерфейс SeekableIterator, для чтения данного файла.
//Чтение определенной части файла должно происходить до 1 секунды, учтывая что текстовый файл в одной строке, без переносов стро

class File /*implements SeekableIterator*/{
    private $file;
    private $numberOfString;

    public function __construct($file, $numberOfString)
    {
        $this->file = $file;
        $this->numberOfString = $numberOfString;
    }

    public function readGetFile()
    {
        return $this->file;
    }

    public function newSetFile($fileRead)
    {
        $this->file = $fileRead;
    }

    public function read($fileRead){
        $myfile = fopen($fileRead, "r") or die("Unable to open file!");
        echo fread($myfile,filesize($fileRead));
        fclose($myfile);
    }

    public function current()
    {
        // TODO: Implement current() method.
        $this->file[0];

    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

    public function seek(int $offset)
    {
        // TODO: Implement seek() method.

        if (!isset($this->file[$offset])) {
            throw new OutOfBoundsException("недействительная позиция ($offset)");
        }

        $this->numberOfString = $offset;
    }
}

$task = new File("txtFile.txt", 3);
$task->read("txtFile.txt");
echo "<br>";
$task->current();