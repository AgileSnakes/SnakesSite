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
                  <h1>Dodaj grę</h1>
                  <ul class="lista">
                  <li class="list_item">
                    <label id="item">
                    <a href="stronaGlownaZalogowany.php" class="bar">Strona główna</a>
                    </label>
                    <li class="list_item">
                    <label id="item">
                        <a href="" class="bar">Profil</a>
                    </label>
                </li>
                </li>
                  <li class="list_item">
                      <label id="item">
                  <a href="skryptWyloguj.php" class="bar">Wyloguj</a>
                      </label></li>  
                  </ul>
		      </nav>
        </div>
        <div class="left-baner"></div>
        <div class="karuzela">
			<form action="skryptDodajGre.php" class="formDodajGre" method="post">
				<input type="text" name="gamelink" placeholder="(Gry/{NazwaGry}/index.php]" id="gamelink" required><br>
				<input type="text" name="pnglink" placeholder="(Gry/Img/{NazwaGry}" id="pnglink" required><br>
				<input type="text" name="addGameName" placeholder="Nazwa gry" id="addGameName" required><br>
				<input type="submit" value="Dodaj">	


			</form>

            <form enctype="multipart/form-data" method="post" action="skryptZuploadujGre.php">
<label>Choose a zip file to upload: <input type="file" name="upfile" /></label>
<br />
<input type="submit" name="submit" value="Upload" />
</form>
        </div>
        <div class="right-baner"></div>
	</body>
</html>
