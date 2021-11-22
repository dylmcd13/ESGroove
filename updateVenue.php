
<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select name, established, type, address from Venues group by name, established, type, address;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Venues Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Venue Name</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $name = $row['name'];
        $estab = $row['established'];
        $type = $row['type'];
        $address = $row['address'];

        echo '<option data-name="' .$name.'" data-estab="'.$estab.'" data-type="'.$type.'" data-address="'.$address.'". "> ' . $name  . ' || ' . $estab . ' || ' . $type . ' || ' . $address . '</option>';

}


?>

</select>


<form>
<input type="text" id="nameBox" name="VenueName" size="50">
<label for="nameBox">Venue Name</label>
</form>
<br>

<form>
<input type="text" id="estabBox" name="estabBox" size="50">
<label for="estabBox">Established</label>
</form>
<br>

<form>
<input type="text" id="typeBox" name="type" size="50">
<label for="typeBox">Type of Venue</label>
</form>
<br>

<form>
<input type="text" id="addressBox" name="address" size="50">
<label for="addressBox">Address</label>
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


        document.getElementById('nameBox').value = selectedOption.getAttribute('data-name');
        document.getElementById('estabBox').value = selectedOption.getAttribute('data-estab');
        document.getElementById('typeBox').value = selectedOption.getAttribute('data-type');
        document.getElementById('addressBox').value = selectedOption.getAttribute('data-address');

        $updateQuery += " name=". selectedOption.getAttribute('data-name')
        document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>

