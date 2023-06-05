<?php
	if(isset($_COOKIE['PasswordWarning']))
	{
		 echo '<script type ="text/JavaScript">';  
		 echo 'alert("Hasła się nie zgadzają")';  
		 echo '</script>'; 
	}
  ?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        
		<link href="styles/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <div class="menu">
            <img src="logo.png" alt="Logo Agile Snakes" class="logo">
            <nav class="navtop">
                <h1>Rejestracja</h1>
                <ul class="lista">
                    <li class="list_item">
                        <label id="item">
                        <a href="index.php" class="bar">Powrót</a>
                        </label>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="left-baner"></div>
		<div class="karuzela"><br>
			<h1 class="log">Login</h1>
			<form action="skryptRejestracja.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Nazwa użytkownika..." id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Hasło..." id="password" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password2" placeholder="Powtórz hasło..." id="password2" required>
			
				<input type="submit" value="Zarejestruj">
				
				
			</form>
		</div>
        <div class="right-benr"></div>
	</body>
</html>