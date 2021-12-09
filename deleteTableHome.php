<?php include 'checkSession.php';?>
<!DOCTYPE html>
<html>
<h style="font-size: 20pt"><b> Delete Table </b></h>


<br>
<br>

<label for="Table">Choose a Table:</label>



<select name="table" id="table" onchange="javascript:location.href = this.value;">
	<option value=""selected>--Select--</option>
  	<option value="deleteBands.php">Bands</option>
  	<option value="deleteVenue.php">Venues</option>
  	<option value="deleteAlbum.php">Albums</option>
  	<option value="deleteSongs.php">Songs</option>
  	<option value="deleteMembers.php">Members</option>
  	<option value="deleteMerch.php">Merch</option>
  	<option value="deleteTravel.php">Travelto</option>
  	<option value="deleteFacebook.php">Facebook</option>
 	<option value="deleteInstagram.php">Instagram</option>
  	<option value="deleteTwitter.php">Twitter</option>
</select>





</html>


