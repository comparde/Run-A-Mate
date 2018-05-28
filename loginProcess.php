<?php
include 'db.php';
  if(isset($_POST['email']))
  {
    $email = prepareString($_POST['email']);
    $passw = prepareString($_POST['password']);
    $salt = test_input(selectFromWhere('salt', 'runmate', 'email', $email));
    $hashFromDB = test_input(selectFromWhere('pword', 'runmate', 'email', $email));
    $loginHash = sha1($passw.$salt);
    $adminUser = "pelle";


    if($email === $adminUser){
        header("URL=adminPage.php");
    }
    else{
        if ($loginHash == $hashFromDB)
        {
            session_start();
            $name = selectFromWhere('name', 'runmate', 'email', $email);
            $_SESSION['ID']= $name;
            echo "Inloggningen lyckades!";
            header("Refresh: 1; URL=profile.php");
        }
        else
        {
            echo "Inloggningen misslyckades, försök igen";
            header("Refresh: 3; URL=login 2.html");
        }
    }


    
}

?>
