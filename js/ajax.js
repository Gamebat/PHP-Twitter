$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('mess', 'ajax_form', 'AJAX.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(mess, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result = $.parseJSON(response);
        	$('#mess').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
    	},
    	error: function(response) { // Данные не отправлены
            $('#mess').html('Ошибка. Данные не отправлены.');
    	}
 	});
}