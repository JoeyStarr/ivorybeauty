<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Access</title>
	<link rel="stylesheet" type="text/css" href="/css/sty.css">
</head>
<body>
	<div class="conteneurAdmin">
		<form method="POST" action="{{ route('connecticut') }}">
			@csrf
			<h1>Admin</h1>
			<div class="box">
				<label for="userr">Utilisateur</label>
				<input type="text" name="adminn" id="userr">
			</div>	
			<div class="box">
				<label for="pass">Mot de passe</label>
				<input type="password" name="motpass" id="pass">
			</div>
			<button>Se connecter</button>
		</form>
	</div>
</body>
</html>