<?php
include "checkSession.php";
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
        //echo '<p> Hello!</p>';
        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select * from Performances;";
?>

<h style="font-size: 20pt; color: white"><b> Update Performances Table </b></h><br>
<p style="color: white"> <u>Choose the row you want to edit. Sorted by Band Name.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
        $Bname = $row['Bname'];
        $date = $row['date'];
        $venue = $row['venue'];

        echo '<option data-Bname="'.$Bname.'" data-date="'.$date.'" data-venue="'.$venue.'">' . $Bname  . ' || ' . $date . ' || ' . $venue .  '</option>';
}

        mysqli_close($connection);
?>
</select>

<br>
<br>

<form  style="color: white" action="updateConfirmation.php" method="post">
<input type="text" id="BnameRead" name="BnameRead" size="30" readonly="readonly">
<label for="BnameRead">Band Name</label>

<br>

<input type="text" id="dateRead" name="dateRead" size="5" readonly="readonly">
<label for="dateRead">Date</label>

<br>


<input type="text" id="venueRead" name="venueRead" size="20" readonly="readonly">
<label for="numMembersRead">Venue</label>

<br>



<br><br><br><br><br>

<u><h style="color: white"><b> Update Values: </h></b></u><br>

<input type="text" id="Bname" name="Bname" size="30">
<label for="Bname">Band Name</label>

<br>

<input type="text" id="date" name="date" size="5">
<label for="date">Date</label>

<br>


<input type="text" id="venue2" name="venue" size="20">
<label for="venue">Venue</label>


<br><br>
<input type="submit"  value="Update">

</form>


<br><br><br><br>


<br>


<p id="o"></p>

<script>

//Insert into text boxes
function insert()
{

        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];


        document.getElementById('BnameRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('dateRead').value = selectedOption.getAttribute('data-date');
        document.getElementById('venueRead').value = selectedOption.getAttribute('data-venue');

        document.getElementById('Bname').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('date').value = selectedOption.getAttribute('data-date');
        document.getElementById('venue2').value = selectedOption.getAttribute('data-venue');

}



</script>




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













