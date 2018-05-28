<?php
include 'db.php';
connect();


// array för att samla errors
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//testar så att email-fältet inte är tomt och så att den inehåller @ och .
		if (empty(test_input($_POST["email"])))
					{
				    $errors["email"] = "Ange en email";
					}
			else if(0 === preg_match("/.+@.+\../", $_POST["email"]))
					{
					$errors["email2"] = "Skriv in en giltig email";
					}
			else
					{
				    $email = prepareString($_POST["email"]);
					}
//kollar så att lösenord är längre än 5 tecken
  if (strlen(test_input($_POST["password"])) < 5)
				{
			    $errors["password"] = "Lösenordet måste vara minst 5 tecken långt.";
			  }
	else
				{
			    $password = prepareString($_POST["password"]);
			  }
//kollar så att användarnamnet är längre än 1 tecken
  if (strlen(test_input($_POST["userName"])) < 1 )
  {
    $errors["userName"] = "Användernamnet måste vara längre.";
  }
  else
  {
    $username = prepareString($_POST["userName"]);
		//gör variabel av skillLevel
		$skillLevel = prepareString($_POST["skillLevel"]);
  }
}
//kollar så att email inte redan finns i databasen
if(test_input(checkEmail($email)) != $email)
		{
			//kollar så att användarnamn inte redan finns i databasen
			if (test_input(checkUsername($username))!= $username)
			{
			if(0 === count($errors))
			{
			insertUser($username, $skillLevel, $email, $password);
			echo "Registration successful! Please log in." ;
			header("Refresh: 5; URL=login 2.html");
			}

			else
			{
			echo '<pre>'; print_r($errors); echo '</pre>';
			header("Refresh: 5; URL=registr.html");
			}
		}else {
			echo "Användarnamnet används redan, vänligen välj annat.";
			header("Refresh: 5; URL=register.html");
					}
	}
else
		{
		echo "Email does already exist." ;
		header("Refresh: 5; URL=register.html");
		}

?>
