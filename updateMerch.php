<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select Bname, type, price from Merch group by Bname, type, price;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Merch Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Band Name</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $Bname = $row['Bname'];
        $type = $row['type'];
        $price = $row['price'];

        echo '<option data-Bname="'.$Bname.'" data-type="'.$type.'" data-price="'.$price.'" . "> ' . $Bname  . ' || ' . $type . ' || ' . $price . '</option>';

}


?>

</select>

<br><br>
<form>
<input type="text" id="BnameBox" title="BnameBox" size="50">
<label for="BnameBox">Band Name</label>

<br>


<input type="text" id="typeBox" title="typeBox" size="50">
<label for="typeBox">Type of Merch</label>

<br>


<input type="text" id="priceBox" title="priceBox" size="50">
<label for="priceBox">Price</label>

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
        document.getElementById('typeBox').value = selectedOption.getAttribute('data-type');
        document.getElementById('priceBox').value = selectedOption.getAttribute('data-price');
        

        $updateQuery += " title=". selectedOption.getAttribute('data-title')
        document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>


