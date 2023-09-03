<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Consol</title>

    <?php include_once "Public/include/head.php"; ?>
</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>

    <section class="encabezado encabezado-calentador">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="txt_head">Calentadores <br> solares.</h1>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CALENTADORES -->
    <section class="calentador">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="tit_principal mb-5">Tipos de calentadores.</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="calentador__head calentador__head--sm text-center">
                                <h2 class="tit_tercero tit_tercero--solar mb-4"><i class="icon icon_baja"></i>Baja presión</h2>
                                <p class="txt_principal mb-4">Es un sistema que utiliza la energía del sol para calentar agua. El proceso es relativamente simple: cuando el sol brilla, los colectores solares absorben su calor y calientan el agua dentro de ellos.</p>
                                <div class="btnc justify-content-center">
                                    <a class="btnc__item btnc__item--secundario" href="#baja">Conocer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="calentador__head text-center">
                                <h2 class="tit_tercero tit_tercero--alta mb-4"><i class="icon icon_alta"></i>Alta presión</h2>
                                <p class="txt_principal mb-4">Es un sistema que utiliza la energía del sol para calentar agua. El proceso es relativamente simple: cuando el sol brilla, los colectores solares absorben su calor y calientan el agua dentro de ellos.</p>
                                <div class="btnc justify-content-center">
                                    <a class="btnc__item btnc__item--terciario" href="#alta">Conocer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="baja"></div>
    <section class="cal cal__baja">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cal__head mb-5">
                        <i class="icon icon__baja"></i>
                        <div class="cal__head--tit">
                            <h3 class="tit_tercero tit_tercero--baja">Baja presión</h3>
                            <p class="txt_principal">Contamos con 8 modelos de calentadores de baja presión diferentes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="solar">
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 10 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 100 a 116 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 2 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 12 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 120 a 150 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 3 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 15 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 150 a 180 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 4 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 18 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 180 a 218 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 5 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 20 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 200 a 240 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 6 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 24 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 240 a 280 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 7 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--baja">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 30 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 300 a 350 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 8 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--secundario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GARANTÍA -->
    <section class="seguro">
        <div class="container">
            <div class="seguro__card">
                <div class="icon icon__seguro">
                    <!-- Generator: Adobe Illustrator 25.4.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 94 100" style="enable-background:new 0 0 94 100;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#F0C169;}
                    </style>
                    <path id="icon_garantia" class="st0" d="M44.3,99.2c-8-2.5-15.4-6.6-21.7-12.1c-0.2-0.1-0.3-0.3-0.5-0.4c-0.6-0.6-0.7-1.6-0.1-2.3
                        c0.6-0.7,1.6-0.8,2.2-0.2c0.6,0.5,1.2,1,1.9,1.5c6,4.8,12.8,8.4,20.2,10.6c0.7,0.2,1.3,0.2,2,0c5.7-1.7,11.2-4.2,16.1-7.6
                        c0.3-0.2,0.7-0.5,1-0.7c0.8-0.5,1.8-0.3,2.3,0.5c0,0,0,0,0,0c0.5,0.7,0.3,1.7-0.4,2.2c0,0,0,0-0.1,0c-2.1,1.4-4.3,2.7-6.5,4
                        c-3.7,2-7.7,3.7-11.8,4.8c-0.5,0.2-1.1,0.2-1.8,0.4C46.2,99.7,45.2,99.5,44.3,99.2z M77,96.5c-0.8-0.1-1.4-0.7-1.5-1.5
                        c-0.4-1.9-0.8-3.7-1.3-5.6c-0.7-3.4-3.3-6-6.7-6.7c-1.8-0.4-3.6-0.9-5.4-1.2c-1-0.2-1.6-0.6-1.7-1.7c-0.1-0.9,0.6-1.5,1.7-1.7
                        c2-0.4,3.9-0.9,5.8-1.4c2.9-0.7,5.2-3,6-5.9c0.5-2,1-4,1.4-6c0.2-1,0.7-1.6,1.7-1.6c0.9,0,1.4,0.5,1.7,1.6c0.5,2.2,1,4.5,1.7,6.6
                        c0.7,2.4,2.6,4.3,5,5c2.1,0.7,4.3,1.1,6.5,1.7c1.2,0.3,1.7,0.8,1.7,1.7c0,0.9-0.6,1.4-1.8,1.7c-2.2,0.5-4.4,1-6.5,1.7
                        c-2.4,0.7-4.3,2.5-5,4.9c-0.7,2.2-1.2,4.5-1.7,6.7C78.8,95.9,78,96.5,77,96.5L77,96.5z M69.5,79.9c3.7,1.1,6.5,4,7.7,7.7
                        c1.1-3.7,4-6.6,7.6-7.7c-3.7-1.1-6.6-4-7.7-7.7C76.1,75.9,73.2,78.8,69.5,79.9z M45.2,87.8C28.6,81.6,18,69.8,13.2,52.9
                        c-2-7.2-2.8-14.7-2.5-22.1c0-0.9,0.2-1.7,0.5-2.5c0.3-0.7,1.1-1.1,1.8-0.9c0,0,0,0,0.1,0c0.8,0.2,1.3,1,1.2,1.8
                        c-0.1,2.2-0.4,4.5-0.3,6.7c0.1,8,1.8,15.9,5,23.3C24.5,71.6,33.7,80,46.3,84.6c0.6,0.2,1.3,0.2,1.9,0c1.8-0.7,3.6-1.5,5.4-2.3
                        c1.3-0.6,2.2-0.4,2.7,0.6c0.4,0.9,0,1.8-1.2,2.4c-2,0.9-4,1.7-6,2.6c-0.6,0.2-1.2,0.4-1.8,0.5C46.5,88.1,45.9,88,45.2,87.8z
                        M17.5,82c-0.9-0.7-1.6-1.6-2.2-2.6c-0.2-0.6-0.1-1.2,0.3-1.7c0.4-0.4,1-0.6,1.5-0.5c0.8,0,2.8,2.5,2.9,3.6
                        c-0.2,0.2-0.4,0.9-0.9,1.1c-0.3,0.1-0.6,0.2-0.9,0.2C17.9,82.2,17.7,82.1,17.5,82z M11.1,73.7c-1.4-2.4-2.8-4.8-3.9-7.3
                        C3.4,58.1,1.2,49.1,0.8,40c-0.1-0.9-0.1-1.9-0.2-2.8c0-0.9,0-1.8,0-2.7l-0.2,0c0.3-3.6,0.5-7.2,0.8-10.8c0-0.2,0-0.3,0.1-0.5
                        c0.1-0.9,0.9-1.6,1.8-1.5c0.9,0.1,1.6,0.9,1.5,1.8c0,0,0,0.1,0,0.1c-0.2,2.3-0.5,4.6-0.6,6.9c-0.5,11.8,1,23.2,5.9,34
                        c1,2.2,2.2,4.2,3.3,6.3c0.2,0.3,0.4,0.6,0.6,1c0.5,0.7,0.4,1.8-0.4,2.3c0,0-0.1,0.1-0.1,0.1c-0.3,0.2-0.6,0.2-0.9,0.2
                        C11.9,74.6,11.3,74.3,11.1,73.7L11.1,73.7z M41.1,67.9c-4-4.1-8.1-8.2-12.1-12.3c-2.2-2-2.4-5.3-0.4-7.5c0.1-0.1,0.3-0.3,0.4-0.4
                        c0.6-0.6,1.2-1.3,1.9-1.9c1-1,2.3-1.5,3.7-1.5c1.5,0,2.9,0.6,3.9,1.7c1.7,1.7,3.4,3.5,5.1,5.2c1.2,1.2,2.1,1.2,3.4,0
                        c5.2-5.3,10.4-10.6,15.6-15.9c2.6-2.6,5.6-2.6,8.2,0c0.4,0.4,0.9,0.9,1.3,1.3c2.5,2.6,2.5,5.6,0,8.3c-3.5,3.6-7,7.1-10.5,10.7
                        c-4,4.1-8.1,8.3-12.1,12.4c-1,1.2-2.5,1.9-4.1,2C43.6,69.9,42.1,69.1,41.1,67.9L41.1,67.9z M32.7,48.6c-0.4,0.4-0.8,0.8-1.2,1.3
                        c-1.2,1.3-1.2,2.2,0,3.4c4.1,4.2,8.1,8.3,12.2,12.5c0.6,0.9,1.8,1.1,2.7,0.5c0.2-0.1,0.4-0.3,0.5-0.5c7.7-7.8,15.3-15.6,23-23.5
                        c0.4-0.5,0.7-1,0.9-1.5c-0.2-0.5-0.5-1-0.8-1.5c-0.5-0.5-1-1.1-1.5-1.6c-1.4-1.5-2.2-1.4-3.6,0c-5.1,5.2-10.2,10.4-15.3,15.6
                        c-2.7,2.7-5.8,2.8-8.4,0c-1.5-1.6-3.1-3.1-4.6-4.7c-0.5-0.6-1.1-1-1.9-1.1C33.8,47.6,33.2,48,32.7,48.6L32.7,48.6z M84.9,67.2
                        c-0.7-0.4-1-1.3-0.6-2.1c0.5-1.4,1.2-2.7,1.7-4.1c3.5-9.7,5-20,4.4-30.3c-0.1-2.5-0.4-5-0.7-7.6c-0.2-1.6-0.5-1.9-2-2.2
                        c-8.9-1.6-17.5-4.5-25.6-8.6C57.4,9.9,53,7.2,48.8,4.1c-1.5-1.1-1.7-1-3.1,0c-3.2,2.1-6.4,4.2-9.6,6.2c-0.7,0.6-1.8,0.5-2.3-0.2
                        c-0.6-0.7-0.5-1.8,0.2-2.3c0.1-0.1,0.1-0.1,0.2-0.2c3.5-2.3,6.9-4.6,10.5-6.8c1.7-1.2,4-1,5.6,0.3c4.1,3,8.5,5.8,13.1,8.1
                        c7.9,4,16.4,6.9,25.2,8.5c2.4,0.2,4.2,2.2,4.4,4.6c0.4,4.1,0.7,8.3,1.1,12.4c-0.3,10.8-2,21.3-6.4,31.2c-0.1,0.4-0.3,0.8-0.6,1.1
                        c-0.3,0.3-0.7,0.5-1.2,0.6C85.5,67.5,85.2,67.4,84.9,67.2z M77.8,58.3c-0.9-0.3-1.3-1.2-0.9-2.4c2.7-7.9,3.9-16.2,3.6-24.5
                        c0.1-0.9-0.3-1.8-0.9-2.5c-0.6-0.6-0.6-1.6,0.1-2.2c0,0,0,0,0,0c0.6-0.6,1.5-0.7,2.1-0.1c0,0,0.1,0.1,0.1,0.1c0.8,0.9,1.3,1.9,1.6,3
                        c0.2,1.9,0.2,3.9,0.1,5.8c0,7.3-1.2,14.6-3.6,21.5c-0.3,1-0.9,1.5-1.7,1.5C78.2,58.4,78,58.3,77.8,58.3z M23.9,35.1
                        c-0.4-1.9-0.8-3.7-1.3-5.6c-0.7-3.3-3.3-5.9-6.6-6.6c-1.8-0.4-3.6-0.8-5.4-1.2C9.5,21.4,8.9,20.9,9,20c0.1-1,0.7-1.5,1.7-1.7
                        c1.9-0.4,3.8-0.8,5.8-1.4c3.1-0.7,5.4-3.1,6.1-6.1c0.5-1.9,0.9-3.8,1.4-5.8c0.2-1,0.6-1.6,1.7-1.7c0.9-0.1,1.5,0.5,1.8,1.7
                        c0.5,2.2,1,4.4,1.6,6.5c0.7,2.5,2.6,4.4,5.1,5.1c1.8,0.6,3.7,1,5.6,1.4c1.9,0.4,2.6,0.8,2.6,1.9s-0.7,1.5-2.5,1.9
                        c-1.9,0.4-3.8,0.9-5.7,1.5c-2.4,0.7-4.3,2.6-5,5c-0.7,2.2-1.2,4.5-1.7,6.7c-0.1,0.9-0.9,1.6-1.8,1.5C24.6,36.6,24,35.9,23.9,35.1
                        L23.9,35.1z M18,20c3.7,1.1,6.6,4,7.7,7.7c1.1-3.7,4-6.6,7.6-7.7c-3.7-1.1-6.5-4-7.7-7.6C24.5,16,21.6,18.9,18,20z M73.2,27
                        c-1-0.2-1.9-0.6-2.8-0.9c-0.8-0.3-1.2-1.1-0.9-1.9c0.2-0.8,0.8-1.3,2-1.3c1,0.3,2,0.7,3,1.1c0.7,0.4,1,1.2,0.7,1.9c0,0,0,0,0,0
                        c-0.2,0.6-0.8,1-1.4,1C73.5,27,73.3,27,73.2,27z M62.7,23.1c-4.7-2.4-9.3-4.9-13.9-7.4c-0.7-0.5-1.6-0.7-2.4-0.5
                        c-0.8,0.2-1.7-0.2-2-1.1c0,0,0-0.1,0-0.1c-0.2-0.8,0.3-1.7,1.1-2c0.5-0.2,1.1-0.3,1.9-0.5c0.9,0.3,1.8,0.6,2.6,1
                        c4.5,2.8,9.1,5.3,14,7.4c1.2,0.5,1.6,1.4,1.2,2.4c-0.2,0.6-0.8,1-1.5,1C63.4,23.4,63,23.3,62.7,23.1L62.7,23.1z"/>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>

                </div>
                <h3 class="tit_principal"><span>5 años de garantía</span> por defecto de fabricación</h3>
            </div>
        </div>
    </section>

    <div id="alta"></div>
    <section class="cal cal__alta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cal__head mb-5">
                        <i class="icon icon__alta"></i>
                        <div class="cal__head--tit">
                            <h3 class="tit_tercero tit_tercero--alta">Alta presión</h3>
                            <p class="txt_principal">Contamos con 4 modelos de calentadores de alta presión diferentes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="solar">
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--alta">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 10 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 100 a 116 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 2 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--terciario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--alta">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 12 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 100 a 116 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 2 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--terciario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--alta">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 10 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 100 a 116 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 2 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--terciario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                        <article class="solar__item">
                            <img src="Public/images/calentador_solar.jpg" alt="">
                            <p class="solar__precio solar__precio--alta">Desde $15,000</p>
                            <div class="solar__card">
                                <h5 class="tit_principal">Calentador de 12 tubos</h5>
                                <div class="solar__card--tit">
                                    <p class="txt_principal"><i class="icon icon__water"></i><span>Capacidad de 100 a 116 litros.</span></p>
                                    <p class="txt_principal"><i class="icon icon__people"></i>Recomendado hasta para 2 personas.</p>
                                </div>
                                <div class="btnc">
                                    <button type="button" class="btnc__item btnc__item--terciario" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ficha técnica
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Calentado Solar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="Public/images/consol-ficha-tecnica.jpg" alt="Consol Ficha técnica">
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> -->
            </div>
        </div>
    </div>

    <?php
        include_once "Public/include/whatsapp.php";
        include_once "Public/include/cotizacion.php"; 
        include_once "Public/include/footer.php"; 
    ?>
    <script type="text/javascript" src="Public/js/cotizacion.js?ver=1.1.12"></script>
    <script type="text/javascript" src="Public/js/bootstrap.min.js"></script>
</body>
</html>