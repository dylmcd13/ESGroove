<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Bname, address from Travelto group by Bname, address;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Travelto Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Band Name</b>.</u> </p>




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
<form>
<input type="text" id="BnameBox" title="BnameBox" size="50">
<label for="BnameBox">Band Name</label>

<br>


<input type="text" id="address" title="address" size="50">
<label for="address">Address of Venue</label>

<br>




<br>





<br>
<input type="submit" action="updateQuery()" value="Update">

</form>
<br>

<script>

function insert()
{

        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];


        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('address').value = selectedOption.getAttribute('data-address');
        
        

        $updateQuery += " title=". selectedOption.getAttribute('data-title')
        document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>


