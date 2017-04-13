<div id="modal1" class="modal anketa-bg">
    <div class="mask">
        <div class="modal-content center">
            <form data-wow-delay="0.9s" id="application-anketa" action=" application.php" method="POST" name="application">
                <div class="form-label-anketa center">Залиште Ваші дані і ми зв'яжемося з Вами та дамо відповідь на любе питання</div>
                <input name="name" id="applicationName" maxlength="20" placeholder="Ваше і'мя"required/>
                <input name="email" type="email" id="applicationEmail" maxlength="20" placeholder="Вваш E-mail" required/>
                <input name="number" type="tel" id="applicationTelephone" placeholder="Ваш номер телефону" required/>
                <button class="applicationButton" type="submit" form="application">Безкоштовна консультація</button>
            </form>
        </div>
    </div>
</div>

<!-- main-block --> 
<div id="one" class="main-block">
    <div class="parallax-container container-mob">
        <div class="parallax">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg/1.jpg" alt="parallax">
            <div class="mask">
                <div class="row container">
                    <div class="col l6 s12 m12"> 
                        <div class="main-sign fadeInLeft wow" data-wow-delay="0.2s" >
                            <div>віза шенген</div>
                            <div>європейський центр бізнесу</div>
                            <div>професійно індивідуально надійно</div>
                        </div>
                    </div>
                    <div class="col l6 s12 m12 center"> 
                        <form class="fadeInRight wow" data-wow-delay="0.9s" id="application" action=" application.php" method="POST" name=" application ">
                            <div class="form-label right">Залиште Ваші дані і ми зв'яжемося з Вами та дамо відповідь на любе питання</div>
                            <input name="name" id="applicationName" maxlength="20" placeholder="Ваше і'мя" required />
                            <input name="email" type="email" id="applicationEmail" maxlength="20" placeholder="Вваш E-mail" required />
                            <input name="number" type="tel" id="applicationTelephone"  placeholder="Ваш номер телефону" required/>
                            <button class="applicationButton" type="submit" form="application">Безкоштовна консультація </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<!--end main-block -->

<!--offer block --> 
<div id="two" class="offer-block ">
    <div class="parallax-container container-mob-sec">
        <div class="parallax">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg/2.jpg" alt="parallax">
            <div class="mask-second">
                <div class="line-main container">
                    <div class="line-sign">ВІЗИ</div>
                    <div class="block-line"></div>
                </div>
                <div class="row container offer-block-pad">
                    <div class="col l4 s12 m6"> 
                        <a href="<?php echo get_term_link('short-visa', 'visa_type'); ?>">
                            <div class="single-offer center fadeInLeft wow" data-wow-delay="0.5s" >
                                <div class="offer-sign">
                                    коротка віза
                                </div>
                                <div class="offer-desc">
                                    10-20 днів
                                </div>
                            </div>
                        </a>
                        <a href="#" data-wow-delay="0.5s" class="waves-effect wow tada black-text waves-light btn btn-offer">безкоштовна консультація</a>
                    </div>
                    <div class="col l4 s12 m6"> 
                        <a href="<?php echo get_term_link('multivisa', 'visa_type'); ?>">
                            <div class="single-offer center fadeInUp wow" data-wow-delay="0.5s" >
                                <div class="offer-sign">
                                    мультивіза
                                </div>
                                <div class="offer-desc">
                                    6 місяців - 5 років
                                </div>
                            </div>
                        </a>
                        <a href="#" data-wow-delay="0.5s"  class="waves-effect wow tada black-text waves-light btn btn-offer">безкоштовна консультація</a>
                    </div>
                    <div class="col l4 s12 m12"> 
                        <a href="<?php echo get_term_link('national-visa', 'visa_type'); ?>">
                            <div class="single-offer center fadeInRight wow" data-wow-delay="0.5s" >
                                <div class="offer-sign">
                                    національна віза
                                </div>
                                <div class="offer-desc">
                                    6 - 12 місяців
                                </div>
                            </div>
                        </a>
                        <a href="#" data-wow-delay="0.5s"  class="waves-effect wow tada black-text waves-light btn btn-offer">безкоштовна консультація</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- countries block -->
<?php
    $args = array(
        'post_type' => array('countries'),
        'posts_per_page' => 6,
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $post_count = 0;
    $query = new WP_Query( $args );
    if( $query->have_posts() ) {
        echo '
        <div id="three" class="container">
            <div class="line-main wow flipInY" data-wow-delay="0.2s" style="padding: 0;margin-bottom: 50px;padding-top: 20px">
                <div class="line-sign">
                    <span class="small-word">АКТУАЛЬНІ НАПРЯМКИ</span>
                    <span class="line-sign right">КРАЇНИ</span>
                </div>
                <div class="block-line"></div>
            </div>
            <div class="row center" style="margin: 0;padding: 0">';
            while ( $query->have_posts() ) {
                $query->the_post();
                echo '
                <div class="col l4 m6 s12" style="margin: 0;padding: 0">';
                    $img_id = get_post_meta( $post->ID, 'зображення_1', true );
                    $img_url = wp_get_attachment_image_src( $img_id, 'large' );
                    $img_url = $img_url[0];
                    echo '
                    <div class="country-main" style="background-image: url(' . $img_url . ')">
                        <div class="mask">
                            <a href="' . get_the_permalink() . '">
                                <div class="country-name-min white-text">' .
                                    get_the_title() . '
                                </div>
                            </a>
                            <a href="###" class="waves-effect black-text waves-light btn btn-country">безкоштовна консультація</a>
                        </div>
                    </div>
                </div>';
            } //end while
            echo '
            </div>
        </div>';
    } //end if
?>

<!--  imigration block -->
<div id="four" class="imigration-block">
    <div class="parallax-container container-mob-third">
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/bg/3.jpg" alt="parallax">
            <div class="mask">
                <div class="line-main container">
                    <div class="line-sign center white-text">ІМІГРАЦІЯ</div>
                    <div class="block-line white"></div>
                    <div class="line-sign-third center white-text">Життя в Європі - запорука майбутнього</div>
                </div>
                <div class="row container center">
                    <div class="col l6 s12 m6"> 
                        <div class="imigration-offer ">
                            <a href="<?php echo get_the_permalink(13); ?>">
                                <div class="imigration-type">Реєстрація бізнесу</div>
                                <div class="imigration-desc">Під ключ</div>
                            </a>
                            <a href="###" class="waves-effect black-text waves-light btn btn-imig">безкоштовна консультація</a>
                        </div>
                    </div>
                    <div class="col l6 s12 m6"> 
                        <div class="imigration-offer ">
                            <a href="living.html">
                                <div class="imigration-type ">Вид на проживання</div>
                                <div class="imigration-desc">Надійно і швидко</div>
                            </a>
                            <a href="###" class="waves-effect black-text waves-light btn btn-imig">безкоштовна консультація</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  promotion block -->
<div id="five" class="promotion-block">
    <div class="parallax-container promotion-block-height">
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/bg/4.jpg" alt="parallax">
            <div class="mask-third">
                <div class="row container center">
                    <div class="col l12 s12"> 
                        <div class="promotion-offer">
                            <a href="#">
                                <div class="promotion-type">весняна акція</div>
                                <div class="block-line line-promotion"></div>
                                <div class="promotion-desc ">
                                    Тільки до кінця весни мультивіза за ціною одноразової!<br>
                                    Ви платите лише 59 євро замість
                                    <span style="text-decoration: line-through">120</span>!<br>
                                    Акція діє до 1 травня.<br>Використайте свій шанс!
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  team block -->
<div id="six" class="team-block">
    <div class="line-main container team-block-pad">
        <div class="line-sign center ">НАША КОМАНДА</div>
        <div class="block-line "></div>
        <div class="line-sign-third center">Думайте про подорож - ми подбаємо про все інше</div>
    </div>
    <div class="row container center members">
        <div class="col l4 m6 s12">
            <div class="member-team-one center">
            </div>
            <div class="member-name ">
                Оксана Лесів
            </div>
            <div class="member-position">
                Мененджер з роботи з<br> клієнтами
            </div>
        </div>
        <div class="col l4 m6 s12">
            <div class="member-team-two center">
            </div>
            <div class="member-name center">
                Олексій Здравовєдов
            </div>
            <div class="member-position">
                Директор
            </div>
        </div>
        <div class="col l4 m12 s12">
            <div class="member-team-three center">
            </div>
            <div class="member-name center">
                Юлія Фудашкіна
            </div>
            <div class="member-position">
                Директор з розвитку
            </div>
        </div>
    </div>
</div>

<!--  advantages block -->
<div id="seven">
    <div class="parallax-container container-mob-four">
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/bg/5.jpg" alt="parallax">
            <div class="mask">
                <div class="row container center advantages-block-pad">
                    <div class="col l4 m4 s12">
                        <div class="advantages-block">
                            <div class="advantages-img-one"></div>
                            <div class="advantages-desc"><span class="advantages-number">14</span> <br> Років успішної <br> роботи</div>
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="advantages-block">
                            <div class="advantages-img-two"></div>
                            <div class="advantages-desc"><span class="advantages-number">10234</span> <br>Задоволених клієнтів</div>
                        </div>
                    </div>
                    <div class="col l4 m4 s12">
                        <div class="advantages-block">
                            <div class="advantages-img-three"></div>
                            <div class="advantages-desc"><span class="advantages-number">11</span> <br>Зареєстрованих фірм у Польщі</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>