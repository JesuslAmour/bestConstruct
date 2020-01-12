<?php
  include('controllers/connexion.php');

  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


        // $bd = new PDO('mysql:host=localhost;dbname=competition', 'root', '');

    $reponse = $db -> query('SELECT * FROM connexion');
    $i = 0;

    while ($elt_recu = $reponse ->fetch()) {
     if($elt_recu['username'] == $username AND $elt_recu['password'] == $password){

        $i = 1;
        break;
      }
    }

    if ($i == 1) {
      // include('index.php');
    }
    else{
        $alert = '<p style="color:orangered; text-align:center; margin:0px 0px 6% 0px;" font-size:40%;> informations incorrect, veillez renseigner un login et un mot de passe correct </p>';
        include('index.php');
    }
  }
  elseif (isset($_POST['username']) && isset($_POST['domaine'])) {
    $username = $_POST['username'];
    $domaine = $_POST['domaine'];


        // $bd = new PDO('mysql:host=localhost;dbname=competition', 'root', '');

    $reponse = $db -> query('SELECT * FROM connexion');
    $password = 0;

    while ($elt_recu = $reponse ->fetch()) {
     if($elt_recu['username'] == $username AND $elt_recu['domaine'] == $domaine){
        include('index.php');
        echo "<script>
             var password_js = ". json_encode($elt_recu['password']).";
             alert('Félicitation. votre mot de passe est *** '+ password_js +' ***');
            </script>";
        $password =1;
      }
    }
    if ($password == 0) {
      include('index.php');
        echo "<script>
             alert('Désolé! Nous n'avons pas trouvé votre mot de passe );
            </script>";

    }


  }





            //   try{
            //     //On se connecte à la BDD
            //     $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            //     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //     //On insère les données reçues si les champs sont remplis
            //     if(!empty($prenom)  && !empty($mail) && !empty($age)){
            //         $sth = $dbco->prepare("
            //             INSERT INTO form(prenom, mail, age)
            //             VALUES(:prenom, :mail, :age)");
            //         $sth->bindParam(':prenom',$prenom);
            //         $sth->bindParam(':mail',$mail);
            //         $sth->bindParam(':age',$age);
            //         $sth->execute();
            //     }

            //     //On récupère les infos de la table
            //     $sth = $dbco->prepare("SELECT prenom, mail, age FROM form");
            //     $sth->execute();
            //     //On affiche les infos de la table
            //     $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
            //     $keys = array_keys($resultat);
            //     for($i = 0; $i < count($resultat); $i++){
            //         $n = $i + 1;
            //         echo 'Utilisateur n°' .$n. ' :<br>';
            //         foreach($resultat[$keys[$i]] as $key => $value){
            //             echo $key. ' : ' .$value. '<br>';
            //         }
            //         echo '<br>';
            //     }
            // }
            // catch(PDOException $e){
            //     echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            // }

?>
