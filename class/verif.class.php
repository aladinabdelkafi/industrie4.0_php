<?php

class verif{
	public function verifNul($v)
	{
		return !empty($v);
	}
		public function verifdate($v)
	{ $j=substr($v,0,2);
	  $m=substr($v,3,2);
	  $a=substr($v,6,4);
		return checkdate($m,$j,$a);
	}
	public function verifalfa($v)
	{
		return ctype_alpha($v);
	}
	public function verifnum($v)
	{
		return is_numeric($v);
	}
	}

?>