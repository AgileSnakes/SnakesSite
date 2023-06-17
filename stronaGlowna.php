<?php 
	if(!isset($_COOKIE['User']))
	{
		header("Location: index.php");
	}
		include('admin.php');
		$sql = "SELECT game_name, game_link, png_link FROM Games";
		$result = $conn->query($sql);

	if(isset($_COOKIE['AddGame']))
	{
		 echo '<script type ="text/JavaScript">';  
		 echo 'alert("Gra dodana")';  
		 echo '</script>'; 

		 setcookie('AddGame','');
	}

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
				echo'<h1>Strona główna - Cześć '.$_COOKIE["User"].'</h1>';
				?>
                <ul class="lista">
                <?php
                if(isset($_COOKIE['Admin'])){
				echo'
					<li class="list_item">
                        <label id="item">
                            <a href="#Gry" class="bar">Lista gier</a>
                        </label>
					<li class="list_item">
						<label id="item">
							<a href="addGames.php" class="bar">Dodaj grę</a>
						</label>
					</li>';
				}
				?>
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
        <div class="left-baner">
        <img src="images/gifsnake.gif" alt="reklama1" class="reklama" style="width:100%; height:100%; align-items: center;">
        </div>
	    <div class="karuzela">
            <?php
				 while($row = $result->fetch_assoc()) {
				 	echo'<form action="play_game.php" method="post">';
				 	echo'<div class="card" style="width: 18rem;">';
  					echo'<img src='.$row["png_link"].' class="card-img-top" alt="...">';
 					echo'<div class="card-body">';
   					echo'<h5 class="card-title">'.$row["game_name"].' </h5>';
   					echo'<input type="hidden" name="gamename" value="'.$row["game_name"].'">';
  					echo'<p class="card-text"></p>';
  					echo'<input type="submit" class="btn btn-primary" value="Zagraj">';
  					echo'</div>';
					echo'</div>';
					echo'</form>';	
				 }
			?>
	    </div>
        <div class="right-baner">
        <img src="images/gifsnake.gif" alt="reklama1" class="reklama" style="width:100%; height:100%; align-items: center;">
        </div>	
	</body>
    <footer>
    </footer>

</html>