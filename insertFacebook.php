<html>
<body>
        <form action = 'insertFacebook.php' method ='post'>
Facebook URL:
<input type = 'text' name = 'facebookURL' id = facebookURL>
Band Name:
<input type = 'text' name = 'facebookBandName' id = facebookBandName>
<input type = "Submit" value = "Submit">
<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$facebookURL = $_POST['facebookURL'];
$facebookBandName = $_POST['facebookBandName'];

$sqlquery = "INSERT INTO Facebook VALUES ('$facebookURL', '$facebookBandName')";
$rs = mysqli_query($connection, $sqlquery);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>