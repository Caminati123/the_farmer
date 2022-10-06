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
                <li><a href="annonce.php">Annonce</a></li>
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
    
    <section class="services" id="services">
        <div class="service-item">
            <i class="fas fa-store delivery-icon"></i>
            <p class="service-details">Nos magasins</p>
        </div>
        <div class="service-item">
            <i class="fas fa-truck delivery-icon"></i>
            <p class="service-details">Livraison</p>
        </div>
    </section> 

    <section class="dernière-création" id="dernière-création">
        <h2 class="grand-titre">
            Terrains à vendre
        </h2>
        <div class="dernières-créations">
            <a class="vetements vetement1 no-grid">
                <div class="vetement-info">
                    <p class="vetement-type">Bien agricole à vendre à Blandouet-Saint Jean en Mayenne (53270)</p>
                    <p class="vetement-prix">150 000€</p>
                </div>
            </a>
            <a class="vetements vetement2 no-grid">
                <div class="vetement-info">
                    <p class="vetement-type">Terrain agricole à vendre à Rostrenen dans les Côtes-d'Armor (22110)</p>
                    <p class="vetement-prix">200 000€</p>
                </div>
            </a>
            <a class="vetements vetement3    no-grid">
                <div class="vetement-info">
                    <p class="vetement-type">Bien agricole à vendre à Noues de Sienne dans le Calvados </br>(14380)</p>
                    <p class="vetement-prix">400 000€</p>
                </div>
            </a>
        </div>

        <section class="info-compte">
            <input type="submit" id='submit' value='VOIR OFFRE' >
        </section>
        <section class="info-compte2">
            <input type="submit" id='submit' value='VOIR OFFRE' >
        </section>
        <section class="info-compte3">
            <input type="submit" id='submit' value='VOIR OFFRE' >
        </section>

        <div class="dernières-créations">
            <a class="vetements vetement4 no-grid">
                <div class="vetement-info">
                    <p class="vetement-type">Bien agricole à vendre à Saint-Jean-de-Sauves </br> (86330)</p>
                    <p class="vetement-prix">350 000€</p>
                </div>
            </a>
            <a class="vetements vetement5 no-grid">
                <div class="vetement-info">
                    <p class="vetement-type">Terrain agricole à vendre à Bagneux-la-Fosse </br> (10340)</p>
                    <p class="vetement-prix">425 000€</p>
                </div>
            </a>
            <a class="vetements vetement6    no-grid">
                <div class="vetement-info">
                    <p class="vetement-type">Bien agricole à vendre à Noues de Sienne dans le Calvados </br>(14380)</p>
                    <p class="vetement-prix">190 000€</p>
                </div>
            </a>
        </div>
        
        <section class="info-compte">
            <input type="submit" id='submit' value='VOIR OFFRE' >
        </section>
        <section class="info-compte2">
            <input type="submit" id='submit' value='VOIR OFFRE' >
        </section>
        <section class="info-compte3">
            <input type="submit" id='submit' value='VOIR OFFRE' >
        </section>

    </section> 
   

</body>
</html>