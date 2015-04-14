<!DOCTYPE html>
<html lang="is">
	<head>
		<meta charset="utf-8">
		<title>Admin kerfi</title>
	</head>
<body>
<h1> Eyða stöð </h1>
<a href="http://raekt.com/login/editstod.php/">
    <button>Breyta upplýsingum um stöð</button>
</a>
<a href="http://raekt.com/login/addstod.php/">
    <button>Bæta inn nýrri stöð</button>
</a><br>
<a> Setja þarf "" utan um title<a> <br>
<a> id á líkamsræktarstöðvum er eftirfarandi:<a>
<ol>
	<li>World Class - Laugar 		</li>
	<li>World Class - Egilsholl		</li>
	<li>World Class - Hafnarfjordur	</li>
	<li>World Class - HR			</li>
	<li>World Class - Kópavogur		</li>
	<li>World Class - Kringlan		</li>
	<li>World Class - Mosfellsbaer	</li>
	<li>World Class - Seltjarnarnes	</li>
	<li>World Class - Ogurhvarf		</li>
	<li>Hress - Dalshraun			</li>
	<li>Hress - Asvellir			</li>
	<li>Reebok Fitness - Holtagardar</li>
	<li>Reebok Fitness - Ogurhvarf	</li>
	<li>Sporthusid - Reykjanesbaer	</li>
	<li>Sporthusid - Kopavogur		</li>
	<li>Hreyfing - Reykjavik		</li>
<ol>
<br>
<?php

//tengjast hostinum
	if(isset($_POST['update']))
	{
		DEFINE ('DB_USER', 'hopur24');
		DEFINE ('DB_PASSWORD', 'hopur24pass');
		DEFINE ('DB_HOST', 'mysql.raekt.com');
		DEFINE ('DB_NAME', 'raektis_gym');
 

		$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		OR die('Could not connect to MySQL: ' .
		mysqli_connect_error());
		//variable í töflunni
		$id = $_POST['id'];
		$title = $_POST['title'];
		$Iman = $_POST['Iman'];
		$IIIman = $_POST['IIIman'];
		$VIman = $_POST['VIman'];
		$XIIman = $_POST['XIIman'];
		$staerd = $_POST['staerd'];
		$hoptimar = $_POST['hoptimar'];
		$postnr = $_POST['postnr'];
		$stadur = $_POST['stadur'];

		
		
    	$sql = "DELETE FROM stodvar WHERE id=$id";

    	//update'um töfluna, ef eitthvað kemur upp drepum við það og skilum error

		mysqli_select_db($dbc, "data_base");
		$retval = mysqli_query( $dbc, $sql );
			if(! $retval )
				{
			  die('Could not update data: ' . mysqli_error($dbc));
				}
					echo "Updated data successfully\n";
					mysqli_close($dbc);
				}
			else
				{



?>

<form method="post" action="">
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
		<td width="100">Raekt ID</td>
		<td><input name="id" type="text" id="id"></td>
	</tr>

	<td>
		<input name="update" type="submit" id="update" value="Delete">
	</td>
	</table>
</form>

<?php
	}
?>
</body>
</html>