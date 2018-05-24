<?php

//include 'include/views/_header.php';
echo '
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <link href="assets/css/register.css" rel="stylesheet" type="text/css"/>
    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/js/actions.js" type="text/javascript"></script>
    <body>
        <div id="divHeader">
            <header id="formHeader">
                <a href="index.php"><h1>Run-A-Mate</h1></a>
                <a href="login.php"><h1>Logga in</h1></a>
                <h1>Registrera dig</h1>
            </header>
        </div> 
        <div id="divRegisterForm">
            <form id="registerForm" name="registerForm" method="post" action="register-process.php">
                <label class="theLabel">
                    Ange epost<input type="text" default="Type your email" id="email" name="email" class="inputCss">
                </label>
                <label class="theLabel">
                    Ange Användarnamn<input type="text" id="userName" name="userName" class="inputCss">
                </label>
                <label class="theLabel">
                    Ange lösenord<input type="password" default="Type your password" id="password" name="password" class="inputCss">
                </label>
                <input type="submit" value"Registrera" id="submitBtn">
            </form>
        </div>
    </body>';

