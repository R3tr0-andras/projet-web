<?php
    session_start();
    //var_dump($_SESSION);
    require_once "config/databaseconexion.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaming store</title>
    <link rel="icon" href="Image\logo.png">
    <link rel="stylesheet" href="CSS\style.css">
    <link rel="stylesheet" href="CSS\flex.css">
    <link rel="stylesheet" href="css\color.css">
   
</head>
<body>
    <header>
        <nav class="flex space-between">
            <div class="navbar-left">
                <a href="index"><img src="Image\logo.png" alt="Logo"></a>
            </div>
                <ul class="flex space-around ">
                    
                    <li>
                        <?php if (isset($_SESSION['user'])): ?>
                        <a href="deconnexion" class="colorWhite link">Deconnexion</a>
                    </li>
                <?php else: ?><a href="connexion" class="colorWhite link">Connexion</a></li>
                <?php endif ?>
            </ul>
            <ul>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="profil" class="colorWhite link">Page de profil</a></li>
                <?php endif ?>
            </ul>
        </nav>
        <section class="head-bg flex align-center">
            <div class="flex align-center space-b a44">
                <div class="cactus">
                    <img src="Image\cactus-remove.png" alt="cactus d'écran" style="height: 400px;">
                </div>
                <div class="glass">
                    <h3>Naturia Shop</h3>
                    <p>Bienvenue sur notre site de vente de plantes, votre destination en ligne pour trouver la beauté naturelle qui égayera votre intérieur et votre jardin. Que vous soyez un passionné de jardinage chevronné ou un amateur enthousiaste, nous sommes là pour vous aider à cultiver votre propre paradis verdoyant. tester notre vaste collection de plantes sélectionnées avec soin, des fleurs éclatantes aux feuilles luxuriantes, et découvrir des variétés qui sauront s'adapter à tous les espaces et à tous les niveaux de compétence. Que vous recherchiez une plante d'intérieur pour égayer votre bureau ou des spécimens rares pour élargir votre collection, nous avons ce qu'il vous faut. Faites confiance à notre expertise et à notre engagement envers la qualité pour vous offrir des plantes saines, robustes et prêtes à prospérer dans votre environnement. Explorez notre site dès maintenant et laissez la nature s'épanouir dans votre vie !</p>
                </div>
            </div>
        </section>
    </header>
    <main>
        <?php require_once "controller/usercontroller.php"; ?>
        <?php require_once "controller/itemcontroller.php"; ?>
    </main>
</body>
</html>