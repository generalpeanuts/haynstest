<html>
	<body>			
		<?php

			$user = $_POST['user'];
			$pass = $_POST['pass'];
			if($user == 'admin' && $pass == '1234'){
				header("Location: upload.php");
			}
			else{
				echo "User or pass wrong!";
			}
			?>
