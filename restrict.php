<?php
    //we need functions for dealing with session
    require_once("functions.php");

    //RESTRICTION - LOGGED IN
    if(isset($_SESSION["user_id"])){
        //redirect not logged in user to login page
        header("Location: login.php);
        
        
    }
    
    //?logout is on the URL

    if(isset($_GET["logout"])){
    //delete the session 
    session_destroy();
    
    header("location: login.php");    
    
    
}

?>

<h2> Welcome <?=$_SESSION["usename"];?> (<?=
$_SESSION["user_id"];?>) </h2>

<a href="?logout=1" > log out</a>

restricted