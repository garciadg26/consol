    
    <!-- COTIZACION -->
    <section class="cotizacion">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h1 class="tit_principal home__photo1">¡Solicita tu cotización!</h1>
                    <p class="txt_principal home__photo2">Nos encantará ayudarte a <b>invertir y ahorrar</b> inteligentemente.</p>
                    <ul class="cotizacion__list">
                        <li class="cotizacion__item home__photo4"><a href="tel:7227024046"><i class="icon icon_whatsapp_y"></i>722 702 4046</a></li>
                        <li class="cotizacion__item home__photo5"><a href="mailto:contacto@consol.com.mx"><i class="icon icon_mail_y"></i>contacto@consol.com.mx</a></li>
                        <li class="cotizacion__item home__photo6"><a href="https://goo.gl/maps/7HcDQDwj6uPWJCUj9"><i class="icon icon_map_y"></i>Calle independencia 145, Santa Ana Tlapaltitlán, <br> Toluca Estado de México.</a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <form id="cotizacion" class="formulario" action="">
                        <!-- Grupo: Nombre -->
                        <div class="formulario__grupo" id="grupo__nombre">
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre completo"> 
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El Nombre solo puede contener letras.</p>
                        </div>
                        <!-- Grupo: Correo Electronico -->
                        <div class="formulario__grupo" id="grupo__correo">
                            <div class="formulario__grupo-input">
                                <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Correo electrónico">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guión bajo.</p>
                        </div>
                        <!-- Grupo: Teléfono -->
                        <div class="formulario__grupo" id="grupo__telefono">
                            <div class="formulario__grupo-input">
                                <input type="tel" class="formulario__input" name="telefono" id="telefono" placeholder="Tel. / Cel.">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="formulario__input-error">El teléfono solo puede contener numeros y el máximo son 10 dígitos.</p>
                        </div>
                        <textarea class="formulario__input" name="mensaje" id="mensaje" placeholder="¿En qué podemos ayudarte?"></textarea>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor, llena el formulario correctamente. </p>
                                </div>
                                <div class="formulario__captcha" id="formulario__mensaje-captcha">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Captcha no verificado. </p>
                                </div>
                                <!-- <div class="g-recaptcha" data-sitekey="6LdadJQjAAAAAJdDgummFdUhiJJp6w-vCKMJxWt4"></div> -->
                                <input type="submit" value="Enviar">
                                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">¡Formulario enviado exitosamente!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>