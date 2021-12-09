<?php include 'checkSession.php'; ?>



<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Bands"; ?>



<html>

    <head>

	<title>Delete From Bands</title>
	Delete From Bands
	</head>

	<body>
<?php
	echo '<form action="" method="post">';
	$r=mysqli_query($connection, $query);
		echo "<table border = '1'>
		<thead>
		<tr>
		<th> Band Name </th>
		<th> Genre </th>
		<th> Number of Members </th>
		<th> Years Active </th>
		<th> Action </th>
		</tr>
		</thead>";


while($row=mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" .  $row['name'] .  "</td>";
	echo "<td>" .  $row['genre'] .  "</td>";
	echo "<td>" .  $row['numMembers'] . "</td>";
	echo "<td>" .  $row['yearsActive'] . "</td>";
	echo '<td><button type="submit" name = "deleteItem" value ="'.$row['name'].'" />Delete</button></td>';

	echo "</tr>";
}
	echo "</table>";
	echo '</form>';

?>


<?php
if(isset($_POST['deleteItem']))
{

$delete=$_POST['deleteItem'];
$sql1="DELETE FROM Songs WHERE Bname =  '$delete'";
$sql2="DELETE FROM Album WHERE Bname = '$delete'";
$sql3="DELETE FROM Twitter WHERE Bname = '$delete'";
$sql4="DELETE FROM Facebook WHERE Bname = '$delete'";
$sql5="DELETE FROM Instagram WHERE Bname = '$delete'";
$sql6="DELETE FROM Members WHERE Bname = '$delete'";
$sql7="DELETE FROM Merch WHERE Bname = '$delete'";
$sql8="DELETE FROM Travelto WHERE Bname = '$delete'";
$sql9="DELETE FROM Bands WHERE name = '$delete'";

$Q1=mysqli_query($connection, $sql1);
$Q2=mysqli_query($connection, $sql2);
$Q3=mysqli_query($connection, $sql3);
$Q4=mysqli_query($connection, $sql4);
$Q5=mysqli_query($connection, $sql5);
$Q6=mysqli_query($connection, $sql6);
$Q7=mysqli_query($connection, $sql7);
$Q8=mysqli_query($connection, $sql8);
$Q9=mysqli_query($connection, $sql9);


}
?>


</html>
