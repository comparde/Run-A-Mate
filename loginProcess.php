<?php 

if(isset($_POST['email'])){
    $login = $_POST['email'];
    $passw = $_POST['password'];
    echo $login.' '.$passw;
}
?>