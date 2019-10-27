<?php
include "../class/speaker.class.php";
$p=new speaker();

$p->id_speak=$_POST['id_speak'];
$p->nom= $_POST['nom'];
$p->prenom=$_POST['prenom'] ;
$p->poste=$_POST['poste'];
$p->biblio=$_POST['biblio'];  
$p->photo=$_POST['photo'];  
$p->id_ed=$_POST['id_ed'];  
$p->modification($_POST['id_speak']);

header("location:../admin/appointment.php");

?>