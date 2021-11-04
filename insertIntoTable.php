<!DOCTYPE html>
<html>
<h style="font-size: 20pt"><b> Insert into Table </b></h>

<?php
/* ***UNCOMMENT WHEN PUTTING INTO ACADWEB1
if($connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB'))
{
	print 'SUCCESS';
}
else
{
	print 'UNSUCCESSFUL';
}
*/

?>
<br>
<br>

<label for="Table">Choose a Table:</label>

<select name="table" id="table">
	<option value="">--Select--</option>
  	<option value="Bands">Bands</option>
  	<option value="Venues">Venues</option>
  	<option value="Albums">Albums</option>
  	<option value="Songs">Songs</option>
  	<option value="Members">Members</option>
  	<option value="Merch">Merch</option>
  	<option value="Travelto">Travelto</option>
  	<option value="Facebook">Facebook</option>
 	<option value="Instagram">Instagram</option>
  	<option value="Twitter">Twitter</option>
</select> 



</html>