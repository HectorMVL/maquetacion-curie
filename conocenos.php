<?
session_start();

$_SESSION["SesPag"] = 'conocenos.php';

$_SESSION["BanderaEnviarCorreo"] = "true";
?>
<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <!-- Metaetiquetas requeridas -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="Cache-Control" content="max-age=172800, must-revalidate">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta property="og:title" content="">
            <meta property="og:image" content="http://www.coplacem.org.mx/img/logo.png">
            <meta property="og:description" content="">

        <!-- CSS necesarios -->
            <link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
            <!-- Slider -->
            <link type="text/css" rel="stylesheet" href="assets/css/slider.css">
            <link type="text/css" rel="stylesheet" href="assets/css/estilosGenerales.css">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

        <title>Curie Laboratorios :: Zinacantepec</title>
    </head>

    <body>

    <? include_once('header.php') ?>

    <!-- Titulo Separador Quienes Somos -->
    <div class="container-fluid">
        <div class="row contenedorSeparadorSeccion">
            <div class="col-12 iconoFlechaAbajo text-center">
                <img src="assets/img/icons/flechaAbajoIcon.png" alt="Icon">
            </div>
            <div class="col-12 text-center">
                <p>¿Quiénes Somos?</p>
            </div>
        </div>
    </div>

    <!-- Seccion Quienes Somos -->
    <div class="contenedorSeccion sombraAbajoContenedor">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7">
                    <p>Proporcionamos apoyos para el diagnóstico, la prevención y el cuidado de la salud que generan alta satisfacción en nuestros clientes al utilizar tecnología de punta y brindar calidez humana.</p>

                    <h2 class="tituloVerdeSubrayado">MISIÓN</h2>

                    <p>Ofrecer servicios de exámenes clínicos y de microbiología sanitaria con calidad, buscando lograr la satisfacción de nuestros clientes, realizando nuestras actividades con base en la buena práctica profesional, a la competencia de todo nuestro personal y al cumplimiento de la normativa vigente que nos aplique.</p>

                    <h2 class="tituloVerdeSubrayado">VISIÓN</h2>

                    <p>Ser una excelente opción en la prestación del servicio de exámenes clínicos y microbiología sanitaria para nuestros clientes, logrando superar sus expectativas por medio de la competencia de nuestro laboratorio y el cumplimiento de normas voluntarias y obligatorias que nos apliquen.</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="row my-2">
                        <img src="assets/img/icons/atencionEspecialIcon.png" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedorSeccion">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contenedorPestanaTitulo">
                        <div class="tituloPestana tituloPestanaVerde">
                            VALORES INSTITUCIONALES
                            <div class="formaPestana formaPestanaVerde">
                                <svg viewBox='0 0 50 100' preserveAspectRatio='none'>
                                    <path d='M 0 0 c 23 -2 30 21 48 44 l -48 0'></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <ul class="vinetaVerde">
                        <li>
                            <b>Integridad:</b> Conducirse con honradez, rectitud, dignidad, decoro, poniendo en la ejecución de sus labores toda su capacidad, conocimiento y experiencia laboral. Realizar todas sus actividades de manera honesta, transparente e imparcial, actuando en todo momento con rectitud y coherencia, sin incurrir en actos ilícitos.
                        </li>
                        <li>
                            <b>Orden:</b> Trabajar manteniendo un entorno productivo a través de las actividades que establezca el Manual de Higiene y Seguridad y el de 5'S, apoyando con propuestas y acciones de mejora del orden y limpieza en el laboratorio.
                        </li>
                        <li>
                            <b>Disciplina:</b> Mantener una actitud positiva enfocada a seguir las reglas establecidas en la organización.
                        </li>
                        <li>
                            <b>Confidencialidad:</b> Mantener total discreción sobre la información, conocimientos, procedimientos, estrategias, programas, resultados y cualquier otra información de la organización y los clientes, evitando la divulgación por cualquier medio de dicha información.
                        </li>
                        <li>
                            <b>Confianza:</b> Credibilidad y respeto a que se hace acreedor un profesional por sus conocimientos y su honestidad al trasmitir información, dar enseñanza, realizar los procedimientos propios de su profesión y ofrecer servicios o ayuda a las personas.
                        </li>
                        <li>
                            <b>Compromiso:</b> Cumplir con lo pactado de manera verbal o escrita, utilizando nuestro conocimiento en todo momento para mejorar la satisfacción del cliente, elevando la calidad y confiabilidad en todos nuestros servicios.
                        </li>
                        <li>
                            <b>Imparcialidad:</b> Las decisiones deben tomarse atendiendo a criterios objetivos, sin influencias de sesgos, prejuicios o tratos diferenciados por razones inapropiadas.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <? include_once('footer.php'); ?>

    </body>
</html>