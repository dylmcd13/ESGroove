<?php

if($connection=@mysqli_connect('localhost', 'cnussear1', 'cnussear1', 'ESGrooveDB')){
	print '<p>Successfully connected to ESGroove DataBase.</p>';
} 

$artistName = $_POST[’artist’];
$venueName = $_POST[’venue’];
$query1="SELECT  * FROM bands  WHERE name ='$artistName'"; 
$r=mysqli_query($connection, $query1);
echo "<table border=’1’>
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
	echo "<td>" . $row[’name’] . "</td>";
	echo "<td>" . $row[’genre’] . "</td>";
	echo "<td>" . $row[’numMembers’] . "</td>";
	echo "<td>" . $row['yearsActive'] . "</td>"; 
	echo "</tr>";
}

echo "</table>";
mysqli_close($connection); 

?>
