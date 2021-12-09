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
	'ESGrooveDB'); $query="select * from Songs"; ?>

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
