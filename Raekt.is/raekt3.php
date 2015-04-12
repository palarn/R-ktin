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
				<img src="images/sporthusid.jpg" alt="world class"class="img-rounded">
			</div>
						<div class=".col-md-6 .col-sm-6">	
							<div class="col-md-6 .col-sm-6 fixed" id ="listi"></div>
						</div>
						<div class=".col-md-3 .col-sm-6">	
							<div class=".col-md-6 .col-sm-6 fixed" id ="upplysingar"></div>
						</div>
    </div>
</div>

<div id="up_container">
<h1> Sporthúsið </h1>
<p> Sporthúsið rekur tvær útistöðvar. Í Kópavogi annars vegar og Reykjanesbæ hinsvegar. </p><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://ja.is/kort/?type=map&x=358956&y=403424&z=10&q=sporth%C3%BAsi%C3%B0" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://kopavogur.sporthusid.is/">Sporthúsið - Kópavogi</a><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://ja.is/kort/?type=map&x=325176&y=390138&z=9&q=sporth%C3%BAsi%C3%B0" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://reykjanes.sporthusid.is/">Sporthúsið - Reykjanesbæ</a><br>

</div>

<iframe src="http://ja.is/kort/?type=map&x=342829&y=398176&z=4&q=sporth%C3%BAsi%C3%B0" id="frame1" scrolling="no" width="600" height="450" frameborder="0" style="border:0"></iframe>

		 ';

		 include 'sub/footer.php';

?>