<?php
	// Задача

	// Дан текстовый файл размером >= 2ГБ. 
	// Напишите класс, реализующий интерфейс SeekableIterator, для чтения данного файла. 
	// Чтение определенной части файла должно происходить до 1 секунды, учтывая что текстовый файл в одной строке, без переносов строк.
 	var_dump('rg');
 	require_once('MySeekableIterator.php');
var_dump('rg');
	// $f = fopen('file.txt', 'r');

	$q = new MySeekableIterator();
	$q->setFile('file.txt');
	$q->readfile();

	/**
	 * 
	 */

