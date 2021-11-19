<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

	$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
	$showTableQuery = "select * from Bands;";
	$updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Bands Table </b></h><br>
<p> <u>Choose the row you want to edit (type in the corresponding data for the row correctly)</u> </p>




<select name="table" id="table" onchange="javascript:location.href = this.value;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
	$name = $row['name'];
	echo '<option value="' . $row['name'] . $row['genre'] . '"> ' . $name  . '</option>';
}


?>

</select>



</html>
