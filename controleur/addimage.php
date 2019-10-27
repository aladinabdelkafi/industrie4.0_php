<?php
include "../class/image.class.php";
$f=new image();

$f->id_ed=$_POST['id_ed'];



foreach ($_POST['multiUpload'] as $fileName) { 
	$f->path=$fileName;
   $f->insertion();}
header("location:../admin/gallery.php");
?>
