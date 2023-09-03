<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consol | Sitio oficial </title>
    <?php include_once "Public/include/head.php"; ?>
    <link rel="stylesheet" href="Public/css/owl.carousel.min.css">
</head>
<body>
    <?php include_once "Public/include/nav.php"; ?>

    <!-- SLIDER -->
    <section class="slider">
        <div class="owl-carousel owl-theme">
            <!-- SLIDE 01 -->
            <div class="item item__slide1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="d-flex">
                                <h2 class="slider__tit mb-4">¡Bienvenido a un futuro brillante!</h2>
                                <p class="slider__txt mb-4">En <b>CONSOL</b>, llevamos la energía del sol  directamente a tu hogar y negocio con nuestros  paneles y calentadores solares de primera calidad</p>
                                <p class="slider__caption mb-5">Empieza a ahorrar dinero y a reducir tu huella de carbono hoy mismo.</p>
                                <div class="btnc">
                                    <a class="btnc__item btnc__item--whatsapp" href="#"><i class="icon icon_whatsapp"></i>Cotiza aquí</a>
                                    <a class="btnc__item btnc__item--principal" href="nosotros.php">Conoce más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="d-flex">
                                <img class="img-fluid" src="Public/images/consol-panel-solar-slider.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDE 02 -->
            <div class="item item__slide2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="d-flex text-center">
                                <h2 class="slider__tit mb-4">¡Paneles solares!</h2>
                                <h2 class="slider__tit mb-4">Reduce hasta un <span>98%</span> en tu factura de luz</h2>
                                <!-- <p class="slider__caption mb-5">Empieza a ahorrar dinero y a reducir tu huella de carbono hoy mismo.</p> -->
                                <div class="btnc justify-content-center">
                                    <a class="btnc__item btnc__item--principal" href="proyectos.php">Conoce más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="d-flex">
                                <img class="img-fluid" src="Public/images/consol-pagar-menos-luz-slider.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDE 01 -->
            <div class="item item__slide3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="d-flex">
                                <h2 class="slider__tit mb-4">¡Calentadores solares!</h2>
                                <p class="slider__caption mb-5">Conoce todos nuestros modelos disponibles.</p>
                                <div class="btnc">
                                    <a class="btnc__item btnc__item--principal" href="calentador-solar.php">Conoce más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="origen">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <img class="img-fluid img-responsive" src="Public/images/consol-empresa-mexicana-panel-solar.png" alt="">
                </div>
                <div class="col-lg-6 col-md-7">
                    <h4 class="origen__tit mb-4"><b>Somos una empresa <br> <span class="origen--consol">100% mexicana</span></b> dedicada a soluciones de energía limpia a través del sol.</h4>
                    <div class="btnc justify-content-center">
                        <a class="btnc__item btnc__item--principal" href="nosotros.php">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="servicios">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="tit_principal">Nuestros servicios.</h1>
                    <p class="txt_principal mb-4">Contamos con diseño, venta e instalación de sistemas de paneles solares.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <article class="cardc">
                        <div class="cardc__img cardc__img--cfe"></div>
                        <h2 class="subTit_principal text-center">Interconexión <br> a la red</h2>
                        <div class="cardc__txt">
                            <p class="txt_principal">Paneles solares para la reducción del recibo de luz hasta en un 98%.</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="cardc">
                        <div class="cardc__img cardc__img--calentador"></div>
                        <h2 class="subTit_principal text-center">Calentador <br> solar</h2>
                        <div class="cardc__txt">
                            <p class="txt_principal">Sistemas para calentamiento de agua y reducción del consumo de gas.</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="cardc">
                        <div class="cardc__img cardc__img--sistemas"></div>
                        <h2 class="subTit_principal text-center">Sistemas <br> aislados</h2>
                        <div class="cardc__txt">
                            <p class="txt_principal">Sistemas de paneles solares para autoconsumo de energía eléctrica.</p>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="cardc cardc--luminarias">
                        <div class="cardc__img cardc__img--luminarias"></div>
                        <h2 class="subTit_principal text-center">Luminarias <br> solares</h2>
                        <div class="cardc__txt">
                            <p class="txt_principal">Próximamente.</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="btnc">
                        <a class="btnc__item btnc__item--principal" href="contacto.php">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="beneficios">
        <div class="container">
            <div class="garantias">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="tit_principal">Protegemos tu inversión</h2>
                        <p class="txt_principal">Al contratar nuestros servicios en <span class="txt_acent">sistemas aislados</span> podrás estar seguro con las garantías que te ofrecemos.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <article class="garantia">
                            <img src="Public/images/svg/icon_garantia_12_a.svg" alt="">
                            <p class="txt_principal">12 años de garantía</p>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <article class="garantia garantia--reverse">
                            <img src="Public/images/svg/icon_garantia_25.svg" alt="">
                            <p class="txt_principal">25 años de <br> vida útil</p>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <article class="garantia">
                            <img src="Public/images/svg/icon_garantia_reduccion.svg" alt="">
                            <p class="txt_principal">Generación de energía para consumo propio</p>
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <article class="garantia garantia--reverse">
                            <img src="Public/images/svg/icon_garantia_ahorro.svg" alt="">
                            <p class="txt_principal">Reducción de las facturas de luz</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROYECTOS -->
    <section class="proyectos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="tit_principal mb-5">Proyectos recientes</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="proyecto proyecto--primero">
                        <div class="proyecto__txt">
                            <span class="caption">CDMX</span>
                            <h5 class="tit_secundario">Instalación comercial</h5>
                            <p class="txt_principal">Nuevo Panteón Jardín, 8 paneles de 550 w potencia pico instalada 4.4 kw.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="proyecto proyecto--segundo">
                        <div class="proyecto__txt">
                            <span class="caption">Edomex</span>
                            <h5 class="tit_secundario">Sistemas interconectados</h5>
                            <p class="txt_principal">Proyecto residencial, 8 paneles solares de 415 w, potencia pico instalada de 3.3 kw.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="proyecto proyecto--tercero">
                        <div class="proyecto__txt">
                            <span class="caption">Edomex</span>
                            <h5 class="tit_secundario">Instalación comercial</h5>
                            <p class="txt_principal">Proyecto plaza mi lagu, tienda de misceláneos Tenancingo, 17 paneles de 550 w potencia pico instalada 9.35 kw.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btnc">
                        <a class="btnc__item btnc__item--principal" href="proyectos.php">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once "Public/include/whatsapp.php";
        include_once "Public/include/cotizacion.php"; 
        include_once "Public/include/footer.php"; 
    ?>

    <script type="text/javascript" src="Public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="Public/js/slider.js?ver=1.1.10"></script>
    <script type="text/javascript" src="Public/js/cotizacion.js?ver=1.1.12"></script>
</body>
</html>