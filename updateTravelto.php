<?php
session_start();
?>
<!DOCTYPE html>
<html>


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



</html>


