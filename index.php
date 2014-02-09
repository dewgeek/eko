<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: login.php');
		exit(0);
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="static/css/bootstrap.css" rel="stylesheet">
		<title>Home</title>
	</head>

	<body>
	
	<div class="container">
		
		<?php 
			include 'navbar.html' 
		?>
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>	
		
	</div>
		
	</body>
</html>