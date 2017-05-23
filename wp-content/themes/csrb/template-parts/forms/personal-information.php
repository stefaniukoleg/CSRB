<form id="personal_information_form">
    <input type="text" name="user_name" placeholder="<?php echo pll__('Ваше ім\'я'); ?>" required /><br />
    <input type="text" name="user_email" placeholder="<?php echo pll__('Ваш Email'); ?>" required /><br />
    <input type="text" name="user_phone" placeholder="<?php echo pll__('Ваш телефон'); ?>" required /><br />

    Коли планується подорож:
    <input type="date" name="travel_date" placeholder="<?php echo pll__('Коли планується подорож'); ?>" required /><br />
    <input type="text" name="travel_place" placeholder="<?php echo pll__('Куди'); ?>" required /><br />
    
    Яким транспортом:
    <select name="travel_transport">
        <option value="Літак">Літак</option>
        <option value="Автобус">Автобус</option>
        <option value="Поїзд">Поїзд</option>
        <option value="Автомобіль">Автомобіль</option>
    </select>
    
    Наявність віз Шенген за останні 3 роки:
    <select name="travel_duration">
        <option value="до тижня">до тижня</option>
        <option value="до місяця">до місяця</option>
        <option value="до року">до року</option>
        <option value="більше">більше</option>
    </select>

    <select name="travel_duration">
        <option value="так">так</option>
        <option value="ні">ні</option>
    </select>

    <input type="number" name="travel_place" placeholder="<?php echo pll__('Кількість подорожуючих'); ?>" required /><br />

    <button class="applicationButton"><?php echo pll__('Безкоштовна консультація'); ?></button>
</form>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/personal_information.js"></script>