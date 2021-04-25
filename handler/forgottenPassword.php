<!DOCTYPE html>
<html>
	<head>
		<title>Mot de passe oublié</title>
		<head>
		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	<body>
		<div class="fp-wrapper">
		<form class="fp" action="<?= route('/processForgottenPassword') ?>" method="POST" class="login">
			<label class="label">Adresse e-mail</label> 
			<input class="box-model" type="email" name="email" placeholder="mail@provider.com">
			<button class="pink button box-model" type="submit">Envoyer</button>
			<?php
			if (!empty($_SESSION["msg_reset"])) 
			{
				echo ($_SESSION["msg_reset"]); 
			}
			?>
		</form>
		</div>
	</body>
</html>

