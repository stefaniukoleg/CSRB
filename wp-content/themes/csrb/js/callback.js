$(document).ready(function() {
	$("#callback-form").submit(function() {
		$.ajax({
			type: "POST",
			//url: "wp-content/themes/csrb/template-parts/mail.php",
			url: "wp-content/themes/csrb/template-parts/callback-config.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Дякуємо за заявку! Скоро ми з Вами зв'яжемося.");
			$("#form").trigger("reset");
		});
		return false;
	});
});