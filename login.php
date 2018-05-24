<!DOCTYPE html>

<html>    

<<<<<<< HEAD
echo '
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <link href="folder/css/login.css" rel="stylesheet" type="text/css"/>
    <div id="divHeader">
        <header id="formHeader">
            <a href="index.php"><h1>Run-A-Mate</h1></a>
            <h1>Logga in</h1>
            <a href="register.php"><h1>Registrera dig</h1></a>
        </header>
    </div>
    <div id="divRegisterForm">
        <form id="registerForm" name="registerForm" method="post" action="register-process.php">
            <label>
            Ange epost<input type="text" default="Type your email" id="email" name="email" class="inputCss">
            </label>
            <label>
            Ange lösenord<input type="password" default="Type your password" id="password" name="password" class="inputCss">
            </label>
            <input type="submit" value"Registrera" id="submitBtn">
        </form>
    </div>';
=======
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
>>>>>>> b6bc1821e0d0700638a6304a3d7ed6ed7bcd30d6
