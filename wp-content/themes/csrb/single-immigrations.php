<?php
    
    //header
    get_header();

    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); // Start the Loop.
            echo '
            <div class="visa-first-block">
                <div class="parallax-container visa-main">
                    <div class="parallax">
                        <img src="' . get_the_post_thumbnail_url() . '">
                        <div class="mask-visa-first">
                            <div class="row container">
                                <div class="col l12 m12 s12">
                                    <div class="visa-main-text center ">' . get_the_title() . '</div>
                                    <div class="offset-l4 offset-m4 offset-s4 col l4 m4 s4 visa-first-block-line center"></div>
                                    <div class="col l12 m12 s12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

            $table = get_post_meta( $post->ID, 'таблиця', true );
            if ( !empty($table) ) {
                $table = apply_filters( 'the_content', $table );
                $table = str_replace( ']]>', ']]&gt;', $table );
                echo '
                <div class="row container juristic-text">' .
                    $table . '
                </div>';
            }

            $desc = get_post_meta( $post->ID, 'опис', true );
            if ( !empty($desc) ) {
                $desc = apply_filters( 'the_content', $desc );
                $desc = str_replace( ']]>', ']]&gt;', $desc );
                echo '
                <div class="single-block">
                    <div class="parallax-container container-mob-single">
                        <div class="parallax">
                            <img src="' . get_template_directory_uri() . '/img/bg/country-2.jpg" alt="parallax">
                            <div class="mask">
                                <div class="row container">
                                    <div class="col l12 s12 m12 center"> 
                                        <div class="single-sign fadeInLeft wow" data-wow-delay="0.2s">' .
                                            $desc . '
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>';
            }
        endwhile;
        wp_reset_postdata();
    endif;

	//footer
	get_footer();

/*
<div id="modal2" class="modal anketa-bg">
    <div class="mask">
        <div class="modal-content center">
            <div class="form-label-anketa center">
            <?php pll_e('Фраза 1'); ?> </div>
            <?php
                echo do_shortcode('[contact-form-7 id="149" title="Анкетна інформація"]');
            ?>
        </div>
    </div>
</div>
?>
