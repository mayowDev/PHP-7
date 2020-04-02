<?php 

    // connect to the database usign mysqli
    $conn = mysqli_connect('localhost', 'mayow', 'test1234', 'pizza_hat');
    // check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php require('templates/header.php')?>
    <?php require('templates/footer.php')?>
    
</body>
</html>