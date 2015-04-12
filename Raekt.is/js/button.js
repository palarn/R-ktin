$(document).ready(function(){
	var toggle = 0;
	var first_box;
    $('.btn-lg').click(function(){
    	toggle++;
    	if (toggle>2) {
    		toggle=1;
    	};
        var clickBtnValue = $(this).val();
        var ajaxurl = 'sub/result.php',
        data =  {'change': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
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