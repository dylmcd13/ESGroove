<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

	$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
	$showTableQuery = "select * from Bands;";
	$updateQuery = "update Bands set";

	/*
	$r=mysqli_query($connection, $showTableQuery);
	$row=mysqli_fetch_array($r);
	$name = $row['name'];
	$genre = $row['genre'];

	echo printf('|%-50.50s |%.20s |', $name, $genre);
	echo '<br>';
	*/
?>

<h style="font-size: 20pt"><b> Update Bands Table </b></h><br>
<p> <u>Choose the row you want to edit. Sorted by name.</u> </p>




<select name="table" id="table" onchange="javascript:location.href = this.value;" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);
//$row=mysqli_fetch_array($r);
//$name = $row['name'];
//$genre = $row['genre'];

//printf('|%-50.50s |%.5s |\n', $name, $genre);

$mask = "|%-50.50s |%.5s |\n";

while($row=mysqli_fetch_array($r)){
	$name = $row['name'];
	$genre = $row['genre'];
	$numMembers = $row['numMembers'];
	$yearsActive = $row['yearsActive'];
	echo '<option value="' . $row['name'] . $row['genre'] . '"> ' . $name  . ' || ' . $genre . ' || ' . $numMembers . ' || ' . $yearsActive .  '</option>';
	//echo '<option value="' . $row['name'] . $row['genre'] . '"> ' . $name  . ' || ' . $genre . ' || ' . $numMembers . ' || ' . $yearsActive .  '</option>';
	//echo '<option value="' . $row['name'] . $row['genre'] . '"> ' . $name  . ' || ' . $genre . ' || ' . $numMembers . ' || ' . $yearsActive .  '</option>';

	//echo '<option value="' . $row['name'] . $row['genre'] .  '"> ' . printf('|%-50.50s |%.5s |', $name, $genre) . '</option>';

}


?>

</select>



</html>
