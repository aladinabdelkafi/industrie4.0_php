<?php

class personne{
	public $id_per;
	public $nom_per ;
	public $prenom_per ;
	public $photo_per;
	public $id_com;
	
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
$req="insert into personne values('','$this->nom_per','$this->prenom_per','$this->photo_per','$this->id_com')";
$res=$pdo->exec($req)or print-r($pdo->errorInfo());
return $res;
}
 public function modification($id){

	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update personne set nom_per='$this->nom_per',prenom_per='$this->prenom_per',photo_per='$this->photo_per', id_com='$this->id_com' where id_per='$id'"; 
		   echo $req; 
		   $res=$pdo->exec($req);

		   }
public function suppresion($id){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="delete FROM personne where id_per='$id'";
$pdo->exec($req);
}

public function consult_Id_pers($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from personne where id_per='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult_Id_com($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from personne where id_com='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult_Id_com2($Id_ed){
	include_once("configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from personne where id_com='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consultation(){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select*from id_per";
$res=$pdo->query($req);
return $res;
}

}
?>