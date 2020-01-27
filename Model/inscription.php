<?php

require_once('user.php');

class ajout{

  public function envoi(user $inscription){
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=restoration; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM compte WHERE identifiant=? AND mail=?');
    $req->execute(array($inscription->getId(), $inscription->getMail()));
    $donnees= $req->fetch();

    if($donnees){
      echo '<body onLoad="alert(\'Erreur, utilisateur déjà existant\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.html">';
    }

    else{
      $req = $bdd->prepare('INSERT INTO compte (nom, prenom, identifiant, tel, mail, mdp, role) VALUES (?,?,?,?,?,?,?)');
      $req->execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getId(), $inscription->getTel(), $inscription->getMail(), md5($inscription->getMdp()), 'client'));

    }
  }



  public function connexion(user $connexion){

    try{
      $bdd= new PDO('mysql:host=localhost;dbname=restoration; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM compte WHERE identifiant=?');
    $req->execute(array($connexion->getId()));
    $donnees= $req->fetch();

    if ($donnees['identifiant'] == $connexion->getId() AND $donnees['mdp'] == md5($connexion->getMdp())) {
      header('Location: ../View/indexco.html');
    }

    else{
      echo '<body onLoad="alert(\'Identifiant ou Mot de passe incorrect\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/connexion.html">';
    }
  }

  public function reserver(reservation $reserver){

    
  }
}

?>
