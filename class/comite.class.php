<?php

class comite{
	public $id_com ;
	public $categorie;
	public $Id_ed;
	
	public function __construct(){
		
	}
	
	public function __get($att){
		return $this->$att;
	}
public function __set($att,$vall){
		$this->$att=$vall;
	}

public function consult_id($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select*from commiter  where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult_id2($Id_ed){
	include_once("configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select*from commiter  where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult(){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select DISTINCT categorie from commiter " ;
$res=$pdo->query($req);
return $res;
}
public function consult_id_com($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select*from commiter  where id_com='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
}
?>
