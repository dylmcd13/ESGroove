<html>
<head>
        <link href="styles.css" rel="stylesheet">
</head>
<body>
    <a name="top"></a>
<div>
        <ul id="navbar">
  <li id="navtab"><a   id="navlink" href="index.php">Home</a></li>
  <li id="navtab"><a  id="navlink" href="Artists.php">Artists</a></li>
  <li id="navtab"><a  id="navlink" href="Venues.php">Venues</a></li>
  <li id="navtab"><a  id="navlink" href="Performances.php">Performances</a></li>
  <li id="navtab"><a  id="navlink" href="Login.php">Login</a></li>
  <li id="headerLogo">ES<span id="headerSpan">Groove</span></li>
</ul>
<hr style="height: 15px; background-color: #444; border-color: #444; margin: 0; padding: 0;">
</div>
<?php
if($connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB')){
        print '<p>Successfully connected to ESGroove DataBase.</p>';
}

$venueName = $_POST['venue'];

$query2 = "SELECT  * FROM Venues WHERE";
 if($_POST['VenueSearchFilter'] =="venueName") {

          $query2 .= " name =%'$venueName'%";

        }
 if($_POST['VenueSearchFilter'] =="established") {

          $query2 .= " established =%'$venueName'%";

        }
 if($_POST['VenueSearchFilter'] =="type") {

          $query2 .= " type = %'$venueName'%";

        }
 if($_POST['VenueSearchFilter'] =="address") {

          $query2 .= " address = %'$venueName'%";

        }
$s=mysqli_query($connection, $query2);
echo "<table border ='1'>
<thead>
<tr>
<th> Venue Name </th>
<th> Established </th>
<th> Type </th>
<th> Address</th>
</tr>
</thead> ";

while($row2=mysqli_fetch_array($s)){
echo "<tr>";
echo "<td>" . $row2['name'] . "</td>";
echo "<td>" . $row2['established'] . "</td>";
echo "<td>" . $row2['type'] . "</td>";
echo "<td>" . $row2['address'] . "</td>";
}
echo "</table>";

mysqli_close($connection);

?>
<br>
<br>
<br>
<br>
</body>
<footer class="footer-distributed">

            <div class="footer-left">

                <h3>ES<span>Groove</span></h3>

                <p class="footer-links">
                    <a id="footerLink" href="index.php">Home</a>
                    
                    <a id="footerLink" href="Artists.php">Artists</a>
                    
                    <a id="footerLink" href="Venues.php">Venues</a>
                    
                    <a id="footerLink" href="Performances.php">Performances</a>
                    
                    <a id="footerLink" href="Login.php">Login</a>
                    
                    <a href="#top">Back to top of page</a>
                </p>

                <p class="footer-company-name">ESGroove © 2021</p>

            </div>
        </footer>
       
</html>