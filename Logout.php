<?php
session_start();
session_destroy(); //upon pressing logout button, we destroy the session and all of its data.
header("location:Login.php"); //Upon logout, redirect to home login page. This can be whatever our home login page is.
//whatever home login page is, change to location: filename.xxx
?>
