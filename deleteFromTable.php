<?php
session_start();
?>

<!DOCTYPE html>
<html>

<?php 	
	$connection=@mysqli_connect('localhost', 'bryan4', 'bryan4', 'ESGrooveDB');
	$showTableQuery = "select * from Bands;";
	$deleteQuery = "delete * from Bands where name =";

?>

<h style="font-size: 20pt"><b> Delete From Bands </b></h><br>
<p> <u>Choose the row you want to delete. Sorted by name.</u> </p>

<select name="table" id="table" onchange="insert()" style="width: 800px;">
	<option value=""selected>--Select--</option>


<?php

	$r=mysqli_query($connection, $showTableQuery);

	while($row=mysqli-fetch-array($r)){
		$name = $row['name'];
		$genre = $row['genre'];
		$numMembers = $row['numMembers'];
		$yearsActive = $row['yearsActive'];
		$arr = array9$name, $genre, $numMembers, $yearsActive);
		echo '<option data-name="'.$name.'" data-genre="'.genre.'" data-numMembers="'.$numMembers.'" data-yearsActive="'.yearsActive.'"."> ' . $name . '||' . $genre . '||' . $numMembers . '||' . $yearsActive . '</option>';

}

?>

</select>


<br>
<br>

<input type="submit" action="deleteQuery()" value="Delete">
