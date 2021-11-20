<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

	$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
	$showTableQuery = "select * from Bands;";
	$updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Bands Table </b></h><br>
<p> <u>Choose the row you want to edit. Sorted by name.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
	$name = $row['name'];
	$genre = $row['genre'];
	$numMembers = $row['numMembers'];
	$yearsActive = $row['yearsActive'];
	echo '<option value="' . $name.'"> ' . $name  . ' || ' . $genre . ' || ' . $numMembers . ' || ' . $yearsActive .  '</option>';

}


?>
</select>

<br>
<br>

<form>
<input type="text" id="name" name="name" size="50">
<label for="name">Band Name</label>
</form>
<br>

<form>
<input type="text" id="genre" name="genre" size="50">
<label for="genre">Genre</label>
</form>
<br>

<form>
<input type="text" id="numMembers" name="numMembers" size="3">
<label for="numMembers">Number of Members</label>
</form>
<br>

<form>
<input type="text" id="yearsActive" name="yearsActive" size="3">
<label for="yearsActive">Years Active</label>
</form>
<br>


<script>

function insert()
{
	$nameInsert = document.getElementById('table').value;
	document.getElementById('name').value = $nameInsert;

	$genreInsert
}


</script>












</html>
