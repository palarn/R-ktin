<?php
	
	require_once('mysqli_connect.php');
	

	$check_value1 = $_GET['var1'];
	$check_value2 = $_GET['var2'];



	$test_box1 = "SELECT id, title, Iman, IIIman, VIman, XIIman, staerd, stadur, hoptimar, postnr FROM stodvar WHERE id=$check_value1";
	$test_box2 = "SELECT id, title, Iman, IIIman, VIman, XIIman, staerd, stadur, hoptimar, postnr FROM stodvar WHERE id=$check_value2";

	$response2 = @mysqli_query($dbc, $test_box1);
	$response3 = @mysqli_query($dbc, $test_box2);


	//Samanburðar dálkur----------------------------------------

	echo '<div class="container fixed">';
	if($response2){
				
				while($row = mysqli_fetch_array($response2)){
					echo '<div class="col-md-4 col-xs-12" id="result_box">';
					echo '<table align="center">

								<tr><td align="left"><b>Stöð:</b></td><td align="right">'. $row['title'] .'</td></tr>
								<tr><td align="left"><b>1 mán:</b></td><td align="right">'. $row['Iman'] .'</td></tr>
								<tr><td align="left"><b>3 mán:</b></td><td align="right">'. $row['IIIman'] .'</td></tr>
								<tr><td align="left"><b>6 mán:</b></td><td align="right">'. $row['VIman'] .'</td></tr>
								<tr><td align="left"><b>Ár:</b></td><td align="right">'. $row['XIIman'] .'</td></tr>
								<tr><td align="left"><b>Stærð:</b></td><td align="right">'. $row['staerd'] .'</td></tr>
							</table>';
					echo "</div>";
				}
			}
	if($response3){
				
				while($row = mysqli_fetch_array($response3)){
					echo '<div class="col-md-4 col-xs-12" id="result_box">';
					echo '<table align="center">

								<tr><td align="left"><b>Stöð:</b></td><td align="right">'. $row['title'] .'</td></tr>
								<tr><td align="left"><b>1 mán:</b></td><td align="right">'. $row['Iman'] .'</td></tr>
								<tr><td align="left"><b>3 mán:</b></td><td align="right">'. $row['IIIman'] .'</td></tr>
								<tr><td align="left"><b>6 mán:</b></td><td align="right">'. $row['VIman'] .'</td></tr>
								<tr><td align="left"><b>Ár:</b></td><td align="right">'. $row['XIIman'] .'</td></tr>
								<tr><td align="left"><b>Stærð:</b></td><td align="right">'. $row['staerd'] .'</td></tr>
							</table>';
					echo "</div>";
				}
			}
	echo '</div>';

	mysqli_close($dbc);	

?>