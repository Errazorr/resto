<?php

require '../Model/user.php';
require '../Model/inscription.php';

$modification = new user(['nom' =>$_POST['nom'],
                          'prenom' =>$_POST['prenom'],
                          'id' =>$_POST['id'],
                          'mail' =>$_POST['mail'],
                          'tel' =>$_POST['tel']]);
$modif = new ajout;
$modif->modifier($modification);

?>
