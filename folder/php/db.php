<?php
function connect()
		{
			$uname = "root";
			$pass = "";
			$host = "localhost";
			$dbname = "runmate";

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
//lägger till användare i databasen
function insertUser($name, $email, $pword)
		{
		$unique_salt = unique_salt();
		$hash = sha1($pword.$unique_salt);
		 $query =  "INSERT INTO RunMate (name, email, pword, salt) VALUES ('". $name ." ','". $email ." ','". $hash ." ', '". $unique_salt ." ')";
		 connect() -> query ($query);
		}
function checkEmail($email)
		{
		$queryCheck = "SELECT email FROM RunMate WHERE email = ('".$email."')";
		$exist = connect() -> query ( $queryCheck ) ;
		$row = $exist->fetch_assoc();
		return $exist = $row["email"];
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
