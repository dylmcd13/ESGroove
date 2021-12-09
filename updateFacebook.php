<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Bname, Url from Facebook group by Bname, Url;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Facebook Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Band Name</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $Bname = $row['Bname'];
        $url = $row['Url'];

        echo '<option data-Bname="'.$Bname.'" data-url="'.$url.'" . "> ' . $Bname  . ' || ' . $url  . '</option>';

}


?>

</select>

<br><br>
<form action="updateConfirmation.php" method="post">

<input type="text" id="BnameBoxRead" name="BnameRead" size="50" readonly="readonly">
<label for="BnameBoxRead">Band Name</label>

<br>


<input type="text" id="urlBoxRead" name="urlRead" size="50" readonly="readonly">
<label for="urlBoxRead">URL</label>

<br>




<br>





<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="BnameBox" name="Bname" size="50">
<label for="BnameBox">Band Name</label>

<br>


<input type="text" id="urlBox" name="url" size="50">
<label for="urlBox">URL</label>

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
        document.getElementById('urlBoxRead').value = selectedOption.getAttribute('data-url');

        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('urlBox').value = selectedOption.getAttribute('data-url');

}


</script>



</html>


