$(document).ready(function() {
	$("#callback-form2").submit(function() {
		var loadButton = $('#callback-button2').text();
		$('#callback-button2').html('<i class="material-icons wow rotateIn">sync</i>');
		var
			currentPageUrl = window.location.href,
			configUrl = configUrl = "wp-content/themes/csrb/template-parts/forms/config.php",
			resultMessage = "Дякуємо за заявку! Скоро ми з Вами зв'яжемося.";
		
		if ( currentPageUrl.indexOf('/ru/') >= 0 ) {    //if russian language is true
			configUrl = "../wp-content/themes/csrb/template-parts/forms/config.php";
			resultMessage = "Спасибо за заявку! Скоро мы с Вами свяжемся.";
		}

		$.ajax({
			type: "POST",
			//url: "wp-content/themes/csrb/template-parts/mail.php",
			url: configUrl,
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert(resultMessage);
			$("#callback-form2").trigger("reset");
			$('#callback-button2').text(loadButton);
		});
		return false;
	});
});