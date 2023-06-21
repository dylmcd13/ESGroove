<html>
<body>
        <form action = 'insertVenues.php' method ='post'>
Venue Name:
<input type = 'text' name = 'venueName' id = venueName>
Venue Established:
<input type = 'text' name = 'venueEstablished' id = venueEstablished>
Type of venue:
<input type = 'text' name = 'venueType' id = venueType>
Venue Address:
<input type = 'text' name = 'venueAddress' id = venueAddress>
<input type = "Submit" value = "Submit">
<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$venueName = $_POST['venueName'];
$venueEstablished = $_POST['venueEstablished'];
$venueType = $_POST['venueType'];
$venueAddress = $_POST['venueAddress'];

$sqlquery = "INSERT INTO Venues VALUES ('$venueName', $venueEstablished, '$venueType', '$venueAddress')";
$rs = mysqli_query($connection, $sqlquery);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>