<h> You Are Changing: </h><br><br>


<?php
	$connection=@mysqli_connect('localhost', 'dmcdonald2', 'dmcdonald2', 'ESGrooveDB');

	//echo $_SERVER['HTTP_REFERER'];

	if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateBands.php") //if came from updateBands.php
	{ //Bands

		$updateNameBefore = $_POST['nameRead'];
		$updateGenreBefore = $_POST['genreRead'];
		$updateNumMembersBefore = $_POST['numMembersRead'];
		$updateYearsActiveBefore = $_POST['yearsActiveRead'];

                $updateNameAfter = $_POST['name'];
                $updateGenreAfter = $_POST['genre'];
                $updateNumMembersAfter = $_POST['numMembers'];
                $updateYearsActiveAfter = $_POST['yearsActive'];

		echo "Original Band Name: " . $updateNameBefore . "<br>Updated Name: " . $updateNameAfter . "<br><br>Original Genre: " . $updateGenreBefore . "<br>Updated Genre: " . $updateGenreAfter . "<br><br>Original Number of Members: " . $updateNumMembersBefore . "<br>Updated Number of Members: " . $updateNumMembersAfter . "<br><br>Original Years Active: " . $updateYearsActiveBefore . "<br>Updated Years Active: " . $updateYearsActiveAfter . "<br><br>Click OK to make changes, or Cancel to cancel changes.";
		//echo "Name:" . $updateNameBefore . "<br>" . $updateGenreBefore . "<br>" . $updateNumMembersBefore . "<br>" . $updateYearsActiveBefore . "<br><br>" . ;
		?>
			<br><br>

			<input type="button" value="Cancel" onclick="history.back()">
			<input type="button" value="OK" onclick="
			<?php

				$sqlquery = "update Bands set name='" . $updateNameAfter . "', genre='" . $updateGenreAfter . "', numMembers='" . $updateNumMembersAfter . "', yearsActive='" . $updateYearsActiveAfter . "' WHERE name='" . $updateNameBefore . "'";

				$r = mysqli_query($connection, $sqlquery);
				if(mysqli_affected_rows($r) == 1)
				{
					echo "Changed";
				}


			?>">
		<?php



	}
	else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateVenue.php") //if came from updateBands.php
	{ //Venues


		$updateNameBefore = $_POST['nameRead'];
                $updateEstablishedBefore = $_POST['establishedRead'];
                $updateTypeBefore = $_POST['typeRead'];
                $updateAddressBefore = $_POST['addressRead'];

                $updateNameAfter = $_POST['name'];
                $updateEstablishedAfter = $_POST['established'];
                $updateTypeAfter = $_POST['type'];
                $updateAddressAfter = $_POST['address'];

                echo "Original Venue Name: " . $updateNameBefore . "<br>Updated Venue Name: " . $updateNameAfter . "<br><br>Original Established Date: " . $updateEstablishedBefore . "<br>Updated Established Date: " . $updateEstablishedAfter . "<br><br>Original Venue Type: " . $updateTypeBefore . "<br>Updated Venue Type: " . $updateTypeAfter . "<br><br>Original Address: " . $updateAddressBefore . "<br>Updated Address: " . $updateAddressAfter . "<br>";
                //echo "Name:" . $updateNameBefore . "<br>" . $updateGenreBefore . "<br>" . $updateNumMembersBefore . "<br>" . $update$
                ?>
                        <br><br>

                        <input type="button" value="Cancel" onclick="history.back()">
                        <input type="button" value="OK" onclick="
                        <?php

                                $sqlquery = "update Venues set name='" . $updateNameAfter . "', established='" . $updateEstablishedAfter . "', type='" . $updateTypeAfter . "', address='" . $updateAddressAfter . "' WHERE address='" . $updateAddressBefore . "'";

                                $r = mysqli_query($connection, $sqlquery);

                        ?>">

                <?php

	}else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateAlbums.php") //if came from updateAlbums.php
        { //Albums

		$updateTitleBefore = $_POST['titleRead'];
		$updateBNameBefore = $_POST['BnameRead'];
		$updateNumTracksBefore = $_POST['numTracksRead'];
		$updateLengthBefore = $_POST['lengthRead'];
		$updateReleaseYearBefore = $_POST['releaseYearRead'];

		$updateTitleAfter = $_POST['title'];
		$updateBNameAfter = $_POST['Bname'];
		$updateNumTracksAfter = $_POST['numTracks'];
		$updateLengthAfter = $_POST['length'];
		$updateReleaseYearAfter = $_POST['releaseYear'];

		echo "Original Album Title: " . $updateTitleBefore . "<br>Updated Album Title: " . $updateTitleAfter . "<br><br>Original Band Name: " . $updateBNameBefore . "<br>Updated Band Name: " . $updateBNameAfter . "<br><br>Original Number of Tracks: " . $updateNumTracksBefore . "<br>Updated Number of Tracks: " . $updateNumTracksAfter . "<br><br>Original Album Length: " . $updateLengthBefore . "<br>Updated Album Length: " . $updateLengthAfter . "<br><br>Original Album Release Year: " . $updateReleaseYearBefore . "<br>Updated Album Release Year: " . $updateReleaseYearAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";

		?>
        	<br><br>

        	<input type="button" value="Cancel" onclick="history.back()">
        	<input type="button" value="OK" onclick="
        	<?php

                	$sqlquery = "update Album set title='" . $updateTitleAfter . "', Bname='" . $updateBNameAfter . "', numTracks=" . $updateNumTracksAfter . ", length=" . $updateLengthAfter . ", releaseYear=" . $updateReleaseYearAfter . " WHERE title='" . $updateTitleBefore . "' and Bname='" . $updateBNameBefore . "'";
                	$r = mysqli_query($connection, $sqlquery);

        	?>">
	<?php


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateSongs.php") //if came from updateBands.php
        { //Songs
		

        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/updateBands.php") //if came from updateBands.php
        { //Members


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/updateBands.php") //if came from updateBands.php
        { //Merch


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/updateBands.php") //if came from updateBands.php
        { //travelTo


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/updateBands.php") //if came from updateBands.php
        { //Facebook


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/updateBands.php") //if came from updateBands.php
        { //Instagram


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/updateBands.php") //if came from updateBands.php
        { //Twitter


        }

//echo $sqlquery;




?>
