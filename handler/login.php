<?php
	//Initialise the session
	require('../index.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"
  	/>
	<title>Connexion</title>
</head>
<body>
	<div class="login-wrapper">
	<form action="process_login" method="POST" class="login">
		<label>Adresse e-mail</label> 
		<input class="box-model" type="email" name="email" placeholder="mail@provider.com">
		<label>Mot de passe</label>
		<input class="box-model" type="password" name="password" placeholder="password">
		<button class="button box-model pink" type="submit">Connexion</button>
		<a href="forgottenPassword.php">J'ai oublié mon mot de passe</a>
		<a href="signUp.php">Pas encore de compte ? Inscrivez-vous !</a>
	</form>
	</div>
</body>
</html>