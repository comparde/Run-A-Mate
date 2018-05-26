<?php
include 'db.php';
$eID = $_GET['event'];

session_start();
if (!isset($_SESSION['ID']))
{
  header("Location: start.html");
}
$ID = $_SESSION['ID'];

becomeRunner($eID, $ID);
echo "Du är nu anmäld till ett RunEvent! Återgår till din profil...";
      		 header("Refresh: 3; URL=profile.php");

?>