<?php
include "../class/society.class.php";
$p=new society();

$p->id_society=$_POST['id_society'];
$p->nom_society= $_POST['nom_society'];
$p->img_society=$_POST['img_society'] ;
$p->id_org=$_POST['id_org'];

$p->modification($p->id_society);

header("location:../admin/index.php");

?>