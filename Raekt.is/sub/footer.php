<?php
	echo'	<div class="navbar navbar-default navbar-static-bottom">
				<div class="container">
					<p class="navbar-text pull-left">Síða eftir hóp 24</p>
					<a class="navbar-btn btn-default btn pull-right" href="#contact" data-toggle="modal">Hafðu samband</a>
				</div>
			</div>

			<div class="modal fade" id="contact" rola="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4>Sendu okkur skilaboð</h4>
						</div>
						<div class ="modal-body">

							<section class="formBody">
	    
						  		<form action="form.php" method="post" enctype="multipart/form-data">					       		        
							    <label></label>
							    <input name="name" required="required" placeholder="Nafn">				    
							            
							    <label></label>
							    <input name="email" type="email" required="required" placeholder="Netfang">					            
							    
							    <label></label>
							    <textarea name="message" cols="20" rows="5" required="required" placeholder="Skilaboð"></textarea>			    
							    		    
							    <input id="cancel" name="cancel" value="Hætta vid" data-dismiss="modal"/>
							            
							    <input id="submit" name="submit" type="submit" value="Senda">
						        
						    </form>
					    	</section>

						</div>
					</div>
				</div>
			</div>

		</body>
<html/>
';
?>