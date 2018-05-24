<?php
include 'db.php';
connect();

//Funktion som randomiserar ett unikt salt i registreringsprocessen

// array för att samla errors
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty(test_input($_POST["email"]))) {
    $errors["email"] = "Ange en email";
	}// kollar att email inehåller text@text.
	else if(0 === preg_match("/.+@.+\../", $_POST["email"])){
	$errors["email2"] = "Skriv in en giltig email";
	}
	else {
    $email = prepareString($_POST["email"]);}

  if (strlen(test_input($_POST["password"])) < 5) {
    $errors["password"] = "Lösenordet måste vara minst 5 tecken långt.";
  } else {
    $password = prepareString($_POST["password"]);
  }

  if (strlen(test_input($_POST["userName"])) < 1 )
  {
    $errors["userName"] = "Användernamnet måste vara längre.";
  }
  else
  {
    $username = prepareString($_POST["userName"]);
  }
}
if(test_input(checkEmail($email)) != $email)
		{
			if(0 === count($errors))
			{
			insertUser($username, $email, $password);
			echo "Registration successful! Please log in." ;
			header("Refresh: 5; URL=login.php");
			}

			else
			{
			echo '<pre>'; print_r($errors); echo '</pre>';
			header("Refresh: 5; URL=registration.php");
			}
		}
else
		{
		echo "Email does already exist." ;
		header("Refresh: 5; URL=registration.php");
		}

?>
