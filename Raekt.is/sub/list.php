<?php

	// Create a query for the database
	$query = "SELECT id, title, Iman, IIIman, VIman, XIIman, staerd, stadur, hoptimar, postnr FROM stodvar";
	

	// Get a response from the database by sending the connection
	// and the query
	$response = @mysqli_query($dbc, $query);
	
	if($response){

			echo '<div class="col-md-4 col-xs-6">';

			// mysqli_fetch_array will return a row of data from the query
			// until no further data is available
			while($row = mysqli_fetch_array($response)){

				echo '<div class="" id="list_box"><label class="">
							<button id="gym' . $row['id'] . '" value="' . $row['id'] . '" class="btn btn-primary btn-lg btn-block" type="button">
							' . $row['title'] . '</button></div>';
				}
					echo '</div>';
			}
						 	

		else {
				echo "Couldn't issue database query<br />";
				echo mysqli_error($dbc);
			}
?>