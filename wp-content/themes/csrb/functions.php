<?php
    add_theme_support('title-tag'); // теперь тайтл управляется самим вп
    add_theme_support('post-thumbnails'); // включаем поддержку миниатюр

    //custom capabilityes
    require 'template-parts/custom-posts-types.php';

	//add_image_size('600x400', 600, 400, true); // додаємо ще один розмір картинок 600x400 з обрізанням

	function short_post_desc( $charlength ) {        //function for display short content for posts
	    //$excerpt = get_the_content();
	    global $post;
	    $excerpt = get_post_meta( $post->ID, 'опис', true );
	    if ( mb_strlen( $excerpt ) > $charlength ) {
	        $subex = mb_substr( $excerpt, 0, $charlength );
	        return $subex . '...';
	    }
	    else {
	        return $excerpt;
	    }
	}

	function short_post_title( $charlength ) {        //function for display short title for posts
	    $excerpt = get_the_title( $post_id );
	    $excerpt = trim( $excerpt );
	    if ( mb_strlen( $excerpt ) > $charlength ) {
	        $subex = mb_substr( $excerpt, 0, $charlength );
	        return $subex . '...';
	    }
	    else {
	        return $excerpt;
	    }
	}

	function show_excursions() {
		echo '
			<div class="top-news">
                <a href="' . get_the_permalink() . '">
	                <div class="col l3">
	                    <img class="top-news-img img-border" src="' . get_the_post_thumbnail_url( '', '300x200' ) . '" alt="eng">
	                </div>
	                <div class="col l9">
	                    <div class="news-description news-big-sign white-text">' . get_the_title() . '</div>
	                    <div class="news-description white-text">' . short_post_desc( 375 ) . '</div>
	                </div>
	                <div class="line">
	                    <div class="block-line"></div>
	                </div>
	            </a>
            </div>';
	}


//custom login form
    function my_custom_login_logo(){
        echo '
		<style type="text/css">
            h1 a {
				background-image:url(' . get_template_directory_uri() . '/img/logo/logo.svg) !important;
				background-size:200px !important;
				width:200px !important;
			}
        </style>';
    }
    add_action('login_head', 'my_custom_login_logo');
//end custom login form


//delete widgets from console
    function clear_wp_dash() {
        $dash_side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
        $dash_normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];
        unset( $dash_side['dashboard_primary'] );        //Блог WordPress
        unset( $dash_side['dashboard_secondary'] );    //Інші новини WordPress
    }
    add_action('wp_dashboard_setup', 'clear_wp_dash' );
//end delete widgets from console


if (!current_user_can('edit_users')) {
    add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
    add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}


//pagination settings
    //delete H2 from pagination template
    add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );
    function my_navigation_template( $template, $class ) {
	    return '
	    <nav class="%1$s" role="navigation">
	        <div class="nav-links">%3$s</div>
	    </nav>    
	    ';
    }
    $pagination_args = array(
        'prev_text' => __( '&#8249;' ),
        'next_text' => __( '&#8250;' ),
    );
//end pagination settings

