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
                                    <div class="visa-main-text center">' . get_the_title() . '</div>
                                    <div class="offset-l4 offset-m4 offset-s4 col l4 m4 s4 visa-first-block-line center"></div>
                                    <div class="col l12 m12 s12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row container">';
                $table = get_post_meta( $post->ID, 'таблиця', true );
                echo $table . '
            </div>

            <div class="single-block">
                <div class="parallax-container container-mob-single">
                    <div class="parallax">
                        <img src="' . get_template_directory_uri() . '/img/bg/country-2.jpg" alt="parallax">
                        <div class="mask">
                            <div class="row container">
                                <div class="col l12 s12 m12 center"> 
                                    <div class="single-sign fadeInLeft wow" data-wow-delay="0.2s">' .
                                        $desc = get_post_meta( $post->ID, 'опис', true );
                                        echo $desc . '
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div id="eight">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2572.3587490998534!2d24.022657715367625!3d49.854505379397544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add09b4f4c9d1%3A0x90885258c7f34c58!2z0LLRg9C70LjRhtGPINCl0ZbQvNGW0YfQvdCwLCAyMCwg0JvRjNCy0ZbQsiwg0JvRjNCy0ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1491489350267" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contacts-block hide-on-small-only">
                    <div class="mask">
                        <div class="contacts">
                            <div class="contacts-bold">
                                Європейський Центр Бізнесу
                            </div>
                            <div class="contacts-thin">
                                Львів, вул. Хімічна, 20
                            </div>
                            <div class="contacts-bold">
                                +38 067 703 80 07 <br>
                                +38 063 324 17 79
                            </div>
                            <div class="contacts-thin">
                                ukrpol-lviv@ukr.net <br>
                                ecb_uk@ukr.net
                            </div>
                            <br>
                            <div class="contacts-thin">
                                Дніпропетровськ, вул. Комсомольська, 22 <br>
                                Івано-Франківська область, м. Косів, вул. Нежалежності, 80а <br>
                                м. Київ, пр. Перемоги, 67 корп. В, офіс 421
                            </div>
                            <div class="contacts-bold">
                                Ми працюємо з понеділка <br> по п\'ятницю, з 9 до 17 години
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts-block hide-on-med-and-up">
                    <div class="mask">
                        <div class="contacts">
                            <div class="contacts-bold">
                                Європейський Центр Бізнесу
                            </div>
                            <div class="contacts-thin">
                                Львів, вул. Хімічна, 20
                            </div>
                            <div class="contacts-bold">
                                +38 067 703 80 07 <br>
                                +38 063 324 17 79
                            </div>
                            <div class="contacts-thin">
                                ukrpol-lviv@ukr.net <br>
                                ecb_uk@ukr.net
                            </div>
                            <br>
                            <div class="contacts-thin">
                                Дніпропетровськ, вул. Комсомольська, 22 <br>
                                Івано-Франківська область, м. Косів, вул. Нежалежності, 80а <br>
                                м. Київ, пр. Перемоги, 67 корп. В, офіс 421
                            </div>
                            <div class="contacts-bold">
                                Ми працюємо з понеділка <br> по п\'ятницю, з 9 до 17 години
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        endwhile;
            wp_reset_postdata();
    endif;

	//footer
	get_footer();
?>