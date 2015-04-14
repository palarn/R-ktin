//Forrit sem gefur tökkum í samanburdur.php virkni. Þegar ýtt er á takka sendir hann gildi sitt í result.php sem sækjir þau gögn úr 
//gagnagrunni sem takkin tilgreindi.

$(document).ready(function(){


	var toggle = 0;
	var first_box;
    $('.gymbutton').click(function(){
    	toggle++;
    	if (toggle>2) {
    		toggle=1;
    	};
        var clickBtnValue = $(this).val();
        var ajaxurl = 'sub/result.php',
        data =  {'change': clickBtnValue};
        //Sendir gögnin í result.php
        $.post(ajaxurl, data, function (response) {
            if (toggle==1) {
           	 	$('#data_content').load('sub/result.php?var1='+clickBtnValue+'&var2=0')
           	 	first_box=clickBtnValue;
           	 	};
           	if (toggle==2) {
           	 	$('#data_content').load('sub/result.php?var1='+first_box+'&var2='+clickBtnValue+'')
           	 	};
           // alert("action performed successfully "+ clickBtnValue + " ok");
        });
    });

});