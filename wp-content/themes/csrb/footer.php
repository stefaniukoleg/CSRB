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
</div>

<div id="nine">
    <div class="parallax-container">
        <div class="parallax">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg/6.jpg" alt="parallax">
            <div class="mask">
                <div class="line-main container">
                    <div class="line-sign center fot-form-sign white-text">ЗАМОВЛЯЙТЕ ВІЗУ</div>
                    <div class="block-line white"></div>
                    <div class="line-sign-third center white-text">Думайте про подорорж - ми подбаємо про все інше</div>
                </div>
                <div class="row container center">
                    <div class="col offset-l2 l8 offset-l2"> 
                        <div id="application" class="fadeInRight wow" style="margin-top: 0" data-wow-delay="0.9s">
                            <div class=" footer-form center">
                                Залиште Ваші дані і ми зв'яжемося з Вами та дамо відповідь на любе питання
                            </div>
                            <?php
                                echo do_shortcode('[contact-form-7 id="69" title="Форма замовлення дзвінка"]');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copyright">
    <div class="copyright-info center">
        <a href="https://platform-it.com/">Made by Platform-IT Company</a>
    </div>
</div>

<!-- menu-btn -->
<a id="menu-btn" class="waves-effect waves-light btn-large pulse btn-floating callback" href="#modal1">
    <img class="callback-image" src="<?php echo get_template_directory_uri(); ?>/img/pictures/telephone.svg" alt="callback">
</a>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });
</script>

<script>
    new WOW().init();
</script>

<script> 
    $(document).ready(function() {
        $('.parallax').parallax();
    });
</script>

<script>
    var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
    });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
        var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
        $('html, body').stop().animate({ 
            scrollTop: offsetTop
        }, 300);
        e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop()+topMenuHeight;
        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";
        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
            .parent().removeClass("active")
            .end().filter("[href='#"+id+"']").parent().addClass("active");
        }
    });
</script>

<script> $(".button-collapse").sideNav();</script>

</body>
</html>
