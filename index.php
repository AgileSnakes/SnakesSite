<?php 
	if(isset($_COOKIE['AddUsers']))
	{
		 echo '<script type ="text/JavaScript">';  
		 echo 'alert("Użytkownik dodany")';  
		 echo '</script>'; 

		 setcookie('AddUsers','');
	}


 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
				<a href="rej.php"><input type="button" value="Zarejestruj"></a>
				
			</form>
		</div>
	</body>
</html>