$(document).ready(function() {
	var stodvar;
	var count = 0;
	var amount1, amount2, amount3, amount4, amount5, amount6, amount7, amount8;
	$.getJSON('stodvar.json',function(data){
		stodvar = data;
		for (var i=0; i<data.length; i++)
		{ 
			var el = $('<p>');
			el.append('<a href="#" id=' + i + '><p>'+ data[i].title +'</p></a>');
			el.append('<div><class="checkbox" id='+ data[i].id + i +' name="myCheckbox"/><label><input type="checkbox"></label>Bera saman</div>');
			$('#listi').append(el);
		}


		
		$('#listi p').click(function(event) {
			event.preventDefault();

			if (count==0) {
				$('#upplysingar').empty();
			}
			if (count==0 || count==1) {
				$('#upplysingar2').empty();
			}
			if (count==0 || count==1 || count==2) {
				$('#upplysingar3').empty();
			}


			var itemId = $(event.currentTarget).children('a').attr('id');
			$.getJSON('details/'+ stodvar[itemId].id+'.json',function(detailData){
				var html = '<div class="stodvar">';					  
					html += '<div class="title">'+'<h3>'+detailData['title']+'</h3>'+'</div>';
					html += '<div class="1man">'+'<p>1 mánuður:' + detailData['1man'] +' krónur'+'</p>'+ '</div>';				
					html += '<div class="3man">'+'<p>3 mánuðir:' +  detailData['3man'] +' krónur'+'</p>'+ '</div>';
					html += '<div class="6man">' + '<p>6 mánuðir:'+ detailData['6man'] +' krónur'+ '</p>'+'</div>';
					html += '<div class="arskort">' + '<p>Árskort:'+ detailData['arskort'] +' krónur'+ '</p>'+'</div>';
					html += '<div class="stadsetning">' + '<p>Staðsetning:'+ detailData['stadsetning'] + '</p>'+'</div>';
					html += '<div class="hoptimar">' + '<p>Fjöldi hóptíma:'+ detailData['hoptimar'] + '</p>'+'</div>';
					html += '<div class="staerd">' + '<p>Stærð í fermetrum:'+ detailData['staerd'] + '</p>'+'</div>';
				if (count==0) {
					amount1=detailData['1man'];
					amount3=detailData['3man'];
					amount5=detailData['6man'];
					amount7=detailData['arskort'];
				}
				if (count==1) {
					amount2=detailData['1man'];
					amount4=detailData['3man'];
					amount6=detailData['6man'];
					amount8=detailData['arskort'];
				}

			var mismunur = $(event.currentTarget).children('a').attr('id');
			$.getJSON('details/'+ stodvar[mismunur].id+'.json',function(detailData){
				var gogn = '<div class="stodvar">';
					gogn += '<h3>Mismunur</h3>';
					gogn += '<div class="1man" id="upplysingar">'+'<p>1 mánuður:' + (amount1-amount2) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="3man" id="upplysingar">'+'<p>3 mánuður:' + (amount3-amount4) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="6man" id="upplysingar">'+'<p>6 mánuður:' + (amount5-amount6) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="arskort" id="upplysingar">'+'<p>Árskort:' + (amount7-amount8) +' krónur'+ '</p>'+'</div>';

			if (count==0) {
				$('#upplysingar').append(html);			
				}
			if (count==1) {
				$('#upplysingar2').append(html);				
				}
			if (count==1) {
				$('#upplysingar3').append(gogn);				
				}

			if (count<1) {
				count++;
				}
			else count = 0;
			});
		});	
		return false;
	});
  });
});

