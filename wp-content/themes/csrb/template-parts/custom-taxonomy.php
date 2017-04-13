<?php
    function create_visa_taxonomy() {
        $labels = array(
            'name'              => 'Типи віз',
            'singular_name'     => 'Тип візи',
            'search_items'      => 'Пошук типу візи',
            'all_items'         => 'Всі типи віз',
            'parent_item'       => 'Батьківський тип візи',
            'parent_item_colon' => 'Батьківський тип візи:',
            'edit_item'         => 'Редагувати тип візи',
            'update_item'       => 'Оновити тип візи',
            'add_new_item'      => 'Додати новий тип візи',
            'new_item_name'     => 'Новий тип візи',
            'menu_name'         => 'Типи віз',
        ); 
        // параметры
        $args = array(
            'labels'                => $labels,
            'description'           => 'Типи віз', // описание таксономии
            'public'                => true,
            'publicly_queryable'    => null, // равен аргументу public
            'show_in_nav_menus'     => false, // равен аргументу public
            'show_ui'               => true, // равен аргументу public
            'show_tagcloud'         => false, // равен аргументу show_ui
            'show_in_rest'          => null, // добавить в REST API
            'rest_base'             => null, // $taxonomy
            'hierarchical'          => true,
            'update_count_callback' => '',
            'rewrite'               => true,
            //'query_var'             => $taxonomy, // название параметра запроса
            'capabilities'          => array(),
            'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
            'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
            '_builtin'              => false,
            'show_in_quick_edit'    => null, // по умолчанию значение show_ui
        );
        register_taxonomy('visa_type', 'visas', $args );
    }
    add_action('init', 'create_visa_taxonomy');



    


?>