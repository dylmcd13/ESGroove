<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select name, instrument, Bname from Members group by name, Bname, instrument;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Members Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Member Name</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $name = $row['name'];
        $instrument = $row['instrument'];
        $Bname = $row['Bname'];

        echo '<option data-name="'.$name.'" data-instrument="'.$instrument.'" data-Bname="'.$Bname.'" . "> ' . $name  . ' || ' . $instrument . ' || ' . $Bname . '</option>';

}


?>

</select>

<br><br>
<form>
<input type="text" id="nameBox" title="nameBox" size="50">
<label for="nameBox">Name</label>

<br>


<input type="text" id="instrumentBox" title="instrumentBox" size="50">
<label for="instrumentBox">Instrument</label>

<br>


<input type="text" id="BnameBox" title="BnameBox" size="50">
<label for="BnameBox">Band Name</label>

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
        document.getElementById('instrumentBox').value = selectedOption.getAttribute('data-instrument');
        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('lengthBox').value = selectedOption.getAttribute('data-length');

        $updateQuery += " title=". selectedOption.getAttribute('data-title')
        document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>


