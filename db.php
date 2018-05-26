<?php
function connect()
		{
			$uname = "root";
			$pass = "";
			$host = "localhost";
			$dbname = "lab";

			$connection = new mysqli($host, $uname, $pass, $dbname);

		if ($connection->connect_error)
			{
			   return die("Connection failed: ".$connection.connect_error);
			}
			return $connection;
		}
//funktion som skapar unikt salt
function unique_salt()
		{
			return substr(sha1(mt_rand()),0,22);
		}
		function test_input($data)
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		function prepareString($data)
		{
		return mysqli_real_escape_string(connect(), test_input($data));
		}
//lägger till användare i databasen
function insertUser($name, $skillLevel, $email, $pword)
		{
		$unique_salt = unique_salt();
		$hash = sha1($pword.$unique_salt);
		 $query =  "INSERT INTO RunMate (name, skillLevel, email, pword, salt) VALUES ('". $name ." ', '". $skillLevel ." ','". $email ." ','". $hash ." ', '". $unique_salt ." ')";
		 connect() -> query ($query);
		}
function checkEmail($email)
		{
		$queryCheck = "SELECT email FROM runmate WHERE email = ('".$email."')";
		$exist = connect() -> query ( $queryCheck ) ;
		$row = $exist->fetch_assoc();
		return $exist = $row["email"];
		}
		function checkUsername($username)
				{
				$queryCheck = "SELECT name FROM RunMate WHERE name = ('".$username."')";
				$exist = connect() -> query ( $queryCheck ) ;
				$row = $exist->fetch_assoc();
				return $exist = $row["name"];
				}
function selectFromWhere($select, $from, $where, $data)
		{
		$query = "SELECT ".$select." FROM ".$from." WHERE ".$where." = ('".$data."')";
		$result = connect()->query($query);
		$row = $result->fetch_assoc();
		return $row[$select];
		}
function getComments()
		{
		$query = "SELECT * FROM Comments";
		$result = connect()->query($query);
		while ( $row = $result->fetch_assoc())
			{
			echo "<div class='comments'>";
				echo $row["email"].": ";
				echo $row["timestamp"]."<br>";
				echo $row["comment"]."<br>";
			echo "</div>";
			}
		}

function searchRunMate ($name)
		{
		return selectFromWhere("name", "RunMate", "name",  $name);
		}

function createEvent($name, $desc, $loc, $time, $mateName, $skillLevel)
{
	 $mID = selectFromWhere("mateID", "runmate", "name", $mateName);
	 $query =  "INSERT INTO runevent (eventName, description, location, startTime, mateID, skillLevel)
	 VALUES ('".$name."','".$desc."','".$loc."','".$time."','".$mID."','".$skillLevel."')";
	 connect() -> query($query);
}

//gör skaparen till runorganizer i runorganizertabellen

function insertRunOrganizer($mateName) {
	
	$mID = selectFromWhere("mateID", "runmate", "name", $mateName);
	$query = "SELECT eventID FROM runevent WHERE mateID = '".$mID."'";
	
	$eID = connect() -> query($query);
	
	while($row = $eID -> fetch_assoc()){
	$insert = "INSERT INTO runorganizer (mateID, eventID) VALUES ('".$mID."', '".$row["eventID"]."')";
	connect() -> query($insert);
	}
}

function getEvents() {
	$query = "SELECT * FROM runevent";
	$result = connect() -> query($query);
	return $result;
}

/* function getEventsOrganizer($mate) {
	$mID = selectFromWhere("mateID", "runmate", "name", $mate);
	$query = "SELECT eventID FROM runorganizer WHERE mateID = ('".$mID."')";
	$result = connect() -> query($query);
	return $result;
	
} */


function showAllParticipants($eventID)
{
	$query = "SELECT name
	FROM runmate, runners
	WHERE runners.mateID = runmate.mateID AND eventID = ('".$eventID."')";
	$result = connect()->query($query);
	while ( $row = $result->fetch_assoc())
	{
		echo $row["name"]."<br>";
	}
}

function deleteRunnerFromEvent ($name)
{
	$query = "DELETE FROM runevent WHERE mateID = ('".$name."')";
}

function becomeRunner ($eID, $mID) {
	$mateID = selectFromWhere("mateID", "runmate", "name", $mID);
	$query = "INSERT INTO runners VALUES ('".$eID."','".$mateID."')";
	connect() -> query($query);
	
}

function getEventsOrganizer($mate) {
	$mID = selectFromWhere("mateID", "runmate", "name", $mate);
	$query = "SELECT * FROM runevent WHERE mateID = ('".$mID."')";
	$result = connect() -> query($query);
	return $result;
}



function getEventsRunner ($mID) {
	$mateID = selectFromWhere("mateID", "runmate", "name", $mID);
	$query = "SELECT eventID FROM runners WHERE mateID = ('".$mateID."')";
	$result = connect() -> query($query);
	
	while ($row = $result->fetch_assoc()){
	$eQuery = "SELECT * FROM runevent WHERE eventID = ('".$row["eventID"]."')";
	$eResult = connect() -> query($eQuery);
		
	}
return $eResult;
}