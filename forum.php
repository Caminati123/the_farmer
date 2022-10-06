<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE_FARMER</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <section class="top-page">
        <header class="header">
            <img src="images/logo1-re.png" alt="Logo du site">
            <nav class="nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="recrutement.php">Recrutement</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><div class="box">
	                    <a class="button" href="#popup1">Compte</a>
                    </div>
                    <div id="popup1" class="overlay">
	                    <div class="popup">
                            <div id="container">
                                <form action="verification.php" method="POST">
                                    <h2>Connexion</h2>
                                    <a class="close" href="#">&times;</a>

                                    <section class="info-compte">
                                        <input type="text" placeholder="Email" name="username" required>
                                        <input type="password" placeholder="Mot de passe" name="password" required>
                                        <input type="submit" id='submit' value='VALIDER' >

                                        <?php
                                        if(isset($_GET['erreur'])){
                                            $err = $_GET['erreur'];
                                            if($err==1 || $err==2)
                                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                                        }
                                        ?>
                                    </section>
                                </form>
                            </div>

                            <section class="pas-membre">
                                <p class="membre">Si vous n'avez pas de compte. <a href="inscription.html">Rejoignez-nous</a></p></p>
                            </section>

	                    </div>
                    </div>
                </li>
            </nav>
        </header>
        
    </section>
   
	
  
    <footer>
        <p class="copyright">&copy; 2022 - Ban Be</p>
    </footer>

    <html>
<head>
<title>Index de notre forum</title>
</head>
<body>

<!-- on place un lien permettant d'accéder à la page contenant le formulaire d'insertion d'un nouveau sujet -->
<a href="./insert_sujet.php">Insérer un sujet</a>

<br /><br />

<?php
// on se connecte à notre base de données
// $base = mysql_connect ('serveur', 'login', 'password');
// mysql_select_db ('nom_base', $base) ;

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "'SELECT id, auteur, titre, date_derniere_reponse FROM forum_sujets ORDER BY date_derniere_reponse DESC'";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


// préparation de la requete
// $sql = 'SELECT id, auteur, titre, date_derniere_reponse FROM forum_sujets ORDER BY date_derniere_reponse DESC';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
//$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());


// on compte le nombre de sujets du forum
$nb_sujets =  ($sql);

if ($nb_sujets == 0) {
	echo 'Aucun sujet';
}
else {
	?>
	<table width="500" border="1"><tr>
	<td>
	Auteur
	</td><td>
	Titre du sujet
	</td><td>
	Date dernière réponse
	</td></tr>
	<?php
	// on va scanner tous les tuples un par un
	while ($data = mysql_fetch_array($req)) {

	// on décompose la date
	sscanf($data['date_derniere_reponse'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

	// on affiche les résultats
	echo '<tr>';
	echo '<td>';

	// on affiche le nom de l'auteur de sujet
	echo htmlentities(trim($data['auteur']));
	echo '</td><td>';

	// on affiche le titre du sujet, et sur ce sujet, on insère le lien qui nous permettra de lire les différentes réponses de ce sujet
	echo '<a href="./lire_sujet.php?id_sujet_a_lire=' , $data['id'] , '">' , htmlentities(trim($data['titre'])) , '</a>';

	echo '</td><td>';

	// on affiche la date de la dernière réponse de ce sujet
	echo $jour , '-' , $mois , '-' , $annee , ' ' , $heure , ':' , $minute;
	}
	?>
	</td></tr></table>
	<?php
}

// on libère l'espace mémoire alloué pour cette requête
echo ($sql);
// on ferme la connexion à la base de données.

?>
</body>
</html>