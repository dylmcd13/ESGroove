<?php include 'checkSession.php'; ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald',
	'ESGrooveDB'); $query="select * from Members"; ?>



<html>

    <head>

	<title>Delete From Members</title>
	Delete From Members
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Name</th>
		<th> Instrument </th>
		<th> Band Name </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['name'] .  "</td>";
	echo "<td>" .  $row['instrument'] .  "</td>";
	echo "<td>" .  $row['Bname'] . "</td>";
	echo '<td><input type="hidden" name ="BandN" value = "'.$row['Bname'].'">';
	echo '<button type="submit" name = "deleteItem" value ="'.$row['name'].'" />Delete</button></td>';


	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']) and isset($_POST['BandN']))
{

$delete=$_POST['deleteItem'];
$delete2=$_POST['BandN'];
$sql1="DELETE FROM Members WHERE title =  '$delete' AND Bname = '$delete2'";

$Q1=mysqli_query($connection, $sql1);


}
?>


</html>
