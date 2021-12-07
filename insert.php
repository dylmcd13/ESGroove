<html>
<body>
<?php

$servername = 'localhost';
$username = 'rpoholsky1';
$password = 'rpoholsky1';
$db = 'ESGrooveDB';


if($connection=@mysqli_connect('localhost', 'rpoholsky1', 'rpoholsky1', 'ESGrooveDB')){
        echo '<p>Successfully connected to MySql.</p>';
}
$bandName = $_POST['name'];
$bandGenre = $_POST['genre'];
$bandNumMembers = $_POST['numMembers'];
$bandActiveYears = $_POST['yearsActive'];

Tables :
<select>
        <option value = "Select">Select</option>}
        <option value = "Bands">Bands</option>
        <option value = "Venues">Venues</option>

$sql = "INSERT INTO Bands (name, genre, numMembers, yearsActive)
        VALUES ($bandName, $bandGenre, $bandNumMembers, $bandActiveYears)";

$rs = mysqli_query($connection, $sql);

if (mysqli_affected_rows($rs) == 1) {
        echo "<p>Record inserted successfully</p>";
}



mysqli_close($connection);

?>
</body>
</html>