<?php

class MySeekableIterator extends SeekableIterator
	{
		public $file;

		public function seek($position) {
		    if (!isset($this->array[$position])) {
	        	throw new OutOfBoundsException("недействительная позиция ($position)");
	      	}

	      	$this->position = $position;
	    }

		public function rewind() {
	        $this->position = 0;
	    }

	    public function current() {
	        return $this->array[$this->position];
	    }

	    public function key() {
	        return $this->position;
	    }

	    public function next() {
	        ++$this->position;
	    }

	    public function valid() {
	        return isset($this->array[$this->position]);
	    }

	    public function setFile(string $url) {
	    	var_dump($url);
	    	exit();
	    	die();
	    	$this->file = fopen($url, 'r'); 
	    }

	    public function readFile() {
	    	while (!feof($f)) {
				print_r(fgets($f) . " ");
			}

			fclose($f);
	    } 


	}