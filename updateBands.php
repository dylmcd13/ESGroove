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
	$arr = array($name, $genre, $numMembers, $yearsActive);
	echo '<option data-name="'.$name.'" data-genre="'.$genre.'" data-numMembers="'.$numMembers.'" data-yearsActive="'.$yearsActive.'"."> ' . $name  . ' || ' . $genre . ' || ' . $numMembers . ' || ' . $yearsActive .  '</option>';
}


?>
</select>

<br>
<br>

<form>
<input type="text" id="nameBox" name="name" size="50">
<label for="name">Band Name</label>
</form>
<br>

<form>
<input type="text" id="genreBox" name="genre" size="50">
<label for="genre">Genre</label>
</form>
<br>

<form>
<input type="text" id="numMembersBox" name="numMembers" size="3">
<label for="numMembers">Number of Members</label>
</form>
<br>

<form>
<input type="text" id="yearsActiveBox" name="yearsActive" size="3">
<label for="yearsActive">Years Active</label>

<br>
<input type="submit" action="updateQuery()" value="Update">

</form>
<br>


<p id="o"></p>

<script>

function insert()
{

	var selectTable = document.getElementById('table');
	var selectedOption = selectTable.options[selectTable.selectedIndex];


	document.getElementById('nameBox').value = selectedOption.getAttribute('data-name');
	document.getElementById('genreBox').value = selectedOption.getAttribute('data-genre');
	document.getElementById('numMembersBox').value = selectedOption.getAttribute('data-numMembers');
	document.getElementById('yearsActiveBox').value = selectedOption.getAttribute('data-yearsActive');
//	$updateQuery = "update Bands set";
	$updateQuery += " name=". selectedOption.getAttribute('data-name')
	document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>
