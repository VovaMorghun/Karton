<section class="contacts">
        <div id="map" class='map'></div>
        <div class="contacts-block">
            <div class="contacts-block__address contacts-block__text">
                <div class="contacts-block__img"><img src="../img/contact/Map-Marker-PNG-02682.png" alt=""></div>
                <div class="contacts-block__descr">   
                    <div class="contacts-block__title">Адрес офиса</div>
                    г. Уфа, Проспект октября, 46
                    <!-- /.contacts-block__title -->
                    <div class="contacts-block__title">Адрес склада</div>
                    г. Уфа, ул. Майкопская, 65/2
                    <!-- /.contacts-block__title -->
                </div> 
            </div>
            <!-- /.contacts-block_address -->
            <div class="contacts-block__phone contacts-block__text">
                <div class="contacts-block__img"><img src="../img/contact/Layer_38_copy_2.png" alt=""></div>
                <div class="contacts-block__descr">
                    <div class="contacts-block__title">Тел. отдела продаж:</div>
                    8 (347) 271-54-28<br>
                    8 (937) 363-30-00
                    <!-- /.contacts-block__title -->
                </div>
            </div>
            <!-- /.contacts-block__phone -->
            <div class="contacts-block__cta contacts-block__text"><button class="button contacts-block__button">Заказать звонок</button> <!-- /.button --></div>
            <!-- /.contacts-block__cta -->
            <div class="contacts-block__mail contacts-block__text">
                <div class="contacts-block__img"><img src="../img/contact/07-128.png" alt=""></div>
                <div class="contacts-block__descr">
                    <div class="contacts-block__title">Е-mail</div>
                    urals.karton@gmail.com
                    <!-- /.contacts-block__title -->
                </div>
            </div>
            <!-- /.contacts-block__mail -->
        </div>
        <!-- /.contacts-block -->

    </section>
    <!-- /.contacts -->

    
    <div class="overlay">
        <div class="popup">
            <div class="popup-title">Форма обратной связи</div>
            <!-- /.popup-title -->
            <div class="popup-close"> &times; </div>
            <!-- /.popup-close -->
            <div class="popup-form">
                <form action="" class="main-form">
                    <div class="popup-form-header">Получите индивидуальное предложение
                        
                        <span>на производство и поставку изделий</span>
                        <label for="phone" class="popup-form__label" >
                            Введите ваш номер телефона:
                        </label>
                        <!-- /.popup-form__label -->
                        <input type="tel" id='phone' class="popup-form__input"  placeholder="+8 (ХХХ) ХХХ-ХХ-ХХ" required>
                        <button class="button popup-form__button">Оставить заявку!</button>
                        <!-- /.button -->
                        <div class="popup-form__note">
                            *Минимальный заказ 500шт
                        </div>
                        <!-- /.popup-form__note -->
                    </div>
                    <!-- /.popup-form-header -->
                </form>
                <!-- /.main-form -->
            </div>            
            <!-- /.popup-form -->
        </div>
        <!-- /.popup -->
    </div>
    <!-- /.overlay -->
    
    <script src="index.js"></script>
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <script>
            var map;
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644 },
                zoom: 8
              });
            }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlPy_5MWVvgydpGawZwDzaZovMTLniYM&callback=initMap"
          async defer></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>