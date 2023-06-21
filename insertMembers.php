<html>
<body>
        <form action = 'insertMembers.php' method ='post'>
Member Name:
<input type = 'text' name = 'memberName' id = memberName>
Instrument Name:
<input type = 'text' name = 'instrumentName' id = instrumentName>
Band Name:
<input type = 'text' name = 'memberBandName' id = memberBandName>
<input type = "Submit" value = "Submit">
<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$memberName = $_POST['memberName'];
$instrumentName = $_POST['instrumentName'];
$memberBandName = $_POST['memberBandName'];

$sqlquery = "INSERT INTO Members VALUES ('$memberName', '$instrumentName', '$memberBandName')";
$rs = mysqli_query($connection, $sqlquery);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>