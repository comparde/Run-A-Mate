<?php
    include 'db.php';
    $name = test_input(prepareString($_POST["eventName"]));
    $description = test_input(prepareString($_POST["descr"]));
    $location = test_input(prepareString($_POST["location"]));
    $date = test_input($_POST["date"]);
	$skillLevel = test_input(prepareString($_POST['skillLevel']));
    session_start();
    $ID = $_SESSION['ID'];
	
	if (strlen($name) == 0)
	{
		echo "The event needs a name!";
		header("Refresh: 3; url=eventCreater.php");
	}
	else if (strlen($description) == 0)
	{
		echo "The event needs a description!";
		header("Refresh: 3; url=eventCreater.php");
	}
	else if (strlen($location) == 0)
	{
		echo "The event needs a location!";
		header("Refresh: 3; url=eventCreater.php");
	}
	else if (strlen($date) == 0)
	{
		echo "The event needs a date!";
		header("Refresh: 3; url=eventCreater.php");
	}
	else
	{
		if ($date < date('Y-m-d')) {
			die ("Enter a date that has not yet passed!");
		}
		createEvent($name, $description, $location, $date, $ID, $skillLevel);
		insertRunOrganizer($ID);
		header("Location: _runEvents.php");
	}
 ?>