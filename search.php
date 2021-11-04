<html>
<body>
<h1>Search (rough) </h1>
<p>Search Artist</p> 
<input type="text" name="artist" placeholder="artist">
<p>Search Venue</p> 
<input type="text" name="venue" placeholder="venue">
<input type="submit">
<?php
if($connection=@mysqli_connect('localhost', 'cnussear1', 'cnussear1', 'ESGrooveDB')){
print '<p>Successfully connected to ESGroove DataBase.</p>';
} 

$artistName = $_POST['artist'];
$venueName = $_POST['venue'];


$query1="SELECT  * FROM bands  WHERE name ='$artistName'"; 

$r=mysqli_query($connection, $query1);
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
echo "</table>";

 

$query2 = "SELECT  * FROM Venues WHERE name='$venueName'"; 
$s=mysqli_query($connection, $query2);
echo "<table border ='1'>
<thead>
<tr>
<th> Venue Name </th> 
<th> Established </th>
<th> Type </th> 
<th> Address</th> 
</tr> 
</thead> "; 
while($row2=mysqli_fetch_array($s)){
echo "<tr>"; 
echo "<td>" . $row2['name'] . "</td>";
echo "<td>" . $row2['established'] . "</td>"; 
echo "<td>" . $row2['type'] . "</td>"; 
echo "<td>" . $row2['address'] . "</td>"; 
}
echo "</table>"; 
mysqli_close($connection);
?> 
</body>
</html>
