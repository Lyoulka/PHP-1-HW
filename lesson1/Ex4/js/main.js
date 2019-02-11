'use strict';
$(document).ready(function() {
$(".gamburger3").click(function() {
if($(".gamburger3").attr('datas') == 'off') {     /* ïîÿâëåíèå ìåíþ */
$(".gamburger4").attr('style', 'visibility: visible; margin-right: 0px;');
$(".gamburger3").attr('datas', 'on');
$(".gamburger3").removeClass("fa-bars");
$(".gamburger3").addClass("fa-times");
}
else {                                         /* èñ÷åçíîâåíèå ìåíþ */
$(".gamburger4").attr('style', 'visibility: hidden; margin-right: -1000px;');
$(".gamburger3").attr('datas', 'off');
$(".gamburger3").removeClass("fa-times");
$(".gamburger3").addClass("fa-bars");
}
});
});

$(document).ready(function() {
	$('#first-button').click(function(){
			$('#popupContainer').css('display', 'flex');
	});
	
	$('#second-button').click(function(){
			$('#popupContainer').css('display', 'flex');
	});

	$('#popupContainer').click( function(event){
		if(event.target === this){
			$('#popupContainer').css('display', 'none');
		}
	});	
});
$(document).ready(function() {
	$('#sendButton').click(function() {
		var name = $('#name').val();
		var phone = $('#phone').val();
		if((name <= 0) || (phone <= 0)){
			alert ('Введите значение');
		} else { $.post('/api.php', {'name' : name}, {'phone' : phone}, function (response){
					alert(response);
				});
			}
	});
});
