<?php

class speaker{
	public $id_speak;
	public $nom ;
	public $prenom ;
	public $poste;
	public $biblio;
	public $photo;

	public function __construct(){	}
	
	public function __get($att){
		return $this->$att;
	}
public function __set($att,$vall){
		$this->$att=$vall;
	}
public function insertion ()
{
include_once("../configuration/config.php");
$c=new connexion();
$pdo=$c->CNXbase();
$req="insert into speaker values('','$this->nom','$this->prenom','$this->poste','$this->biblio','$this->photo')";
$pdo->exec($req);
$req="select * from speaker " ;
$res=$pdo->query($req);
 foreach($res as $r)
 {
 	$a=$r[0];
}
$req="insert into ed_sp values('$this->id_ed','$a')";
$pdo->exec($req);
}

public function insertion2 ($a,$b)
{
include_once("../configuration/config.php");
$c=new connexion();
$pdo=$c->CNXbase();

$req="insert into ed_sp values('$a','$b')";
$pdo->exec($req);
}
 public function modification($id){

	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update speaker set nom='$this->nom',prenom='$this->prenom',poste='$this->poste', biblio='$this->biblio', photo='$this->photo'  where id_speak='$id'";  
$pdo->exec($req);
		  
		   }
public function suppresion($id){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req0="select count(*) from ed_sp where id_speak ='$id'" ;
$res=$pdo->query($req0);
foreach ($res as $value) {
	if($value[0]==1){
		$req="delete FROM speaker where id_speak='$id'";
		
	}
	else
	{
$req="delete FROM ed_sp where id_speak='$id' and Id_ed=(select Id_ed from edition where date_ed>=SYSDATE())";
	}
	$pdo->exec($req);

}


//
//$pdo->exec($req);
}

public function consult_Id_spk($id_speak){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from speaker where id_speak='$id_speak'" ;
$res=$pdo->query($req);
return $res;
}

public function consultation(){
	include_once("configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select*from speaker";
$res=$pdo->query($req);
return $res;
}

public function consultationadmin(){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select*from speaker";
$res=$pdo->query($req);
return $res;
}
public function consultation_sp_id($id){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select*from ed_sp where Id_ed='$id'";
$res=$pdo->query($req);
return $res;
}
public function consultation_id_ed($id){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select *  from speaker s , ed_sp es where s.id_speak=es.id_speak and es.Id_ed='$id' and s.id_speak in(select DISTINCT id_speak from ed_sp)";
$res=$pdo->query($req);
return $res;
}
public function consultation_id_ed2($id){
	include_once("configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select *  from speaker s , ed_sp es where s.id_speak=es.id_speak and es.Id_ed='$id' and s.id_speak in(select DISTINCT id_speak from ed_sp)";
$res=$pdo->query($req);
return $res;
}

}
?>