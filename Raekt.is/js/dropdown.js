//Gefur dropdown tökkum í samanburdur.php virkni. Óklárað

$(document).ready(function(){
  $('#list_content').load('sub/list.php?var1=999999')
    $('.Imonth_button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'sub/list.php',
        data =  {'change': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
             	 	$('#list_content').load('sub/list.php?var1='+clickBtnValue+'')
           	 	
           // alert("action performed successfully "+ clickBtnValue + " ok");
        });
    });

});