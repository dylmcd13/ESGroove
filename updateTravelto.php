<html>
<head>
	<link href="styles.css" rel="stylesheet">
</head>
<body style="color: white">
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
include "checkSession.php";
?>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Bname, address from Travelto group by Bname, address;";
       
?>

<h style="font-size: 20pt"><b> Update Travelto Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Band</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $Bname = $row['Bname'];
        $address = $row['address'];

        echo '<option data-Bname="'.$Bname.'" data-address="'.$address.'" . "> ' . $Bname  . ' || ' . $address  . '</option>';

}


?>

</select>

<br><br>
<form action="updateConfirmation.php" method="post">

<input type="text" id="BnameBoxRead" name="BnameBoxRead" size="50" readonly="readonly">
<label for="BnameBoxRead">Band Name</label>

<br>


<input type="text" id="addressBoxRead" name="addressBoxRead" size="50" readonly="readonly">
<label for="addressBoxRead">Address of Venue</label>

<br>




<br><br><br>

<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="BnameBox" name="Bname" size="50">
<label for="BnameRead">Band Name</label>

<br>

<input type="text" id="addressBox" name="address" size="50">
<label for="type">Type of Merch</label>

<br><br>
<input type="submit" value="Update">

</form>
<br>

<script>

function insert()
{

        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];


        document.getElementById('BnameBoxRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('addressBoxRead').value = selectedOption.getAttribute('data-address');

        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('addressBox').value = selectedOption.getAttribute('data-address');

}


</script>





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
