<?php 
    //header
    get_header();

    if ( have_posts() ) {
        echo '
        <div class="visa-first-block">
            <div class="parallax-container visa-main">
                <div class="parallax">
                    <img src="' . get_template_directory_uri() . '/img/bg/short-1.jpg">
                    <div class="mask-visa-first">
                        <div class="row container">
                            <div class="col l12 m12 s12">
                                <div class="visa-main-text center">' .
                                    get_queried_object()->name . 
                                '</div>
                                <div class="offset-l4 offset-m4 offset-s4 col l4 m4 s4 visa-first-block-line center"></div>
                                <div class="col l12 m12 s12">
                                    <div class="visa-main-text-small center">' .
                                        get_term_field( 'description', get_queried_object()->term_id, 'visa_type' ) . '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        
        $posts_count = 0;
        $row_posts_number = 4; //number posts of row
        while ( have_posts() ) {
            if ( $posts_count == 0 ) {
                echo '
                <div class="type-of-visa row container">';
            }
            the_post();
            echo '
                    <div class="col l3 m3 s6">
                        <div class="visa-info">
                            <div class="visa-name" style="height: 143px;">
                                <div class="visa-title center">' .
                                    get_the_title() . '
                                    <div>' . get_post_meta( $post->ID, 'напрям', true ) . '</div>
                                </div>
                                <div class="center">' . get_post_meta( $post->ID, 'вікова_категорія', true ) . '</div>
                            </div>
                            <div class="visa-desc">';
                                $duration = get_post_meta( $post->ID, 'тривалість', true );
                                $prod_time = get_post_meta( $post->ID, 'термін_виготовлення', true );
                                $price = get_post_meta( $post->ID, 'ціна', true );
                                $documents = get_post_meta( $post->ID, 'необхідні_документи', true );
                                $additional_services = get_post_meta( $post->ID, 'додаткова_оплата', true );
                                if ( $duration ) {
                                    echo '<div><b>Тривалість: </b>' . $duration . '</div>';
                                }
                                if ( $prod_time ) {
                                    echo '<div><b>Термін виготовлення: </b>' . $prod_time . '</div>';
                                }
                                if ( $price ) {
                                    echo '<div><b>Ціна: </b>' . $price . '</div>';
                                }
                                if ( $documents ) {
                                    $documents = apply_filters( 'the_content', $documents );
                                    $documents = str_replace( ']]>', ']]&gt;', $documents );
                                    echo '<div><b>Необхідні документи: </b>' . $documents . '</div>';
                                }
                                if ( $documents ) {
                                    echo '<div><b>Додаткова оплата: </b>' . $additional_services . '</div>';
                                }
                                echo '
                            </div>
                        </div>
                    </div>';

            $posts_count++;
            if ( $posts_count == $row_posts_number) {
                echo '
                </div>';
                $posts_count = 0;
            }  
        } //end while

        if ( $posts_count > 0 && $posts_count < $row_posts_number ) {
            echo '
            </div>';
        }

        echo '
            <div class="single-block">
                <div class="parallax-container container-mob-single">
                    <div class="parallax">
                        <img src="' . get_template_directory_uri() . '/img/bg/short-2.jpg" alt="parallax">
                        <div class="mask">
                            <div class="row container">
                                <div class="col l12 s12 m12 center"> 
                                    <div class="single-sign fadeInLeft wow" data-wow-delay="0.2s">';
                                        $term = get_queried_object();
                                        echo get_field('додатковий_опис', $term);
                                    echo '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>';
        wp_reset_postdata();
    } //end if
    
    //footer
    get_footer();
?>