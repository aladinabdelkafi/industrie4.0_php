<?php
include "../class/session.class.php";

session_unset(); 
header("location:../index.php");
?>