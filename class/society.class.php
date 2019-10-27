<?php

class society{
	public $id_society;
	public $nom_society ;
	public $img_society ;
	public $id_org;
	
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
$req="insert into society values('','$this->nom_society','$this->img_society','$this->id_org')";
$pdo->exec($req);}

 public function modification($id){

	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update society set nom_society='$this->nom_society',img_society='$this->img_society', id_org='$this->id_org'  where id_society='$id'";  
$pdo->exec($req);
		  
		   }
public function suppresion($id){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="delete FROM society where id_society='$id'";
$pdo->exec($req);
}

public function consult_Id_org($id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from society where id_org='$id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult_Id_org2($id_ed){
	include_once("configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from society where id_org='$id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult_Id_soc($id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from society where id_society='$id_ed'" ;
$res=$pdo->query($req);
return $res;
}
}
?>