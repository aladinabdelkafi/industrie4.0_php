<?php
class connexion {
public	function CNXbase () {
		$dbc=new PDO ('mysql:host=localhost;dbname=industrie40vers2','root','');
		return $dbc;
	}
}
?>