<?php
	//Innihald samanburdur.php
	
	echo '<div class="row">';

		// Fyrsti dálkur---------------------------------------------------
		echo '<div class="col-md-4 col-xs-6">';
		echo '<div class="btn-group">';
				echo'<div class="btn-group">
						<button class="btn btn-default btn-lg dropdown-toggle selectbutton" type="button" data-toggle="dropdown" aria-expanded="false">
	    				Sýna þar sem<span class="caret"></span></button>
	    				<ul class="dropdown-menu" role="menu">
	    					<li class="Imonth_button" value="8000"><a href="#">1 mánuður</a></li>
	   						<li><a href="#">3 mánuðir</a></li>
	    					<li><a href="#">6 mánuðir</a></li>
	    					<li class="divider"></li>
	    					<li><a href="#">Separated link</a></li>
	  					</ul>
					</div>';

				echo'<div class="btn-group">
						<button class="btn btn-default btn-lg dropdown-toggle selectbutton" type="button" data-toggle="dropdown" aria-expanded="false">
	    				Kostar<span class="caret"></span></button>
	    				<ul class="dropdown-menu" role="menu">
	    					<li><a href="#">minna en 5000</a></li>
	   						<li><a href="#">minna en 10000</a></li>
	    					<li><a href="#">minna en 15000</a></li>
	    					<li class="divider"></li>
	    					<li><a href="#">Separated link</a></li>
	  					</ul>
					</div>';

				echo'<div class="btn-group">
						<button class="btn btn-default btn-lg dropdown-toggle selectbutton" type="button" data-toggle="dropdown" aria-expanded="false">
	    				Staðsetning<span class="caret"></span></button>
	    				<ul class="dropdown-menu" role="menu">
	    					<li><a href="#">Reykjavík</a></li>
	   						<li><a href="#">Kópavogur</a></li>
	    					<li><a href="#">Hafnarfjörður</a></li>
	    					<li class="divider"></li>
	    					<li><a href="#">Separated link</a></li>
	  					</ul>
					</div>';

			echo '</div>';

		echo '<div id="list_content">';
			include 'sub/list.php';
		echo '</div>';

		echo '</div>';



		//Samanburðar dálkur----------------------------------------
		
	echo '<div id="data_content" class="col-md-8 col-xs-3"></div>';
		//include 'result.php';

	echo '</div>';


	

	// Close connection to the database
?>