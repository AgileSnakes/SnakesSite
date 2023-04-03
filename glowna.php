<?php 
	if(!isset($_COOKIE['User']))
	{
		header("Location: index.html");
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Strona główna</title>
		<link href="glownacss.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Strona główna</h1>
				<a href=""><i class="fas fa-user-circle"></i>Profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Wyloguj</a>
			</div>
		</nav>
		<div id="gra">
		<iframe src="build/index.html" width="1000px" height="645px"></iframe>
	</div>
	</body>
</html>