<?php
include 'db.php';
session_start();
if (!isset($_SESSION['ID']))
{
  header("Location: start.html");
}
$ID = $_SESSION['ID'];
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Run-A-Mate</title>
		<link href="folder/css/eventCss.css" rel="stylesheet" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body id="mainBody">

        <header>
            <h1 id="logo">Run-A-Mate</h1>
            <a href="_runEvents.html"><h1 id="text">RunEvents</h1></a>
			<a href="eventCreater.html"><h1 id="text">Skapa nytt RunEvent</h1></a>
            <a href="logut.php"><h1 id="text">Logga ut</h1></a>
        </header>

		<div id="mainDiv">
		<div id="profile">
		<h3>Välkommen, <?php echo $ID; ?> !</h3>
		<img src="https://www.ideabuyer.com/wp-content/uploads/2017/10/profileimg-1.jpg" style="width:15%;height:15%;">
		<h4> Färdigheter: </h4>
		<p><?php echo selectFromWhere("skillLevel", "runmate", "name", $ID);  ?></p>
		<h4> Tidigare RunEvents: </h4>
		<p> Löprunda i Stabbyskogen 03-04-2018</p>
		<p> Backträning i Sunnersta 05-20-2018</p>
		</div>
		<div id="events">
			<h3>Du är anmäld till följande RunEvents</h3>
			<p>Löprunda i Stadsskogen</p>
			<p>Backträning i Mördarbacken</p>
			<a href="_runEvents.html">Anmäl dig till fler RunEvents här!</a>
		</div>
		</div>
		<footer>
			<p>Footer</p>
		</footer>

	</body>
</html>
