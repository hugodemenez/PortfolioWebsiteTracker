<?


function cnxDB(){
        $connexion = mysqli_connect("localhost", "hugodemenez", "password" , "database") ;

        // si jamais la connexion n'était obtenue
        if ( ! $connexion )  
        {
            die("Connexion impossible : " . mysqli_connect_error());  // fin du programme en affichant un message d'erreur
        } 
        else{
            return $connexion;
        }
    }


?>