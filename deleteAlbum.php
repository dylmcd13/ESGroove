<?php include 'checkSession.php'; ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Album"; ?>



<html>

    <head>

	<title>Delete From Album</title>
	Delete From Album
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Title </th>
		<th> Band Name </th>
		<th> Number of Tracks </th>
		<th> Length </th>
		<th> Release Year </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['Atitle'] .  "</td>";
	echo "<td>" .  $row['Bname'] .  "</td>";
	echo "<td>" .  $row['numTracks'] . "</td>";
	echo "<td>" .  $row['length'] . "</td>";
	echo "<td>" .  $row['releaseYear'] . "</td>";
	echo '<td><input type="hidden" name ="BandN" value = "'.$row['Bname'].'">';
	echo '<button type="submit" name = "deleteItem" value ="'.$row['Atitle'].'" />Delete</button></td>';



	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']) && isset($_POST['BandN']))
{

$delete=$_POST['deleteItem'];
$delete2=$_POST['BandN'];
$sql1="DELETE FROM Songs WHERE Atitle =  '$delete' AND Bname = '$delete2'";
$sql2="DELETE FROM Album WHERE Atitle = '$delete' AND Bname = '$delete2'";

$Q1=mysqli_query($connection, $sql1);
$Q2=mysqli_query($connection, $sql2);


}
?>


</html>
