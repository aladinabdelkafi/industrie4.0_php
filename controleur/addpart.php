<?php
include "../class/participant.class.php";
$f=new participant();
$f->nom=$_POST['nom'];
$f->prenom=$_POST['prenom'];
$f->phone=$_POST['phone'];
$f->email=$_POST['email'];
$f->organisme=$_POST['organisme'];
$f->statu=$_POST['statu'];
$f->Id_ed=$_POST['Id_ed'];

$f->insertion();


header("location:../index.php");

?>
