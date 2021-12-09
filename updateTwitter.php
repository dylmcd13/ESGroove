<?php
session_start();
?>
<!DOCTYPE html>
<html>

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



</html>

