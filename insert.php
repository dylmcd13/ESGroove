<?php

$bandName = $_POST['bandName'];
$bandGenre = $_POST['bandGenre'];
$bandNumMembers = $_POST['bandNumMembers'];
$bandYearsActive = $_POST['bandYearsActive'];

$servername = "localhost";
$username = "rpoholsky1";
$password = "rpoholsky1";
$db = "ESGrooveDB";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into Bands(bandName, bandGenre, bandNumMembers, bandYearsActive)
        values('$bandName', 'bandGenre', 'bandNumMembers', 'bandYearsActive')";

if($conn->query($sql) === TRUE) {
        echo "ADDED: ".$bandName.", ".bandGenre.", ".bandNumMembers.", "bandYearsActive;
else{
        echo "Error: ".$sql."<br>".$conn->error;

$conn->close();
?>