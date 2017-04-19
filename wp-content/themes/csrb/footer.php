<div id="eight">
    <div id='map' style='width: 100%; height: 450px;'></div>
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
                                Залиште Ваші дані і ми зв'яжемося з Вами та дамо відповідь на будь-яке питання
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
mapboxgl.accessToken = 'pk.eyJ1IjoieXVyYXJvbWFuaXYiLCJhIjoiY2ltN294bnlqMDAweHdsbTlzcXc1cTZzdyJ9.TN66hFIpOH4gNEmc5vp7uA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v8',
    zoom: 15,
    center: [24.019064, 49.8545054],
    interactive: true
});

map.on('style.load', function (e) {
    console.log(e.style.sprite);
    map.addSource('markers', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": [{
                "type": "Feature",
                "geometry": {
                    "type": "Point",
                    "coordinates": [24.0248464, 49.8545054]
                },
                "properties": {
                    "title": "Європейський Центр Бізнесу",
                    "marker-symbol": "default_marker"
                }
            }]
        }
    });
    map.addLayer({
        "id": "title",
        "source": "markers",
        "type": "symbol",
        "layout": {
            "icon-image": "{marker-symbol}",
            "text-field": "{title}",
            "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
            "text-offset": [0, 0.6],
            "text-anchor": "top"
        }
    });
    map.addLayer({
        "id": "point",
        "source": "markers",
        "type": "circle",
        "paint": {
        "circle-radius": 10,
        "circle-color": "#ffa200"
    }
       
    });
    // Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
   
});
</script>

</body>
</html>
