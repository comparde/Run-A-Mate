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
	<body>
		<body id="mainBody">
        <header>
            <h1 id="logo">Run-A-Mate</h1>
            <a href="profile.html"><h1 id="text">Your page</h1></a>
            <h1>Logga ut</h1>
        </header>

        <div id="mainDiv">
            <div id="textDiv">
            <h3>Skapa nytt RunEvent</h3>
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
			<h4>
			<label for="date">Date </label>
			<p><input id="date" type="date"></p>
			</h4>
			<p><button type='submit' id="createEventBtn">Create!</button></p>
			</form>
            </div>
        </div>
        <footer>
            <p>telenr:xxx-xxxxxx</p>
            <p>Email: runamate@runaway.net
        </footer>

	</body>
</html>
