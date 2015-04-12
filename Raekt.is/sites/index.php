<!DOCTYPE html>
<html lang="is">
	<head>
		<meta charset="utf-8">
		<title>Rækt.is</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/header_footer.css" rel="stylesheet">
		<link href="css/jumbo.css" rel="stylesheet">


	</head>
	<body>
		<script src = "http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src = "js/jquery-1.11.2.min.js"></script>
		<script src = "js/bootstrap.js"></script>
		<script src = "js/jumbo.js"></script>
<?php
// Get a connection for the database
require_once('../mysqli_connect.php');

// Create a query for the database
$query = "SELECT title, 1man, 3man, 6man, 12man, staerd, stadur,
hoptimar, postnr FROM stodvar";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Stöð</b></td>
<td align="left"><b>1 mánuður</b></td>
<td align="left"><b>3 mánuðir</b></td>
<td align="left"><b>6 mánuðir</b></td>
<td align="left"><b>12 mánuðir</b></td>
<td align="left"><b>Stærð</b></td>
<td align="left"><b>Staður</b></td>
<td align="left"><b>Fjöldi hóptíma</b></td>
<td align="left"><b>Póst númer</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' .
$row['title'] . '</td><td align="left">' .
$row['1man'] . '</td><td align="left">' .
$row['3man'] . '</td><td align="left">' .
$row['6man'] . '</td><td align="left">' .
$row['12man'] . '</td><td align="left">' .
$row['staerd'] . '</td><td align="left">' .
$row['stadur'] . '</td><td align="left">' .
$row['hoptimar'] . '</td><td align="left">' .
$row['postnr'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
</body>
<html/>