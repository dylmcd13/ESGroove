<?php session_start();
$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB'); //connection to ESGroove database
global $connection; //global connection variable

if (isset($_POST['email']) && isset($_POST['password'])){
// Assigning posted values to variables.

$username = $_POST['email'];
$password = $_POST['password'];
// Checking the values are existing in the database or not

$query = "SELECT * FROM users WHERE username = '$username' && password = '$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

$count = mysqli_num_rows($result);
// If the posted values are equal to the database values, then session will be created for the user.

if ($count > 0){

$_SESSION['email'] = $username;

header("location:AdminMenu.php"); //whatever the name of our home page is

}else{
// If the login credentials do not match, an error message will be shown.

echo "Invalid Login Credentials. Please try again.";

}

} else {

header("location:Login.php");

}
?>



