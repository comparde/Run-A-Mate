<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
        <link href="folder/css/eventCss.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="mainBody">
        <header>
            <h1 id="logo">Run-A-Mate</h1>
            <a href="profile.php"><h1 id="text">Din profil</h1></a>
            <h1>Logga ut</h1>
        </header>
        <div id="mainDiv">
            <div id="textDiv">
                <h3>RunEvents</h3>
				<?php 
				include 'db.php';
				$result = getEvents();
				echo "<table>
                    <tr>
                      <th>Eventnamn</th>
                      <th>Beskrivning</th>
                      <th>Plats</th>
					  <th>Startdatum</th>
					  <th>SkillLevel</th>
                    </tr>";
				while($row = $result->fetch_assoc())
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
               
                <button id="attendBtn">Delta</button>
            </div>
        </div>
        <footer>
            <p>telenr:xxx-xxxxxx</p>
            <p>Email: runamate@runaway.net
        </footer>
    </body>
</html>
