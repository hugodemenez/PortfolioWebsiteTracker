<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortfolioTracker</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    

</head>

<body>
    <?php
    require("chartgeneration.php");
    require("database.php");

    $database   = cnxDB() ;
    
    if ($database == false) 
        {
            echo "Erreur de connexion : " .  mysqli_connect_errno()  ;
            die();
        }
                        

    $requete = "select * from portfolio" ;
    $result = mysqli_query($database,$requete);

    if ( $result == FALSE )
        {
            echo "Erreur d'exécution de la requete " ;
            die();
        }



    if  ( mysqli_num_rows($result) > 0)
        {
            while ($row = mysqli_fetch_assoc($result))
                {
                    $requete2 = "select * from data where portfolioName = '".$row['name']."'" ;
                    $result2 = mysqli_query($database,$requete2);
                    $values = array();
                    $dates =array();
                    if  ( mysqli_num_rows($result2) > 0){
                        while ($row2 = mysqli_fetch_assoc($result2)){
                            $values[] =$row2['value'];
                            $dates[] =$row2['date'];
                        }
                        
                        chart($row["name"],json_encode($dates),json_encode($values));
                    }
                    
                    
                }  
        }
    else
        {
            echo "Il n'y a pas de graphiques à afficher" ;
        }

    
    ?>
        


</body>
</html>