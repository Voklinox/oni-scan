<!DOCTYPE html>
<html lang="fr">
 
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style.css">
	<link rel="icon" href="../images/logo.png">
	<meta name="Oni-Scan" content="Site de scan de malade">
	<meta name="keywords" content="Scan fr">
	<title>Oni-Scan</title>
</head>

<body>
	<div class="header_nav">
		<a id=logo href="../Index/index.html">
			<img id=logo_image src="../images/logo.png" alt="logo" height="50" width="50"></a>
		<div class=type_scan>
			<!-- Section du bandeau en haut a droite avec 3 bouttons et un bouton de connexion -->
			<button class=bouton_type_scan type="button">
				<a href="../Search/search.html">Manga</a>
			</button>

			<button class=bouton_type_scan type="button">
				<a href="../Search/search.html">Manhua</a>
			</button>

			<button class=bouton_type_scan type="button">
				<a href="../Search/search.html">Manhwa</a>
			</button>
			<!-- Icone d'avatar de l'utilisateur -->
		</div>
		<a id="user_avatar" href="../User-Space/user-space.html">
			<img src="../images/pfp.jpeg" alt="avatar" width="50" height="50">
		</a>
		<section class=connexion_inscription>
			<!-- Section de connexion et d'inscription utilisateur -->
			<form action="" id=bouton_connexion>
				<!-- Connexion -->
				<!-- <label for="user-name">Nom d'utilisateur :</label>
                    <input type="text" id="user-name">
                    <br>
                    <label for="password">Mot de passe</label>
                    <input type="text" id="password">
                    <br>-->
				<input type="submit" value="Connexion">
			</form>
			<!-- -------------------------------------------------------------- -->
			<form action="" id=bouton_inscription>
				<!-- Inscription -->
				<!--  <label for="user-name">Nom d'utilisateur :</label>
                    <input type="text" id="user-name">
                    <br>
                    <label for="mail">Adresse email :</label>
                    <input type="text" id="mail">
                    <br>
                    <label for="confirm-mail">Confirmer l'adresse email :</label>
                    <input type="text" id="confirm-mail">
                    <br>
                    <label for="password">Mot de passe :</label>
                    <input type="text" id="password">
                    <br>
                    <label for="confirm-password">Confirmer le mot de passe :</label>
                    <input type="text" id="confirm-password"> -->
				<input type="submit" value="Inscription">
			</form>
		</section>
	</div>

	<div class="search">
		<!-- Section avec la barre de recherche -->
		<section id=recherche>
			<input type="text" id="research">
			<button>
				<label for="research">
					Recherche
				</label>
			</button>
		</section>
	</div>
