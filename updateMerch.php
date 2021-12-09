<?php
session_start();
?>
<!DOCTYPE html>
<html>

<?php
        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select * from Merch;";
 
?>

<h style="font-size: 20pt"><b> Update Merch Table </b></h><br>
<p> <u>Choose the row you want to edit. Sorted by Band Name.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
        $Bname = $row['Bname'];
        $type = $row['type'];
        $price = $row['price'];
        



        echo '<option data-Bname="'.$Bname.'" data-type="'.$type.'" data-price="'.$price.'"> ' . $Bname  . ' || ' . $type . ' || ' . $price  . '</option>';
}

        mysqli_close($connection);
?>
</select>

<br>
<br>

<form action="updateConfirmation.php" method="post">

<input type="text" id="BnameBoxRead" name="BnameRead" size="50" readonly="readonly">
<label for="BnameRead">Band Name</label>

<br>

<input type="text" id="typeBoxRead" name="typeRead" size="50" readonly="readonly">
<label for="typeRead">Type of Merch</label>

<br>


<input type="text" id="priceBoxRead" name="priceRead" size="3" readonly="readonly">
<label for="priceRead">Price</label>



<br><br><br><br><br>

<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="BnameBox" name="Bname" size="50">
<label for="BnameRead">Band Name</label>

<br>

<input type="text" id="typeBox" name="type" size="50">
<label for="type">Type of Merch</label>

<br>


<input type="text" id="priceBox" name="price" size="3">
<label for="price">Price</label>
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


        document.getElementById('BnameBoxRead').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('typeBoxRead').value = selectedOption.getAttribute('data-type');
        document.getElementById('priceBoxRead').value = selectedOption.getAttribute('data-price');

        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('typeBox').value = selectedOption.getAttribute('data-type');
        document.getElementById('priceBox').value = selectedOption.getAttribute('data-price');

}
</script>



</html>


