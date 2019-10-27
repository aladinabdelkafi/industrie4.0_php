<?php

class edition{
	public $Id_ed ;
	public $nom;
	public $description;
	public $date_ed;
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
$req="insert into edition values('','$this->nom','$this->description','$this->date_ed')";
$res=$pdo->exec($req)or print-r($pdo->errorInfo());
return $res;
}
 public function modification($Id_ed){
	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update edition set nom='$this->nom' ,description='$this->description' ,date_ed='$this->date_ed' where id='$Id_ed'";  
		   $pdo->exec($req);
		   }
public function suppresion($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="delete FROM edition where Id_ed='$Id_ed'";
$pdo->exec($req);
}

public function consult_id($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from edition where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;

}
public function consultation_last_ed(){
	include_once("configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select Id_ed from edition where date_ed>=SYSDATE()";
$res=$pdo->query($req);
return $res;
}
public function consultation_date(){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select*from edition where date_ed>=SYSDATE()";
$res=$pdo->query($req);
return $res;
}
public function consultation_date2(){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select Id_ed from edition where date_ed<SYSDATE()";
$res=$pdo->query($req);
return $res;
}
public function consultation_date2c(){
	include_once("configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select Id_ed from edition where date_ed<SYSDATE()";
$res=$pdo->query($req);
return $res;
}
}
?>
