<?php

require '../Model/user.php';
require '../Model/inscription.php';
session_start();

if (is_null($_POST['id'] OR is_null($_POST['mdp']))){
  echo '<body onLoad="alert(\'Veuillez remplir les zones vides\')">';
}

else{

  $connexion = new user(['id' =>$_POST['id'],
                        'mdp' =>$_POST['mdp']]);
  $connect = new ajout;
  $connect->connexion($connexion);
  
}

?>
