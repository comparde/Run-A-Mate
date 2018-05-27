<?php
include 'db.php';
$eID = $_GET['event'];

deleteRunEvent($eID);
          echo "Event borttaget";
      		 header("Refresh: 2; URL=adminPage.php");

?>
