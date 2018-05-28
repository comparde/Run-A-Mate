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
            <a href="_runEvents.php"><h5 id="text">RunEvents</h5></a>
			<a href="eventCreater.php"><h5 id="text">Skapa nytt RunEvent</h5></a>
            <a href="logut.php"><h5 id="text">Logga ut</h5></a>
        </header>

		<div id="mainDiv">
		<div id="profile">
		<h3>Välkommen, <?php echo $ID; ?> !</h3>
		<img src="https://www.ideabuyer.com/wp-content/uploads/2017/10/profileimg-1.jpg" style="width:15%;height:15%;">
		<h4> Din SkillLevel: </h4>
		<p><?php echo selectFromWhere("skillLevel", "runmate", "name", $ID);  ?></p>
		<h4> Tidigare RunEvents: </h4>
		<?php $pastResult = getPastEvents();
			 echo "<table>
				<tr>
					<th>Eventnamn</th>
					<th>Beskrivning</th>
					<th>Plats</th>
					<th>Startdatum</th>
					<th>SkillLevel</th>
				</tr>";
				if($pastResult == NULL) {
					echo 'Du är inte anmäld till något RunEvent';
				}
				else {
					
			while($row = $pastResult->fetch_assoc())
				{
					echo
					"<tr>
						<td>".$row["eventName"]."</td>
						<td>".$row["description"]."</td>
						<td>".$row["location"]."</td>
						<td>".$row["startTime"]."</td>
						<td>".$row["skillLevel"]."</td>
					</tr>";
					
				}
				}
				echo "</table>";
		?>
		</div>
		<div id="events">
			<h3>Du är anmäld till följande RunEvents</h3>
			<?php $runnerResult = getEventsRunner($ID);
			 echo "<table>
				<tr>
					<th>Eventnamn</th>
					<th>Beskrivning</th>
					<th>Plats</th>
					<th>Startdatum</th>
					<th>SkillLevel</th>
				</tr>";
				if($runnerResult == NULL) {
					echo 'Du är inte anmäld till något RunEvent';
				}
				else {
					
			while($row = $runnerResult->fetch_assoc())
				{
					echo
					"<tr>
						<td>".$row["eventName"]."</td>
						<td>".$row["description"]."</td>
						<td>".$row["location"]."</td>
						<td>".$row["startTime"]."</td>
						<td>".$row["skillLevel"]."</td>
					</tr>";
					
				}
				}
				echo "</table>";
				
			?>
			<a href="_runEvents.php">Anmäl dig till fler RunEvents här!</a>
			<h3>Du är RunOrganizer till följande RunEvents</h3>
			<?php $organizeResult = getEventsOrganizer($ID);
					echo "<table>
                    <tr>
                      <th>Eventnamn</th>
                      <th>Beskrivning</th>
                      <th>Plats</th>
					  <th>Startdatum</th>
					  <th>SkillLevel</th>
                    </tr>";
				while($row = $organizeResult->fetch_assoc())
				{
					echo
					"<tr>
						<td>".$row["eventName"]."</td>
						<td>".$row["description"]."</td>
						<td>".$row["location"]."</td>
						<td>".$row["startTime"]."</td>
						<td>".$row["skillLevel"]."</td>
					</tr>";
					
				}
				echo "</table>";





			?>
		</div>
		</div>
		<footer>
			<p>Footer</p>
		</footer>

	</body>
</html>
