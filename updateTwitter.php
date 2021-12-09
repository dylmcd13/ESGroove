<?php
include "checkSession.php";
?>


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

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Bname, handle from Twitter group by Bname, handle;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Twitter Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Band Name</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $Bname = $row['Bname'];
        $handle = $row['handle'];

        echo '<option data-Bname="'.$Bname.'" data-handle="'.$handle.'" . "> ' . $Bname  . ' || ' . $handle  . '</option>';

}


?>

</select>

<br><br>
<form action="updateConfirmation.php" method="post">

<input type="text" id="BnameRead" name="BnameRead" size="50" readonly="readonly">
<label for="BnameRead">Band Name</label>

<br>

<input type="text" id="handleRead" name="handleRead" size="50" readonly="readonly">
<label for="handleRead">Twitter Handle</label>

<br><br><br>

<u><h><b> Update Values: </h></b></u><br>

<br>

<input type="text" id="Bname" name="Bname" size="50">
<label for="Bname">Band Name</label>

<br>

<input type="text" id="handle" name="handle" size="50">
<label for="handle">Twitter Handle</label>

<br>
<input type="submit" action="updateQuery()" value="Update">

</form>
<br>

<script>

function insert()
{
        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];

        document.getElementById('BnameRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('handleRead').value = selectedOption.getAttribute('data-handle');

        document.getElementById('Bname').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('handle').value = selectedOption.getAttribute('data-handle');
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
