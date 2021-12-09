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
<br>
<h1 id="title">Search the <span id="headerSpan">Database By Venue</span></h1>
<hr style="height:5px; background-color:white; border-color: white;">

<fieldset id="searchSet">
 <legend id="searchLegend">Search Venues</legend>
 <form action="searchVenue.php" method="post">    
 <label for="VenueSearchFilter" id="searchLabel">Search By...</label>
 <select name="VenueSearchFilter" id="VenueSearchFilter" placeholder="Search by" >
 <option value="venueName">Venue Name</option>
 <option value="established">Established Year</option>
 <option value="type">Type of Venue</option>
 <option value="address">Address of Venue</option>
 </select>
<br>
<input type="text" id = "venue"  name ="venue">
<br>
<input type="submit" id="submit" >
</form>
 </fieldset>










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
