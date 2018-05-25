<?php
     include 'db.php';
     $name = prepareString($_POST["eventName"]);
     $description = prepareString($_POST["descr"]);
     $location = prepareString($_POST["location"]);
     $date = ($_POST["date"]);
     session_start();
     $ID = $_SESSION['ID'];
     createEvent($name, $description, $location, $date, $ID);



     header("Location: _runEvents.php");
 ?>
