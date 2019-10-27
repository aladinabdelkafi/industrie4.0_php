<?php
include "../class/personne.class.php";
$n=new personne();
$n->suppresion($_GET['id']);
header("location:../admin/team.php");
?>