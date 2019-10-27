<?php

class participant{
	public $id;
	public $nom ;
	public $prenom ;
	public $phone ;
	public $email;
	public $organisme;
	public $statu;
	public $Id_ed;
	
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

$req="insert into participant values('','$this->nom','$this->prenom','$this->phone','$this->email','$this->organisme','$this->statu','$this->Id_ed')";

$res=$pdo->exec($req)or print($pdo->errorInfo());
return $res;
}
 public function modification($id){
	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update participant set nom='$this->nom',prenom='$this->prenom',email='$this->email', organisme='$this->organisme', Id_ed='$this->Id_ed' where id='$id'";  
		   $pdo->exec($req);
		   }
public function suppresion($id){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="delete FROM participant where id='$id'";
$pdo->exec($req);
}

public function consult_Id_ed(){
	include_once("../configuration/config.php");
$n=new connexion();
$pdo=$n->CNXbase();
$req="select * from participant p, edition e where e.Id_ed=p.Id_ed and e.date_ed>=SYSDATE()" ;
$res=$pdo->query($req);
return $res;

}
public function consultation(){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select*from participant";
$res=$pdo->query($req);
return $res;
}
public function nbr_part(){
	include_once("../configuration/config.php");
$b=new connexion();
$pdo=$b->CNXbase();
$req="select count(*) from participant p , edition e where e.Id_ed=p.Id_ed and e.date_ed>=SYSDATE()";
$res=$pdo->query($req);
return $res;
}
}
?>