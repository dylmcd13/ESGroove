<?php include 'checkSession.php'; ?>
<html>
<head>
	<link href="styles.css" rel="stylesheet">
</head>
<body>
    <a name="top"></a>
<div>
	<ul id="navbar">
  <li id="navtab"><a   id="navlink" href="indexAdmin.php">Home</a></li>
  <li id="navtab"><a  id="navlink" href="ArtistsAdmin.php">Artists</a></li>
  <li id="navtab"><a  id="navlink" href="VenuesAdmin.php">Venues</a></li>
  <li id="navtab"><a  id="navlink" href="PerformancesAdmin.php">Performances</a></li>
  <li id="navtab"><a  id="navlink" href="AdminMenu.php">Admin Menu</a></li>
  <li id="navtab"><a  id="navlink" href="Logout.php">Logout</a></li>
  <li id="headerLogo">ES<span id="headerSpan">Groove</span></li>
</ul>
<hr style="height: 15px; background-color: #444; border-color: #444; margin: 0; padding: 0;">
</div>


<?php $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2',
	'ESGrooveDB'); $query="select * from Bands"; ?>


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
$sql0="DELETE FROM Performances WHERE Bname = '$delete'";
$sql9="DELETE FROM Bands WHERE name = '$delete'";

$Q1=mysqli_query($connection, $sql1);
$Q2=mysqli_query($connection, $sql2);
$Q3=mysqli_query($connection, $sql3);
$Q4=mysqli_query($connection, $sql4);
$Q5=mysqli_query($connection, $sql5);
$Q6=mysqli_query($connection, $sql6);
$Q7=mysqli_query($connection, $sql7);
$Q8=mysqli_query($connection, $sql8);
$Q0=mysqli_query($connection, $sql0);
$Q9=mysqli_query($connection, $sql9);


}
?>

</body>
<footer class="footer-distributed">

            <div class="footer-left">

                <h3>ES<span>Groove</span></h3>

                <p class="footer-links">
                   <a id="footerLink" href="indexAdmin.php">Home</a>
                    
                    <a id="footerLink" href="ArtistsAdmin.php">Artists</a>
                    
                    <a id="footerLink" href="VenuesAdmin.php">Venues</a>
                    
                    <a id="footerLink" href="PerformancesAdmin.php">Performances</a>
                    
                    <a id="footerLink" href="AdminMenu.php">Admin Menu</a>

                    <a id="footerLink" href="Logout.php">Logout</a>
                    
                    <a href="#top">Back to top of page</a>
                </p>

                <p class="footer-company-name">ESGroove © 2021</p>

            </div>
        </footer>
       
</html>
