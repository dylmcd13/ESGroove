<?php include 'checkSession.php'; ?>
<?php session_start(); ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Instagram"; ?>



<html>

    <head>

	<title>Delete From Instagram</title>
	Delete From Instagram
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Handle </th>
		<th> Band Name </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['handle'] .  "</td>";
	echo "<td>" .  $row['Bname'] .  "</td>";
	echo '<td><button type="submit" name = "deleteItem" value ="'.$row['handle'].'" />Delete</button></td>';

	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']))
{

$delete=$_POST['deleteItem'];
$sql1="DELETE FROM Instagram WHERE handle = '$delete'";

$Q1=mysqli_query($connection, $sql1);



}
?>


</html>
