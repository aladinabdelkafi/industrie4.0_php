<?php
class session{
	public $login;
	public $motdepasse;
public function __construct(){
    session_start();} //active la session
public function destruction(){
	 session_unset();} //libere la session
public function insert_session(){
	 include_once("../configuration/config.php");
	   $c=new connexion();
	   $pdo=$c->CNXbase();
	   $req="insert into session values('','$this->login','$this->motdepasse')";
	   $pdo->exec($req);}

	 public function modif_session($ancmdp){
	     include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();	 
		   $req="update session set motdepasse='$this->motdepasse' where login='$this->login' and motdepasse='$ancmdp'";
		   $pdo->exec($req); }

		   public function supp_session($id){
		 include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();
		   $req="delete from session where id='$id'";
		   $pdo->exec($req);}
		   
		   public function rech_session(){
		 include_once("../configuration/config.php");
	       $c=new connexion();
	       $pdo=$c->CNXbase();
		   $req="select count(*) from session where login='$this->login' and motdepasse='$this->motdepasse'";
		   $res=$pdo->query($req);//count retourne nombre de ligne
		   return $res; }
		   
}
?>