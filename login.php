<!DOCTYPE html>

<html>    

	<head>
	<meta charset="UTF-8">
		<title>Run-A-Mate</title>
		<link rel="stylesheet" href="main1.css">
	</head>
	<body>
		<div id="reg">
		<h2> Logga in </h2>	
		<form name="login" method="post" onsubmit=";" action="">		
			<p><input type="text" id="mail" name="mail" placeholder="E-post"></p>			
			<p><input type="password" id="pw" name="pw" placeholder="Lösenord"></p>
			<p><button type='submit'>Login</button></p>
		</form>
		<form name="sendToReg" method="post" action="registration.php">
		<p> Inte medlem?</p>
		<p><button type='submit'>Registrera!</button></p>
		</form>
		</div>
	</body>
</html>