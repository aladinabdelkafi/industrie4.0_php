<?php
include "../class/society.class.php";
include "../class/organisateur.class.php";
$o=new organisateur();
$f=new society();
$x=$_POST['type_org'];
$res=$o->consult_id_ed($_POST['Id_ed']);


foreach($res as $r)
{ 
	if ($x==$r[2]) {
		$a=$r[0];
	}

}

$f->nom_society=$_POST['nom_society'];
$f->img_society=$_POST['img_society'];
$f->id_org=$a;

$f->insertion();
header("location:../admin/index.php");

?>
