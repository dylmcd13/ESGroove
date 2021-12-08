<html>
<body>
        <form action = 'insertUsers.php' method ='post'>
Username:
<input type = 'text' name = 'username' id = username>
Password:
<input type = 'text' name = 'password' id = password>
<input type = "Submit" value = "Submit">
<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$username = $_POST['username'];
$password = $_POST['password'];

$sqlquery = "INSERT INTO users VALUES ('$username', '$password')";
$rs = mysqli_query($connection, $sqlquery);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>