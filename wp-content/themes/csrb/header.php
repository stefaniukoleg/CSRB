<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo wp_get_document_title(); ?>
    </title>
    <meta charset="utf-8">
    <meta name="theme-color" content="#ffa200">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo/favicon.ico" type="image/ico">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .container-mob {
                height: 680px;
            } 
            .container-mob-sec{
                height: 1050px;
            }
            .container-mob-third{
                height: 550px;
            }
            .promotion-block-height {
                height: 447px;
            }
            .container-mob-four {
                height: 460px;
            }
            .contacts-block {
                height: 400px;
            }
            nav i.material-icons {
                position: absolute;
                right: 0;
                font-size: 50px;
                color: black;
                display: block !important;
            }
        }
    </style>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.35.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.35.1/mapbox-gl.css' rel='stylesheet' />
    <?php wp_head(); ?>
</head>

<body>
    <nav>
    <a href="#" data-activates="mobile-demo" class="button-collapse right">
                <i class="material-icons hide">menu</i>
            </a>
        <div class="nav-wrapper container">
            <a href="<?php echo get_home_url(); ?>">
                <div class="logo-block left">
                    <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.svg" alt="logo">
                </div>
            </a>
            <div class="lang-block">
                <?php
                    //pll_the_languages( array( 'show_flags' => 1,'show_names' => 0 ) );
                    $languages = pll_the_languages(array('raw'=>1)); 
                    foreach( $languages as $language ) {
                        echo '
                        <a href="' . $language["url"] . '">
                            <img class="lang-img" src="' . $language["flag"] . '" alt="logo">
                        </a>';
                    }
                /*
                    <a href="<?php echo get_home_url(); ?>"><img class="lang-img" src="<?php echo get_template_directory_uri(); ?>/img/languages/rus.svg" alt="logo"></a>
                    <a href="<?php echo get_home_url(); ?>"> <img class="lang-img" src="<?php echo get_template_directory_uri(); ?>/img/languages/ukr.svg" alt="logo"></a>
                */
                ?>
            </div>
            <ul id="top-menu" class="left menu-block hide-on-med-and-down">
                <li><a href="<?php echo get_home_url(); ?>/#imigration"><?php pll_e('Бізнес в ЄС'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#country"><?php pll_e('Країни'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#visa"><?php pll_e('Візи'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#team"><?php pll_e('Команда'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#contacts"><?php pll_e('Контакти'); ?></a></li>
            </ul>
            <ul>
                <li>
                    <a href="#modal2" class="hide-on-small-only waves-effect white-text waves-light btn btn-pad">
                        <?php pll_e('Анкетна інформація'); ?>
                    </a>
                </li>
                <li>
                    <div class="hide-on-small-only social-block">
                         <a href="<?php echo get_home_url(); ?>"><img class="social-img" src="<?php echo get_template_directory_uri(); ?>/img/social/vk.svg" alt="logo"></a>
                         <a href="<?php echo get_home_url(); ?>"><img class="social-img" src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.svg" alt="logo"></a>
                    </div>
                </li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="<?php echo get_home_url(); ?>/#imigration"><?php pll_e('Імміграція'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#country"><?php pll_e('Країни'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#visa"><?php pll_e('Візи'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#team"><?php pll_e('Команда'); ?></a></li>
                <li><a href="<?php echo get_home_url(); ?>/#contacts"><?php pll_e('Контакти'); ?></a></li>
            </ul>
        </div>
    </nav>
