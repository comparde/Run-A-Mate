<?php
     include 'db.php';
     $name = "POOP";
     $description = "TEST";
     $location = "FÅLHEAGEN";
     $date = "2017-02-02";

     $ID = "per";
$date = test_input($_POST["date"]);
	echo date('Y-m-d');
	echo $date;
	if ($date < date('Y-m-d'))
	{	echo "funkade att jämföra";	}
	else
		{echo "nej";}
 ?>
