<form id="callback-form1">
    <input class="application-field" type="text" name="user_name" placeholder="<?php echo pll__('Ваше ім\'я'); ?>" required /><br />
    <input class="application-field" type="email" name="user_email" placeholder="<?php echo pll__('Ваш Email'); ?>" required /><br />
    <input class="application-field" type="tel" name="user_phone" placeholder="<?php echo pll__('Ваш телефон'); ?>" required /><br />
    <button class="applicationButton"><?php echo pll__('Безкоштовна консультація'); ?></button>
</form>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/callback1.js"></script>