<?php
include "../class/session.class.php";
$s=new session();
$s->login=$_POST['login'];
$s->motdepasse=$_POST['motdepasse'];
$nouvmdp=$_POST['nouvmdp'];
$reecnouvmdp=$_POST['reecnouvmdp'];
$res=$s->rech_session();
$l=$res->fetchColumn(0);
if($l==0)
header("location:../vue/formModifSess.html");
else {
	if($nouvmdp!=$reecnouvmdp)
	header("location:../vue/formModifSess.html");
	else
	{
		$ancmdp=$s->motdepasse;
		$s->motdepasse=$nouvmdp;
		$s->modif_session($ancmdp);
		$_SESSION['login']=$s->login;
		$_SESSION['motdepasse']=$s->motdepasse;
		header("location:../vue/page_securise.php");
	}
}


?>