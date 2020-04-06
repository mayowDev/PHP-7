<?php 

	 // connect to the database usign mysqli
	 $conn = mysqli_connect('localhost', 'ninja', 'test123', 'pizza-hat');
	 // check connection
	 if(!$conn){
		 echo 'Connection error: '. mysqli_connect_error();
	 }

?>