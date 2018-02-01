<?php
	session_start(); //now it is possible to use global variable "$_SESSION" to send data between many ".php scripts"
	
	session_unset(); //DESTROY whole session => SUPERGLOBAL variable "$_SESSION" is DESTROYED COMPLETLY!!!
	
	header('Location: index.php');
?>
