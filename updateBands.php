<!DOCTYPE html>
<html>


<?php

	$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
	$showTableQuery = "select * from Bands;";
	$updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Bands Table </b></h><br>


<form>
<input type="text" id="name" placeholder="Name">
<label for="name">Name</label><br>

<input type="text" id="genre" placeholder="Genre">
<label for="name">Genre</label><br>

<input type="text" id="numMembers" placeholder="Number of Members">
<label for="name">Number of Members</label><br>

<input type="text" id="yearsActive" placeholder="Years Active">
<label for="name">Years Active</label>
<br>

</form>




<?php

$r=mysqli_query($connection, $showTableQuery);
echo "<table border='1'>
<thead>
<tr>
<th> name </th>
<th> genre </th>
<th> number of Memebers </th>
<th> years Active </th>
</tr>
</thead>";

while($row=mysqli_fetch_array($r)){
 echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "<td>" . $row['numMembers'] . "</td>";
        echo "<td>" . $row['yearsActive'] . "</td>";
        echo "</tr>";
}


?>





</html>
