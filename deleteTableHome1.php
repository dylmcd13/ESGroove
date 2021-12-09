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


<h style="font-size: 20pt"><b> Delete Table </b></h>


<br>
<br>

<label for="Table">Choose a Table:</label>



<select name="table" id="table" onchange="javascript:location.href = this.value;">
	<option value=""selected>--Select--</option>
  	<option value="deleteBands1.php">Bands</option>
  	<option value="deleteVenue1.php">Venues</option>
  	<option value="deleteAlbum1.php">Albums</option>
  	<option value="deleteSongs1.php">Songs</option>
  	<option value="deleteMembers1.php">Members</option>
  	<option value="deleteMerch1.php">Merch</option>
  	<option value="deleteTravel1.php">Travelto</option>
  	<option value="deleteFacebook1.php">Facebook</option>
 	<option value="deleteInstagram1.php">Instagram</option>
  	<option value="deleteTwitter1.php">Twitter</option>
	<option vlaue=<"deletePerformances.php">Performances</option>
</select>



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
