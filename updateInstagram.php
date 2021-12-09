<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Bname, handle from Instagram group by Bname, handle;";

?>

<h style="font-size: 20pt"><b> Update Instagram Table </b></h><br>
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

<input type="text" id="BnameBoxRead" name="BnameRead" size="50" readonly="readonly">
<label for="BnameBoxRead">Band Name</label>

<br>


<input type="text" id="handleBoxRead" name="handleRead" size="50" readonly="readonly">
<label for="handleBoxRead">URL</label>

<br><br><br>
<u><h><b> Update Values: </h></b></u><br>

<input type="text" id="BnameBox" name="Bname" size="50">
<label for="BnameBox">Band Name</label>

<br>


<input type="text" id="handleBox" name="handle" size="50">
<label for="handleBox">URL</label>



<br>





<br>
<input type="submit" value="Update">

</form>
<br>

<script>

function insert()
{

       var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];


        document.getElementById('BnameBoxRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('handleBoxRead').value = selectedOption.getAttribute('data-handle');

        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('handleBox').value = selectedOption.getAttribute('data-handle');


}


</script>



</html>


