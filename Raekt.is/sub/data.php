<?php
	// Get a connection for the database
	require_once('mysqli_connect.php');

	
	echo '<div class="row">';

		// Fyrsti dálkur---------------------------------------------------
		
		include 'sub/list.php';


		//Samanburðar dálkur----------------------------------------
		
	echo '<div id="data_content" class="col-md-8 col-xs-3"></div>';
		//include 'result.php';

	echo '</div>';


	

	// Close connection to the database
	mysqli_close($dbc);
?>