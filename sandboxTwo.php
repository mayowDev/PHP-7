<?php 
	
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

?>


?>