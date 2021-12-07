<?php
if($connection=@mysqli_connect('localhost', 'cnussear1', 'cnussear1', 'ESGrooveDB')){
        print '<p>Successfully connected to ESGroove DataBase.</p>';
}

$artistName = $_POST['artist'];

$query1="SELECT  * FROM Bands  WHERE";

if($_POST['BandSearchFilter'] =="bandName") {

         $query1 .= " name like '%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="genre") {

        $query1 .= " genre like '%$artistName%'";

        }
 if($_POST['BandSearchFilter'] =="numMembers") {

          $query1 .= " numMembers='$artistName'";

        }
if($_POST['BandSearchFilter'] =="years") {

          $query1 .= " yearsActive='$artistName'";

        }
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
echo "<br>";
echo "<br>";
?>

