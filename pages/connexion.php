<!DOCTYPE html>
<!--Informations Navigateur-->
<head>
    <!--Titre su site dans le navigateur-->
    <title>
        Connexion - Immah Vente
    </title>

</head>

<!--Site Web-->
<body>

	<style><?php include '../config/includes/styles.php' ?></style>

    <!--Menu de navigation (Haut)-->
    <?php include '../config/includes/menunavigationh.php';?>
	
	<section id="Connexion">
		<h1 id="h1a">
			Connexion 
		</h1>
		
		<form method="Post" id="formulaire">
			<p>
				<label for="lpseudo">Nom d'Utilisateur : </label>
				<input type="text" name="lpseudo" id="lpseudo" >
			</p>

			<p>
				<label for="lemail">E-Mail : </label>
                <input type="email" name="lemail" id="lemail" >
			</p>

			<p>
				<label for="lpassword">Mot de Passe : </label>
				<input type="password" name="lpassword" id="lpassword">
			</p>

			<p>
				<input type="submit" value="Se connecter" name="submit">
			</p>
        </form>
		
		<?php
			if(isset($_POST['submit'])){
				echo $_POST['Email'];
			}
		?>
		
        <p id="DemandeInscription">
            Vous n'avez pas de compte ?
            <a href="inscription.php">S'incrire</a>
        </p>
	</section>

    <!--Pied de page-->
	<?php include '../config/includes/menunavigationp.php'?>
</body>