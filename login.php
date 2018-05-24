echo '
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <link href="folder/css/login.css" rel="stylesheet" type="text/css"/>
    <a href="../polen/Run-A-Mate/login.php"></a>
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