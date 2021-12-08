<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php
        //echo '<p> Hello!</p>';
        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select * from Songs;";
        $updateBandsQueryPHP = "update  set name =\"";

?>

<h style="font-size: 20pt"><b> Update Songs Table </b></h><br>
<p> <u>Choose the row you want to edit. Sorted by name.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
        $title = $row['title'];
        $Atitle = $row['Atitle'];
        $Bname = $row['Bname'];
        $length = $row['length'];


        echo '<option data-title="'.$title.'" data-Atitle="'.$Atitle.'" data-Bname="'.$Bname.'" data-length="'.$length.'"."> ' . $title  . ' || ' . $Atitle . ' || ' . $Bname . ' || ' . $length .  '</option>';
}

        mysqli_close($connection);
?>
</select>

<br>
<br>

<form action="updateConfirmation.php" method="post">

<input type="text" id="titleBoxRead" name="titleRead" size="50" readonly="readonly">
<label for="titleRead">Song Title</label>

<br>

<input type="text" id="AtitleBoxRead" name="AtitleRead" size="50" readonly="readonly">
<label for="AtitleRead">Genre</label>

<br>


<input type="text" id="BnameBoxRead" name="BnameRead" size="50" readonly="readonly">
<label for="BnameRead">Band Name</label>

<br>


<input type="text" id="lengthBoxRead" name="lengthRead" size="3" readonly="readonly">
<label for="lengthRead">Length</label>

<br><br><br><br><br>

<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="titleBox" name="title" size="50">
<label for="titleRead">Song Title</label>

<br>

<input type="text" id="AtitleBox" name="Atitle" size="50">
<label for="AtitleRead">Genre</label>

<br>


<input type="text" id="BnameBox" name="Bname" size="50">
<label for="BnameRead">Band Name</label>

<br>


<input type="text" id="lengthBox" name="length" size="3">
<label for="lengthRead">Length</label>

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


        document.getElementById('titleBoxRead').value = selectedOption.getAttribute('data-title');
        document.getElementById('AtitleBoxRead').value = selectedOption.getAttribute('data-Atitle');
        document.getElementById('BnameBoxRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('lengthBoxRead').value = selectedOption.getAttribute('data-length');

        document.getElementById('titleBox').value = selectedOption.getAttribute('data-title');
        document.getElementById('AtitleBox').value = selectedOption.getAttribute('data-Atitle');
        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('lengthBox').value = selectedOption.getAttribute('data-length');

}


</script>



</html>

