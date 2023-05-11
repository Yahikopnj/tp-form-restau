<?php


//recup valeur form
$mail =$_POST["mail"];
$mdp =$_POST["mdp"];
$plat =$_POST["plat"];
$tel =$_POST["tel"];
$heure =$_POST["heure"];

//connexion bdd
$host = "localhost";
$dbname= "restaurantform";
$port="3306";


$addresseDeLaBdd = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";


try{
    //essaie de te connecter en utilisant PDO
    $connexion = new PDO($addresseDeLaBdd, "root","");
    
    //prepapre ma requete pour inserer donnée
    $requete = $connexion->prepare("INSERT INTO `emporter` (`mail`, `mdp`, `plat`,`tel`,
    `heure`)
     
     VALUES ( ?, ?, ?, ?, ?)");
       
        $requete->bindParam(1, $mail);
        $requete->bindParam(2, $mdp);
        $requete->bindParam(3, $plat);
        $requete->bindParam(4, $tel);
        $requete->bindParam(5, $heure);
    
        $requete->execute();
    }catch(PDOException $exception){
        echo $exception->getMessage();
    }

    



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="emporter.css">
</head>
<body id="bodyla">

  <div id="pardon1">
    <pre><h6 id="zoom1">Votre commande est en cours.
      vous allez recevoir un message de confirmation.
    </h6></pre>
    
    <div id="suivantb">
        <a href="./index.html"> <h6 id="next2">Aller au formulaire d'inscirption</h6></a>
        <a href="./html/Reservation.html"><h6 class="next1">Aller au formulaire de reservation</h6></a>
        <a href="../ProjetForm/index.html"><h6 class="next1">allez a la page livraison</h6></a>
    </div>
    </div>


<audio autoplay id="son">
        <source src="./Mario Fall (Waa) - Sound Effect (HD).mp3" type="audio/ogg">
        <source src="./Mario Fall (Waa) - Sound Effect (HD).mp3" type="audio/mpeg">
        </audio>
        <script src="./emporter.js"></script>
        </body>
</html>