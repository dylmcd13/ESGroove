<?php include 'checkSession.php'; ?>
<?php session_start(); ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Travelto"; ?>



<html>

    <head>

	<title>Delete From Travel to</title>
	Delete From Travel to
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Band Name </th>
		<th> Address</th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['Bname'] .  "</td>";
	echo "<td>" .  $row['address'] .  "</td>";
	echo '<td><input type="hidden" name ="BandN" value = "'.$row['Bname'].'">';
	echo '<button type="submit" name = "deleteItem" value ="'.$row['address'].'" />Delete</button></td>';


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
$sql1="DELETE FROM Travelto WHERE address =  '$delete' AND Bname = '$delete2'";

$Q1=mysqli_query($connection, $sql1);


}
?>


</html>
