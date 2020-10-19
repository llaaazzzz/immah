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

    <!--Paragraphe de bienvenue-->
    <header>
    <p>
        Bienvenue sur ImmahVente.com, site de e-commerce
    </p>
    </header>
    <!--Menu de navigation (Haut)-->
    <nav class="menu-nav">
        <ul>
            <li class="btn">
                <a href="#" title="Page d'Accueil">
                    Accueil
                </a>
            </li>
            <li class="btn">
                <a href="shoes.php" title="Chaussures, Chaussettes">
                    Chaussures
                </a>
            </li>
            <li class="btn">
                <a href="cloths.php" title="Robes, Pantalons, T-Shirts, ...">
                    Habits
                </a>
            </li>
            <li class="btn">
                <a href="access.php" title="Bijoux, Montres, Sacs...">
                    Accessoires
                </a>
            </li>
            <li class="btn">
                <a href="tech.php" title="TV, Téléphones, Tablettes, Montres Connectées...">
                    High-Tech
                </a>
            </li>
            <li class="btn">
                <a href="contact.php" title="La page pour tout savoir sur nos services">
                    A propos
                </a>
            </li>
        </ul>
    </nav>


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
	<footer class="menu-nav">
        <!--Menu de navigation(Bas)-->
		<ul>
			<li class="btn">
				<a href="#" title="Page d'Accueil">
					Accueil
				</a>
			</li>
			<li class="btn">
				<a href="shoes.php" title="Chaussures - Chaussettes">
					Chaussures
				</a>
			</li>
			<li class="btn">
				<a href="cloths.php" title="Robes, Pantalons, T-Shirts, ...">
					Habits
				</a>
			</li>
			<li class="btn">
				<a href="access.php" title="Bijoux, Montres, Sacs...">
					Accessoires
				</a>
			</li>
			<li class="btn">
				<a href="tech.php" title="TV, Téléphones, Tablettes, Montres Connectées...">
					High-Tech
				</a>
			</li>
			<li class="btn">
				<a href="contact.php" title="La page pour tout savoir sur nos services">
					A propos
				</a>
			</li>
        </ul>
        
        <!--Copyright-->
		<p class="copyright">
			Immah Vente Togo Copyright &copy; Développé par <strong><a href="mailto:lazking.pro@gmail.com" title="Envoyer un e-mail" id="lienmail">Lazare</a></strong>  - 2020 - Tous Droits Réservés
		</p>
	</footer>
	
</body>