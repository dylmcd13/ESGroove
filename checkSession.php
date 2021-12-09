<?php
session_start();
$s = $_SESSION['email'];
if (isset($s))
{
//do nothing
} else {
header("location:Login.php");
}
?>
