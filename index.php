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
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
        <div class="menu">
            <img src="logo.png" alt="Logo Agile Snakes" class="logo">
		      <nav class="navigate">
                  <ul class="lista">
                    <li class="list_item">
                        <label id="item">
                            <a href="#Gry" class="bar">Gry</a>
                        </label>
                      </li>
                      <li class="list_item">
                        <label id="item">
                            <a href="#Zespol" class="bar">Zespół</a>
                        </label>
                      </li>
                      <li class="list_item">
                        <label id="item">
                            <a href="#Zarejestruj" onclick="pokazLogin()" class="bar">Zaloguj/Zarejestruj</a>
                        </label>
                      </li>
                  </ul>
                
            </nav>
		</div>
        <div class="left-baner">
            <!img src="reklama1.png" alt="reklama1" class="reklama">
        </div>
        
        <div class="karuzela">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

        <div class="carousel-inner">

            <div class="item active">
                <img src="logo.png" alt="AgileSnakes" style="width:100%;">
                <div class="carousel-caption">
                    <h3>AgileSnakes</h3>
                    <p>Poznaj naszą załogę!</p>
                </div>
        </div>

      <div class="item">
        <img src="logo.png" alt="Gry" style="width:100%;">
        <div class="carousel-caption">
          <h3>Gry</h3>
          <p>Dołącz do walki o ranking w naszych grach</p>
        </div>
      </div>
    
      <div class="item">
        <img src="logo.png" alt="Kontakt" style="width:100%;">
        <div class="carousel-caption">
          <h3>Kontakt</h3>
          <p>Współpraca: 28339@s.pm.szczecin.pl</p>
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
            
        </div>
        <div class="right-baner">
            <!img src="reklama2.png" alt="reklama2">        
        </div>
        
        <div class="login">
            <div class="login-content">
                <span class="close" onclick="ukryjLogin()">&times;</span>
			<h2>Logowanie\<br>Rejestracja</h2>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required><br>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required><br>
				<input type="submit" value="Login"><br>
				<a href="rej.php"><input type="button" value="Zarejestruj"></a>
			</form>
            </div>
        </div>
        <script>
            function pokazLogin(){
                document.querySelector('.login').style.display='block';
            }
            function ukryjLogin(){
                document.querySelector('.login').style.display='none'
            }
        </script>
	</body>
    <footer></footer>
</html>