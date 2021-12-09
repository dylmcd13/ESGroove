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
</div>

<div id="slideShow" class="slideshow-container">
    <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="banner2.jpg" style="width:100%; height:600px;">
    </div>

    <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="performance.jpg" style="width:100%; height:600px;">
    <div id="bannerCaption1"><h2>Welcome to Eastern Shore Groove</h2><hr style="width:75%; color: black;">
     A database paying tribute to the musicians and the venues of the Eastern Shore. In this database, you will be able to find 
information about the musicians, venues and the performances of the Easten Shore of Maryland.</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="folky.jpg" style="width: 100%; height:600px">
    <div id="bannerCaption2"><h2>Explore the Artists of the Shore</h2><hr style="width:75%; color: black;">
     Use the artists tab to search for the artists that are from or have visited the Eastern Shore.</div>
    </div>

    <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="Seacrets.jpg" style="width: 100%; height:600px">
    <div id="bannerCaption1"><h2>Check out the Venues</h2><hr style="width:75%; color: black;">
   Use the Venues tab to search for the venues in the Eastern Shore and find details about them such as 
    address, established year , and the type of venue</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
<br>
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <br> 
  <br> 
  <br>
</div>

<div id="searchDiv">
<img src="beachy.jpg" id="searchPic">
<div id="SearchText">
<h1  id="title">Search the Database</h1>
<hr>
<p  style="color:white; font-size: 25px; font-family: Verdana; ">Look through the Performances of the Eastern Shore with the performances tab. this tab will let you look at all the previous or future shows of the Eastern Shore and shows the date performed, who performed the show and where the show was located.    </p>
</div>
</div>

<div id="searchDiv">
<img src="sunFest.jpg" id="creditPic" >
<h1 id="title">Login to Funk Up the Groove</h1>
<hr>
<p  style="color:white; font-size: 25px; font-family: Verdana; ">Login as an administrator to insert, delete and update the groove. Doing this will make the database increase in size and will help the accuracy of the database. Only administrators can access this feature!!    </p>


</div>

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
        <script type="text/javascript">
     var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
</html>