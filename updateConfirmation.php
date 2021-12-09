<?php include "checkSession.php"; ?>
<html>
<head>
	<link href="styles.css" rel="stylesheet">
</head>
<body style="color: white">
    <a name="top"></a>
<div>
	<ul id="navbar">
  <li id="navtab"><a   id="navlink" href="indexAdmin.php">Home</a></li>
  <li id="navtab"><a  id="navlink" href="ArtistsAdmin.php">Artists</a></li>
  <li id="navtab"><a  id="navlink" href="VenuesAdmin.php">Venues</a></li>
  <li id="navtab"><a  id="navlink" href="PerformancesAdmin.php">Performances</a></li>
  <li id="navtab"><a  id="navlink" href="AdminMenu.php">Admin Menu</a></li>
  <li id="navtab"><a  id="navlink" href="Logout.php">Logout</a></li>
  <li id="headerLogo">ES<span id="headerSpan">Groove</span></li>
</ul>
<hr style="height: 15px; background-color: #444; border-color: #444; margin: 0; padding: 0;">
</div>





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

		echo "Original Band Name: " . $updateNameBefore . "<br>Updated Band Name: " . $updateNameAfter . "<br><br>Original Genre: " . $updateGenreBefore . "<br>Updated Genre: " . $updateGenreAfter . "<br><br>Original Number of Members: " . $updateNumMembersBefore . "<br>Updated Number of Members: " . $updateNumMembersAfter . "<br><br>Original Years Active: " . $updateYearsActiveBefore . "<br>Updated Years Active: " . $updateYearsActiveAfter . "<br><br>Click OK to make changes, or Cancel to cancel changes.";
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

                	$sqlquery = "update Album set Atitle='" . $updateTitleAfter . "', Bname='" . $updateBNameAfter . "', numTracks=" . $updateNumTracksAfter . ", length=" . $updateLengthAfter . ", releaseYear=" . $updateReleaseYearAfter . " WHERE Atitle='" . $updateTitleBefore . "' and Bname='" . $updateBNameBefore . "'";

                	$r = mysqli_query($connection, $sqlquery);

        	?>">
	<?php
	//echo "<br>" . $sqlquery;

        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateSongs.php") //if came from updateSongs.php
        { //Songs



			$updateTitleBefore = $_POST['titleRead'];
			$updateAtitleBefore = $_POST['AtitleRead'];
			$updateBnameBefore = $_POST['BnameRead'];
			$updateLengthBefore = $_POST['lengthRead'];


			$updateTitleAfter = $_POST['title'];
			$updateAtitleAfter = $_POST['Atitle'];
			$updateBnameAfter = $_POST['Bname'];
			$updateLengthAfter = $_POST['length'];

			echo "Original Song Name: " . $updateTitleBefore . "<br>Updated Song Name: " . $updateTitleAfter . "<br><br>Original Album Name: " . $updateAtitleBefore . "<br>Updated Album Name: " . $updateAtitleAfter . "<br><br>Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBnameAfter . "<br><br>Original Song Length: " . $updateLengthBefore . "<br>Updated Song Length: " . $updateLengthAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";

      	?>
        	<br><br>

        	<input type="button" value="Cancel" onclick="history.back()">
        	<input type="button" value="OK" onclick="
        	<?php

                	$sqlquery = "update Songs set title='" . $updateTitleAfter . "', Atitle='" . $updateAtitleAfter . "', Bname='" . $updateBnameAfter . "', length=" . $updateLengthAfter . " WHERE title='" . $updateTitleBefore . "' and Atitle='" . $updateAtitleBefore . "' and Bname='" . $updateBnameBefore . "'";

                	$r = mysqli_query($connection, $sqlquery);


        	?>">
	<?php





        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateMembers.php") //if came from updateMembers.php
        { //Members


        $updateNameBefore = $_POST['nameRead'];
        $updateInstrumentBefore = $_POST['instrumentRead'];
        $updateBnameBefore = $_POST['BnameRead'];


        $updateNameAfter = $_POST['name'];
        $updateInstrumentAfter = $_POST['instrument'];
        $updateBnameAfter = $_POST['Bname'];

        echo "Original Member Name: " . $updateNameBefore . "<br>Updated Member Name: " . $updateNameAfter . "<br><br>Original Instrument: " . $updateInstrumentBefore . "<br>Updated Instrument: " . $updateInstrumentAfter . "<br><br>Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBnameAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";
?>
        <br><br>

        <input type="button" value="Cancel" onclick="history.back()">
        <input type="button" value="OK" onclick="
        <?php

                $sqlquery = "update Members set name='" . $updateNameAfter . "', instrument='" . $updateInstrumentAfter . "', Bname='" . $updateBnameAfter . "' WHERE name='" . $updateNameBefore . "' and Bname='" . $updateBNameBefore . "'";

                $r = mysqli_query($connection, $sqlquery);


        ?>">
	<?php
		


        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateMerch.php") //if came from updateMerch.php
        { //Merch


	$updateBnameBefore = $_POST['BnameRead'];
        $updateTypeBefore = $_POST['typeRead'];
        $updatePriceBefore = $_POST['priceRead'];


        $updateBnameAfter = $_POST['Bname'];
        $updateTypeAfter = $_POST['type'];
        $updatePriceAfter = $_POST['price'];

        echo "Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBnameAfter . "<br><br>Original Type of Merch: " . $updateTypeBefore . "<br>Updated Type of Merch: " . $updateTypeAfter . "<br><br>Original Price: " . $updatePriceBefore . "<br>Updated Price: " . $updatePriceAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";
?>
        <br><br>

        <input type="button" value="Cancel" onclick="history.back()">
        <input type="button" value="OK" onclick="
        <?php

                $sqlquery = "update Merch set Bname='" . $updateBnameAfter . "', type='" . $updateTypeAfter . "', price=" . $updatePriceAfter . " WHERE Bname='" . $updateBnameBefore . "' and type='" . $updateTypeBefore . "'";

                $r = mysqli_query($connection, $sqlquery);


        ?>">


	<?php

        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateTravelto.php") //if came from updateTravelTo.php
        { //travelTo


	$updateAddressBefore = $_POST['addressBoxRead'];
        $updateBnameBefore = $_POST['BnameBoxRead'];

        $updateAddressAfter = $_POST['address'];
        $updateBnameAfter = $_POST['Bname'];

        echo "Original Address: " . $updateAddressBefore . "<br>Updated Address: " . $updateAddressAfter . "<br><br>Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBNameAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";

	?>
        <br><br>

        <input type="button" value="Cancel" onclick="history.back()">
        <input type="button" value="OK" onclick="
        <?php

                $sqlquery = "update Travelto set address='" . $updateAddressAfter . "', Bname='" . $updateBnameAfter . "' WHERE address='" . $updateAddressBefore . "' and Bname='" . $updateBnameBefore . "'";

                $r = mysqli_query($connection, $sqlquery);


        ?>">

	<?php

        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateFacebook.php") //if came from updateFacebook.php
        { //Facebook


        	$updateUrlBefore = $_POST['urlRead'];
       		 $updateBnameBefore = $_POST['BnameRead'];

        	$updateUrlAfter = $_POST['url'];
        	$updateBnameAfter = $_POST['Bname'];

        	echo "Original URL: " . $updateUrlBefore . "<br>Updated Address: " . $updateUrlAfter . "<br><br>Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBNameAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";
	?>
        <br><br>

        <input type="button" value="Cancel" onclick="history.back()">
        <input type="button" value="OK" onclick="

        <?php

                $sqlquery = "update Facebook set Url='" . $updateUrlAfter . "', Bname='" . $updateBnameAfter . "' WHERE Url='" . $updateUrlBefore . "' and Bname='" . $updateBnameBefore . "'";

                $r = mysqli_query($connection, $sqlquery);


        ?>">

	<?php

        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateInstagram.php") //if came from updateInstagram.php
        { //Instagram

		$updateBnameBefore = $_POST['BnameRead'];
        	$updateHandleBefore = $_POST['handleRead'];

        	$updateBnameAfter = $_POST['Bname'];
        	$updateHandleAfter = $_POST['handle'];


        	echo "Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBnameAfter . "<br><br>Original URL: " . $updateHandleBefore . "<br>Updated URL: " . $updateHandleAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";
?>
        <br><br>

        <input type="button" value="Cancel" onclick="history.back()">
        <input type="button" value="OK" onclick="

        <?php

                $sqlquery = "update Instagram set Bname='" . $updateBnameAfter . "', handle='" . $updateHandleAfter . "' WHERE Bname='" . $updateBnameBefore . "' and handle='" . $updateHandleBefore . "'";
                $r = mysqli_query($connection, $sqlquery);

        ?>">

	<?php

        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updateTwitter.php") //if came from updateTwitter.php
        { //Twitter




        $updateBnameBefore = $_POST['BnameRead'];
        $updateHandleBefore = $_POST['handleRead'];


        $updateBnameAfter = $_POST['Bname'];
        $updateHandleAfter = $_POST['handle'];


        echo "Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBnameAfter . "<br><br>Original Twitter Handle: " . $updateHandleBefore . "<br>Updated Twitter Handle: " . $updateHandleAfter . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";
?>
        <br><br>

        <input type="button" value="Cancel" onclick="history.back()">
        <input type="button" value="OK" onclick="

        <?php

                $sqlquery = "update Twitter set handle='" . $updateBnameAfter . "', handle='" . $updateHandleAfter . "' WHERE Bname='" . $updateBnameBefore . "' and handle='" . $updateHandleBefore . "'";

                $r = mysqli_query($connection, $sqlquery);


        ?>">

<?php
        }else if($_SERVER['HTTP_REFERER'] == "https://lamp.salisbury.edu/~dmcdonald2/ESGroove/updatePerformances.php")
        { //Performances
                $updateBnameBefore = $_POST['BnameRead'];
                $updateDateBefore = $_POST['dateRead'];
                $updateVenueBefore = $_POST['venueRead'];


                $updateBnameAfter = $_POST['Bname'];
                $updateDateAfter = $_POST['date'];
                $updateVenueAfter = $_POST['venue'];


                echo "Original Band Name: " . $updateBnameBefore . "<br>Updated Band Name: " . $updateBnameAfter . "<br><br>Original Date: " . $updateDateBefore . "<br>Updated Date: " . $updateDateAfter . "<br><br>Original Venue: " . $updateVenueBefore . "<br>Updated Venue: " . $updateVenueAfter  . "<br><br>Click 'OK' to make changes, or 'Cancel' to Cancel.";

                //echo "Name:" . $updateNameBefore . "<br>" . $updateGenreBefore . "<br>" . $updateNumMe$
                ?>
                        <br><br>

                        <input type="button" value="Cancel" onclick="history.back()">
                        <input type="button" value="OK" onclick="
                        <?php

                                $sqlquery = "update Performances set Bname='" . $updateBnameAfter . "', date='" . $updateDateAfter . "', venue='" . $updateVenueAfter  . "' WHERE Bname='" . $updateBnameBefore . "' and venue='" . $updateVenueBefore . "'";


                                $r = mysqli_query($connection, $sqlquery);


                        ?>">
                <?php

	

        }





//echo "<br>".$sqlquery;



?>


</body>
<footer class="footer-distributed">
            <div class="footer-left">
                <h3>ES<span>Groove</span></h3>
                <p class="footer-links">
                   <a id="footerLink" href="indexAdmin.php">Home</a>
                    
                    <a id="footerLink" href="ArtistsAdmin.php">Artists</a>
                    
                    <a id="footerLink" href="VenuesAdmin.php">Venues</a>
                    
                    <a id="footerLink" href="PerformancesAdmin.php">Performances</a>
                    
                    <a id="footerLink" href="AdminMenu.php">Admin Menu</a>
                    <a id="footerLink" href="Logout.php">Logout</a>
                    
                    <a href="#top">Back to top of page</a>
                </p>
                <p class="footer-company-name">ESGroove © 2021</p>
            </div>
        </footer>
       
</html>
