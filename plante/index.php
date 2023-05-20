<?php
session_start();
//var_dump($_SESSION);
require_once "config/databaseConnexion.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Mon agence</title>
</head>

<body>
  <header>
    <div>
      <?php require_once "components\header.php"; ?>
    </div>
    <section class="head-bg">
      <div>
        <div>
          <h3>Naturia Shop</h3>
          <br>
          <p>Bienvenue sur notre site de vente de plantes, votre destination en ligne pour trouver la beauté naturelle qui égayera votre intérieur et votre jardin. Que vous soyez un passionné de jardinage chevronné ou un amateur enthousiaste, nous sommes là pour vous aider à cultiver votre propre paradis verdoyant. Parcourez notre vaste collection de plantes soigneusement sélectionnées, des fleurs éclatantes aux feuilles luxuriantes, et découvrez des variétés qui sauront s'adapter à tous les espaces et à tous les niveaux de compétence. Que vous recherchiez une plante d'intérieur pour égayer votre bureau ou des spécimens rares pour élargir votre collection, nous avons ce qu'il vous faut. Faites confiance à notre expertise et à notre engagement envers la qualité pour vous offrir des plantes saines, robustes et prêtes à prospérer dans votre environnement. Explorez notre site dès maintenant et laissez la nature s'épanouir dans votre vie !</p>
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