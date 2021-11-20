
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




<select name="table" id="table" onchange="javascript:location.href = this.value;" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


$mask = "|%-50.50s |%.5s |\n";

while($row=mysqli_fetch_array($r)){
        $name = $row['name'];
        $estab = $row['established'];
        $type = $row['type'];
        $address = $row['address'];

        echo '<option value="' . $row['name'] . $row['established'] . $row['type'] . $row['address'] . '"> ' . $name  . ' || ' . $estab . ' || ' . $type . ' || ' . $address . '</option>';

}


?>

</select>



</html>



