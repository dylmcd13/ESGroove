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
<br>
<h1 id="title">Search the <span id="headerSpan">Database By Artist</span></h1>
<hr style="height:5px; background-color:white; border-color: white;">

  <fieldset id="searchSet">
<legend id="searchLegend">Search Artists</legend>
   <form action="searchBandAdmin.php" method="post">
<label for="BandSearchFilter" id="searchLabel">Search By...</label>
<select name="BandSearchFilter" id="BandSearchFilter" placeholder="Search by" >
<option value="bandName">Band Name</option>
<option value="genre">Genre</option>
<option value="numMembers">Number of Members</option>
<option value="years">Years Active</option>
<option value="Atitle">Album title</option>
<option value="Fbook">Facebook Url</option>
<option value="insta">Instagram handle</option>
<option value="twitter">Twitter Handle</option>
<option value="memName">Member Name</option>
<option value="Stitle">Song Title</option>
</select>      
<br>
<input type="text" id = "artist" name="artist">
<br>
<input type="submit" id="submit" >
   </form>   
  </fieldset>











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