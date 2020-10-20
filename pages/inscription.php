<!DOCTYPE html>
<!--Informations Navigateur-->
<head>
    <!--Titre su site dans le navigateur-->
    <title>
        Inscription - Immah Vente
    </title>

</head>

<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

<!--Site Web-->
<body>
    <!--Menu de navigation (Haut)-->
    <?php include '../config/Includes/menunavigationh.php';?>

    <!--Informations à remplir-->
    <h1 id="h1a">
			Connexion 
		</h1>
		
		<form method="Post">
            <input type="text" name="Nom d'Utilisateur" id="pseudo" size=15 placeholder="Ex : Poulet" required>

			<input type="email" name="E-Mail" id="email" size="15" placeholder="Ex : exemple@mail.com" required>

			<input type="password" name="Mot de Passe" id="password" size="15" placeholder="Ex : rg6s5vgerg_b561" required>

            <input type="password" name="Mot de Passe" id="password2" size="15" placeholder="Ex : rg6s5vgerg_b561" required>Mot de Passe</input>

			<input type="submit" value="Se connecter" id="submit">
        </form>

    <?php
        
        if(isset($_POST['formsend'])){
            extract($_POST);
            if(!empty ($pseudo) && !empty($email) && !empty($password) && !empty($password2)){
                if ($password == $password2) { 
                    include 'Config/database.php';
                    global $db;

                    $q = $db-> prepare("INSERT INTO users(pseudo, email, password) VALUES (:pseudo,:email,:password)");
                    $q -> execute([
                        'pseudo' => $pseudo,
                        'email' => $email,
                        'password' => $password
                    ]);
                };
            };
        };
    ?>

    <!--Pied de page-->
	<?php include '../config/Includes/menunavigationp.php'?>
</body>