<<?php
include 'db.php';
session_start();
unset ($_SESSION['ID']);
unset ($_SESSION['adminID']);
header("Location: start.html");
 ?>
