<?php 
    //header
    get_header();

    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); // Start the Loop.
            echo '
            <!-- visa-main-block -->
            <div class="visa-first-block">
                <div class="parallax-container visa-main">
                    <div class="parallax"><img src="' . get_template_directory_uri() . '/img/bg/short-1.jpg">
                        <div class="mask-visa-first">
                            <div class="row container">
                                <div class="col l12 m12 s12">
                                    <div class="visa-main-text center">' .
                                        get_queried_object()->name . 
                                    '</div>
                                    <div class="offset-l4 offset-m4 offset-s4 col l4 m4 s4 visa-first-block-line center"></div>
                                    <div class="col l12 m12 s12">
                                        <div class="visa-main-text-small center">
                                            Ця віза знадобиться вам, якщо ви мандруєте або навідуєте друзів
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of the visa-main-block -->

            <div class="type-of-visa row container">
                <div class="col l3 m3 s6">
                    <div class="visa-info">
                        <div class="visa-name">
                            <div class="visa-title center">C-01<div>ТУРИЗМ</div></div>
                        </div>
                        <div class="visa-desc">
                            <b>Тривалість:</b> 10 днів<br>
                            <b>Термін виготовлення:</b><br>
                            14 днів<br>
                            <b>Ціна:</b> 40 €<br> 
                            <b>Необхідні документи:</b><br> 
                            - 1 фото;<br> 
                            - закордонний 
                            - паспорт;<br> 
                            - нотаріальний дозвіл 
                            від батьків;<br> 
                            - свідоцтво 
                            про народження;<br>
                            - копії українських 
                            - паспортів батьків;<br> 
                            - довідка з місця 
                            навчання.<br>
                            <b>Додаткова оплата:</b><br> 
                            18 € послуги візового
                            центру.
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s6">
                    <div class="visa-info">
                        <div class="visa-name">
                            <div class="visa-title center">C-01<div>ТУРИЗМ</div>
                            <div>діти до 18 років</div>
                        </div>
                    </div>
                    <div class="visa-desc">
                        <b>Тривалість:</b> 10 днів<br>
                        <b>Термін виготовлення:</b><br>
                        14 днів<br>
                        <b>Ціна:</b> 40 €<br> 
                        <b>Необхідні документи:</b><br> 
                        - 1 фото;<br> 
                        - закордонний 
                        - паспорт;<br> 
                        - нотаріальний дозвіл 
                        від батьків;<br> 
                        - свідоцтво 
                        про народження;<br>
                        - копії українських 
                        - паспортів батьків;<br> 
                        - довідка з місця 
                        навчання.<br>
                        <b>Додаткова оплата:</b><br> 
                        18 € послуги візового
                        центру.
                    </div>
                </div>
            </div>
            <div class="col l3 m3 s6">
                <div class="visa-info">
                    <div class="visa-name">
                        <div class="visa-title center">C-01<div>БІЗНЕС ВІЗА</div>
                    </div>
                </div>
                <div class="visa-desc">
                    <b>Тривалість:</b> 10 днів<br>
                    <b>Термін виготовлення:</b><br>
                    14 днів<br>
                    <b>Ціна:</b> 40 €<br> 
                    <b>Необхідні документи:</b><br> 
                    - 1 фото;<br> 
                    - закордонний 
                    - паспорт;<br> 
                    - нотаріальний дозвіл 
                    від батьків;<br> 
                    - свідоцтво 
                    про народження;<br>
                    - копії українських 
                    - паспортів батьків;<br> 
                    - довідка з місця 
                    навчання.<br>
                    <b>Додаткова оплата:</b><br> 
                    18 € послуги візового
                    центру.
                </div>
            </div>
            </div>
            <div class="col l3 m3 s6">
                <div class="visa-info">
                    <div class="visa-name">
                        <div class="visa-title center">C-01<div>ТУРИЗМ</div>
                        <div>Діти до 18 років з батьками з візою С-04</div>
                    </div>
                </div>
                <div class="visa-desc">
                    <b>Тривалість:</b> 10 днів<br>
                    <b>Термін виготовлення:</b><br>
                    14 днів<br>
                    <b>Ціна:</b> 40 €<br> 
                    <b>Необхідні документи:</b><br> 
                    - 1 фото;<br> 
                    - закордонний 
                    - паспорт;<br> 
                    - нотаріальний дозвіл 
                    від батьків;<br> 
                    - свідоцтво 
                    про народження;<br>
                    - копії українських 
                    - паспортів батьків;<br> 
                    - довідка з місця 
                    навчання.<br>
                    <b>Додаткова оплата:</b><br> 
                    18 € послуги візового
                    центру.
                </div>
            </div>
            </div>
            </div>

            <div class="single-block">
                <div class="parallax-container container-mob-single">
                    <div class="parallax"><img src="' . get_template_directory_uri() . '/img/bg/short-2.jpg" alt="parallax">
                        <div class="mask">
                            <div class="row container">
                                <div class="col l12 s12 m12 center"> 
                                    <div class="single-sign fadeInLeft wow" data-wow-delay="0.2s" >
                                        <div>- Доплата за термінове виготовлення +30 євро</div>
                                        <div>- Фото має бути кольоровим на білому фоні 3,5 x 4,5 cм зроблене не давніше 6 місяців</div>
                                        <div>- Закордонний паспорт Паспорт повинен містити підпис та бути дійсним щонайменше 3 місяці від дати закінчення дії візи. Термін дії закордонного паспорту не повинен перевищувати 10 років. Продовжені паспорти не прийматимуться. Закордонний паспорт повинен містити щонайменше 2 чисті сторінки (призначені для візи). Слід додати копії сторінок паспорту з попередніми візами Шенген</div>
                                        <div>- У випадку наявності інших закордонних паспортів слід додати їх (оригінал)</div>
                                        <div>- Довідка з м.р. може бути додатковим документом, що позитивно вплаває на рішення видачі візи.</div>
                                        <div>- Термін оформлення може залежати від графіку подання та отримання документів</div>
                                    </div>
                                </div>

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