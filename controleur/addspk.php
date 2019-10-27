<?php
include "../class/speaker.class.php";
$n=new speaker();
$n->nom=$_POST['nom'];
$n->prenom=$_POST['prenom'];
$n->poste=$_POST['poste'];
$n->biblio=$_POST['biblio'];
$n->photo=$_POST['photo'];
$n->id_ed=$_POST['Id_ed'];

$n->insertion();
header("location:../admin/appointment.php");

?>
