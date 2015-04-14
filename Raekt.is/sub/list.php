<?php

	//Forritið sækir öll nöfn líkamsræktar stöðva og birtir sem takka í lista

	require_once('mysqli_connect.php');


	$max_value = 99999;
	$what_value = "Iman";	
	//$max_value = $_GET['var1'];
	

	// Fyrirspurn fyrir gagnagrunn
	$query = "SELECT id, title, Iman, IIIman, VIman, XIIman, staerd, stadur, hoptimar, postnr FROM stodvar WHERE $what_value<$max_value";

	// Sendir gagnagrunninum fyrirspurnina og geymir niðurstöðuna í breytu
	$response = @mysqli_query($dbc, $query);
	
	if($response){

			

			//Sækir línu úr fyrirspurninni þangað til búið er að sækja allar línur
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

	//Loka gagnagrunni
	mysqli_close($dbc);	

?>