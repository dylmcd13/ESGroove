<!DOCTYPE html>
<html>
<h style="font-size: 20pt"><b> Update Table </b></h>


<br>
<br>

<label for="Table">Choose a Table:</label>



<select name="table" id="table">
	<option value="default"selected>--Select--</option>
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


<input type="button" value="Submit" onclick="myFunction()">


<p id="test"></p>

<script>
function myFunction() {
  var val = document.getElementById("table").value;
  document.getElementById("test").innerHTML = val;
  if(val == "Bands")
  {
	document.getElementById("test").innerHTML = "Bands";
  }
  else if(val == "Venues")
  {
  	document.getElementById("test").innerHTML = "Venues";
  }
  else if(val == "Albums")
  {
  	document.getElementById("test").innerHTML = "Albums";
  }
  else if(val == "Songs")
  {
  	document.getElementById("test").innerHTML = "Songs";
  }
  else if(val == "Members")
  {
  	document.getElementById("test").innerHTML = "Members";
  }
  else if(val == "Merch")
  {
  	document.getElementById("test").innerHTML = "Merch";
  }
  else if(val == "Travelto")
  {
        document.getElementById("test").innerHTML = "Travelto";
  }
  else if(val == "Facebook")
  {
        document.getElementById("test").innerHTML = "Facebook";
  }
  else if(val == "Instagram")
  {
        document.getElementById("test").innerHTML = "Instagram";
  }
  else if(val == "Twitter")
  {
        document.getElementById("test").innerHTML = "Twitter";
  }
}
</script>


</html>
