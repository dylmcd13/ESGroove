<html>
<body>
<form method=post action="displayTable.php">
<label for="artist" >Artist Search</label> <br>
<input type="text" id = "artist" name="artist">
<label for="BandSearchFilter">Search By...</label>
<select name="BandSearchFilter" id="BandSearchFilter" placeholder="Search by" >
<option value="bandName">Band Name</option>
<option value="genre">Genre</option>
<option value="numMembers">Number of Members</option>
<option value="years">Years Active</option>
</select>
<br>
<label for="venue"  >Venue Search</label> <br>
<input type="text" id = "venue"  name ="venue">
<label for="VenueSearchFilter">Search By...</label>
<select name="VenueSearchFilter" id="VenueSearchFilter" placeholder="Search by" >
<option value="venueName">Venue Name</option>
<option value="established">Established Year</option>
<option value="type">Type of Venue</option>
<option value="address">Address of Venue</option>
</select>
<br>

	<input type="submit">
</form>
</body>
</html>

