<<?php
include 'db.php';
session_start();
unset ($_SESSION['ID']);
header("Location: start.html");
 ?>
