<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    
    <title>Document</title>
</head>
<body>
    <?php include "header.php";?>
        
    <section class="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12  col-xl-5">
                    <div class="main-img animate anim mobile-hidden" >
                        <img src="img/boxes.png" alt="Картон">
                    </div>
                </div>            
                <!-- /.col-5 -->
                <div class="col-12 col-md-12  col-xl-7">
                    <div class="main-text wow fadeInRight" data-wow-delay='1s'>
                        <h1 class="main-text__title">
                            Производство упаковки из гофрокартона
                        </h1>
                        <!-- /.main-text__title -->
                        <div class="main-text__subtitle">
                            с доставкой по всей России
                        </div>
                        <!-- /.main-text__subtitle -->
                        <div class="main-text__form">
                            <div class="form-title">
                                    Получите индивидуальное предложение на производство и поставку гофропродукции
                                <br>
                                    <span class='form-title__important'>
                                        Образцы упаковки бесплатно!
                                </span>
                            </div>
                            <!--form-title-->
                            <form action="smart.php"  method="POST" class="form">
                                <input type="tel" name='user_phone'  class='form-input' placeholder="Введите номер телефона">
                                <button type="submit" class='button button-big'>Оставить заявку!</button>
                            </form>
                            <div class="form-mintext">
                                *Минимальный заказ 500шт
                            </div>
                            <!-- /.form-mintext -->
                        </div>
                        <!-- /.main-text__form -->
                    </div>
                    <!-- /.main-text -->
                </div>
                <!-- /.col-7 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-->
    </section>
    <!-- /.section -->

    <section class="features" id="features">
        <div class="container">
            <div class="numbers" >
                <div class="numbers-block">
                    <div class="numbers-block__title">
                        5 лет
                    </div>
                    <!-- /.numbers-block__title -->
                    <div class="numbers-block__text">
                        На рынке изделий из гофрокартона
                    </div>
                    <!-- /.numbers-block-text -->
                </div>
                <!-- /.numbers-block -->
                <div class="numbers-block">
                    <div class="numbers-block__title">
                        до 5 000 000 м<sup>2</sup>
                    </div>
                    <!-- /.numbers-block__title -->
                    <div class="numbers-block__text">                        
                        Ежемесячный объем производства гофрокартона
                    </div>
                    <!-- /.numbers-block-text -->
                </div>
                <!-- /.numbers-block -->
                <div class="numbers-block">
                    <div class="numbers-block__title">
                        4 000 м<sup>2</sup>
                    </div>
                    <!-- /.numbers-block__title -->
                    <div class="numbers-block__text">                       
                        Площадь склада
                    </div>
                    <!-- /.numbers-block-text -->
                </div>
                <!-- /.numbers-block -->
            </div>
            <!-- /.numbers -->

            
            <div class="features-blocks">
                <div class="features-block wow fadeInLeft" data-wow-delay='0.5s'>
                    <div class="features-block__img">
                        <img src="img/features_icons/icon1.png" alt="">
                    </div>
                    <!-- /.features-block__img -->
                    <div class="features-block__text">
                        <div class="features-block__title">
                            Гидрофобные добавки

                        </div>
                        <!-- /.features-block__title -->
                        <div class="features-block__descr">
                            На производстве реализована технология, которая позволяет гофрокартону стать прочнее
                        </div>
                        <!-- /.features-block__descr -->
                    </div>
                    <!-- /.features-block__text -->
                </div>
                <!-- /.features-block -->
                <div class="features-block wow fadeInUp">
                    <div class="features-block__img">
                        <img src="img/features_icons/icon2.png" alt="">
                    </div>
                    <!-- /.features-block__img -->
                    <div class="features-block__text">
                        <div class="features-block__title">
                            Флексопечать

                        </div>
                        <!-- /.features-block__title -->
                        <div class="features-block__descr">
                            Возможно нанесение вашего  логотипа, текста или мани- пуляционных знаков
                        </div>
                        <!-- /.features-block__descr -->
                    </div>
                    <!-- /.features-block__text -->
                </div>
                <!-- /.features-block -->
                <div class="features-block wow fadeInRight " data-wow-delay='0.7s'>
                    <div class="features-block__img">
                        <img src="img/features_icons/icon3.png" alt="">
                    </div>
                    <!-- /.features-block__img -->
                    <div class="features-block__text">
                        <div class="features-block__title">
                           Производство
                        </div>
                        <!-- /.features-block__title -->
                        <div class="features-block__descr">
                            4 технологические линии спо- собны выполнить любой заказ любой сложности
                        </div>
                        <!-- /.features-block__descr -->
                    </div>
                    <!-- /.features-block__text -->
                </div>
                <!-- /.features-block -->
                <div class="features-block wow fadeInLeft " data-wow-delay='0.4s'>
                    <div class="features-block__img">
                        <img src="img/features_icons/icon4.png" alt="">
                    </div>
                    <!-- /.features-block__img -->
                    <div class="features-block__text">
                        <div class="features-block__title">
                            Бесплатные образцы
                        </div>
                        <!-- /.features-block__title -->
                        <div class="features-block__descr">
                            Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку
                        </div>
                        <!-- /.features-block__descr -->
                    </div>
                    <!-- /.features-block__text -->
                </div>
                <!-- /.features-block -->
                <div class="features-block wow fadeInUp" data-wow-delay='0.1s'>
                    <div class="features-block__img">
                        <img src="img/features_icons/icon5.png" alt="">
                    </div>
                    <!-- /.features-block__img -->
                    <div class="features-block__text">
                        <div class="features-block__title">
                            Стабильное качество

                        </div>
                        <!-- /.features-block__title -->
                        <div class="features-block__descr">
                            Собственная лаборатория кон- тролирует качество на каждом этапе производства
                        </div>
                        <!-- /.features-block__descr -->
                    </div>
                    <!-- /.features-block__text -->
                </div>
                <!-- /.features-block -->
                <div class="features-block wow fadeInRight" data-wow-delay='0.8s'>
                    <div class="features-block__img">
                        <img src="img/features_icons/icon6.png" alt="">
                    </div>
                    <!-- /.features-block__img -->
                    <div class="features-block__text">
                        <div class="features-block__title">
                            Страховой запас

                        </div>
                        <!-- /.features-block__title -->
                        <div class="features-block__descr">
                            Можем хранить запас гофро- продукции на своих складах и поставлять его партиями
                        </div>
                        <!-- /.features-block__descr -->
                    </div>
                    <!-- /.features-block__text -->
                </div>
                <!-- /.features-block -->
            </div>
            <!-- /.features-blocks -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.features -->

    <section class="products"  id='products'>
        <div class="container">
            <h2 class="section-title wow fadeIn" data-wow-delay='0.5s'>наша Продукция</h2>
            <!-- /.section-title -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class='products-block wow fadeInLeft' data-wow-delay='0.1s'>
                        <img src="img\products\img-1.png" alt="">
                        <div class="products-block__title">Гофрокороб 4-х клапанный
                        </div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button-o button">Подробнее</button>
                             <!-- /.button -->
                             <button class="button">Получить расчет</button>
                              <!-- /.button -->
                            </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block-->
                </div>
                <!-- /.col-6 -->
                <div class="col-12 col-md-6">
                    <div class='products-block wow fadeInRight' data-wow-delay='0.5s'>
                        <img src="img\products\img-2.png" alt="">
                        <div class="products-block__title">Гофролоток
                        </div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button-o button">Подробнее</button>
                             <!-- /.button -->
                             <button class="button">Получить расчет</button>
                              <!-- /.button -->
                            </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block-->
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-12 col-md-6">
                    <div class='products-block wow fadeInLeft' data-wow-delay='0.5s'>
                        <img src="img\products\img-3.png" alt="">
                        <div class="products-block__title">Гофрокороб самосборный (сложная высечка)
                        </div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button-o button">Подробнее</button>
                             <!-- /.button -->
                             <button class="button">Получить расчет</button>
                              <!-- /.button -->
                            </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block-->
                </div>
                <!-- /.col-6 -->
                <div class="col-12 col-md-6">
                    <div class='products-block wow fadeInRight' data-wow-delay='0.1s'>
                        <img src="img\products\img-4.png" alt="">
                        <div class="products-block__title">Листовой гофрокартон</div>
                        <!-- /.products-block__title -->
                        <div class="products-block__buttons">
                            <button class="button-o button">Подробнее</button>
                             <!-- /.button -->
                             <button class="button">Получить расчет</button>
                              <!-- /.button -->
                            </div>
                        <!-- /.products-block__buttons -->
                    </div>
                    <!-- /.products-block-->
                </div>
                <!-- /.col-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.products -->

    <div class="offerprodclient">

        <section class="clients"  id='clients'>
            <div class="container">
                <h2 class="section-title wow fadeIn" data-wow-delay="0.5s">Наши клиенты</h2>
                <!-- /.section-title -->
                <div class='blocks'>
                    <div class="row align-items-center marginrow">
                        <div class="col-6 col-md-3  no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.7s'>
                                <img src="img/clients/img-1.png" alt="" class="clients-block__img">
                            </div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.5s'>
                                <img src="img/clients/img-2.png" alt="" class="clients-block__img">
                            </div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.3s'>
                                <img src="img/clients/img-3.png" alt="" class="clients-block__img">
                            </div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.1s'>
                                <img src="img/clients/img-4.png" alt="" class="clients-block__img">
                            </div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                    </div>
                    <!-- /.row -->
                    <div class="row align-items-center marginrow">
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.7s'>
                                <img src="img/clients/img-5.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.5s'><img src="img/clients/img-6.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.3s'><img src="img/clients/img-7.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft"  data-wow-delay='0.1s'><img src="img/clients/img-8.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                    </div>
                    <!-- /.row -->
                    <div class="row align-items-center marginrow">
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.7s'><img src="img/clients/img-9.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.5s'><img src="img/clients/img-10.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.3s'><img src="img/clients/img-11.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                        <div class="col-6 col-md-3 no-padding">
                            <div class="clients-block  wow fadeInLeft" data-wow-delay='0.1s'><img src="img/clients/img-12.png" alt="" class="clients-block__img"></div>
                            <!-- /.clients-block -->
                        </div>
                        <!-- /.col-3 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.clients -->    

        <section class="offers">
            <div class="container">
                <h2 class="offers-title">
                        Получите индивидуальное предложение
                    <span>на производство и поставку изделий </span>
                </h2>
                <div class="offers-form">
                    <form action="#">
                        <label for="form-offers" class="offers-form__label">Введите ваш номер телефона:</label>
                        <input type="tel" class='offers-form__input' name="" id="form-offers" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ">
                        <button type="submit" class='button button-form' >Оставить заявку!</button>
                    </form>
                    <div class="offers-form__mintext">
                            *Минимальный заказ 500шт
                    </div>
                </div>
            </div>
        </section>

        <section class="production"  id='production'>
            <div class="container">
                <div class="row ">
                    
                    <div class="col-12 col-md-12 col-lg-5 order-md-last no-padding">
                        <div class='production-text'>
                            <div class="production-text__title">Производство</div>
                            <!-- /.production-text__title -->
                            <div class="production-text__descr">
                                    <p>Современное оборудование позволяет произ- водить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</p>
                                    <p>Досконально прорабатываем конструкции коро- бов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</p>
                                    <p>Возможно нанесение цветной флексопечати на поверхность коробов.</p>
                            </div>
                            <!-- /.production-text__descr -->
                        </div>
                    </div>
                    <!-- /.col-5 -->

                    <div class="col-12  col-md-12 col-lg-7  order-md-first  no-padding">
                        <div class="production-slider">
                            <div class="production-slider__big" >
                                <img src="../img/slider/slider-sm1.png" alt="slider"  id='slider-big'>
                            </div>
                            <!-- /.production-slider__big -->
                            <div class="production-slider__wrap">
                                <button class="slider-button  left " id='left'><</button>
                                <div class="production-slider__small" id='slider-sm'>
                                    
                                        <img src="../img/slider/slider-sm1.png" alt="">
                                        <img src="../img/slider/slider-sm2.png" alt="">
                                        <img src="../img/slider/slider-sm3.png" alt="">
                                        <img src="../img/slider/slider-sm4.png" alt="">
                                    
                                </div>
                                <button class="slider-button right" id='right'>></button>
                                <!-- /.production-slider__small -->
                            </div>

                        </div>
                        <!-- /.production-slider -->
                    </div>
                    <!-- /.col-7 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.production -->

    </div>
   
    <section class="reviews">
        <div class="container">
            <h2 class="section-title">Отзывы о сотрудничестве</h2>
            <!-- /.section-title -->
                
                <!-- /.reviews-button__left -->
                    <div class="reviews-slider">
                            <div class="reviews-button__left">
                                    <img src="../img/reviews/arrow-left.png" alt="" srcset="">
                                </div>
                        <div class="reviews-slider__item">
                            <img src="../img/reviews/img-1.png" alt="">
                        </div>
                        <!-- /.reviews-slider__item -->
                        <div class="reviews-slider__item active">
                            <img src="../img/reviews/img-2.png" alt="">
                        </div>
                        <!-- /.reviews-slider__item -->
                        <div class="reviews-slider__item ">
                            <img src="../img/reviews/img-3.png" alt="">
                        </div>
                        <!-- /.reviews-slider__item -->
                        <div class="reviews-button__right">
                                <img src="../img/reviews/arrow-right.png" alt="" srcset="">
                        </div>
                    </div>
                    <!-- /.reviews-slider -->
                
                <!-- /.reviews-button__right -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.reviews -->

    <?php include 'footer.php';?>

