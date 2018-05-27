<?php
include 'db.php';
$ID = $_GET['mate'];

deleteRunMate($ID);
echo "RunMate borttagen";
header("Refresh: 2; URL=adminPage.php");

?>
