<?php include 'checkSession.php'; ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Merch"; ?>



<html>

    <head>

	<title>Delete From Songs</title>
	Delete From Songs
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Band Name </th>
		<th> Type </th>
		<th> Price </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['Bname'] .  "</td>";
	echo "<td>" .  $row['type'] .  "</td>";
	echo "<td>" .  $row['price'] . "</td>";
	echo '<td><input type="hidden" name ="BandN" value = "'.$row['Bname'].'">';
	echo '<button type="submit" name = "deleteItem" value ="'.$row['type'].'" />Delete</button></td>';


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
$sql1="DELETE FROM Merch WHERE type =  '$delete' AND Bname = '$delete2'";

$Q1=mysqli_query($connection, $sql1);


}
?>


</html>
