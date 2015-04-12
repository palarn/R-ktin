<?php

	require_once('mysqli_connect.php');


	$max_value = 99999;
	$what_value = "Iman";	
	//$max_value = $_GET['var1'];
	

	// Create a query for the database
	$query = "SELECT id, title, Iman, IIIman, VIman, XIIman, staerd, stadur, hoptimar, postnr FROM stodvar WHERE $what_value<$max_value";

	// Get a response from the database by sending the connection
	// and the query
	$response = @mysqli_query($dbc, $query);
	
	if($response){

			

			// mysqli_fetch_array will return a row of data from the query
			// until no further data is available
			while($row = mysqli_fetch_array($response)){

				echo '<div class="" id="list_box"><label class="">
							<button value="' . $row['id'] . '" class="btn btn-default btn-lg btn-block gymbutton" type="button">
							' . $row['title'] . '</button></div>';
				}
			}
						 	

		else {
				echo "Couldn't issue database query<br />";
				echo mysqli_error($dbc);
			}

	mysqli_close($dbc);	

?>