<?php
    session_start();
    if ($_SESSION["auth"]!=1){
        header('Location:../index.php?erreur=1');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioTracker</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../styles/home.css">
</head>

<body>
<div class="header"> 
      <a href="./home.php">Accueil</a>
      <a href="./settings.php">Paramètres</a>
      <form action='../backend/logout.php'>
        <input type='submit' value='deconnexion'/>
      </form>
    </div>

    <h1>
        Tableau de bord pour la suivi de compte
    </h1>

    <p>
        Veuillez trouver ci-dessous les différents graphiques d'évolution de vos comptes :
    </p>

    <?php
    require("../backend/database.php");
    database_to_chart();
    ?>
        


</body>
</html>