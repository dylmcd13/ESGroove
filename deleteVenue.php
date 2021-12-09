<?php include 'checkSession.php'; ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Venues"; ?>



<html>

    <head>

	<title>Delete From Venues</title>
	Delete From Venues
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Name </th>
		<th> Year Established </th>
		<th> Type </th>
		<th> Address </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['name'] .  "</td>";
	echo "<td>" .  $row['established'] .  "</td>";
	echo "<td>" .  $row['type'] . "</td>";
	echo "<td>" .  $row['address'] . "</td>";
	echo '<td><button type="submit" name = "deleteItem" value ="'.$row['address'].'" />Delete</button></td>';

	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']))
{

$delete=$_POST['deleteItem'];
$sql1="DELETE FROM Venues WHERE address = '$delete'";

$Q1=mysqli_query($connection, $sql1);



}
?>


</html>
