<?php
session_start();
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

      echo '<meta http-equiv="refresh" content="0;URL=../View/inscription.php">';
    }

    else{
      $req = $bdd->prepare('INSERT INTO compte (nom, prenom, identifiant, tel, mail, mdp, role) VALUES (?,?,?,?,?,?,?)');
      $req->execute(array($inscription->getNom(), $inscription->getPrenom(), $inscription->getId(), $inscription->getTel(), $inscription->getMail(), md5($inscription->getMdp()), 'client'));
      $_SESSION['nom'] = $inscription->getNom();
      $_SESSION['prenom'] = $inscription->getPrenom();
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
      $_SESSION['identifiant'] = $connexion->getId();
      $_SESSION['mail'] = $connexion->getMail();

      header('Location: ../index.php');
    }

    else{
      echo '<body onLoad="alert(\'Identifiant ou Mot de passe incorrect\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/connexion.php">';
    }
  }



  public function reserver(reservation $reserver){

    try{
      $bdd= new PDO('mysql:host=localhost;dbname=restoration; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }
    $req = $bdd->prepare('SELECT * FROM reservation WHERE nom=?');
    $req->execute(array($reserver->getNom()));
    $donnees= $req->fetch();

    if($donnees){
      echo '<body onLoad="alert(\'Erreur, nom déjà utilisé pour une réservation\')">';

      echo '<meta http-equiv="refresh" content="0;URL=../View/reservation.php">';
    }

    else{
      $total = 0;
      $recup = $bdd->query('SELECT nb_pers FROM reservation');
      $done = $recup->fetchall();

      foreach ($done as $value) {
        $total = $total + $value['nb_pers'];
      }

      if ($total < 50) {

        $total = $total + $reserver->getPers();

        if ($total <= 50) {
          $req = $bdd->prepare('INSERT INTO reservation (nom, tel, mail, jour, heure, nb_pers) VALUES (?,?,?,?,?,?)');
          $req->execute(array($reserver->getNom(), $reserver->getTel(), $reserver->getMail(), $reserver->getDate(), $reserver->getHeure(), $reserver->getPers()));
          echo '<body onLoad="alert(\'Réservation réussie\')">';

          echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
        }

        else {
          echo '<body onLoad="alert(\'Réservation annulée, il ne reste plus assez de places\')">';

          echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
        }

      }

      else {
        echo '<body onLoad="alert(\'Nombre maximal de personnes atteint pour ce jour\')">';

        echo '<meta http-equiv="refresh" content="0;URL=../View/reservation.php">';
      }

    }

  }

  public function places(){

    try{
      $bdd= new PDO('mysql:host=localhost;dbname=restoration; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }

    $total = 0;
    $recup = $bdd->query('SELECT nb_pers FROM reservation');
    $done = $recup->fetchall();

    foreach ($done as $value) {
      $total = $total + $value['nb_pers'];
    }

    return $place = 50 - $total;
  }

  public function modifier(user $modification){
    try{
      $bdd= new PDO('mysql:host=localhost;dbname=restoration; charset=utf8','root','');
    }
    catch (Exception $e){
      die('Erreur:'.$e->getMessage());
    }

      $req = $bdd->prepare('UPDATE compte SET mail=?, tel=?, identifiant=? WHERE nom=? AND prenom=?');
      $req->execute(array($modification->getMail(), $modification->getTel(), $modification->getId(), $_SESSION['nom'], $_SESSION['prenom']));
      header('Location: ../index.php');

      $req = $bdd->prepare('SELECT * FROM compte WHERE identifiant=? AND mail=?');
      $req->execute(array($modification->getId(), $modification->getMail()));
      $donnees= $req->fetch();
      $_SESSION['identifiant'] = $modification->getId();
      $_SESSION['mail'] = $modification->getMail();
      var_dump($modification->getTel());
      var_dump($modification->getId());
    }

}

?>
