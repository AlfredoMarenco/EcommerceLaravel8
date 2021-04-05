
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
                Condiciones de uso
            </h1>
            <div class="cuerpo">

                    
                    <b>
                        1. INTRODUCCIÓN
                    </b> <br>
                    <p> 
                        
                        El presente documento (conjuntamente con todos los documentos en él mencionados) establece las condiciones por las que se rige el uso de esta página web (​www.renealonso.com​) y la compra de productos en la misma (en adelante, las "Condiciones"). Le rogamos que lea atentamente las presentes Condiciones, y nuestra Política de Privacidad (conjuntamente, las “Políticas de Protección de Datos”) antes de usar esta página web. Al utilizar esta página web o hacer un pedido a través de la misma usted consiente quedar vinculado por estas Condiciones y por nuestras Políticas de Protección de Datos, por lo que, si no está usted de acuerdo con todas las Condiciones y con las Políticas de Protección de Datos, no debe usar esta página web. Estas Condiciones podrían ser modificadas. Es su responsabilidad leerlas periódicamente, ya que las condiciones vigentes en el momento de celebración de cada Contrato (tal y como éste se define más adelante) o en defecto de este, en el momento de uso de la página web serán las que le resulten aplicables. Si tiene alguna pregunta relacionada con las Condiciones o las Políticas de Protección de Datos puede ponerse en contacto con nosotros a través de nuestro formulario de contacto. El Contrato (tal y como se define más adelante) podrá formalizarse en los que las Condiciones están disponibles en esta página web.
    
                    </p>
                    <p>
                        <b>
                            2. 
                        </b>
                         
                        NUESTROS DATOS La venta de artículos a través de esta página web es realizada bajo la denominación RENE ALONSO. La información o datos personales que nos facilite sobre usted serán tratados con arreglo a lo establecido en las Políticas de Protección de Datos. Al hacer uso de esta página web usted consiente el tratamiento de dicha información y datos y declara que toda la información o datos que nos facilite son veraces y se corresponden con la realidad.
                    </p>

                    <p>
                        <b>
                            3. 
                        </b>
                         
                        USO DE NUESTRO SITIO WEB Al hacer uso de esta página web y realizar pedidos a través de la misma usted se compromete a:
                    </p>

                    <p>
                        <b>
                            I. 
                        </b>
                         
                        Hacer uso de esta página web únicamente para realizar consultas o pedidos legalmente válidos.
                    </p>

                    <p>
                        <b>
                            II. 
                        </b>
                         
                        No realizar ningún pedido falso o fraudulento. Si razonablemente se pudiera considerar que se ha hecho un pedido de esta índole estaremos autorizados a anularlo e informar a las autoridades pertinentes.
                    </p>

                    <p>
                        <b>
                            III. 
                        </b>
                         
                        Facilitarnos su dirección de correo electrónico, dirección postal y/u otros datos de contacto de forma veraz y exacta. Asimismo, consiente que podremos hacer uso de dicha información para ponernos en contacto con usted si es necesario (ver nuestra Política de Privacidad). Si no nos facilita usted toda la información que necesitamos, no podremos cursar su pedido. Al realizar un pedido a través de esta página web, usted declara ser mayor de 18 años y tener capacidad legal para celebrar contratos.
                    </p>

                    <p>
                        <b>
                            4. 
                        </b>
                         
                        DISPONIBILIDAD DEL SERVICIO Los artículos que se ofrecen a través de esta página web están únicamente disponibles para su envío dentro de la República Mexicana salvo aquellas áreas o zonas que por la dificultad de acceso, comunicaciones o consideraciones similares se justifique que dicha oferta no esté disponible.
                    </p>

                    <p>
                        <b>
                            5. 
                        </b>
                         
                        CÓMO SE FORMALIZA EL CONTRATO No existirá ningún contrato entre usted y nosotros en relación con ningún producto hasta que su pedido haya sido expresamente aceptado por nosotros. Si por alguna razón su pedido aún no se hubiera aceptado y ya se hubiese realizado algún cargo en su cuenta, el importe del mismo le será reintegrado en su totalidad. Para realizar un pedido, deberá seguir el procedimiento de compra online y hacer clic en "Autorizar pago". Tras esto, recibirá un correo electrónico acusando recibo de su pedido (la "Confirmación de Pedido"). Todos los pedidos están sujetos a nuestra aceptación, de la que será informado a través de un correo electrónico en el que le confirmaremos que el producto está siendo enviado (la "Confirmación de Envío"). El contrato para la compra de un producto entre usted y nosotros (el "Contrato") quedará formalizado únicamente cuando le enviemos la Confirmación de Envío. Serán objeto del Contrato únicamente aquellos productos relacionados en la Confirmación de Envío. No estaremos obligados a suministrarle ningún otro producto que pudiera haber sido objeto de pedido hasta que le confirmemos el envío del mismo en una Confirmación de Envío.
                    </p>

                    <p>
                        <b>
                            6. 
                        </b>
                         
                        DISPONIBILIDAD DE LOS PRODUCTOS Todos los pedidos de productos están sujetos a disponibilidad. Si por causas de fuerza mayor, o si se produjeran dificultades en cuanto al suministro de productos o si por excepción no quedan artículos en stock, nos reservamos el derecho de facilitarle información acerca de productos sustitutivos de calidad y valor igual o superior que usted podrá encargar. Si no desea hacer un pedido de esos productos sustitutivos, le reembolsaremos cualquier cantidad que pudiera usted haber abonado, reiterándole que siempre haremos nuestro mejor esfuerzo para que la página web siempre este actualizada.
                    </p>

                    <p>
                        <b>
                            7. 
                        </b>
                         
                        NEGATIVA A TRAMITAR UN PEDIDO Nos reservamos el derecho de retirar cualquier producto de esta página web en cualquier momento y de quitar o modificar cualquier material o contenido de la misma. Aunque haremos lo posible para tramitar siempre todos los pedidos, puede haber circunstancias excepcionales que nos obliguen a rechazar la tramitación de algún pedido después de haber enviado la Confirmación de Pedido, por lo que nos reservamos el derecho a hacerlo en cualquier momento.
                    </p>

                    <p>
                        <b>
                            8. 
                        </b>
                         
                        ENTREGA Sin perjuicio de lo establecido en la cláusula 6 anterior respecto de la disponibilidad de los productos y salvo que se produzcan circunstancias extraordinarias, intentaremos enviar el pedido consistente en los producto/s relacionados en cada Confirmación de Envío antes de la fecha de entrega que figura en la Confirmación de Envío en cuestión o bien, si no se especificase ninguna fecha de entrega, en el plazo estimado indicado al seleccionar el método de envío, el plazo máximo será de 10 días laborales; y solo como mera excepción el plazo máximo de entrega será de 30 días laborables a contar desde la fecha
                        de la Confirmación de Pedido. No obstante, podrían producirse retrasos por razones tales como la personalización de los productos, el acaecimiento de circunstancias imprevistas o la zona de entrega. Si por algún motivo no pudiésemos cumplir con la fecha de entrega, le informaremos de esta circunstancia y le daremos la opción de seguir adelante con la compra estableciendo una nueva fecha de entrega o bien anular el pedido con el reembolso total del precio pagado. Tenga en cuenta, en cualquier caso, que no realizamos entregas a domicilio los sábados ni los domingos. A efectos de las presentes Condiciones, se entenderá que se ha producido la "entrega" o que el pedido ha sido "entregado" en el momento en el que usted o un tercero indicado por usted adquiera la posesión material de los productos, lo que se acreditará mediante la firma de la recepción del pedido en la dirección de entrega convenida.
                    </p>

                    <p>
                        <b>
                            9. 
                        </b>
                         
                        IMPOSIBILIDAD DE ENTREGA Si nos resulta imposible efectuar la entrega de su pedido, su pedido será devuelto a nuestro almacén. Asimismo, le dejaremos una nota explicándole dónde se encuentra su pedido y cómo hacer para que le sea enviado de nuevo. Si no va a estar en el lugar de entrega a la hora convenida, le rogamos que se ponga en contacto con nosotros para convenir la entrega en otro día. En caso de que transcurridos 15 días desde que su pedido esté disponible para su entrega, el pedido no ha sido entregado por causa no imputable a nosotros, entenderemos que desea desistir del Contrato y lo consideraremos rescindido. Como consecuencia de la rescisión del Contrato, le devolveremos el precio pagado por tales productos lo antes posible y, en cualquier caso, en el plazo máximo de 30 días desde la fecha en que con arreglo a lo establecido en la presente Cláusula consideremos rescindido el Contrato. Por favor, tenga en cuenta que el transporte derivado de la rescisión del Contrato puede tener un coste adicional, por lo que estaremos autorizados a repercutirle los costes correspondientes.
                    </p>

                    <p>
                        <b>
                            10. 
                        </b>
                         
                        TRANSMISIÓN DEL RIESGO Y LA PROPIEDAD La propiedad y por ende los riesgos de los productos serán a su cargo a partir del momento de su entrega.
                    </p>

                    <p>
                        <b>
                            11. 
                        </b>
                         
                        PRECIO Y PAGO Los precios de la página web incluyen IVA, pero excluyen los gastos de envío, que se añadirán al importe total debido según se expone en nuestra Guía de Compra - Envío. Los precios pueden cambiar en cualquier momento, pero los posibles cambios no afectarán a los pedidos con respecto a los que ya le hayamos enviado una Confirmación de Pedido. Una vez que haya seleccionado todos los artículos que desea comprar, estos se habrán añadido a su cesta y el paso siguiente será tramitar el pedido y efectuar el pago. Para ello, deberá seguir los pasos del proceso de compra, rellenando o comprobando la información que en cada paso se le solicita. Asimismo, durante el proceso de compra, antes de realizar el pago, podrá modificar los datos de su pedido. Dispone de una descripción detallada del proceso de compra en la Guía de Compra. Además, si es usted un usuario registrado, dispone de un detalle de todos los pedidos realizados en el apartado Mi Cuenta. Podrá utilizar como medio de pago las tarjetas Visa, MasterCard, American Express, Affinity Card Banamex y PayPal. Para minimizar el riesgo de acceso no autorizado, se codificarán los datos de su tarjeta de crédito. Una vez que recibamos su pedido, haremos una pre-autorización en su tarjeta para asegurar que existen fondos suficientes para completar la transacción. El cargo en su tarjeta se hará en
                        el momento que su pedido salga de nuestros almacenes. Si su medio de pago es PayPal, el cargo se hará en el momento que le confirmemos el pedido. Al hacer clic en "Autorizar Pago" usted está confirmando que la tarjeta de crédito es suya o que es el legítimo poseedor de la tarjeta. Las tarjetas de crédito estarán sujetas a comprobaciones y autorizaciones por parte de la entidad emisora de las mismas, pero si dicha entidad no autorizase el pago, no nos haremos responsables por ningún retraso o falta de entrega y no podremos formalizar ningún Contrato con usted.
                    </p>

                    <p>
                        <b>
                            12. 
                        </b>
                         
                        COMPRA COMO INVITADO Esta página web también permite la compra a través de la funcionalidad de compra como invitado. En esta modalidad de compra, se le solicitarán únicamente los datos imprescindibles para poder tramitar su pedido. Una vez finalizado el proceso de compra, se le ofrecerá la posibilidad de registrarse como usuario o continuar como usuario no registrado.
                    </p>

                    <p>
                        <b>
                            13. 
                        </b>
                         
                        IMPUESTO AL VALOR AGREGADO De conformidad con la Ley del Impuesto al Valor Agregado, la enajenación de mercancías en México se considera una actividad gravada para fines de este impuesto. Se entiende que una enajenación se realiza en México cuando en el país se encuentra el bien cuando se efectúa su envió al adquirente y cuando, no habiendo envío del mismo, en el país se realiza la entrega material del bien por parte del vendedor. Considerando lo anterior, los pedidos que se realicen estarán sujetos a la tasa general de impuesto al valor agregado que actualmente es del 16%.
                    </p>

                    <p>
                        <b>
                            I. 
                        </b>
                         
                        Artículos personalizados.
                    </p>

                    <p>
                        <b>
                            II. 
                        </b>
                         
                        Artículos sin su envoltorio original.
                    </p>

                    <p>
                        <b>
                            II. 
                        </b>
                         
                        Artículos precintados por razones de higiene que hayan sido desprecintados tras la entrega. <br>
                        Su derecho a desistirse de la compra será de aplicación exclusivamente a aquellos artículos que se devuelvan en las mismas condiciones en que usted los recibió. No se hará ningún reembolso si el artículo ha sido usado más allá de la mera apertura del mismo, de artículos que no estén en las mismas condiciones en las que se entregaron o que hayan sufrido algún daño, por lo que deberá ser cuidadoso con el/los artículo/s mientras estén en su posesión. Por favor,
                        devuelva el artículo usando o incluyendo todos sus envoltorios originales, las instrucciones y demás documentos que en su caso lo acompañen. En todo caso, deberá entregar junto con el producto a devolver el ticket electrónico que habrá recibido adjunto a la Confirmación de Envío, Devolución del producto Como parte del ejercicio del derecho deberá proceder a la devolución del producto podrá solicitar en nuestra web la devolución a través de un mensajero/Courier, sin ninguna demora indebida. La devolución de los bienes habrá de producirse antes de que haya concluido el plazo otorgado para el ejercicio del derecho de desistimiento indicado en:
                        • Devoluciones RENE ALONSO o al teléfono de atención al cliente registrado. La opción anterior no supondrá un costo adicional para usted. En caso de que no desee devolver los productos a través de la opción gratuita disponible, usted será responsable de los costes de devolución. Por favor, tenga en cuenta que si usted decide devolvernos los artículos a portes debidos estaremos autorizados a cargarle los gastos en que podamos incurrir. Usted estará obligado a entregarnos la mercancía, para que la recibamos dentro de los 20 días posteriores a la Confirmación del envío”.
                        Valoración del estado del producto y, en su caso, reembolso En caso de que usted haya optado por la devolución del(os) artículo(s), procederemos a examinar el estado del producto para constatar que el mismo se devuelve en las mismas condiciones en que usted lo recibió. Tras examinar el artículo le comunicaremos si tiene derecho al reembolso de las cantidades pagadas. El reembolso se efectuará sin ninguna demora indebida y, en todo caso, a más tardar 20 días naturales a partir de la fecha en la que le enviemos un correo electrónico confirmando que procede el reembolso. Procederemos a efectuar dicho reembolso utilizando el mismo medio de pago empleado por usted para la transacción inicial. No incurrirá en ningún gasto como consecuencia del reembolso, salvo que no hubiera procedido a la devolución conforme a alguna de las opciones ofrecidas en el apartado anterior.
                        Desistimiento de la compra por defectos o vicios ocultos. Contenido del Derecho Además del derecho de desistimiento otorgado en el inciso anterior, RENE ALONSO en su carácter de asociante en el contrato de asociación en participación denominado otorga a los consumidores un derecho de desistimiento por defectos o vicios ocultos en los términos y según el procedimiento que en este apartado se señalan.
                        Este derecho supone nuestro compromiso en aceptar el cambio o la devolución de sus productos dentro de los primeros 60 días contados desde la fecha en que usted o un tercero por usted indicado, distinto del transportista, adquirió la posesión material de los bienes o en caso de que los bienes que componen su pedido se entreguen por separado, a los 60 días naturales del día que usted o un tercero por usted indicado, distinto del transportista, adquirió la posesión material del último de esos bienes, cuando dichos bienes presenten defectos o vicios ocultos que los hagan impropios para los usos a los que habitualmente se destinen o disminuyan su calidad o la posibilidad de uso o no ofrezca la seguridad que dada su naturaleza normalmente se espera de ella y de su uso razonable. Su derecho a desistir del Contrato será

                        de aplicación exclusivamente a aquellos productos que se devuelvan en las mismas condiciones en que usted los recibió salvo por el defecto o vicio oculto que presente.
                        <br>
                        <br>
                        Por favor, devuelva el artículo usando o incluyendo todos sus envoltorios originales, las instrucciones y demás documentos que en su caso lo acompañen. En todo caso, deberá entregar junto con el producto a devolver el ticket electrónico que habrá recibido adjunto a la Confirmación de Envío, que también lo puede encontrar en su cuenta de la página web o su correo electrónico. Ejercicio del Derecho En los casos en que usted considere que el producto no se ajusta a lo estipulado en el Contrato por presentar defectos o vicios ocultos, deberá ponerse en contacto con nosotros de forma inmediata y, a más tardar, dentro del período de 60 días mencionado anteriormente, por medio de nuestro formulario de contacto facilitando los datos del producto, así como del daño o vicio oculto que sufre.
                        Devolución del producto Como parte del ejercicio del derecho deberá proceder a la devolución del producto. Podrá realizar las devoluciones en La devolución deberá producirse lo antes posible y, a más tardar, en los diez días siguientes a la finalización del período de sesenta días mencionado en el apartado anterior:

                    </p>

                    <p>
                        <b>
                            • Devoluciones en el sitio web RENE ALONSO.
                        </b>
                         
                        Valoración del estado del producto y, en su caso, reembolso o sustitución Procederemos a examinar el estado del producto y la existencia del defecto o vicio oculto. Tras examinar el artículo le comunicaremos si tiene derecho al reembolso de las cantidades pagadas. El reembolso se efectuará lo antes posible y, en cualquier caso, dentro del plazo de 30 días desde la fecha en la que le enviemos un correo electrónico confirmando que procede el reembolso o la sustitución del artículo no conforme. El reembolso se efectuará siempre en el mismo medio de pago que usted utilizó para pagar la compra.
                        Las cantidades pagadas por aquellos productos que sean devueltos a causa de alguna tara o defecto, cuando realmente exista, le serán reembolsadas íntegramente, sin incluir los gastos de entrega incurridos para entregarle el artículo. Si tienen alguna duda, puede ponerse en contacto con nosotros a través de nuestro formulario de contacto o llamando al teléfono +52 999 442 5431.
                        RESPONSABILIDAD Y EXONERACIÓN DE RESPONSABILIDAD Salvo que expresamente se disponga lo contrario en las presentes Condiciones, nuestra responsabilidad en relación con cualquier producto adquirido en nuestra página web estará limitada estrictamente al precio de compra de dicho producto. No obstante, lo anterior, nuestra responsabilidad no está excluida ni limitada en cualquier asunto en el que fuese ilegal o ilícito que excluyéramos, limitásemos o intentáramos excluir o limitar nuestra responsabilidad. Sin perjuicio de lo dispuesto en el párrafo anterior y en la medida en que legalmente se permita, y salvo que en las presentes Condiciones se disponga lo contrario, no aceptaremos ninguna responsabilidad por las siguientes pérdidas, con independencia de su origen:

                        <ol>
                            <li>pérdidas de ingresos o ventas:</li>
                            <li>pérdida de negocio</li>
                            <li>lucro cesante o pérdida de contratos</li>
                            <li>pérdida de ahorros previstos</li>
                            <li>pérdida de datos.</li>
                            <li>pérdida de tiempo de gestión o de horario de oficina Debido a la naturaleza abierta de esta página web y a la posibilidad de que se produzcan errores en el almacenaje y transmisión de información digital</li>
                            <li>no garantizamos la precisión y seguridad de la información transmitida u obtenida por medio de esta página web a no ser que se establezca expresamente lo contrario en la misma.</li>
                        </ol> <br>

                        Todas las descripciones de productos, informaciones y materiales que figuran en esta página web se suministran "como cuerpo cierto " y sin garantías expresas o implícitas sobre los mismos salvo las establecidas legalmente. En este sentido, si usted contrata como consumidor y usuario, estamos obligados a entregarle artículos que sean conformes con el Contrato, respondiendo frente a usted de cualquier falta de conformidad que exista en el momento de la entrega del producto. Se entiende que los productos son conformes con el Contrato siempre que:

                        <ol>
                           <li>Se ajusten a la descripción realizada por nosotros y posean las cualidades que hayamos presentado en esta página web.</li>
                           <li>Sean aptos para los usos a que ordinariamente se destinan los productos del mismo tipo.</li>
                           <li>Presenten la calidad y prestaciones habituales de un producto del mismo tipo que sean fundadamente esperables. Con el alcance que permita la ley, excluimos todas las garantías, salvo aquéllas que no puedan ser legítimamente excluidas frente a los consumidores y usuarios.</li>
                           <li>Los productos que vendemos, especialmente los productos de artesanía, a menudo pueden presentar las características de los materiales naturales que se utilizan en su fabricación. Estas características, tales como variación en las vetas, en la textura, en los nudos y en el color, no tendrán la consideración de defectos o taras.</li>
                           <li>Al contrario, debería contarse con su presencia y apreciarlas.</li>
                           <li>Únicamente seleccionamos los productos de la máxima calidad, pero las características naturales son inevitables y deben ser aceptadas como parte de
                            la apariencia individual del producto.</li>
                           <li>Lo dispuesto en la presente cláusula no afectará a sus derechos como
                            consumidor y usuario, ni a su derecho a desistir del Contrato.</li> 
                        </ol>



                    </p>

                    <p>
                        <b>
                            18. 
                        </b>
                        VIRUS, PIRATERÍA Y OTROS ATAQUES INFORMÁTICOS Usted no debe realizar un uso indebido de esta página web mediante la introducción intencionada en la misma de virus, troyanos, gusanos, bombas lógicas o cualquier otro programa o material tecnológicamente perjudicial o dañino. Usted no tratará de tener acceso no autorizado a esta página web, al servidor en que dicha página se encuentra alojada o a cualquier servidor, ordenador o base de datos relacionada con nuestra página web. Usted se compromete a no atacar esta página web a través de un ataque de denegación de servicio o de un ataque de denegación de servicio distribuido. El incumplimiento de esta cláusula podría llevar aparejada la comisión de infracciones tipificadas por la normativa aplicable. Informaremos de cualquier incumplimiento de dicha normativa a las autoridades competentes y cooperaremos con ellas para descubrir la identidad del atacante. Asimismo, en caso de incumplimiento de la presente cláusula, dejará inmediatamente de estar autorizado a usar esta página web. No seremos responsables de cualquier daño o pérdida resultante de un ataque de denegación de servicio, virus o cualquier otro programa o material tecnológicamente perjudicial o dañino que pueda afectar a su ordenador, equipo informático, datos o materiales como consecuencia del uso de esta página web o de la descarga de contenidos de la misma o a los que la misma redireccione.

                    </p>

                    <p>
                        <b>
                            19. 
                        </b>
                        LINKS DESDE NUESTRA PÁGINA WEB En el caso de que nuestra página web contenga links a otras páginas web y materiales de terceros, dichos links se facilitan únicamente a efectos informativos, sin que nosotros tengamos control alguno sobre el contenido de dichas páginas web o materiales. Por lo tanto, no aceptamos responsabilidad alguna por cualquier daño o pérdida derivados de su uso.
                    </p>

                    <p>
                        <b>
                            20. 
                        </b>
                        COMUNICACIONES POR ESCRITO La normativa aplicable exige que parte de la información o comunicaciones que le enviemos sean por escrito. Mediante el uso de esta página web, usted acepta que la mayor parte de dichas comunicaciones con nosotros sean electrónicas. Nos pondremos en contacto con usted por correo electrónico o SMS o le facilitaremos información colgando avisos en esta página web. A efectos contractuales, usted consiente en usar este medio electrónico de comunicación y reconoce que todo contrato, notificación, información y demás comunicaciones que le enviemos de forma electrónica cumplen con los requisitos legales de ser por escrito. Esta condición no afectará a sus derechos reconocidos por ley.
                    </p>

                    <p>
                        <b>
                            21. 
                        </b>
                        .NOTIFICACIONES Las notificaciones que usted nos envíe deberán enviarse preferiblemente a través de nuestro formulario de contacto. Con arreglo a lo
                        dispuesto en la cláusula 20 anterior y salvo que se estipule lo contrario, le podremos enviar comunicaciones bien al correo electrónico o bien a la dirección postal facilitada por usted a la hora de realizar un pedido. Se entenderá que las notificaciones han sido recibidas y han sido correctamente hechas en el mismo instante en que se cuelguen en nuestra página web, 24 horas después de haberse enviado un correo electrónico, o tres días después de la fecha de franqueo de cualquier carta. Para probar que la notificación ha sido hecha, será suficiente con probar, en el caso de una carta, que tenía la dirección correcta, estaba correctamente sellada y que fue debidamente entregada en correos o en un buzón y, en el caso de un correo electrónico, que el mismo fue enviado a la dirección de correo electrónico especificada por el consumidor.

                    </p>

                    <p>
                        <b>
                            22. 
                        </b>
                        CESIÓN DE DERECHOS Y OBLIGACIONES El Contrato es vinculante tanto para usted como para nosotros, así como para nuestros respectivos sucesores, cesionarios y causahabientes. Usted no podrá transmitir, ceder, gravar o de cualquier otro modo transferir un Contrato o alguno de los derechos u obligaciones derivados del mismo, sin haber obtenido nuestro consentimiento previo por escrito. RENE ALONSO., en su carácter de asociante en el contrato de asociación en participación denominado RENE ALONSO podrá transmitir, ceder, gravar, subcontratar o de cualquier otro modo transferir un Contrato o alguno de los derechos u obligaciones derivados del mismo, en cualquier momento durante la vigencia del Contrato. Para evitar cualquier duda, dichas transmisiones, cesiones, gravámenes u otras transferencias no afectarán los derechos que, en su caso, usted, como consumidor, tiene reconocidos por ley ni anularán, reducirán o limitarán de cualquier otra forma las garantías, tanto expresas como tácitas, que le hubiésemos podido otorgar.

                    </p>

                    <p>
                        <b>
                            23. 
                        </b>
                        ACONTECIMIENTOS FUERA DE NUESTRO CONTROL No seremos responsables por ningún incumplimiento o retraso en el cumplimiento de alguna de las obligaciones que asumamos al amparo de un Contrato, cuya causa se deba a acontecimientos que están fuera de nuestro control razonable ("Causa de Caso Fortuito o Fuerza Mayor"). Las Causas de Caso Fortuito o Fuerza Mayor incluirán cualquier acto, acontecimiento, falta de ejercicio, omisión o accidente que esté fuera de nuestro control razonable y entre otros, los siguientes:

                        <ol>
                            <li>Huelgas, cierres patronales u otras medidas reivindicativas.</li>
                            <li>Conmoción civil, revuelta, invasión, ataque terrorista o amenaza terrorista, guerra (declarada o no) o amenaza o preparativos de guerra.
                            </li>
                            <li>Incendio, explosión, tormenta, inundación, terremoto, hundimiento, epidemia o cualquier otro desastre natural.</li>
                            <li>Imposibilidad de uso de trenes, barcos, aviones, transportes de motor u otros medios de transporte, públicos o privados.</li>
                            <li>Imposibilidad de utilizar sistemas públicos o privados de telecomunicaciones.
                            </li>
                            <li>Actos, decretos, legislación, normativa o restricciones de cualquier gobierno o autoridad pública.</li>
                            <li> Huelga, fallos o accidentes de transporte marítimo o fluvial, postal o cualquier otro tipo de transporte.
                            </li>
                            
                        </ol> <br>
                        Se entenderá que nuestras obligaciones derivadas de Contratos quedarán suspendidas durante el período en que la Causa de Caso Fortuito o Fuerza Mayor continúe, y dispondremos de una ampliación en el plazo para cumplir dichas obligaciones por un periodo de tiempo igual al que dure la Causa de Caso Fortuito o Fuerza Mayor. Pondremos todos los medios razonables para que finalice la Causa de Caso Fortuito o Fuerza Mayor o para encontrar una solución que nos permita cumplir nuestras obligaciones en virtud del Contrato a pesar de la Causa de Caso Fortuito o Fuerza Mayor.
                    </p>

                    <p>
                        <b>
                            24. 
                        </b>
                        RENUNCIA La falta de requerimiento por nuestra parte del cumplimiento estricto por su parte de alguna de las obligaciones asumidas por usted en virtud de un Contrato o de las presentes Condiciones o la falta de ejercicio por nuestra parte de los derechos o acciones que nos pudiesen corresponder en virtud de dicho Contrato o de las Condiciones, no supondrá renuncia ni limitación alguna en relación con dichos derechos o acciones ni le exonerará a usted de cumplir con tales obligaciones. <br>
                        Ninguna renuncia por nuestra parte a un derecho o acción concreto supondrá una renuncia a otros derechos o acciones derivados del Contrato o de las Condiciones. Ninguna renuncia por nuestra parte a alguna de las presentes Condiciones o a los derechos o acciones derivados del Contrato surtirá efecto, a no ser que se establezca expresamente que es una renuncia y se formalice y se le comunique a usted por escrito de conformidad con lo dispuesto en el apartado de Notificaciones anterior.
                    </p>

                    <p>
                        <b>
                            25. 
                        </b>
                        NULIDAD PARCIAL Si alguna de las presentes Condiciones o alguna disposición de un Contrato fuese declaradas nulas y sin efecto por resolución firme dictada por autoridad competente, los restantes términos y condiciones permanecerán en vigor, sin que queden afectados por dicha declaración de nulidad.
                    </p>

                    <p>
                        <b>
                            26.
                        </b>
                        ACUERDO COMPLETO Las presentes Condiciones y todo documento a que se haga referencia expresa en las mismas constituyen el acuerdo íntegro existente entre usted y RENE ALONSLO en su carácter de asociante en el contrato de asociación en participación denominado RENE ALONSO CONTRATO en relación con el objeto de las mismas y sustituyen a cualquier otro pacto, acuerdo o promesa anterior convenida entre usted y RENE ALONSO., en su carácter de asociante en el contrato de asociación en participación denominado RENE ALONSO CONTRATO verbalmente o por escrito. Usted y RENE ALONSO., en su carácter de asociante en el contrato de asociación en
                        participación denominado RENE ALONSO CONTRATO reconocemos haber consentido la celebración del Contrato sin haber confiado en ninguna declaración o promesa hecha por la otra parte o que pudiera inferirse de cualquier declaración o escrito en las negociaciones entabladas por los dos antes de dicho Contrato, salvo aquello que figura expresamente mencionado en las presentes Condiciones. Ni usted ni RENE ALONSO., en su carácter de asociante en el contrato de asociación en participación denominado RENE ALONSO CONTRATO dispondremos de acción frente a cualquier declaración incierta realizada por la otra parte, verbal o escrita, con anterioridad a la fecha del Contrato (salvo que se hubiera hecho tal declaración incierta de forma fraudulenta) y la única acción de que dispondrá la otra parte será por incumplimiento de contrato de conformidad con lo dispuesto en las presentes Condiciones.

                    </p>

                    <p>
                        <b>
                            27. 
                        </b>
                        NUESTRO DERECHO A MODIFICAR ESTAS CONDICIONES Tenemos derecho de revisar y modificar los presentes Condiciones en cualquier momento. Usted estará sujeto a las políticas y Condiciones vigentes en el momento en que use la presente página web o efectúe cada pedido, salvo que por ley o decisión de organismos gubernamentales debamos hacer cambios con carácter retroactivo en dichas políticas, Condiciones o Declaración de Privacidad, en cuyo caso, los posibles cambios afectarán también a los pedidos que usted hubiera hecho previamente.

                    </p>

                    <p>
                        <b>
                            28. 
                        </b>
                        LEGISLACIÓN APLICABLE Y JURISDICCIÓN El uso de nuestra página web y los contratos de compra de productos a través dicha página web se regirán por la legislación mexicana. Cualquier controversia que surja o guarde relación con el uso de la página web o con dichos contratos será sometida a la jurisdicción de los juzgados y tribunales de la Ciudad de México, renunciando expresamente a cualquier otro fuero que pudiere corresponderles en razón de sus domicilios presentes o futuros o por cualesquiera otras causas. Si usted está contratando como consumidor, nada en la presente cláusula afectará a los derechos que como tal le reconoce la legislación vigente.
                    </p>
                    <p>
                        <b>
                            29. 
                        </b>
                        COMENTARIOS Y SUGERENCIAS Sus comentarios y sugerencias serán bien recibidos. Le rogamos que nos envíe tales comentarios y sugerencias a través de nuestras vías de contacto o de la dirección indicada en la cláusula 2 de las presentes Condiciones. Así mismo podrá enviar sus quejas y reclamaciones a través de los formularios de esta página, nuestro Chat o a nuestro Call Center, donde con gusto le atenderemos. Para quejas y reclamaciones favor de realizarlos a través de los formularios de esta página, nuestro Chat o a nuestro Call Center que serán atendidas por nuestro servicio de atención al cliente en el plazo más breve posible y en todo caso legalmente establecido.
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
