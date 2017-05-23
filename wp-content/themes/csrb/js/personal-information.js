$(document).ready(function() {
	$("#personal_information").submit(function() {
		$.ajax({
			type: "POST",
			//url: "wp-content/themes/csrb/template-parts/mail.php",
			url: "wp-content/themes/csrb/template-parts/forms/config.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Дякуємо за заявку! Скоро ми з Вами зв'яжемося.");
			$("#personal_information").trigger("reset");
		});
		return false;
	});
});