<?php
// Opnar tengingu við gagnagrunn
 
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'gym');

//DEFINE ('DB_USER', 'hopur24');
//DEFINE ('DB_PASSWORD', 'hopur24pass');
//DEFINE ('DB_HOST', 'mysql.raekt.com');
//DEFINE ('DB_NAME', 'raektis_gym');
 

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());					//Ef ekki næst að tengjast gagnagrunni birtist á síðunni villuskilaboð
?>
