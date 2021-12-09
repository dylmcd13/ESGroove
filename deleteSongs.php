<?php include 'checkSession.php'; ?>
<?php session_start(); ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Songs"; ?>



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
		<th> Title </th>
		<th> Album </th>
		<th> Band Name </th>
		<th> Length </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['title'] .  "</td>";
	echo "<td>" .  $row['Atitle'] .  "</td>";
	echo "<td>" .  $row['Bname'] . "</td>";
	echo "<td>" .  $row['length'] . "</td>";
	echo '<td><input type="hidden" name ="BandN" value = "'.$row['Bname'].'">';
        echo '<input type="hidden" name ="Atitle" value = "'.$row['Atitle'].'">';
	echo '<button type="submit" name = "deleteItem" value ="'.$row['title'].'" />Delete</button></td>';


	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']) and isset($_POST['BandN']) and isset($_POST['Atitle']))
{

$delete=$_POST['deleteItem'];
$delete2=$_POST['BandN'];
$delete3=$_POST['Atitle'];
$sql1="DELETE FROM Songs WHERE title =  '$delete' AND Bname = '$delete2' AND Atitle = '$delete3'";

$Q1=mysqli_query($connection, $sql1);


}
?>


</html>
