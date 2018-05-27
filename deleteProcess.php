<?php
include 'db.php';
$eID = $_GET['event'];



deleteRunEvent($eID);
echo "Runevent borttaget";
      		 header("Refresh: 3; URL=adminPage.php");

?>
