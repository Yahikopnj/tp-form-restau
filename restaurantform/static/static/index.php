<?php


//recup valeur form
$nom =$_POST["nom"];
$prenom =$_POST["prenom"];
$email =$_POST["email"];
$mdp =$_POST["mdp"];
$date =$_POST["date"];
$age =$_POST["age"];
$tel =$_POST["tel"];
$adresse =$_POST["adresse"];
$cpltadresse =$_POST["cpltadresse"];
$postal =$_POST["postal"];
$ville =$_POST["ville"];
$age1 =$_POST["age1"];
$fname =$_POST["age1"];
$age =(int)$age;
// var_dump($age);

//connexion bdd
$host = "localhost";
$dbname= "restaurantform";
$port="3306";


$addresseDeLaBdd = "mysql:host=".$host.";dbname=".$dbname.";port=".$port.";charset=utf8";


try{
    //essaie de te connecter en utilisant PDO
    $connexion = new PDO($addresseDeLaBdd, "root","");
    
    //prepapre ma requete pour inserer donnée
    $requete = $connexion->prepare("INSERT INTO `user` (`name`, `lastname`, `majeur`,`identite`,
    `adresse`,`complement`,`postale`, `mail`,`ville`, `mdp`, `naissance`, `age`,`tel`)
     
     VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       
      
       
     
       if ($age1 == "majeur"){
       $age1 = false;
       } else{
         $age1 = true;
       }
      //  var_dump($_FILES);
       $image = $_FILES['image']['name'];
       $image_tmp = $_FILES['image']['tmp_name'];


       move_uploaded_file($image_tmp,"image/$image");


       
    
        $requete->bindParam(1, $nom);
        $requete->bindParam(2, $prenom);
        $requete->bindParam(3, $age1);
        $requete->bindParam(4, $image);
        $requete->bindParam(5, $adresse);
        $requete->bindParam(6, $cpltadresse);
        $requete->bindParam(7, $postal);
        $requete->bindParam(8, $email);
        $requete->bindParam(9, $ville);
        $requete->bindParam(10, $mdp);
        $requete->bindParam(11, $date);
        $requete->bindParam(12, $age);
        $requete->bindParam(13, $tel);

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
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="pardon">
    <pre><h6 id="zoom">Felicitation vous êtes connecté
      vous pouvez utiliser notre site en toute securité
    </h6></pre>
    </div>
    <div id="suivant">
        <a href="./emporter.html"> <h6 class="next">Aller au formulaire a emporter</h6></a>
        <a href="./html/Reservation.html"><h6 class="next">Aller au formulaire de reservation</h6></a>
        <a href="../ProjetForm/index.html"><h6 class="next">allez a la page livraison</h6></a>
    </div>

</body>
<audio autoplay id="son">
        <source src="./Mario Fall (Waa) - Sound Effect (HD).mp3" type="audio/ogg">
        <source src="./Mario Fall (Waa) - Sound Effect (HD).mp3" type="audio/mpeg">
</html>