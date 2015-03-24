//Notkun: ready.function()
//Fyrir:  tekur inn objects úr .json skrá
//Eftir:  Búið er að senda viðeigandi object á classa
$(document).ready(function() {
	var stodvar;
	var count = 0;
	var amount1, amount2, amount3, amount4, amount5, amount6, amount7, amount8, amount9, amount10, amount11, amount12;
	$.getJSON('details/stodvar.json',function(data){
		stodvar = data;
		for (var i=0; i<data.length; i++)
		{ 
			var el = $('<p>');
			el.append('<a href="#" id=' + i + '><p>'+ data[i].title +'</p></a>');
			
			$('#listi').append(el);
		}


		//Notkun: click.function()
		//Fyrir:  Ekkert
		//Eftir:  Búið er að tæma upplysingar classa
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

			//nær í hluti úr .json skrám og gerir þá tilbúna að birtast í html'inu
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
					
				//Þurftum að setja counter á variables fyrir verðsamanburðinn
				if (count==0) {
					amount1=detailData['1man'];
					amount3=detailData['3man'];
					amount5=detailData['6man'];
					amount7=detailData['arskort'];
					amount9=detailData['hoptimar'];
					amount11=detailData['staerd'];
				}
				if (count==1) {
					amount2=detailData['1man'];
					amount4=detailData['3man'];
					amount6=detailData['6man'];
					amount8=detailData['arskort'];
					amount10=detailData['hoptimar'];
					amount12=detailData['staerd'];
				}
			//nær í hluti úr sitthvorum .json skjalinu sem búið er að smella á 
			var mismunur = $(event.currentTarget).children('a').attr('id');
			$.getJSON('details/'+ stodvar[mismunur].id+'.json',function(detailData){
				var gogn = '<div class="stodvar">';
					gogn += '<h3>Mismunur</h3>';
					gogn += '<div class="1man" '+'<p>1 mánuður:' + (amount1-amount2) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="3man" '+'<p>3 mánuður:' + (amount3-amount4) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="6man" '+'<p>6 mánuður:' + (amount5-amount6) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="arskort" '+'<p>Árskort:' + (amount7-amount8) +' krónur'+ '</p>'+'</div>';
					gogn += '<div class="hoptimar" '+'<p>Fjöldi hóptíma:' + (amount9-amount10) +' hóptímar'+ '</p>'+'</div>';
					gogn += '<div class="staerd" '+'<p>Stærð húsnæðis:' + (amount11-amount12) +' fermetrar'+ '</p>'+'</div>';


			//Setur hluti úr .json skrám inn í upplysingar
			if (count==0) {
				$('#upplysingar').append(html);			
				}
			//Setur hluti úr .json skrám inn í upplysingar
			if (count==1) {
				$('#upplysingar2').append(html);				
				}
			//Setur hluti úr .json skrám sem búið er að bera saman og reikna verðsamanburð
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

