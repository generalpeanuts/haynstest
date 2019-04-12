<html>
	<head>
		<title>Upload</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="file" id="file">
			<input type="submit" name="submit">
		</form>
		<?php 
			$n = $_FILES["file"]["name"];
			$tmp_name = $_FILES["file"]["tmp_name"];
			$p = "uploads/" . $n;
			if(move_uploaded_file($tmp_name,$p)){
				echo "success!";
			}
 		?>
	</body>
</html>