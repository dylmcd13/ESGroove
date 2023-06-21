<html>
<body>
        <form action = 'insertInstagram.php' method ='post'>
Instagram Handle:
<input type = 'text' name = 'instaHandle' id = instaHandle>
Band Name:
<input type = 'text' name = 'instaBandName' id = instaBandName>
<input type = "Submit" value = "Submit">
<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$instaHandle = $_POST['instaHandle'];
$instaBandName = $_POST['instaBandName'];

$sqlquery = "INSERT INTO Instagram VALUES ('$instaHandle', '$instaBandName')";
$rs = mysqli_query($connection, $sqlquery);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>