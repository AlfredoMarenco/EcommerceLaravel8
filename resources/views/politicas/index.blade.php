
@extends('layouts.template')


@section('content')
    

    <!--Form-->
    <main role="main" class="container">

        <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
            aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 id="tituloVentana">Solicita más información </h5>
                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="alert alert-succes">

                            <form class="contact" name="contact-form" method="post" action="enviar.php">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nombre</label>
                                    <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1"
                                        required="required" placeholder="Escribe tu nombre">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        required="required" placeholder="Escribe tu correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Teléfono</label>
                                    <input type="tel" name="telefono" class="form-control" id="phone" pattern="[0-9]{10}"
                                        required="required" placeholder="Escribe tu teléfono">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mensaje</label>
                                    <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1"
                                        required="required" rows="3"
                                        placeholder="Ejemplo: Hola, me gustaría saber un poco más..."></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdBBc8ZAAAAACqRaUl6mmUgAfKhUXYmCUpq5nRK"
                                    style="margin-bottom: 10px;"></div>

                                <button type="submit" class="btn btn-secondary">Enviar</button>
                            </form>


                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>

            </div>


        </div>
    </main>
    <!-- ========================= Políticas start// ========================= -->
    <section id="politica">
        <div class="container">
            <h1 >
                Politicas de privacidad
            </h1>
            <div class="cuerpo">
                <p>
                    <b>
                        1​. 
                    </b>  
                    Cada vez que usa este sitio web estará bajo la aplicación de la política de privacidad vigente en cada momento (en adelante, la Política de Privacidad), debiendo revisar dicho texto para comprobar que está conforme con él.
                    </p>
                
                <p> 
                    <b>
                        2​.
                    </b> 
                    Los datos personales que nos aporta son nombre, apellidos, teléfono, correo electrónico, país, asunto, tema, mensaje, secciones que le interesan y tipo de teléfono móvil que tiene serán objeto de tratamiento en una base de datos responsabilidad de 
                    <b> ​ITX México XXI, S.A. de C.V. (ITX México) </b> cuyas finalidades son:
                </p>
    
                <p> 
                    <b>
                        I​.
                    </b> 
                El desarrollo, cumplimiento y ejecución del contrato de compraventa de los productos que haya adquirido o de cualquier otro contrato entre ambos;
                
                </p>
    
                <p> 
                    <b>
                        I​I.
                    </b> 
                    Para cumplir obligaciones derivadas de nuestras relaciones jurídicas que surjan con usted al contactar con nosotros para compartir sus opiniones, quejas y sugerencias; información corporativa, affinity card y atención al cliente en tiendas.
    
                
                </p>
                <p> 
                    <b>
                        I​II.
                    </b> 
                    Atender las solicitudes que nos plantee;
    
                
                </p>
    
                <p> 
                    <b>
                        I​V.
                    </b> 
                    Asimismo, dentro de la relación entre usted y nosotros, estará comprendido proporcionarle información acerca de los productos de <b>RENE ALONSO</b> ​así como, el desarrollo y soporte de actividades de comercio electrónico), incluyendo, en relación con dichos productos, el envío de comunicaciones comerciales a través de correos electrónicos, llamadas telefónicas, mensajes SMS y demás medios de comunicación electrónicos (según el estado de la técnica) o físicos que resultaran adecuados y pertinentes para cumplir con la presente finalidad. Puede cambiar tus preferencias en relación con el envío de tales comunicaciones comerciales accediendo a la sección Mi cuenta. Podrá dar de baja su suscripción a través de la sección Newsletter o contactando con nuestro servicio de atención al cliente.
                
                </p>
    
                <p> 
                    <b>
                        ​V.
                    </b> 
                    En el caso que nos aporte datos personales de terceros, usted se responsabiliza de haber informado y haber obtenido el consentimiento de éstos para ser aportados con las finalidades que se detallan a continuación. En el caso de haber procedido a la compra de un producto (en adelante, mercancía), los datos personales de terceros aportados serán utilizados únicamente para.
                
                </p>
    
                <p> 
                    <b>
                        ​(I).
                    </b> 
                    ​ la gestión del envío o la verificación de recepción de la mercancía.
                
                </p>
    
                <p> 
                    <b>
                        ​(II).
                    </b> 
                    ​atender las solicitudes que nos plantee.
                </p>
    
                <p> 
                    <b>
                        ​(II).
                    </b> 
                    ​Compartir con sus conocidos nuestros productos por correo electrónico.
                </p>
    
                <p> 
                    <b>
                        ​(II).
                    </b> 
                    ​En caso de que elija marcar la opción de guardar su tarjeta, nos autoriza expresamente al tratamiento de los datos indicados como necesarios para su activación y desarrollo. <br>
    
                    El CVV de la tarjeta únicamente se utiliza para realizar la compra en curso, y no será almacenado ni tratado posteriormente como parte de sus datos de tarjetas.<br>
    
                    El consentimiento para la activación de esta funcionalidad permite que aparezcan sus datos autocompletados en posteriores compras, por lo que no será necesario introducir sus datos en cada nuevo proceso, y se entenderá válido y vigente para compras posteriores.<br>
    
                    Podrá modificar sus tarjetas, así como revocar su consentimiento para el tratamiento, en cualquier momento a través del apartado Tarjetas de Mi Cuenta.
                    ITX México almacena y transmite los datos de sus tarjetas conforme a los principales estándares de confidencialidad y seguridad internacionales de tarjetas de crédito y débito.
                    El uso de esta funcionalidad podrá requerir por motivos de seguridad la modificación de su clave de acceso. Recuerde que la seguridad en el uso del sitio web también depende de su correcta utilización y conservación de determinadas claves confidenciales.<br>
    
                    
                </p>
    
                <p> 
                    <b>
                        ​VII.
                    </b> 
                    ​Activar los mecanismos necesarios con objeto de prevenir y detectar el uso indebido de la Plataforma, por ejemplo, durante el proceso de compra y devolución, así como potenciales fraudes contra ti y/o contra Nosotros. Si consideramos que la operación puede ser fraudulenta o detectamos comportamientos anormales con indicios de tratarse de usos fraudulentos de nuestras funcionalidades, productos y servicios, este tratamiento puede tener consecuencias como el bloqueo de la transacción o la cancelación de tu cuenta de usuario.
                </p>
    
                <p> 
                    <b>
                        ​VIII.
                    </b> 
                    ​Con fines de facturación y para poner a tu disposición los tickets y facturas de las compras que hayas realizado en la Plataforma.
                </p>
    
                <p> 
                    <b>
                        ​VIII.
                    </b> 
                    ​Personalizar los servicios que te ofrecemos y poder hacerte recomendaciones en función de tu interacción con ​RENE ALONSO en la Plataforma y del análisis de tu perfil de usuario (por ejemplo, en base a tu historial de compra y navegación). Asimismo, mostrarte publicidad en Internet que podrás ver cuando navegues en sitios web y apps, por ejemplo, en redes sociales. La publicidad que veas puede mostrarse de modo aleatorio, pero en otras ocasiones se trata de publicidad que puede estar relacionada con tu historial de compra, preferencias y navegación.
                </p>
    
                <p> 
                    <b>
                        ​IX.
                    </b> 
                    ​Personalizar los servicios que te ofrecemos y poder hacerte recomendaciones en función de tu interacción con ​RENE ALONSO en la Plataforma y del análisis de tu perfil de usuario (por ejemplo, en base a tu historial de compra y navegación). Asimismo, mostrarte publicidad en Internet que podrás ver cuando navegues en sitios web y apps, por ejemplo, en redes sociales. La publicidad que veas puede mostrarse de modo aleatorio, pero en otras ocasiones se trata de publicidad que puede estar relacionada con tu historial de compra, preferencias y navegación. <br>
    
                    En caso de que seas usuario de redes sociales, podremos facilitarles a aquellas con las que colaboremos determinada información para que puedan mostrarte anuncios de ​RENE ALONSO y, en general, ofrecerte a ti o a otros usuarios similares, publicidad teniendo en cuenta tu perfil en dichas redes sociales. Si quieres información sobre el uso de tus datos y el funcionamiento de anuncios en estas redes sociales, te recomendamos que revises la información acerca de tu privacidad en las redes sociales en las que participas. Adicionalmente utilizamos tus datos para llevar a cabo análisis de medición y segmentación de los anuncios que mostramos a los usuarios en algunas plataformas de colaboradores. Para ello colaboramos con estos terceros que nos ofrecen la tecnología necesaria (por ejemplo, a través de, píxeles, SDK) para utilizar estos servicios. Ten en cuenta que, si bien no facilitamos datos personales identificativos a estos colaboradores, les comunicamos algún identificador único (por ejemplo, el identificador de publicidad asociado al
                    dispositivo. Así mismo, puedes restablecer tu identificador de publicidad o deshabilitar la personalización de los anuncios en tu dispositivo.
                </p>
    
                <p> 
                    <b>
                        ​X.
                    </b> 
                    ​Enriquecimiento de datos: Cuando obtengamos tus datos personales de diversas fuentes, podremos combinarlos en determinadas circunstancias con el fin de mejorar nuestra comprensión de tus necesidades y preferencias en relación con nuestros productos y servicios (incluidas las finalidades de análisis, generación de perfiles de uso, estudios de marketing, encuestas de calidad y mejora de la interacción con nuestros clientes). Nos referimos, por ejemplo, a la combinación de información que podemos hacer si tienes una cuenta registrada y, con la misma dirección de correo electrónico que la vinculada a tu cuenta, realizas compras como invitado; o a información recopilada automáticamente (como direcciones IP, MAC o metadatos) que podemos vincular con aquella información que nos hayas proporcionado directamente a través de tu actividad en la Plataforma o en cualquiera de nuestras tiendas (por ejemplo, la información relacionada con tus compras, ya sea en tiendas físicas o en la tienda online, tus preferencias).
                </p>

                <p> 
                    <b>
                        ​3. 
                    </b> 
                    ​​ITX México​, como responsable de la base de datos, se compromete a respetar la confidencialidad de sus datos personales y a garantizar el ejercicio de sus derechos de Acceso, Rectificación, Cancelación y Oposición (derechos ARCO), mediante carta dirigida a la dirección anteriormente indicada a la atención de “Protección de Datos” para México; o bien, mediante el envío de un correo electrónico a datospersonales@corporaciondeserviciosxxi.mx. En caso necesario, podremos solicitarle copia de alguna de sus identificaciones oficiales (IFE, pasaporte u otro documento válido que lo identifique). En el caso de que decidiese ejercer dichos derechos ARCO y que como parte de los datos personales que nos hubiera facilitado conste el correo electrónico le agradeceríamos que en la mencionada comunicación se hiciera constar específicamente esa circunstancia indicando la dirección de correo electrónico respecto de la que se ejercitan los derechos de acceso, rectificación, cancelación y oposición.
                </p>

                <p> 
                    <b>
                        I​. 
                    </b> 
                    ​​DATOS DEL TITULAR: Nombre Completo, Domicilio Completo, Teléfono y Correo electrónico (donde se le comunicará la respuesta a su solicitud).
                </p>

                <p> 
                    <b>
                        II​. 
                    </b> 
                    ​​INFORMACIÓN DEL REPRESENTANTE (SÓLO SI APLICA): Nombre Completo. • En caso de ser representante legal del titular deberá acompañar a su escrito el instrumento público correspondiente en original, o en su caso, carta poder firmada ante dos testigos.
                </p>
                <p> 
                    <b>
                        III​. 
                    </b> 
                    ​​DERECHOS ARCO: Indicar el/los derechos(s) que desea ejercer: Acceso, Rectificación, Cancelación y/o Oposición. Asimismo, se deberá hacer una descripción de los datos personales
                    respecto de los que se busca ejercer el/los derechos(s) señalados anteriormente y/o cualquier otro comentario que nos ayude a atender mejor su derecho.
                </p>
                <p> 
                    <b>
                        IV​. 
                    </b> 
                    ​​OTRA DOCUMENTACIÓN NECESARIA: Favor de acompañar la documentación que considere sustente su solicitud y nos ayude a tramitarla convenientemente. En particular, en la solicitud de rectificación de datos personales (dato incorrecto, dato correcto y documento acreditativo).
                    En caso de que la información proporcionada en su escrito sea errónea o insuficiente, o bien, no se acompañen los documentos de acreditación correspondientes, el Departamento de Protección de Datos, dentro de los cinco (5) días hábiles siguientes a la recepción de su escrito de solicitud de derechos, podrá requerirle que aporte los elementos o documentos necesarios para dar trámite al mismo. Usted contará con diez (10) días hábiles para atender el requerimiento, contados a partir del día siguiente en que lo haya recibido. De no dar respuesta en dicho plazo, se tendrá por no presentado el escrito correspondiente.
                    El Departamento de Protección de Datos le comunicará la determinación adoptada en un plazo máximo de veinte (20) días hábiles contados desde la fecha en que se recibió su escrito a efecto de que, si resulta procedente, haga efectiva la misma dentro de los quince (15) días hábiles siguientes a que se comunique la respuesta. La respuesta se dará por la misma vía en que nos envió su solicitud.
                </p>

                <p> 
                    <b>
                        4​. 
                    </b> 
                    ​​Usted podrá limitar el uso y/o divulgación de sus datos personales enviando su solicitud al Departamento de Protección de Datos a la dirección direccion@renealonso.com para México. Los requisitos para acreditar su identidad, así como el procedimiento para atender su solicitud se regirán por los mismos criterios señalados en el apartado anterior. En caso de que su solicitud resulte procedente, el Departamento de Protección de Datos lo registrará en nuestro listado de exclusión interno con el objeto de que usted deje de recibir nuestras promociones.

                </p>

                <p> 
                    <b>
                        5. 
                    </b> 
                    ​​ITX México se reserva el derecho, bajo su exclusiva discreción, de cambiar, modificar, agregar o eliminar partes de la presente Política de Privacidad en cualquier momento. En tal caso, ITX México indicará la fecha de última versión del mismo a través de su publicación en el presente sitio web.

                </p>

                <p> 
                    <b>
                        6. 
                    </b> 
                    ​​Para cumplir las finalidades indicadas y por lo que entendemos que, al registrarse y proporcionarnos información a través de este sitio Web, nos autoriza expresamente para efectuar tales transferencias a, ITX México para cumplir la(s) finalidad(es) necesarias anteriormente descrita(s) u otras aquellas exigidas legalmente o por las autoridades competentes, sólo transferirán los datos necesarios en los casos legalmente previstos.

                </p>

                <p> 
                    <b>
                        7. 
                    </b> 
                    ​​El usuario (usted) por la presente garantiza que los datos personales proporcionados son ciertos y exactos y se compromete a notificar cualquier cambio o modificación de los mismos. Cualquier pérdida o daño causado al sitio o a la persona responsable del sitio web o a cualquier tercero mediante la comunicación de información errónea, inexacta o incompleta en los formularios de
                    registro será responsabilidad exclusiva del usuario. Aceptando la presente Política de Privacidad y consiente la utilización de datos utilizadas en este sitio web que se describen.

                </p>

            </div> <!--Fin de cuerpo-->

        </div>
    </section>
    <!-- ========================= Políticas end// ========================= -->


    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->
    <div class="container">
        <div style="text-align: center;">
            <img src="{{ asset('template/images/rene/logo-nav.png') }}" class="img-fluid" alt="" />
        </div>
    </div>
@endsection
