<?php
	if(isset($_COOKIE['PasswordWarning']))
	{
		 echo '<script type ="text/JavaScript">';  
		 echo 'alert("Hasła się nie zgadzają")';  
		 echo '</script>'; 
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
			<form action="register.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password2" placeholder="Repeat password" id="password2" required>
			
				<input type="submit" value="Zarejestruj">
				
				
			</form>
		</div>
	</body>
</html>