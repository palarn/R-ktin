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
				<img src="images/worldclass1.png" alt="world class"class="img-rounded">
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
<h1> World Class </h1>
<p> World Class reka átta stöðvar víðsvegar um höfuðborgarsvæðið. </p><br>
<button type="button" class="btn btn-info" id="b1" data-src="http://ja.is/kort/?type=map&x=359921&y=407859&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/laugar/">World Class - Laugar</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=365154&y=407882&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/egilsholl/">World Class - Egilshöll</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=356421&y=401088&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/hafnarfjordur/">World Class - Hafnarfjörður</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=357632&y=405740&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/hr/">World Class - HR</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=359668&y=403214&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/kopavogur/">World Class - Kópavogur</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=358905&y=406200&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/kringlan/">World Class - Kringlan</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=367484&y=409771&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/mosfellsbaer/">World Class - Mosfellsbær</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=354332&y=408781&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/seltjarnarnes/">World Class - Seltjarnarnes</a><br>
<button type="button" class="btn btn-info" id="b2" data-src="http://ja.is/kort/?type=map&x=363288&y=402335&z=9&q=world%20class" onClick="loadFrame(this)">Kort</button><a id="hola" href="http://www.worldclass.is/stodvar/ogurhvarf/">World Class - Ögurhvarf</a><br>

</div>

<iframe src="http://ja.is/kort/?type=map&x=362871&y=406107&z=5&q=world%20class" id="frame1" scrolling="no" width="600" height="450" frameborder="0" style="border:0"></iframe>




 ';

		 include 'sub/footer.php';

?>