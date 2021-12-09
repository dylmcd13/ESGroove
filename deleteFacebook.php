<?php include 'checkSession.php'; ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Facebook"; ?>



<html>

    <head>

	<title>Delete From Facebook</title>
	Delete From Facebook
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> URL </th>
		<th> Band Name </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['Url'] .  "</td>";
	echo "<td>" .  $row['Bname'] .  "</td>";
	echo '<td><button type="submit" name = "deleteItem" value ="'.$row['Url'].'" />Delete</button></td>';

	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']))
{

$delete=$_POST['deleteItem'];
$sql1="DELETE FROM Facebook WHERE Url = '$delete'";

$Q1=mysqli_query($connection, $sql1);



}
?>


</html>
