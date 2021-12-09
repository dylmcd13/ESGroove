<?php 
include 'checkSession.php';
?>
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
$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');   

$artistName = $_POST['artist'];

$query1="select Bands.name, genre, numMembers, yearsActive, Members.name, instrument, Album.Atitle, numTracks, Album.length, releaseYear, Songs.title, Songs.length, Facebook.Url, Instagram.handle, Twitter.handle, Merch.type, Merch.price
        from Bands
        join Album on Bands.name = Album.Bname
        join Members on Bands.name = Members.Bname
        join Songs on Bands.name = Songs.Bname
        join Facebook on Bands.name = Facebook.Bname
        join Instagram on Bands.name = Instagram.Bname
        join Twitter on Bands.name = Twitter.Bname
        join Merch on Bands.name = Merch.Bname
        and 
        ";

if($_POST['BandSearchFilter'] =="bandName") {

         $query1 .= " Bands.name like '%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="genre") {

        $query1 .= " genre like '%$artistName%'";

        }
 if($_POST['BandSearchFilter'] =="numMembers") {

          $query1 .= " numMembers ='$artistName'";

        }
if($_POST['BandSearchFilter'] =="years") {

          $query1 .= " yearsActive ='$artistName'";

        }
if($_POST['BandSearchFilter'] =="Atitle") {

          $query1 .= " Album.Atitle like'%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="Fbook") {

          $query1 .= " Facebook.Url like'%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="insta") {

          $query1 .= " Instagram.handle like'%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="twitter") {

          $query1 .= " Twitter.handle like'%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="memName") {

          $query1 .= " Members.name like'%$artistName%'";

        }
if($_POST['BandSearchFilter'] =="Stitle") {

          $query1 .= " Songs.title like'%$artistName%'";

        }



$r=mysqli_query($connection, $query1);
echo "<table border='1' style='color:white; width:100%; table-layout:auto; font-size=12px; word-wrap: break-word; ''>
<thead>
<tr>
<th> Band name </th>
<th> genre </th>
<th> number of Memebers </th>
<th> years Active </th>
<th> name of Member </th>
<th> instrument </th>
<th> Album Title </th> 
<th> number of Tracks</th>
<th> Album Length (min)</th>
<th> release Year </th> 
<th> Song title </th> 
<th> Song Length</th> 
<th> Facebook Url </th>
<th> Instagram Url </th> 
<th> Twitter Url </th>
<th> Merch Type </th> 
<th> Merch Price </th>
</tr>
</thead>";

while($row=mysqli_fetch_array($r)){
 echo "<tr>";
        echo "<td>" . $row['Bands.name'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "<td>" . $row['numMembers'] . "</td>";
        echo "<td>" . $row['yearsActive'] . "</td>";
        echo "<td>" . $row['Members.name'] . "</td>";
        echo "<td>" . $row['instrument'] . "</td>";
        echo "<td>" . $row['Album.Atitle'] . "</td>";
        echo "<td>" . $row['numTracks'] . "</td>";
        echo "<td>" . $row['Album.length'] . "</td>";
        echo "<td>" . $row['releaseYear'] . "</td>";
        echo "<td>" . $row['Songs.title'] . "</td>";
        echo "<td>" . $row['Songs.length'] . "</td>";
        echo "<td>" . $row['Facebook.Url'] . "</td>";
        echo "<td>" . $row['Instagram.handle'] . "</td>";
        echo "<td>" . $row['Twitter.handle'] . "</td>";
        echo "<td>" . $row['Merch.type'] . "</td>";
        echo "<td>" . $row['Merch.price'] . "</td>";
        echo "</tr>";
}

echo "</table>";
echo "<br>";
echo "<br>";
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
