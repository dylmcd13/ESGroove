<html>
<body>
        <form action = 'insertTwitter.php' method ='post'>
Twitter Handle:
<input type = 'text' name = 'twitterHandle' id = twitterHandle>
Band Name:
<input type = 'text' name = 'twitterBandName' id = twitterBandName>
<input type = "Submit" value = "Submit">
<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$twitterHandle = $_POST['twitterHandle'];
$twitterBandName = $_POST['twitterBandName'];

$sqlquery = "INSERT INTO Twitter VALUES ('$twitterHandle', '$twitterBandName')";
$rs = mysqli_query($connection, $sqlquery);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>