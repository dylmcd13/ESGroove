<?php
if($connection=@mysqli_connect('localhost', 'cnussear1', 'cnussear1', 'ESGrooveDB')){
        print '<p>Successfully connected to ESGroove DataBase.</p>';
}
$performance = $_POST['performance'];

$query3 = "SELECT  * FROM Performances WHERE";

if($_POST['PerformanceSearchFilter'] =="Band") {

          $query3 .= " name ='%$performance%'";

        }

if($_POST['PerformanceSearchFilter'] =="Date") {

          $query3 .= " date ='%$performance%'";

        }
if($_POST['PerformanceSearchFilter'] =="Venue") {

          $query3 .= " venue ='%$performance%'";

        }
$s=mysqli_query($connection, $query3);
echo "<table border='1'>
<thead>
<tr>
<th> name </th>
<th> date </th>
<th> venue </th>
</tr>
</thead>";


while($row2=mysqli_fetch_array($s)){
echo "<tr>";
echo "<td>" . $row2['name'] . "</td>";
echo "<td>" . $row2['date'] . "</td>";
echo "<td>" . $row2['venue'] . "</td>";

}
echo "</table>";

mysqli_close($connection);

?>