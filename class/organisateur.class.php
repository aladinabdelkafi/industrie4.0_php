<?php

class organisateur{
	public $id_org ;
	public $id_ed;
	public $type_org;

	public function __construct(){
		
	}
	
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
$req="insert into organisateur values('','$this->id_ed','$this->type_org')";
$res=$pdo->exec($req)or print-r($pdo->errorInfo());
return $res;
}
 public function modification($Id_ed){
	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update organisateur set id_ed='$this->id_ed' ,type_org='$this->type_org' where id_org='$Id_ed'";  
		   $pdo->exec($req);
		   }
public function suppresion($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="delete FROM organisateur where id_org='$Id_ed'";
$pdo->exec($req);
}

public function consult_id_ed($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from organisateur where id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;

}
public function consult_id_ed2($Id_ed){
	include_once("configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from organisateur where id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;

}
public function consult_id_org($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from organisateur where id_org='$Id_ed'" ;
$res=$pdo->query($req);
return $res;

}
public function consult(){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select DISTINCT type_org from organisateur" ;
$res=$pdo->query($req);
return $res;
}

}
?>
