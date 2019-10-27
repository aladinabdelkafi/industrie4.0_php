<?php
include "../class/session.class.php";
$s=new session();
$s->login=$_POST['login'];
$s->motdepasse=$_POST['motdepasse'];
$row=$s->rech_session();
$l=$row->fetchColumn(0);//1 ligne 1 column
if($l==0){

header("location:../team.html");

 }
    else {
		session_start();
           $_SESSION['login']=$s->login;
		   $_SESSION['motdepasse']=$s->motdepasse;
		   
		 header("location:../admin/index.php");
		  }
?>