<?php

require '../Model/reservation.php';
require '../Model/inscription.php';
session_start();

if (is_null($_POST['nom']) OR is_null($_POST['mail']) OR is_null($_POST['tel'])){
  echo '<body onLoad="alert(\'Veuillez remplir les zones vides\')">';
}

else{

  $reserver = new reservation(['nom' =>$_POST['nom'],
                                'tel' =>$_POST['tel'],
                                'mail' =>$_POST['mail'],
                                'date' =>$_POST['jour'],
                                'heure' =>$_POST['heure'],
                                'pers' =>$_POST['personnes']]);
  $res = new ajout;
  $res->reserver($reserver);
}

?>
