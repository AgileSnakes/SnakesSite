<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Strona główna</title>
		<link href="glownacss.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				
				<h1>Dodaj grę</h1>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Wyloguj</a>
			</div>
		</nav>
		
			
			<form action="AddG.php" method="post">
				
				<input type="text" name="gamelink" placeholder="Link do gry" id="gamelink" required>
				<input type="text" name="pnglink" placeholder="Link do grafiki" id="pnglink" required>
				<input type="text" name="addGameName" placeholder="Nazwa gry" id="addGameName" required>
				<input type="submit" value="Dodaj">
				
				
			</form>
	

	</body>

</html>