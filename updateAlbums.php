
<html>
<head>
	<link href="styles.css" rel="stylesheet">
</head>
<body style="color: white">
    <a name="top"></a>
<div>
	<ul id="navbar">
  <li id="navtab"><a   id="navlink" href="indexAdmin.php">Home</a></li>
  <li id="navtab"><a  id="navlink" href="ArtistsAdmin.php">Artists</a></li>
  <li id="navtab"><a  id="navlink" href="VenuesAdmin.php">Venues</a></li>
  <li id="navtab"><a  id="navlink" href="PerformancesAdmin.php">Performances</a></li>
  <li id="navtab"><a  id="navlink" href="AdminMenu.php">Admin Menu</a></li>
  <li id="navtab"><a  id="navlink" href="Logout.php">Logout</a></li>
  <li id="headerLogo">ES<span id="headerSpan">Groove</span></li>
</ul>
<hr style="height: 15px; background-color: #444; border-color: #444; margin: 0; padding: 0;">
</div>




<?php
include "checkSession.php";
?>
<!DOCTYPE html>
<html>

<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Atitle, Bname, numTracks, length, releaseYear from Album group by Atitle, Bname, numTracks, length, releaseYear";

?>

<h style="font-size: 20pt"><b> Update Album Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Album Name</b>.</u> </p>

<select name="table" id="table" onchange="insert()" style="width: 800px;">
      <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $title = $row['Atitle'];
        $Bname = $row['Bname'];
        $numTracks = $row['numTracks'];
        $length = $row['length'];
        $releaseYear = $row['releaseYear'];

        echo '<option data-title="' .$title.'" data-Bname="'.$Bname.'" data-numTracks="'.$numTracks.'" data-length="'.$length.'" data-releaseYear="'.$releaseYear.'". "> ' . $title  . ' || ' . $Bname . ' || ' . $numTracks . ' || ' . $length . ' || ' . $releaseYear .'</option>';

}


?>

</select>


<form action="updateConfirmation.php" method="post">
<br>
<input type="text" id="titleBoxRead" name="titleRead" size="50" readonly="readonly">
<label for="titleBoxRead">Album Title</label>
<br>
<input type="text" id="BNameBoxRead" name="BnameRead" size="50" readonly="readonly">
<label for="BnameBoxRead">Band Name</label>


<br>

<input type="text" id="numTracksBoxRead" name="numTracksRead" size="3" readonly="readonly">
<label for="numTracksBoxRead">Number of Tracks</label>

<br>

<input type="text" id="lengthBoxRead" name="lengthRead" size="3" readonly="readonly">
<label for="lengthBoxRead">Length</label>
<br>

<input type="text" id="releaseYearBoxRead" name="releaseYearRead" size="3" readonly="readonly">
<label for="releaseYearBoxRead">Release Year</label>

<br><br>

<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="titleBox" name="title" size="50">
<label for="titleBox">Album TItle</label>

<br>


<input type="text" id="BNameBox" name="Bname" size="50">
<label for="BNameBox">Band Name</label>

<br>


<input type="text" id="numTracksBox" name="numTracks" size="3">
<label for="numTracks">Number of Tracks</label>

<br>


<input type="text" id="lengthBox" name="length" size="3">
<label for="length">Album Length</label>

<br>

<input type="text" id="releaseYearBox" name="releaseYear" size="3">
<label for="releaseYearBox">Album Release Year</label>

<br><br>


<input type="submit"  value="Update">






</form>
<br>

<script>

function insert()
{
        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];

        document.getElementById('titleBoxRead').value = selectedOption.getAttribute('data-title');
        document.getElementById('BNameBoxRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('numTracksBoxRead').value = selectedOption.getAttribute('data-numTracks');
        document.getElementById('lengthBoxRead').value = selectedOption.getAttribute('data-length');
        document.getElementById('releaseYearBoxRead').value = selectedOption.getAttribute('data-releaseYear');

        document.getElementById('titleBox').value = selectedOption.getAttribute('data-title');
        document.getElementById('BNameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('numTracksBox').value = selectedOption.getAttribute('data-numTracks');
        document.getElementById('lengthBox').value = selectedOption.getAttribute('data-length');
        document.getElementById('releaseYearBox').value = selectedOption.getAttribute('data-releaseYear');

}


</script>



</html>


</body>
<footer class="footer-distributed">
            <div class="footer-left">
                <h3>ES<span>Groove</span></h3>
                <p class="footer-links">
                   <a id="footerLink" href="indexAdmin.php">Home</a>
                    
                    <a id="footerLink" href="ArtistsAdmin.php">Artists</a>
                    
                    <a id="footerLink" href="VenuesAdmin.php">Venues</a>
                    
                    <a id="footerLink" href="PerformancesAdmin.php">Performances</a>
                    
                    <a id="footerLink" href="AdminMenu.php">Admin Menu</a>
                    <a id="footerLink" href="Logout.php">Logout</a>
                    
                    <a href="#top">Back to top of page</a>
                </p>
                <p class="footer-company-name">ESGroove © 2021</p>
            </div>
        </footer>
       
</html>
