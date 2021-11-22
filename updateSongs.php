<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php

        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select title, Atitle, Bname, length from Songs group by title, Atitle, Bname, length;";
        $updateQuery = "update Bands set";
?>

<h style="font-size: 20pt"><b> Update Songs Table </b></h><br>
<p> <u>Choose the row you want to edit. <b>Sorted by Song title</b>.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);


while($row=mysqli_fetch_array($r)){
        $title = $row['title'];
        $Atitle = $row['Atitle'];
        $Bname = $row['Bname'];
        $length = $row['length'];

        echo '<option data-title="'.$title.'" data-Atitle="'.$Atitle.'" data-Bname="'.$Bname.'" data-length="'.$length.'". "> ' . $title  . ' || ' . $Atitle . ' || ' . $Bname . ' || ' . $length . '</option>';

}


?>

</select>

<br><br>
<form>
<input type="text" id="songTitleBox" title="songTitleBox" size="50">
<label for="songTitleBox">Song title</label>

<br>


<input type="text" id="AtitleBox" title="AtitleBox" size="50">
<label for="AtitleBox">Album title</label>

<br>


<input type="text" id="BnameBox" title="BnameBox" size="50">
<label for="BnameBox">Band Name</label>

<br>


<input type="text" id="lengthBox" title="lengthBox" size="50">
<label for="lengthBox">Length</label>



<br>
<input type="submit" action="updateQuery()" value="Update">

</form>
<br>

<script>

function insert()
{

        var selectTable = document.getElementById('table');
        var selectedOption = selectTable.options[selectTable.selectedIndex];


        document.getElementById('songTitleBox').value = selectedOption.getAttribute('data-title');
        document.getElementById('AtitleBox').value = selectedOption.getAttribute('data-Atitle');
        document.getElementById('BnameBox').value = selectedOption.getAttribute('data-Bname');
        document.getElementById('lengthBox').value = selectedOption.getAttribute('data-length');

        $updateQuery += " title=". selectedOption.getAttribute('data-title')
        document.getElementById('o').innerHTML = $updateQuery;

}


</script>



</html>

