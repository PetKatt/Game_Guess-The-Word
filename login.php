<?php
	session_start(); //now it is possible to use global variable "$_SESSION" to send data between many ".php scripts"
	
	if(!isset($_POST['login']) || (!isset($_POST['password']))){
		header('Location: index.php');
		exit();
	}
	
	require_once "connect.php"; //download data from connect.php script
	
	$dbc = @new mysqli($host, $db_user, $db_password, $db_name); //make a NEW connection!
	
	if ($dbc->connect_errno!=0){
			echo "Error: " . $dbc->connect_errno . " Opis: " . $dbc->connect_error;
	} else {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		// protection from SPECIAL CHARACTERS made by USER in the INPUT tag!
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
		
		if($result = @$dbc->query(
				sprintf("SELECT * FROM uzytkownicy WHERE login = '%s' AND pass = '%s'", //remember about adding apostophes '' and quotation mark "" in the SPECIFIC ORDER
				mysqli_real_escape_string($dbc, $login),                            	//special processing of input to prevent from SQL Injections hacks
				mysqli_real_escape_string($dbc, $password)))){    						//special processing of input to prevent from SQL Injections hacks
				
			$numUsers = $result->num_rows;
			if($numUsers==1){
				$_SESSION['logIn'] = true;
				$row = $result->fetch_assoc();
				$_SESSION['id'] = $row['id'];
				$_SESSION['login'] = $row['login'];
				$_SESSION['email'] = $row['email'];
				
				unset($_SESSION['fail']); //DESTROY one element of SUPERGLOBAL variable "$_SESSION"
				$result->close();
				header('Location: game.php');
				
			} else {
				$_SESSION['fail'] = '<span style="color:red;">Incorrect login or password!</span>';
				header('Location: index.php');
			}
		} 
		
		
		$dbc->close();
	}
	
	
?>