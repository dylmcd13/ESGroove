
<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select title, Bname, numTracks, length, releaseYear from Album group by title, Bname, numTracks, length, releaseYear;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Album Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Album Name</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $title = $row['title'];
        $Bname = $row['Bname'];
        $numTracks = $row['numTracks'];
        $length = $row['length'];
        $releaseYear = $row['releaseYear'];

        echo '<option data-title="' .$title.'" data-Bname="'.$Bname.'" data-numTracks="'.$numTracks.'" data-length="'.$length.'" data-releaseYear="'.$releaseYear.'". "> ' . $title  . ' || ' . $Bname . ' || ' . $numTracks . ' || ' . $length . ' || ' . $releaseYear .'</option>';

}


?>

</select>


<form>
<input type="text" id="titleBox" name="title" size="50">
<label for="titleBox">Album Title</label>
</form>
<br>

<form>
<input type="text" id="BnameBox" name="BnameBox" size="50">
<label for="BnameBox">Band Name</label>
</form>
<br>

<form>
<input type="text" id="numTracksBox" name="numTracks" size="50">
<label for="numTracksBox">Number of Tracks</label>
</form>
<br>


<input type="text" id="lengthBox" name="length" size="50">
<label for="lengthBox">Length</label>
<br><br>
<input type="text" id="releaseYearBox" name="releaseYear" size="50">
<label for="releaseYearBox">Release Year</label>

<br>
<input type="submit" action="updateQuery()" value="Update">

</form>
<br>

<script>

function insert()
{

        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];


        document.getElementById('titleBox').value = selectedOption.getAttribute('data-title');
        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('numTracksBox').value = selectedOption.getAttribute('data-numTracks');
        document.getElementById('lengthBox').value = selectedOption.getAttribute('data-length');
        document.getElementById('releaseYearBox').value = selectedOption.getAttribute('data-releaseYear');

        $updateQuery += " name=". selectedOption.getAttribute('data-title')
        document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>


