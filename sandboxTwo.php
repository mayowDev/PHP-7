<?php 
	// refrence : https://www.w3schools.com/php/func_filesystem_fclose.asp
	// $quotes = readfile("readme.txt");
	// echo $quotes;

	$file = 'readme.txt';

	if(file_exists($file)){

		// read file
		echo readfile($file) . '<br />';

		// copy file
		copy($file, 'quotes.txt');

		// absolute path
		echo realpath($file) . '<br />';

		// file size
		echo filesize($file) . '<br />';

		// rename the file
		rename($file, 'test.txt');

	} else {
		echo 'file does not exist';
	}

	// make directory 
	mkdir('quotes');

	// filesystem shorthand

	
	// opening a file for reading
	// $handle = fopen($file, 'r'); = read only

	// read the file
	// echo fread($handle, filesize($file));
	// echo fread($handle, 112);

	// read a single line
	// echo fgets($handle); get single line

	// read a single character
	// echo fgetc($handle); get single charcter

	// $handle = fopen($file, 'r+'); read and write
	// $handle = fopen($file, 'a+'); == sameabove

	// writing to a file
	// fwrite($handle, "\nEverything popular is wrong.");

	// fclose($file);	

	unlink($file);

		// Classes and objects
	class User {

		private $email;
		private $name;

		public function __construct($name, $email){
			// $this->name = 'mario';
			// $this->email = 'mario@thenetninja.co.uk';
			$this->name = $name;
			$this->email = $email;
		}

		public function login(){
			// echo 'the user logged in';
			echo $this->name . ' logged in';
		}

		// setters and getters
		public function getName(){
			return $this->name;
		}

		public function setName($name){
			if(is_string($name) && strlen($name) > 1){
				$this->name = $name;
				return "name updated to $name";
			}else{
				return 'not a valid name';
			}
		}		

	}

	
	// $userOne->login();
	// echo $userOne->name;

	$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

	// $userTwo->name = 'mario';
	// echo $userTwo->name;

	// echo $userTwo->getName();
	// echo $userTwo->setName('shaun');
	// echo $userTwo->getName();

?>