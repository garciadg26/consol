<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Consol </title>

    <?php include_once "Public/include/head.php"; ?>
</head>
<body>
    <?php include_once "Public/include/nav.php"; ?>

    <section class="encabezado encabezado-contacto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="txt_head">Contáctanos.</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- FORMULARIO -->
    <section class="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="tit_principal mb-5">¡Solicita tu cotización!</h1>
                    <div class="contacto__item">
                        <i class="contacto__icon contacto__icon--whatsapp"></i>
                        <p class="contacto__txt">Escríbenos para solicitar tu cotización.<br>
                            <a class="contacto__link" href="tel:7227024066">722 702 4066</a>
                        </p>
                    </div>
                    <div class="contacto__item">
                        <i class="contacto__icon contacto__icon--mail"></i>
                        <p class="contacto__txt">Envíanos correo para más información.<br>
                            <a class="contacto__link" href="mailto:contacto@consol.com.mx">contacto@consol.com.mx</a>
                        </p>
                    </div>
                    <div class="contacto__item">
                        <i class="contacto__icon contacto__icon--map"></i>
                        <p class="contacto__txt">Calle independencia 145, Santa Ana Tlapaltitlán.<br>
                            <a class="contacto__link" href="#">Toluca Estado de México</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="formulario" id="formulario" action="">
                        <!-- Grupo: Nombre -->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre completo"> 
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El Nombre tiene que ser de 4 a 16 dígitos y solo puede contener letras.</p>
                        </div>
                        <!-- Grupo: Correo Electronico -->
                        <div class="formulario__grupo" id="grupo__correo">
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Correo electrónico">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                        </div>
                        <!-- Grupo: Teléfono -->
                        <div class="formulario__grupo" id="grupo__telefono">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Tel. / Cel.">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 12 dígitos.</p>
                        </div>
                        <textarea class="formulario__input" name="mensaje" id="mensaje" placeholder="Comentario o duda"></textarea>
                        <div class="row form_row4">
                            <div class="col-md-12">
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
                                </div>
                                <div class="formulario__captcha" id="formulario__mensaje-captcha">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Captcha no verificado. </p>
                                </div>
                                <!-- <div class="g-recaptcha" data-sitekey="6LdadJQjAAAAAJdDgummFdUhiJJp6w-vCKMJxWt4"></div> -->
                                <input type="submit" value="Enviar">
                                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once "Public/include/whatsapp.php"; 
        include_once "Public/include/footer.php"; 
    ?>
    <script type="text/javascript" src="Public/js/formulario.js?ver=1.1.11"></script>

</body>
</html>