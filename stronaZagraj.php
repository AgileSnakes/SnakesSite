<?php

	$gameName = $_POST['gamename'];
	include('admin.php');

	$sql = "SELECT  game_name, game_link FROM Games WHERE game_name = '".$gameName."'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Strona główna</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
		<link href="styles/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <div class="menu">
            <img src="logo.png" alt="Logo Agile Snakes" class="logo">
		      <nav class="navtop">
				<?php
				echo'<h1>'.$gameName.'</h1>';
				?>
                <ul class="lista">
				<li class="list_item">
                    <label id="item">
                    <a href="stronaGlownaZalogowany.php" class="bar">Strona główna</a>
                    </label>
                </li>
				<li class="list_item">
                    <label id="item">
                        <a href="" class="bar">Profil</a>
                    </label>
                </li>
                <li class="list_item">
                    <label id="item">
				        <a href="skryptWyloguj.php" class="bar">Wyloguj</a>
                    </label>
                </li>
                </ul>
		      </nav>
        </div>
        <div class="left-baner"></div>
        <div class="karuzela">
		<?php
			while($row = $result->fetch_assoc()) {
		echo '<iframe src='.$row["game_link"].'/index.php width=960px height=640px></iframe>';
	}
		?>
        </div>
        <div class="right-baner"></div>
	</body>
</html>