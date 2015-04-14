//Notkun: ready.function()
//Fyrir:  tekur inn objects úr .json skrá
//Eftir:  Búið er að senda viðeigandi object á classa
$(document).ready(function() {
	var stodvar;
	$.getJSON('details/wcstodvar.json',function(data){
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
				$('#upplysingar').empty();
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
				$('#upplysingar').append(html);			

			});
		});	
		return false;
	});
  });

