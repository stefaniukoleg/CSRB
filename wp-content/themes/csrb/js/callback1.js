$(document).ready(function() {
	$("#callback-form1").submit(function() {
		$.ajax({
			type: "POST",
			//url: "wp-content/themes/csrb/template-parts/mail.php",
			url: "wp-content/themes/csrb/template-parts/forms/config.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Дякуємо за заявку! Скоро ми з Вами зв'яжемося.");
			$("#callback-form1").trigger("reset");
		});
		return false;
	});
});