<html>
<body>
        <form action = 'insertBands.php' method ='post'>
Band Name:
<input type = 'text' name = 'bandName' id = bandName>
Bands Genre:
<input type = 'text' name = 'bandGenre' id = bandGenre>
Number of Members:
<input type = 'text' name = 'bandNumMembers' id = bandNumMembers>
Number of Years Active:
<input type = 'text' name = 'bandYearsActive' id = bandYearsActive>

<br>
<br>

Song Title:
<input type = 'text' name = 'songTitle' id = songtitle>
Album of Song:
<input type = 'text' name = 'songAlbum' id = songAlbum>
Band Name:
<input type = 'text' name = 'songBname' id = songBname>
Song Length:
<input type = 'text' name = 'songLength' id = songLength>

<br>
<br>

Album Title:
<input type = 'text' name = 'albumTitle' id = albumTitle>
Band Name:
<input type = 'text' name = 'albumBname' id = albumBname>
Number of Tracks in Album:
<input type = 'text' name = 'albumNumTracks' id = albumNumTracks>
Album Length:
<input type = 'text' name = 'albumLength' id = albumLength>
Release Year of Album:
<input type = 'text' name = 'albumReleaseYear' id = albumReleaseYear>
<br>
<input type = "Submit" value = "Submit">

<?php
$connection = @mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');


$bandName = $_POST['bandName'];
$bandGenre = $_POST['bandGenre'];
$bandNumMembers = $_POST['bandNumMembers'];
$bandYearsActive = $_POST['bandYearsActive'];

$songTitle = $_POST['songTitle'];
$songBname = $_POST['songBname'];
$songAlbum = $_POST['songAlbum'];
$songLength = $_POST['songLength'];

$albumTitle = $_POST['albumTitle'];
$albumBname = $_POST['albumBname'];
$albumNumTracks = $_POST['albumNumTracks'];
$albumLength = $_POST['albumLength'];
$albumReleaseYear = $_POST['albumReleaseYear'];

$sqlquery1 = "INSERT INTO Bands VALUES ('$bandName', '$bandGenre', $bandNumMembers, $bandYearsActive)";
$sqlquery3 = "INSERT INTO Album VALUES ('$albumTitle', '$albumBname' , $albumNumTracks, $albumLength, $albumReleaseYear)";
$sqlquery2 = "INSERT INTO Songs VALUES ('$songTitle', '$songBname', '$songAlbum', $songLength)";
echo $sqlquery1 . "<br>";
echo $sqlquery2 . "<br>";
echo $sqlquery3 . "<br>";
$rs = mysqli_query($connection, $sqlquery1);
$rs1 = mysqli_query($connection, $sqlquery3);
$rs2 = mysqli_query($connection, $sqlquery2);

if(mysqli_affected_rows($rs) == 1){
        echo "Record inserted succesfully";
}


mysqli_close($connection);

?>

</form>
</body>
</html>