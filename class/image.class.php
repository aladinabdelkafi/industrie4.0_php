
<?php

class image{
	public $id_img  ;
	public $path ;
	public $id_ed ;
	
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
$req="insert into image values('','$this->path','$this->id_ed')";
$pdo->exec($req);

}

public function suppresion($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="delete FROM image where id_img='$Id_ed'";
$pdo->exec($req);
}
 

public function consultadmin($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select *  from image  where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function consult($Id_ed){
	include_once("configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select *  from image  where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function nbr($Id_ed){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select count(*)  from image  where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
public function nbr2($Id_ed){
	include_once("configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select count(*)  from image  where Id_ed='$Id_ed'" ;
$res=$pdo->query($req);
return $res;
}
}
?>
