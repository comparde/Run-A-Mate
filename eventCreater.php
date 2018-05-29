<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['ID']))
{
  header("Location: start.html");
}


?>
<html lang="en">
	<head>
		<title>Run-A-Mate</title>
		<link href="folder/css/eventCss.css" rel="stylesheet" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
		<script src="folder/js/googlemaps.js"></script>
	</head>
	<body>
		<body id="mainBody">
		<div id="bg">
        <header>
            <h1 id="logo">Run-A-Mate</h1>
            <a href="profile.php"><h5 id="text">Din profil</h5></a>
            <a href="logut.php"><h5 id="text">Logga ut</h5></a>
        </header>

        <div id="mainDiv">
            <div id="textDiv">
			<div id="columnDiv">
            <h2>Skapa nytt RunEvent</h2>
                <form name="create" method="post" action="createEvent.php">
			<h4>
			<label for="eventName">Event Name</label>
			<p><input type="text" id="eventName" name="eventName" placeholder="Enter a name for the event"</p>
			</h4>
			<h4>
			<label for="descr">Event Description</label>
			<p><textarea type="text" id="descr" name="descr" placeholder="A short description of the event, difficulty level etc.." ></textarea></p>
			</h4>
			<h4>
			<label for="location">Location </label>
			<p><input type="text" id="location" name="location" placeholder="The starting location"</p>
			</h4>
			<p><img src="googlemaps.png" id="locationimg" alt="Location"></p>
			<h4>
			<label for="date">Date </label>
			<p><input id="date" type="date" name="date"></p>
			</h4>
			<h4>
			<label for="skillLevel">Skill Level</label>
			<p>
			<select name="skillLevel">
					<option value='1 - Nybörjare'>1 - Nybörjare</option>
					<option value='2 - Vardagsmotionär'>2 - Vardagsmotionär</option>
					<option value='3 - God löpare'>3 - God löpare</option>
					<option value='4 - Mycket god löpare'>4 - Mycket god löpare</option>
					<option value='5 - Elitnivå'>5 - Elitnivå</option>
			</select>
			</p>
			<p><button type='submit' id="createEventBtn">Create!</button></p>
			</form>
			</div>
            </div>
        </div>
		</div>
        <footer>
			<p>Footer</p>
		</footer>

	</body>
</html>
