<?php

// register custom posts types
    function register_cpt_visas() {
        $labels = array( 
            'name' => _x( 'Візи', 'visas' ),
            'singular_name' => _x( 'Віза', 'visas' ),
            'add_new' => _x( 'Додати візу', 'visas' ),
            'add_new_item' => _x( 'Додати нові візи ', 'visas' ),
            'edit_item' => _x( 'Редагувати візу', 'visas' ),
            'new_item' => _x( 'Нові візи', 'visas' ),
            'view_item' => _x( 'Переглянути', 'visas' ),
            'search_items' => _x( 'Пошук', 'visas' ),
            'not_found' => _x( 'Віз не знайдено', 'visas' ),
            'not_found_in_trash' => _x( 'Віз в корзині не знайдено', 'visas' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'visas' ),
            'all_items' => _x( 'Всі візи', 'visas' ),
            'name_admin_bar' => _x( 'Візи', 'visas'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Візи',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'visa',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_visa',
                'read_post' => 'read_visa',
                'delete_post' => 'delete_visa',
                'edit_posts' => 'edit_visas',
                'edit_others_posts' => 'edit_other_visas',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_visas',
                'read_private_posts' => 'read_private_visas',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ), 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'visas', $args );
    }
    add_action( 'init', 'register_cpt_visas' );



    function register_cpt_countries() {
        $labels = array( 
            'name' => _x( 'Країни', 'countries' ),
            'singular_name' => _x( 'Країна', 'countries' ),
            'add_new' => _x( 'Додати країну', 'countries' ),
            'add_new_item' => _x( 'Додати нову країну ', 'countries' ),
            'edit_item' => _x( 'Редагувати країну', 'countries' ),
            'new_item' => _x( 'Нові країни', 'countries' ),
            'view_item' => _x( 'Переглянути', 'countries' ),
            'search_items' => _x( 'Пошук', 'countries' ),
            'not_found' => _x( 'Країн не знайдено', 'countries' ),
            'not_found_in_trash' => _x( 'Країн в корзині не знайдено', 'countries' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'countries' ),
            'all_items' => _x( 'Всі країни', 'countries' ),
            'name_admin_bar' => _x( 'Країни', 'countries'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Країни',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'country',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_country',
                'read_post' => 'read_country',
                'delete_post' => 'delete_country',
                'edit_posts' => 'edit_countries',
                'edit_others_posts' => 'edit_other_countries',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_countries',
                'read_private_posts' => 'read_private_countries',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'countries', $args );
    }
    add_action( 'init', 'register_cpt_countries' );



    function register_cpt_immigrations() {
        $labels = array( 
            'name' => _x( 'Імміграція', 'immigrations' ),
            'singular_name' => _x( 'Імміграція', 'immigrations' ),
            'add_new' => _x( 'Додати', 'immigrations' ),
            'add_new_item' => _x( 'Додати новий вид імміграції ', 'immigrations' ),
            'edit_item' => _x( 'Редагувати', 'immigrations' ),
            'new_item' => _x( 'Нові види імміграцій', 'immigrations' ),
            'view_item' => _x( 'Переглянути', 'immigrations' ),
            'search_items' => _x( 'Пошук', 'immigrations' ),
            'not_found' => _x( 'Імміграцій не знайдено', 'immigrations' ),
            'not_found_in_trash' => _x( 'Імміграцій в корзині не знайдено', 'immigrations' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'immigrations' ),
            'all_items' => _x( 'Всі імміграції', 'immigrations' ),
            'name_admin_bar' => _x( 'Імміграції', 'immigrations'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Імміграції',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'immigration',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_immigration',
                'read_post' => 'read_immigration',
                'delete_post' => 'delete_immigration',
                'edit_posts' => 'edit_immigrations',
                'edit_others_posts' => 'edit_other_immigrations',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_immigrations',
                'read_private_posts' => 'read_private_immigrations',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'immigrations', $args );
    }
    add_action( 'init', 'register_cpt_immigrations' );



    function register_cpt_team() {
        $labels = array( 
            'name' => _x( 'Команда', 'team' ),
            'singular_name' => _x( 'Команда', 'team' ),
            'add_new' => _x( 'Додати члена команди', 'team' ),
            'add_new_item' => _x( 'Додати нового члена команди ', 'team' ),
            'edit_item' => _x( 'Редагувати', 'team' ),
            'new_item' => _x( 'Нові члени команди', 'team' ),
            'view_item' => _x( 'Переглянути', 'team' ),
            'search_items' => _x( 'Пошук', 'team' ),
            'not_found' => _x( 'Членів команди не знайдено', 'team' ),
            'not_found_in_trash' => _x( 'Членів команди в корзині не знайдено', 'team' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'team' ),
            'all_items' => _x( 'Вся команда ', 'team' ),
            'name_admin_bar' => _x( 'Команда', 'team'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Команда',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'team',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_team',
                'read_post' => 'read_team',
                'delete_post' => 'delete_team',
                'edit_posts' => 'edit_teams',
                'edit_others_posts' => 'edit_other_teams',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_teams',
                'read_private_posts' => 'read_private_teams',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'team', $args );
    }
    add_action( 'init', 'register_cpt_team' );



    function register_cpt_actions() {
        $labels = array( 
            'name' => _x( 'Акції', 'actions' ),
            'singular_name' => _x( 'Акція', 'actions' ),
            'add_new' => _x( 'Додати акцію', 'actions' ),
            'add_new_item' => _x( 'Додати нові акції ', 'actions' ),
            'edit_item' => _x( 'Редагувати акцію', 'actions' ),
            'new_item' => _x( 'Нові акції', 'actions' ),
            'view_item' => _x( 'Переглянути', 'actions' ),
            'search_items' => _x( 'Пошук', 'actions' ),
            'not_found' => _x( 'Акцій не знайдено', 'actions' ),
            'not_found_in_trash' => _x( 'Акцій в корзині не знайдено', 'actions' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'actions' ),
            'all_items' => _x( 'Всі акції', 'actions' ),
            'name_admin_bar' => _x( 'Акції', 'actions'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Акції',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'action',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_action',
                'read_post' => 'read_action',
                'delete_post' => 'delete_action',
                'edit_posts' => 'edit_actions',
                'edit_others_posts' => 'edit_other_actions',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_actions',
                'read_private_posts' => 'read_private_actions',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'revisions' ), // 'author', 'comments', 'thumbnail'
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'actions', $args );
    }
    add_action( 'init', 'register_cpt_actions' );

    
/*
    function register_cpt_contact_info() {
        $labels = array( 
            'name' => _x( 'Контактна інформація', 'contact_info' ),
            'singular_name' => _x( 'Контактна інформація', 'contact_info' ),
            'add_new' => _x( 'Додати контактну інформацію', 'contact_info' ),
            'add_new_item' => _x( 'Додати нову контактну інформацію ', 'contact_info' ),
            'edit_item' => _x( 'Редагувати контактну інформацію', 'contact_info' ),
            'new_item' => _x( 'Нова контактна інформація', 'contact_info' ),
            'view_item' => _x( 'Переглянути', 'contact_info' ),
            'search_items' => _x( 'Пошук', 'contact_info' ),
            'not_found' => _x( 'Контактної інформації не знайдено', 'contact_info' ),
            'not_found_in_trash' => _x( 'Контактної інформації в корзині не знайдено', 'contact_info' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'contact_info' ),
            'all_items' => _x( 'Вся контактна інформація', 'contact_info' ),
            'name_admin_bar' => _x( 'Контактна інформація', 'contact_info'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Контактна інформація',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'contact_info',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_contact_info',
                'read_post' => 'read_contact_info',
                'delete_post' => 'delete_contact_info',
                'edit_posts' => 'edit_contact_infos',
                'edit_others_posts' => 'edit_other_contact_infos',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_contact_infos',
                'read_private_posts' => 'read_private_contact_infos',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'revisions' ), // 'author', 'comments'
            'taxonomies' => array( 'category' ), //'post_tag', 
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'contact_infos', $args );
    }
    add_action( 'init', 'register_cpt_contact_info' );
*/

// end register custom posts types

?>