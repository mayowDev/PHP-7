<?php 

    // connect to the database usign mysqli
    $conn = mysqli_connect('localhost', 'ninja', 'test123', 'pizza-hat');
    // check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
    }

	// write query for all pizzas
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
    
    <?php require('templates/header.php')?>
    <?php require('templates/footer.php')?>
    
</body>
</html>