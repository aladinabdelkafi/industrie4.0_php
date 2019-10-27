<?php
include "../class/society.class.php";
$n=new society();
$n->suppresion($_GET['id']);
header("location:../admin/index.php");
?>