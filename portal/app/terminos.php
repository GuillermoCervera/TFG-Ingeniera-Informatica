<?php
$conn=mysqli_connect("localhost", "root", "", "portal");

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include ("dbconn.php");
?>

<?php require_once 'templates/header.php';?>
	<div class="content">
     	<div class="container">
            <br><br>
            <div class="row">
                <div class="col-md-9" name="maincontent" id="maincontent">
                    <div id="exercise" name="exercise" class="panel panel-info">
                        <div class="panel-heading">
                            <h5>Términos y Condiciones de Uso de Portal del Empleado</h5>
                        </div>
                            <div class="panel-body">
                                <ul class="bottom-menu-iconic-list">
                                    <a href="inicio.php"><strong>Inicio</a> > <a href="peticiones.php">Peticiones</strong></a> > <a href="#">Términos y Condiciones de Uso</a>
                                </ul>
                                <br>
                                <div>
                                    <p>
                                    1. ACEPTACIÓN 
                                    En el presente documento (en adelante, el “Contrato”) se establecen los términos y condiciones de Robert Half Internacional Empresa de Servicios Transitorios Limitada, con domicilio en Avenida Constitución 1, Valencia, que serán de aplicación al acceso y uso por parte del Usuario de esta página web (el  “el Portal del Empleado”). Les rogamos lean atentamente el presente Contrato. 
                                    Al acceder, consultar o utilizar la Portal del Empleado, los Usuarios (“Vd.”, “usted”, “Usuario”, o “usuario”) aceptan cumplir los términos y condiciones establecidos en este Contrato. En caso de que usted no acepte quedar vinculado por los presentes términos y condiciones, no podrá acceder a, ni utilizar, la Portal del Empleado. 
                                    Client y sus respectivas empresas afiliadas (en conjunto, “RH”) se reservan el derecho de actualizar el presente Contrato siempre que lo consideren oportuno. En consecuencia, recomendamos al Usuario revisar periódicamente las modificaciones efectuadas al Contrato.
                                    La presente Portal del Empleado está dirigida exclusivamente a personas residentes en España. Los Usuarios residentes o domiciliados en otro país que deseen acceder y utilizar la Portal del Empleado, lo harán bajo su propio riesgo y responsabilidad, por lo que deberán asegurarse de que dichos accesos y/o usos cumplen con la legislación aplicable en su país.
                                    </p>
                                    <p>
                                    2. REQUISITOS RELATIVOS AL USUARIO
                                    el Portal del Empleadoo y los servicios relacionados con el mismo se ofrecen a los Usuarios que tengan capacidad legal para otorgar contratos legalmente vinculantes según la legislación aplicable. 
                                    Los menores no están autorizados para utilizar el Portal del Empleadoo. Si usted es menor de edad, por favor, no utilice esta web. 
                                    </p>
                                    <p>
                                    3. LICENCIA 
                                    En este acto, RH otorga al Usuario una licencia limitada, no exclusiva, intransferible, no susceptible de cesión y revocable; para consultar y descargar, de forma temporal, una copia del contenido ofrecido en el Portal del Empleado, únicamente para uso personal del Usuario o dentro de su empresa, y nunca con fines comerciales. 
                                    Todo el material mostrado u ofrecido en el Portal del Empleadoo, entre otros ejemplos, el material gráfico, los documentos, textos, imágenes, sonido, video, audio, las ilustraciones, el software y el código HTML (en conjunto, el “Contenido”), es de  exclusiva propiedad de RH o de las empresas que facilitan dicho material. 
                                    El Contenido está protegido por las leyes de copyright chilenas, estadounidenses e internacionales, así como por las demás leyes, reglamentos y normas aplicables a los derechos de propiedad intelectual. Salvo disposición expresa en contrario en el presente contrato, y/o salvo que por imperativo legal ello esté expresamente permitido por leyes derogatorias de las actualmente vigentes, el Usuario no podrá (i) utilizar, copiar, modificar, mostrar, eliminar, distribuir, descargar, almacenar, reproducir, transmitir, publicar, vender, revender, adaptar, invertir el proceso de creación o crear productos derivados a partir de, el Contenido. Tampoco podrá (ii) utilizar el Contenido en otras páginas Web o en cualquier medio de comunicación como, por ejemplo, en un entorno de red, sin la previa autorización por escrito en este sentido de RH.
                                    Todas las marcas comerciales, las marcas de servicio y los logos (en adelante, las “Marcas”) mostrados en el Portal del Empleado son propiedad exclusiva de RH y de sus respectivos propietarios. 
                                    El Usuario no podrá utilizar las Marcas en modo alguno sin la previa autorización por escrito para ello de RH y los respectivos propietarios.
                                    </p>
                                    <p>
                                    4. INFORMACIÓN FACILITADA POR EL USUARIO 
                                    el Portal del Empleado ofrece al Usuario un foro de obtención de empleo e información profesional. Al facilitar o introducir la información en el Portal del Empleado (“Información del Usuario”), el Usuario otorga a RH licencia y derecho permanente, no exclusivo, irrevocable, libre de royalties, durante el tiempo máximo permitido por la legislación aplicable, pero no le impone obligación de, utilizar, copiar, modificar, mostrar, distribuir, descargar, almacenar, reproducir, transmitir, publicar, vender, revender, adaptar ni crear productos derivados  en todo o en parte a partir de, la Información del Usuario, en ningún modo o manera. El Usuario reconoce y acepta que RH es solamente un foro pasivo a través del cual los usuarios pueden conseguir empleo o informarse a nivel profesional. RH no comprueba ni controla la Información del Usuario. En consecuencia, RH no asume garantía alguna en cuanto a la fiabilidad, precisión, integridad, validez o veracidad de la Información remitida por los usuarios. 
                                    RH se reserva el derecho de, a su libre JUICIO, eliminar, retirar, negarse a reflejar o bloquear toda Información del Usuario que RH considere como inaceptable. En caso de que RH reciba alguna notificación sobre la inaceptabilidad de determinada información facilitada por los usuarios, RH podrá, con total discrecionalidad, investigar dicha información.
                                    El Usuario asume y acepta que RH podrá conservar copia de la Información del Usuario, y revelar dicha información a terceros si lo considera necesario para:
                                    (i) proteger la integridad de el Portal del Empleado;
                                    (ii) proteger los derechos de RH;
                                    (iii) cumplir una orden judicial;
                                    (iv) cumplir cualquier trámite legal;
                                    (v) hacer valer los derechos y acciones que asisten a RH a tenor de este Contrato; y
                                    (vi) satisfacer cualquier petición relativa a la infracción de derechos de terceros.
                                    </p>
                                    <p>
                                    5. PROHIBICIÓN GENERAL 
                                    Al acceder a y utilizar el Portal del Empleado, el Usuario se compromete a NO:
                                    (a) incumplir todas las leyes, reglamentos y normas aplicables a nivel local, estatal, provincial, nacional (Chile), así como cualquier otra legislación aplicable como las leyes contra la discriminación laboral o las leyes por la igualdad de oportunidades en el empleo, cuando proceda;
                                    (b) infringir los derechos de propiedad intelectual y de privacidad, entre otros, los derechos de patente (copyright), los derechos sobre la base de datos, las marcas registradas o el know how de terceros;
                                    (c) descargar, enviar, transmitir o almacenar material que:
                                    •    sea ilegal, ofensivo, difamatorio, fraudulento, engañoso, que induzca a error, dañino, amenazador, hostil, obsceno o censurable;
                                    •    infrinja las obligaciones contractuales o de confidencialidad del Usuario;
                                    •    perjudique o interfiera en las aplicaciones normales de el Portal del Empleado, como el envío o la transmisión de virus, gusanos o troyanos, el envío continuado de material repetido o el envío de archivos desacostumbradamente grandes; o
                                    •    que no esté permitido por RH, como, por ejemplo, material publicitario no autorizado, material promocional no solicitado, “correo basura”, “spams”, “cartas en cadena”, mensajes de venta directa piramidal, franquicias, material de distribución, de asociación a un club, contratos de venta o cualquier otro material inaceptable;
                                    (d) vulnerar los derechos personales y de privacidad de terceros abusando del Contenido, como, por ejemplo, acosando o molestando continuadamente a dichas personas enviándoles correos electrónicos no solicitados, o recabando información de carácter personal;
                                    (e) contravenir, o intentar contravenir, las medidas de seguridad de el Portal del Empleado;
                                    (f) utilizar cualquier aparato, procedimiento o mecanismo como, por ejemplo, spiders y robots de rastreo, para localizar, rescatar, buscar, o acceder a el Portal del Empleado o al Contenido, sin el previo consentimiento por escrito de parte de RH;
                                    (g) acceder o intentar acceder a la cuenta o al login de las terceras personas o empresas indicadas en el Portal del Empleado;
                                    (h) copiar, modificar, reproducir, eliminar, distribuir, descargar, almacenar, transmitir, vender, revender, publicar, invertir el proceso de creación o crear productos derivados a partir del Contenido, excepto en lo que concierne al material remitido por el propio Usuario y que es de su propiedad, o si así lo autorizan las leyes de propiedad intelectual aplicables;
                                    (i) enviar o facilitar información incorrecta, falsa o incompleta, en relación con el currículum vitae, los datos biográficos, la fecha en que empezó a trabajar o el perfil de la empresa del Usuario;
                                    (j) hacerse pasar por otra persona o empresa;
                                    (k) utilizar el Portal del Empleado de forma no autorizada o para alguna actividad delictiva;
                                    (l) falsificar la información de cabecera en el correo electrónico; o
                                    (m) falsear los datos sobre sí mismo, sobre su asociación con terceros o sobre su empresa.
                                    </p>
                                    <p>
                                    6. UTILIZACIÓN DEL SITIO Y OBLIGACIONES CONCRETAS 
                                    Además de las obligaciones generales señaladas en el Artículo 5, el Usuario deberá:
                                    (a) utilizar el Portal del Empleado únicamente para los fines legalmente permitidos de buscar empleo y recabar información profesional;
                                    (b) facilitar y mantener los datos personales que conforman la Información del Usuario de forma completa, correcta, actualizada y veraz;
                                    (c) enviar solamente material sobre el que el Usuario tenga los correspondientes derechos o licencia para hacerlo;
                                    (d) utilizar su propio criterio, precaución y sentido común al gestionar las oportunidades de empleo y la información  conseguida a través de el Portal del Empleado; y
                                    (e) asumir el riesgo de confiar en el contenido, o utilizar la información, facilitados por terceros.
                                    </p>
                                    <p>
                                    7. CUENTA Y CONTRASEÑA 
                                    Cuando el Usuario utiliza el Portal del Empleado, puede optar por abrir una cuenta en el Sitio. En ese caso, el Usuario recibirá el número de cuenta virtual y la contraseña inicial que le correspondan. Es responsabilidad exclusiva del Usuario:
                                    (a) mantener la confidencialidad de dichos números de cuenta virtual y contraseña;
                                    (b) actualizar y comprobar frecuentemente su contraseña; y
                                    (c) notificar inmediatamente a RH, si tiene conocimiento del uso no autorizado de su cuenta o de cualquier vulneración de las medidas de seguridad.
                                    </p>
                                    <p>
                                    8. EMPLEO 
                                    El Usuario asume y acepta que RH:
                                    (a) no garantiza que el Usuario reciba efectivamente una oferta de empleo a través de el Portal del Empleado;
                                    (b) no se responsabiliza de las ofertas de empleo, la comprobación de dichas ofertas, las decisiones sobre contratación que adopten y los trabajos que oferten terceras personas o empresas;
                                    (c) no garantiza la exactitud, integridad, validez o vigencia de la información incluida en la Web por terceras personas o empresas;
                                    (d) aunque RH revisa el material de terceros y solamente permite la inclusión del material que, a su leal saber y entender, no infringe la legislación aplicable, no asumirá responsabilidad alguna por el material enviado por terceros, como, por ejemplo, la información relativa a la creación de puestos de trabajo en una empresa o la incluida en las listas de empleo; y
                                    (e) no es ni una empresa que contrata al Usuario ni existe contrato de agencia alguno. El Usuario deberá usar su buen juicio, precaución y sentido común a la hora de evaluar las empresas que puedan contratarle y la información facilitada por terceros.
                                    </p>
                                    <p>
                                    9. VÍNCULOS A PÁGINAS WEB DE TERCEROS
                                    el Portal del Empleado puede tener vínculos, como hipervínculos o enlaces, que indican el acceso a páginas Web de terceros (los “Sitios Relacionados”). Aunque RH revisa el material de terceros y solamente permite la inclusión de los Sitios Relacionados que, a su leal saber y entender, no infringen la legislación aplicable, RH no puede controlar ni realizar un seguimiento de los Sitios Relacionados y, en consecuencia, no asumirá responsabilidad alguna en cuanto a la exactitud, seguridad o fiabilidad del material, información o contenido incluido en dichos Sitios Relacionados. 
                                    La inclusión de los Sitios Relacionados en el Portal del Empleado no implica que haya relación o asociación alguna entre RH y el propietario de los Sitios Relacionados, ni la aprobación o promoción por parte de RH de dichos Sitios Relacionados. RH incluye los Sitios Relacionados solamente para comodidad del Usuario. Este es el único responsable del acceso a los Sitios Relacionados. 
                                    El Usuario deberá utilizar su propio buen criterio, precaución y sentido común a la hora desusar los Sitios Relacionados y, para ello, le recomendamos revisar el condicionado de uso y los términos que sobre privacidad rigen en dichos Sitios Relacionados. RH se reserva el derecho de eliminar de su Portal todos los Sitios Relacionados de los que tenga conocimiento real que están infringiendo derechos de terceros y/o cuyo contenido vulnere la legislación aplicable, o si así se lo exige una orden judicial o una ordenanza administrativa.
                                    Los vínculos a nuestra página Web no están permitidos sin la expresa autorización, previa y por escrito, de RH. El Usuario no podrá, ni solo ni en colaboración con otras personas, ampliar, modificar, sustituir, enmendar o limitar, en todo o en parte, la información ofrecida en nuestra página Web ni las aplicaciones funcionales de la misma. Además, el Usuario no podrá, ni solo ni en colaboración con otras personas, crear o instalar vínculos desde su propia página Web o desde webs de terceros, a la presente página Web (ya sea mediante vínculos de hipertexto, deep-linking, enmarcado, mediante códigos o de otra forma), ni en todo ni en parte, sin el previo consentimiento por escrito en este sentido de parte de RH.
                                    </p>
                                    <p>
                                    10. PRIVACIDAD 
                                    RH procesará toda la información personal que el Usuario introduzca o facilite a través de nuestro Portal de conformidad con la Política de
                                    > Privacidad de el Portal del Empleado y los términos y condiciones relativos a la misma en este contrato.
                                    </p>
                                    <p>
                                    11. COOKIES
                                    ¿Qué son las cookies?
                                    En este sitio web utilizamos cookies. Las cookies son archivos de texto que contienen pequeñas cantidades de información, que se descargan en su computadora o dispositivo móvil cuando usted visita una página  web. A cada nueva visita a la misma página, los datos almacenados son recuperados por el servidor de origen. Son útiles porque permiten que un sitio web reconozca el equipo del usuario.
                                    Las cookies no pueden transmitir virus y tampoco dañan su computadora.
                                    </p>
                                    <p>
                                    ¿Qué cookies utilizamos?
                                    a. Cookies estrictamente necesarias:
                                    Son las cookies necesarias para  el correcto funcionamiento del sitio web y no se pueden borrarlas de nuestros servidores. Son generalmente activadas en respuesta a la solicitud de acciones  tales como definición de sus preferencias de privacidad, acceso (login)  o relleno de formularios. Usted puede configurar su navegador para bloquearlas o notificarle sobre ellas, pero algunos de los servicios disponibles en el sitio pueden dejar de estar operativos. Estas cookies no almacenan ninguna clase de información personal.
                                    </p>
                                    <p>
                                    b. Cookies de Remarketing y seguimiento
                                    En nuestro sitio web utilizamos cookies de seguimiento proporcionadas por DoubleClick. Las usamos para mejorar nuestra publicidad y ofrecerle contenido relevante, perfeccionar los informes sobre el rendimiento de campaña, así como evitar que se muestren anuncios que usted  ya ha visto.
                                    Las cookies de DoubleClick contienen la dirección IP pero no otra información personal. A veces la cookie contiene un identificador adicional que se asemeja al ID de cookie. Este identificador se utiliza para detectar una campaña a cual un usuario fue expuesto anteriormente; pero ninguna otra información personal se almacena por DoubleClick en la cookie.
                                    Se recoge las siguientes informaciones: el navegador y el sistema operativo que usted utiliza, el ancho de banda que se está usando, la hora del día en que se acepta la cookie, el sitio web que está de visita cuando se acepta  la cookie, así como su dirección IP.
                                    Además, Google afirma que nunca vincula información recogida de las cookies con datos que la empresa obtiene a través de sus otros productos y servicios.
                                    Las direcciones IP recopiladas son anonimizadas después de 09 meses y los datos de las cookies después de 18 meses. Tras ese periodo ya no se las utilizan más.
                                    </p>
                                    <p>
                                    c. Cookies analíticas:
                                    Utilizamos tecnología proporcionada por el servicio Google Analytics. Empleamos las cookies para recopilar información acerca del comportamiento de los visitantes en nuestro sitio. Esa información sirve para compilar mediciones que contribuyen con mejorías en su funcionamiento. Estas cookies expiran automáticamente seis meses después de su última visita.
                                    Estas cookies recogen información de forma anónima. No las utilizamos para registrar información personal sobre nuestros visitantes.
                                    Se colecta la siguiente información: el número de visitantes a nuestro Portal, cómo han llegado los visitantes a nuestro Portal y qué páginas de nuestro Portal visitaran.
                                    Mediante el uso de este sitio web usted acepta que instalemos estas cookies analíticas en su computadora o dispositivo móvil.
                                    </p>
                                    <p>
                                    d. Plugins de redes sociales:
                                    En nuestro Portal utilizamos botones para que usted pueda compartir nuestro contenido en redes sociales como 'Facebook', 'Twitter' 'LinkedIn' y 'YouTube'. Para esta función, dependemos de scripts externos. Le advertimos sobre la posibilidad  de que estas plataformas recopilen información acerca de sus hábitos de navegación de internet, incluso si no hace clic en cualquiera de los botones en nuestra página web. Tenga en cuenta que los datos transmitidos se encuentran fuera del radio de nuestro control. Para conocer el propósito y el alcance de la compilación, las condiciones de utilización de sus datos, así como la manera de impedir su uso, por favor visite la política de privacidad del proveedor de red social correspondiente.
                                    ¿Cómo se pueden desactivar las cookies?
                                    Se encuentran más informaciones sobre activar/desactivar y eliminar las cookies en la política de privacidad del navegador instalado en su equipo  (vea las opciones  en el menú de ayuda disponible del navegador o consulte el sitio web de su proveedor).
                                    Para obtener más información sobre el uso de cookies en dispositivos móviles y cómo usted los puede desactivar y eliminar, consulte las instrucciones del fabricante.
                                    Si desea bloquear todas las cookies de Google Analytics de forma automática, visite el siguiente sitio web:
                                    https://Tools.Google.com/dlpage/gaoptout
                                    Se encuentra más aclaraciones generales sobre las cookies en la siguiente página web: www.allaboutcookies.org
                                    </p>
                                    <p>
                                    12. INDEMNIZACIÓN 
                                    El Usuario se compromete a indemnizar, defender en pleito y exonerar de toda responsabilidad a RH, a la empresa matriz y a las empresas subsidiarias y afiliadas de ésta, así como a los directivos, encargados, comerciales y empleados de todas ellas, frente a las reclamaciones de terceros (en la indemnización se incluyen, entre otros, los gastos de los abogados intervinientes y los costos judiciales) interpuestas con base en, o derivadas de, el acceso por parte del Usuario a el Portal del Empleado y el uso que este haga del mismo, la Información facilitada por el Usuario, o el incumplimiento por parte de este de los términos y condiciones de este contrato.
                                    </p>
                                    <p>
                                    13. DESCARGO DE RESPONSABILIDAD
                                    EL USUARIO RECONOCE Y ACEPTA QUE:
                                    (A) EL USUARIO ASUME TODOS LOS RIESGOS RELATIVOS A, O DERIVADOS DE, EL USO, CONSULTA O ACCESO POR SU PARTE AL SITIO WEB. EL SITIO WEB SE FACILITA "COMO ESTÁ" Y "SEGÚN DISPONIBILIDAD", SIN GARANTÍA ALGUNA;
                                    (B) DENTRO DE LOS LÍMITES LEGALES, RH DECLINA EXPRESAMENTE Y EN ESTE ACTO, TODA GARANTÍA O RESPONSABILIDAD, EXPRESA O IMPLÍCITA, LEGAL O DE OTRO TIPO, INCLUIDAS, ENTRE OTRAS: LAS GARANTÍAS IMPLÍCITAS DE CALIDAD SATISFACTORIA, IDONEIDAD PARA EL USO CONCRETO, PROHIBICIÓN DE USO INDEBIDO Y LAS HABITUALES EN LA PRÁCTICA COMERCIAL O EN LAS NEGOCIACIONES EN ESTE SECTOR; Y
                                    (C) AUNQUE RH TIENE SISTEMAS ANTI-VIRUS Y ADOPTA MEDIDAS DE SEGURIDAD PARA PROTEGER EL SITIO WEB Y SU CONTENIDO DE TODO TIPO DE ATAQUES INFORMÁTICOS CON EL FIN DE REDUCIR EL NIVEL DE RIESGO, EN ESTE ACTO RH DECLINA EXPRESAMENTE TODA GARANTÍA RESPECTO A: (I) QUE EL SITIO WEB Y SU CONTENIDO ESTARÁ SIEMPRE LIBRE DE ERRORES O VIRUS O NO SUFRIRÁ NUNCA ATAQUES DE TERCEROS; (II) EL FUNCIONAMIENTO ININTERRUMPIDO Y SIEMPRE SEGURO DEL SITIO WEB; (III) LA PERMANENTE DISPONIBILIDAD DEL SITIO; (IV) QUE EL SITIO WEB CUBRA O NO LAS NECESIDADES DEL USUARIO; Y (V) LA FIABILIDAD, EXACTITUD, INTEGRIDAD, VALIDEZ O VERACIDAD DE LA INFORMACIÓN FACILITADA POR EL USUARIO.
                                    </p>
                                    <p>
                                    14. RESPONSABILIDAD Y LIMITACIÓN DE RESPONSABILIDAD
                                    EL USUARIO ACEPTA ASUMIR TODOS LOS RIESGOS ASOCIADOS CON, O DERIVADOS DE, EL USO DEL SITIO WEB O LA INFORMACIÓN FACILITADA POR EL USUARIO, INCLUYENDO, ENTRE OTROS, LOS RIESGOS DE PÉRDIDAS ECONÓMICAS, LOS DAÑOS A LA PROPIEDAD Y LOS GASTOS DE NEGOCIACIÓN CON OTROS USUARIOS DEL SITIO WEB (YA SEAN DESCONOCIDOS, MENORES, EXTRANJEROS O PERSONAS QUE ACTÚAN BAJO FALSA IDENTIDAD). EL USUARIO SE COMPROMETE TAMBIÉN A EXONERAR DE TODA RESPONSABILIDAD A RH, A LA EMPRESA MATRIZ Y A LAS EMPRESAS SUBSIDIARIAS Y AFILIADAS DE ESTA, ASÍ COMO A LOS DIRECTIVOS, ENCARGADOS, COMERCIALES Y EMPLEADOS DE TODAS ELLAS, FRENTE A LAS RECLAMACIONES, DEMANDAS O RECLAMACIONES DE INDEMNIZACIÓN POR DAÑOS Y PERJUICIOS (DIRECTOS, INDIRECTOS Y SOBREVENIDOS) DE CUALQUIER TIPO, CONOCIDAS O NO, QUE PUEDAN INTERPONERSE CON BASE EN, O QUE SE DERIVEN DEL USO DEL SITIO WEB, LA INFORMACIÓN FACILITADA POR EL USUARIO O LAS TRANSACCIONES QUE SE PRODUZCAN COMO RESULTADO DEL USO DEL SITIO WEB POR PARTE DEL USUARIO.
                                    SIEMPRE DENTRO DE LOS LÍMITES LEGALES, EL USUARIO ASUME Y ACEPTA QUE EN NINGÚN CASO, NI RH NI SU EMPRESA MATRIZ, LAS EMPRESAS SUBSIDIARIAS Y AFILIADAS DE ESTA, NI TAMPOCO SUS DIRECTIVOS, LOS COMERCIALES, LOS EMPLEADOS O LOS PROVEEDORES DE TODAS ELLAS, ASUMIRÁN RESPONSABILIDAD ALGUNA POR LAS PÉRDIDAS O LOS DAÑOS DIRECTOS, INDIRECTOS O SOBREVENIDOS (INCLUIDOS, ENTRE OTROS, LOS DAÑOS A LA PROPIEDAD Y LOS DAÑOS PURAMENTE ECONÓMICOS), NI POR LUCRO CESANTE, PÉRDIDA DE CARTERA DE CLIENTES, PÉRDIDA DE INGRESOS O DE DATOS O POR INTERRUPCIÓN DE USO, SEA CUAL SEA LA CAUSA QUE LOS HAYA PROVOCADO - INCUMPLIMIENTO CONTRACTUAL, RESPONSABILIDAD EXTRACONTRACTUAL (INCLUIDA LA NEGLIGENCIA) O INCUMPLIMIENTO DE GARANTÍA-, INCLUSO AUNQUE RH HUBIERA SIDO ADVERTIDA DE LA POSIBILIDAD DE OCURRENCIA DE DICHAS PÉRDIDAS O DAÑOS. EN CASO DE QUE EN ALGUNA JURISDICCIÓN SE PROHIBA LA EXCLUSIÓN DE CIERTAS GARANTÍAS, LA LIMITACIÓN DE RESPONSABILIDAD O EL DESCARGO DE RESPONSABILIDAD RESPECTO A CIERTOS DAÑOS, LA RESPONSABILIDAD ACUMULADA DE RH POR DAÑOS NO EXCEDERÁ DE USD$10.00 (DIEZ DÓLARES DE LOS ESTADOS UNIDOS DE AMÉRICA), SI ASÍ LO PERMITE LA LEGISLACIÓN APLICABLE.
                                    EN CUALQUIER CASO, LA ANTERIOR LIMITACIÓN DE RESPONSABILIDAD NO SE APLICARÁ A LOS CONSUMIDORES NI RESPECTO A LOS DAÑOS CAUSADOS DE FORMA INTENCIONADA O NEGLIGENCIA GRAVE.
                                    </p>
                                    <p>
                                    15. RESCISIÓN
                                    RH podrá, a su entera discreción, dar por terminados los servicios ofrecidos en su Portal y retirar cualquier Contenido del mismo. RH podrá también, en cualquier momento, por cualquier motivo justificado o no y sin tener que notificar de forma anticipada su decisión, suspender el acceso del Usuario a cualquiera de, o a todos, los servicios ofrecidos en el Sitio Web. En caso de que el Usuario decida anular su cuenta, deberá dejar de acceder a, y no utilizar más, el Sitio Web. RH no tendrá obligación alguna de mantener o devolver la Información facilitada por el Usuario, su cuenta, su número de cuenta virtual y su contraseña. El Usuario deberá disponer siempre de una copia de la Información por él facilitada.
                                    </p>
                                    <p>
                                    16. GENERAL
                                    El Usuario declara que entre él y RH no existe relación alguna de contratación laboral, asociación, agencia o empresa conjunta, derivadas del acceso y uso del Portal.
                                    El presente Contrato integra todos los acuerdos a que el Usuario y RH han llegado en relación el acceso y uso del Portal, y se suscribe de forma adicional a cualquier acuerdo vinculante que pueda existir entre el Usuario y RH.
                                    El presente Contrato se regirá e interpretará por la legislación chilena y el Usuario se somete a la exclusiva jurisdicción de los tribunales de Valencia.
                                    Si el Usuario consultara, accediera, enviara información o descargara material a partir del Portal desde fuera de España, el Usuario será el único responsable de sus actos y asumirá todos los riesgos. El Usuario no podrá utilizar ni exportar el Contenido de el Portal del Empleado ni efectuar copia o adaptación alguna que infrinja las leyes, reglamentos o normas aplicables, entre las que se incluyen las leyes y reglamentos de exportación de los EE.UU.
                                    El hecho de que una de las partes no ejercite en un momento dado o se retrase en el ejercicio de los derechos y acciones que le asisten en virtud del presente Contrato, no podrá interpretarse como una renuncia a los mismos.
                                    La invalidez o inaplicabilidad de cualquiera de los presentes términos y condiciones -en todo o en parte- o de los derechos derivados de este Contrato, no afectará la validez o la aplicabilidad de los demás derechos, términos y condiciones, o al resto de la disposición en cuestión, que continuarán en pleno vigor y efectos, quedando excluida solamente la cláusula viciada (o la parte que se invalida en dicha cláusula).
                                    Los Artículos 4, 6, 10, 12, 13, 14 y 15 del presente Contrato sobrevivirán a la terminación del mismo por cualquier razón.
                                    </p>
                                    <p>
                                    Si desea más información sobre el Portal del Empleado o sobre el presente Contrato, contactar con:
                                    Guillermo Cervera
                                    guillermo@email.com
                                    </p>
                                    <p>
                                    Todos los derechos reservados.
                                    </p>
                                </p>
                                <!-- ***********Edit your content ENDS here******** -->	
                            </div> <!--body panel main -->
                        </div> <!--toc -->
                    </div>
                </div> <!-- end main content -->
            </div>
     	</div>
    </div> <!-- /container -->
<?php require_once 'templates/footer.php';?>