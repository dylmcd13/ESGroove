<!--
when selecting from drop down box, put the data selected into
boxes that you cant change and into text boxes (that are obv changable)
the data from the text boxes (updated info) and static boxes (original info) are
sent to a conformation page (updateConfirmation.php perhaps?) using $_POST so the
 info can be easily used with php 
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php
	//echo '<p> Hello!</p>';
	$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
	$showTableQuery = "select * from Bands;";
	$updateBandsQueryPHP = "update Bands set name =\"";

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


	echo '<option data-name="'.$name.'" data-genre="'.$genre.'" data-numMembers="'.$numMembers.'" data-yearsActive="'.$yearsActive.'"."> ' . $name  . ' || ' . $genre . ' || ' . $numMembers . ' || ' . $yearsActive .  '</option>';
}

	mysqli_close($connection);
?>
</select>

<br>
<br>

<form action="updateConfirmation.php" method="post">
<input type="text" id="nameBoxRead" name="nameRead" size="50" readonly="readonly">
<label for="nameRead">Band Name</label>

<br>

<input type="text" id="genreBoxRead" name="genreRead" size="50" readonly="readonly">
<label for="genreRead">Genre</label>

<br>


<input type="text" id="numMembersBoxRead" name="numMembersRead" size="3" readonly="readonly">
<label for="numMembersRead">Number of Members</label>

<br>


<input type="text" id="yearsActiveBoxRead" name="yearsActiveRead" size="3" readonly="readonly">
<label for="yearsActiveRead">Years Active</label>

<br><br><br><br><br>

<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="nameBox" name="name" size="50">
<label for="name">Band Name</label>

<br>


<input type="text" id="genreBox" name="genre" size="50">
<label for="genre">Genre</label>

<br>


<input type="text" id="numMembersBox" name="numMembers" size="3">
<label for="numMembers">Number of Members</label>

<br>


<input type="text" id="yearsActiveBox" name="yearsActive" size="3">
<label for="yearsActive">Years Active</label>


<br>
<input type="submit"  value="Update">

</form>


<br><br><br><br>


<br>


<p id="o"></p>

<script>

//Insert into text boxes
function insert()
{

	var selectTable = document.getElementById('table');
	var selectedOption = selectTable.options[selectTable.selectedIndex];


	document.getElementById('nameBoxRead').value = selectedOption.getAttribute('data-name');
	document.getElementById('genreBoxRead').value = selectedOption.getAttribute('data-genre');
	document.getElementById('numMembersBoxRead').value = selectedOption.getAttribute('data-numMembers');
	document.getElementById('yearsActiveBoxRead').value = selectedOption.getAttribute('data-yearsActive');

        document.getElementById('nameBox').value = selectedOption.getAttribute('data-name');
        document.getElementById('genreBox').value = selectedOption.getAttribute('data-genre');
        document.getElementById('numMembersBox').value = selectedOption.getAttribute('data-numMembers');
        document.getElementById('yearsActiveBox').value = selectedOption.getAttribute('data-yearsActive');


}




</script>



</html>
