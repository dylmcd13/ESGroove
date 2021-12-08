<?php
if($connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB')){
        print '<p>Successfully connected to ESGroove DataBase.</p>';
}

$venueName = $_POST['venue'];

$query2 = "SELECT  * FROM Venues WHERE";
 if($_POST['VenueSearchFilter'] =="venueName") {

          $query2 .= " name ='%$venueName%'";

        }
 if($_POST['VenueSearchFilter'] =="established") {

          $query2 .= " established ='$venueName'";

        }
 if($_POST['VenueSearchFilter'] =="type") {

          $query2 .= " type ='%$venueName%'";

        }
 if($_POST['VenueSearchFilter'] =="address") {

          $query2 .= " address ='%$venueName%'";

        }
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

