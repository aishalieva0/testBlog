<?php
// session_start();

function isLogged(){
    
    if(!isset($_SESSION['logged_in'])){
        $_SESSION['error_message'] = "Log In for using admin panel";
        header("Location:login.php");
    }
}
