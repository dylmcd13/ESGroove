<?php include "checkSession.php" ?>
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
<?php
$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB'))
$performance = $_POST['performance'];

$query3 = "SELECT  * FROM Performances WHERE";

if($_POST['PerformanceSearchFilter'] =="Band") {

          $query3 .= " Bname like'%$performance%'";

        }

if($_POST['PerformanceSearchFilter'] =="Date") {

          $query3 .= " date like '%$performance%'";

        }
if($_POST['PerformanceSearchFilter'] =="Venue") {

          $query3 .= " venue like '%$performance%'";

        }
$s=mysqli_query($connection, $query3);
echo "<table border='1'>
<thead>
<tr>
<th> name </th>
<th> date </th>
<th> venue </th>
</tr>
</thead>";


while($row2=mysqli_fetch_array($s)){
echo "<tr>";
echo "<td>" . $row2['Bname'] . "</td>";
echo "<td>" . $row2['date'] . "</td>";
echo "<td>" . $row2['venue'] . "</td>";

}
echo "</table>";

mysqli_close($connection);

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
