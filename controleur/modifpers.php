<?php
include "../class/personne.class.php";
include "../class/edition.class.php";
include "../class/comite.class.php";
$e=new edition();
$c=new comite();
$f=new personne();

$x=$_POST['nom_com'];

$res=$c->consult_id($_POST['Id_ed']);
$a=-1;
foreach($res as $r)
{ 
	if ($x==$r[1]) {
		$a=$r[0];
	}

}

$f->nom_per=$_POST['nom_per'];
$f->prenom_per=$_POST['prenom_per'];
$f->photo_per=$_POST['photo_per'];
$f->id_com=$a;



$f->modification($_POST['id_per']);

header("location:../admin/team.php");
?>