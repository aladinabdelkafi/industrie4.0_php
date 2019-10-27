<?php
include "../class/speaker.class.php";
$n=new speaker();
$n->suppresion($_GET['id']);
header("location:../admin/appointment.php");
?>