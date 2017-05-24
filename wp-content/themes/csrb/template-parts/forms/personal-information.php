<form id="personal_information_form">
    <input class="application-field" type="hidden" name="personal_information" value="true">

    <input class="application-field" type="text" name="user_name" placeholder="<?php echo pll__('Ваше ім\'я'); ?>" required /><br />
    <input class="application-field" type="email" name="user_email" placeholder="<?php echo pll__('Ваш Email'); ?>" required /><br />
    <input class="application-field" type="tel" name="user_phone" placeholder="<?php echo pll__('Ваш телефон'); ?>" required /><br />

    <label class="label-color"><?php echo pll__('Коли планується подорож'); ?>:</label>
    <input class="application-field" type="date" name="travel_date" required /><br />
    <input class="application-field" type="text" name="travel_place" placeholder="<?php echo pll__('Куди'); ?>" required /><br />
    
    <label class="label-color"><?php echo pll__('Яким транспортом'); ?>:</label>
    <select class="select-field" name="travel_transport">
        <option value="<?php echo pll__('літак'); ?>">
            <?php echo pll__('літак'); ?>
        </option>
        <option value="<?php echo pll__('автобус'); ?>">
            <?php echo pll__('автобус'); ?>
        </option>
        <option value="<?php echo pll__('поїзд'); ?>">
            <?php echo pll__('поїзд'); ?>
        </option>
        <option value="<?php echo pll__('автомобіль'); ?>">
            <?php echo pll__('автомобіль'); ?>
        </option>
    </select>
    
    <label class="label-color"><?php echo pll__('Тривалість планового перебування'); ?>:</label>
    <select class="select-field" name="travel_duration">
        <option value="<?php echo pll__('до тижня'); ?>">
            <?php echo pll__('до тижня'); ?>
        </option>
        <option value="<?php echo pll__('до місяця'); ?>">
            <?php echo pll__('до місяця'); ?>
        </option>
        <option value="<?php echo pll__('до року'); ?>">
            <?php echo pll__('до року'); ?>
        </option>
        <option value="<?php echo pll__('більше'); ?>">
            <?php echo pll__('більше'); ?>
        </option>
    </select>
    
    <label class="label-color"><?php echo pll__('Наявність віз Шенген за останні 3 роки'); ?>:</label>
    <br>
    <select class="select-field" name="visa_availability">
        <option value="<?php echo pll__('так'); ?>">
            <?php echo pll__('так'); ?>
        </option>
        <option value="<?php echo pll__('ні'); ?>">
            <?php echo pll__('ні'); ?>
        </option>
    </select>

    <input class="application-field" type="number" name="travelers_number" placeholder="<?php echo pll__('Кількість подорожуючих'); ?>" required /><br />

    <button class="applicationButton"><?php echo pll__('Безкоштовна консультація'); ?></button>
</form>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/personal-information.js"></script>