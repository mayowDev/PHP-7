<?php 
	//variables
	define('NAME', 'Yoshi');

	// $name = 'Yoshi';
	$age = 30;

	// $name = 'Mario'; normall variable
	define('NAME', 'Mario'); // constant variable

?>

<!DOCTYPE html>
<html>
<head>
	<title>variables</title>
</head>
<body>

	<h1>User profile page</h1>

	<div><?php echo NAME; ?></div>
	<div><?php echo $age; ?></div>

</body>
</html>