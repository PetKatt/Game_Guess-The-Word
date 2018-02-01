<?php
	session_start(); //now it is possible to use global variable "$_SESSION" to send data between many ".php scripts"
	
	// if user is ALREADY LOGED IN go to "game.php"
	if(isset($_SESSION['logIn']) && ($_SESSION['logIn']==true)){
		header('Location: game.php');   //method "header()" is done AT THE END of this script SO method "exit()" IS JUST BELOW!
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta htp-equiv="X-UA-Compatible" cotent="IE=edge, chrome=1" />
		<title>Wisielec - gra przeglądarkowa</title>
		
		<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<script src="gallows.js"></script>
	</head>
	<body>
		<!-- PANEL LOGOWANIA-->
		
		<h2>Tylko martwi ujrzeli koniec wojny - Platon</h2><br />
		
		<form action="login.php" method="post">
			
			Login: <br /><input type="text" name="login" /> <br />
			Password: <br /><input type="password" name="password" /><br /><br />
			<input type="submit" value="Log In" />
			
		</form>
		
<?php
	if(isset($_SESSION['fail'])){
		echo $_SESSION['fail'];
	}
?>
		
		<br /><br /><br /><br />
		
<?php
// define variables and set to empty values
$nameErr = $emailErr = $newLoginErr = $newPasswordErr = $genderErr = "";
$name = $email = $newLogin = $newPassword = $gender = $presentation =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["newLogin"])) {
    $newLoginErr = "Login is required";
  } else {
    $newLogin = test_input($_POST["newLogin"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$newLogin)) {
      $newLoginErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["newPassword"])) {
    $newPasswordErr = "Password is required";
  } else {
    $newPassword = test_input($_POST["newPassword"]);
  }

  if (empty($_POST["presentation"])) {
    $presentation = "";
  } else {
    $presentation = test_input($_POST["presentation"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
?>



		<!-- PANEL REJESTRACJI-->
		
		<h2>Zarejestruj się!</h2><br />
		
		<p><span class="error">* required field.</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			
			Name: <input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
			<br /><br />
			
			E-mail: <input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span>
			<br /><br />
			
			Login: <input type="text" name="newLogin" value="<?php echo $newLogin;?>">
			<span class="error">*<?php echo $newLoginErr;?></span>
			<br /><br />
			
			Password: <input type="text" name="newPassword" value="<?php echo $newPassword;?>">
			<span class="error">*<?php echo $newPasswordErr;?></span>
			<br /><br />
			
			Your Presentation: <textarea name="presentation" rows="5" cols="40"><?php echo $presentation;?></textarea>
			<br /><br />
			
			Gender:
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
			<br /><br />
			
			<input type="submit" name="submit" value="Register">  
		</form>
		
<?php
//INSERT User's Inputs to DATABASE

// Create connection
require_once "connect.php"; //download data from connect.php script
$dbc = @new mysqli($host, $db_user, $db_password, $db_name); //make a NEW connection!
// Check connection
if ($dbc->connect_errno!=0){
			echo "Error: " . $dbc->connect_errno . " Opis: " . $dbc->connect_error;
	} else {
		$sql = "INSERT INTO uzytkownicy (login, pass, email, name, presentation, gender)
				VALUES ($newLogin, $newPassword, $email, $name, $presentation, $gender)";

		if ($dbc->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br />" . $dbc->error;
		}

	$dbc->close();
	}
?>

	</body>
</html>