<?php
session_start();
?>
<!DOCTYPE html>
<html>


<?php
        //echo '<p> Hello!</p>';
        $connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');
        $showTableQuery = "select * from Venues;";
?>

<h style="font-size: 20pt"><b> Update Venues Table </b></h><br>
<p> <u>Choose the row you want to edit. Sorted by Venue Name.</u> </p>




<select name="table" id="table" onchange="insert()" style="width: 800px;">
        <option value=""selected>--Select--</option>

<?php

$r=mysqli_query($connection, $showTableQuery);



while($row=mysqli_fetch_array($r)){
        $name = $row['name'];
        $established = $row['established'];
        $type = $row['type'];
        $address = $row['address'];


        echo '<option data-name="'.$name.'" data-established="'.$established.'" data-type="'.$type.'" data-address="'.$address.'"."> ' . $name  . ' || ' . $established . ' || ' . $type . ' || ' . $address .  '</option>';
}

        mysqli_close($connection);
?>
</select>

<br>
<br>

<form action="updateConfirmation.php" method="post">
<input type="text" id="nameBoxRead" name="nameRead" size="50" readonly="readonly">
<label for="nameRead">Venue Name</label>

<br>

<input type="text" id="establishedBoxRead" name="establishedRead" size="3" readonly="readonly">
<label for="establishedRead">Established</label>

<br>


<input type="text" id="typeBoxRead" name="typeRead" size="30" readonly="readonly">
<label for="typeRead">Type of Venue</label>

<br>


<input type="text" id="addressBoxRead" name="addressRead" size="50" readonly="readonly">
<label for="addressRead">Address</label>

<br><br><br><br><br>
<u><h><b> Update Values: </h></b></u><br>


<input type="text" id="nameBox" name="name" size="50">
<label for="name">Venue Name</label>

<br>


<input type="text" id="establishedBox" name="established" size="3">
<label for="established">Established</label>

<br>


<input type="text" id="typeBox" name="type" size="30">
<label for="type">Type of Venue</label>

<br>


<input type="text" id="addressBox" name="address" size="50">
<label for="address">Address</label>


<br>
<input type="submit"  value="Update">

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
        document.getElementById('establishedBoxRead').value = selectedOption.getAttribute('data-established');
        document.getElementById('typeBoxRead').value = selectedOption.getAttribute('data-type');
        document.getElementById('addressBoxRead').value = selectedOption.getAttribute('data-address');

        document.getElementById('nameBox').value = selectedOption.getAttribute('data-name');
        document.getElementById('establishedBox').value = selectedOption.getAttribute('data-established');
        document.getElementById('typeBox').value = selectedOption.getAttribute('data-type');
        document.getElementById('addressBox').value = selectedOption.getAttribute('data-address');


}

function update()
{
        var updateNameBefore = document.getElementById('nameBoxRead').value;
        var updateGenreBefore = document.getElementById('establishedBoxRead').value;
        var updateNumMembersBefore = document.getElementById('typeBoxRead').value;
        var updateYearsActiveBefore = document.getElementById('addressBoxRead').value;

        var updateNameAfter = document.getElementById('nameBox').value;
        var updateGenreAfter = document.getElementById('establishedBox').value;
        var updateNumMembersAfter = document.getElementById('typeBox').value;
        var updateYearsActiveAfter = document.getElementById('addressBox').value;

        //var update = confirm("Original Band Name: "+updateNameBefore+"\nUpdated Name: "+updateNameAfter+"\n\nOriginal Genre: "+updateGenreBefore+"\nUpdated Genre: "+updateGenreAfter+"\n\nOriginal Number of Members: "+updateNumMembersBefore+"\nUpdated Number of Members: "+updateNumMembersAfter+"\n\nOriginal Years Active: "+updateYearsActiveBefore+"\nUpdated Years Active: "+updateYearsActiveAfter+"\n\nClick OK to make changes, or Cancel to cancel changes.");

        if(update){
                window.location.href = "updateConfirmation.php";


                //var updateQueryJS = '<?php echo $updateNameBefore;?>';
        }
        else{
                alert("Changes cancelled");
        }


}



</script>



</html>


