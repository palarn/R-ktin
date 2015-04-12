<!-- Páll Arnar Pálsson, 17. febrúar 2015 -->

<?php

	$site_name=basename(__FILE__);
	include 'sub/header.php';

	echo'	


<script>
function loadFrame (elm){
    var frame1 = document.getElementById("frame1");
    frame1.src = elm.dataset.src;
}
</script>


<div class="container">
	<div class="row">
			<div class=".col-md-3 .col-sm-6" id ="logo">	
				<img src="images/hress_0.jpg" alt="world class" class="img-rounded">
			</div>		
						<div class=".col-md-6 .col-sm-6">	
							<div class=".col-md-6 .col-sm-6 fixed" id ="listi"></div>
						</div>
						<div class=".col-md-3 .col-sm-6">	
							<div class=".col-md-6 .col-sm-6 fixed" id ="upplysingar"></div>
						</div>
	</div>
</div>
		
<div id="up_container">
<h1> Hress </h1>
<p> Hress rekur tvær útistöðvar á höfuðborgarsvæðinu. </p><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://ja.is/kort/?type=map&x=356582&y=400807&z=9&q=hress" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.hress.is/?c=webpage&id=98&lid=143&pid=25amp;option=links">Hress - Dalshraun 11</a><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://ja.is/kort/?type=map&x=354715&y=397744&z=10&q=hress" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.hress.is/?c=webpage&id=99&lid=144&pid=25amp;option=links">Hress - Ásvellir 2</a><br>
</div>


<iframe src="http://ja.is/kort/?type=map&x=355609&y=399698&z=6&q=hress" id="frame1" scrolling="no" width="600" height="450" frameborder="0" style="border:0"></iframe>



	

 ';

		 include 'sub/footer.php';

?>