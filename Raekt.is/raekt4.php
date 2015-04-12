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
				<img src="images/reebok.png" alt="world class"class="img-rounded">
			</div>
						<div class=".col-md-6 .col-sm-6">	
							<div class=".col-md-6 .col-sm-6 fixed" id ="listi"></div>
						</div>
						<div class=".col-md-3 .col-sm-6">	
							<div class=".col-md-6 .col-sm-6 fixed" id ="upplysingar"></div>
						</div>
    </div>
</div>

<div id="contcont">
<div id="up_container">
<h1> Reebok fitness </h1>
<p> Reebok fitness rekur tvær útistöðvar á höfuðborgarsvæðinu. </p><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://ja.is/kort/?type=map&x=361650&y=407482&z=9&q=reebok%20fitness" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.reebokfitness.is/">Reebok fitness - Holtagörðum</a><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://www.mobiletoones.com/downloads/wallpapers/funny_wallpapers/preview/23/33618-sorry-this-wallpaer-not-available.jpg" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.reebokfitness.is/">Reebok fitness - Urðarhvarfi 2</a><br>


</div>
<iframe src="http://ja.is/kort/?type=map&x=361650&y=407482&z=9&q=reebok%20fitness" id="frame1" scrolling="no" width="600" height="450" frameborder="0" style="border:0"></iframe>


 ';

		 include 'sub/footer.php';

?>