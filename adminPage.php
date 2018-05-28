<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adminsida</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
        <link href="folder/css/eventCss.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body id="mainBody">
	<div id="bg">
        <header>
            <h1 id="logo">Adminsida</h1>
            <a href="profile.php"><h5 id="text">Din profil</h5></a>
            <a href="logut.php"><h5 id="text">Logga ut</h5></a>
        </header>
        <div id="mainDiv">
            <div id="profile2">
                <h3>RunEvents</h3>
                <div class="eventBox" id="eventBox">
                    <form action="deleteEventProcess.php" method="GET">
                <?php
                include 'db.php';
                session_start();
                $isAdmin = isAdminSession();
                if($isAdmin === TRUE){
                echo "<table>
                    <tr>
                        <th>Eventnamn</th>
                        <th>Beskrivning</th>
                        <th>Plats</th>
                        <th>Startdatum</th>
                        <th>SkillLevel</th>
                        <th>Välj ett RunEvent </th>
                    </tr>";

                listEvents();
                }
                else{
                    header("location: profile.php");
                }

                function isAdminSession(){
                    $isAdmin = FALSE;
                    if(isset($_SESSION['adminID'])){
                        $isAdmin = TRUE;
                    }
                    else{
                        $isAdmin = FALSE;
                    }
                    return $isAdmin;
                }


            ?>
      </div>
                <button type="submit" id="deleteEventBtn">Ta bort RunEvent</button>
			</form>
      <h3>RunMates</h3>
      <div class="eventBox" id="eventBox">
<form action="deleteMateProcess.php" method="GET">
<?php
echo "<table>
      <tr>
            <th>MateID</th>
            <th>namn</th>
            <th>F�rdighet</th>
            <th>Email</th>
            <th>Välj en RunMate </th>
      </tr>";
              listRunMates();
?>
</div>
<button type="submit" id="deleteEventBtn">Ta bort RunEvent</button>
            </div>
        </div>
		</div>
        <footer>
            <p>telenr:xxx-xxxxxx</p>
            <p>Email: runamate@runaway.net
        </footer>
    </body>
</html>
