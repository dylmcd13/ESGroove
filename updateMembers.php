<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php
        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select * from Members;";

?>

<h style="font-size: 20pt"><b> Update Members Table </b></h><br>
<p> <u>Choose the row you want to edit. Sorted by Member Name.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
        $name = $row['name'];
        $instrument = $row['instrument'];
        $Bname = $row['Bname'];



        echo '<option data-name="'.$name.'" data-instrument="'.$instrument.'" data-Bname="'.$Bname.'"> ' . $name  . ' || ' . $instrument . ' || ' . $Bname . ' || ' . '</option>';
}

        mysqli_close($connection);
?>
</select>

<br>
<br>

<form action="updateConfirmation.php" method="post">

<input type="text" id="nameBoxRead" name="nameRead" size="50" readonly="readonly">
<label for="nameRead">Member Name</label>

<br>

<input type="text" id="instrumentBoxRead" name="instrumentRead" size="50" readonly="readonly">
<label for="instrumentRead">Instrument</label>

<br>


<input type="text" id="BnameBoxRead" name="BnameRead" size="30" readonly="readonly">
<label for="BnameRead">Band Name</label>


<br><br><br><br><br>

<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="nameBox" name="name" size="50">
<label for="nameRead">Member Name</label>

<br>

<input type="text" id="instrumentBox" name="instrument" size="50">
<label for="instrument">Instrument</label>

<br>


<input type="text" id="BnameBox" name="Bname" size="30">
<label for="Bname">Band Name</label>

<br><br>

<input type="submit" value="Update">

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


        document.getElementById('nameBoxRead').value = selectedOption.getAttribute('data-name');
        document.getElementById('instrumentBoxRead').value = selectedOption.getAttribute('data-instrument');
        document.getElementById('BnameBoxRead').value = selectedOption.getAttribute('data-Bname');

        document.getElementById('nameBox').value = selectedOption.getAttribute('data-name');
        document.getElementById('instrumentBox').value = selectedOption.getAttribute('data-instrument');
        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');


}
</script>



</html>


