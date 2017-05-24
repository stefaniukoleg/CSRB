$(document).ready(function() {
	$("#callback-form1").submit(function() {
		var
			currentPageUrl = window.location.href,
			configUrl = "";
		
		if ( currentPageUrl.indexOf('/ru/') >= 0 ) {    //if russian language is true
			configUrl = "../wp-content/themes/csrb/template-parts/forms/config.php";
		}
		else { //if ukrainian language is true
			configUrl = "wp-content/themes/csrb/template-parts/forms/config.php";
		}
		$.ajax({
			type: "POST",
			//url: "wp-content/themes/csrb/template-parts/mail.php",
			url: configUrl,
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Дякуємо за заявку! Скоро ми з Вами зв'яжемося.");
			$("#callback-form1").trigger("reset");
		});
		return false;
	});
});