<?
session_start();

$_SESSION["SesPag"] = 'index.php';

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
            <meta property="og:image" content="http://www.curielaboratorios.com.mx/assets/img/curieLabs_logo.png">
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

    <div class="col-12 menuSecciones d-flex justify-content-center">
        <nav class="nav">
            <a class="nav-link nav-study" href="#">
                <img src="assets/img/icons/estudiosIcon.png" alt="Icon">
                Estudios
            </a>
            <a class="nav-link nav-result" href="#">
                <img src="assets/img/icons/resultadosIcon.png" alt="Icon">
                Resultados
            </a>
            <a class="nav-link nav-mark" href="#">
                <img src="assets/img/icons/sucursalesIcon.png" alt="Icon">
                Sucursales
            </a>
            <a class="nav-link nav-percent" href="#">
                <img src="assets/img/icons/promocionesIcon.png" alt="Icon">
                Promociones
            </a>
            <a class="nav-link nav-hospi" href="#">
                <img src="assets/img/icons/empresaIcon.png" alt="Icon">
                Empresa
            </a>
        </nav>
    </div>

    <!-- Seccion de beneficios -->
    <div class="contenedorSeccion">
        <div class="container">
            <div class="row beneficiosTitulo">
                <div class="col-12">
                    <h2>Beneficios paciente curie</h2>
                </div>
                <div class="col-12 d-flex justify-content-center">
                <p>Le ofrecemos resultados de alta confiabilidad, clínicamente útiles,
                    calidad en nuestros procesos y confidencialidad de tu información</p>
                </div>
            </div>
            <div class="row beneficiosContenido">
                <div class="col-12 col-md-6">
                    <div class="row my-2">
                        <div class="col-sm-2 col-md-3 text-center">
                            <img src="assets/img/icons/entregaResultadosIcon.png" alt="icon">
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <p><span>Entrega de resultados urgentes ¡Sin Costo!</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row my-2">
                        <div class="col-sm-2 col-md-3 text-center">
                            <img src="assets/img/icons/atencionEspecialIcon.png" alt="icon">
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <p><span>Atención especial para niños, adultos mayores
                            y personas con discapacidad</span> Contamos con cubículo especial para muestras de niños. Con equipo y personal capacitado y certificado. Buscamos evitar aglomeraciones
                            y atención expedita, porque es importante el cuidado de todos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row beneficiosContenido">
                <div class="col-12 col-md-6">
                    <div class="row my-2">
                        <div class="col-sm-2 col-md-3 text-center">
                            <img src="assets/img/icons/muestrasDomicilioIcon.png" alt="icon">
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <p><span>Toma y recolección de muestras a domicilio
                            ¡Sin Costo!</span> Cuidamos tu salud sin salir de casa, este beneficio se extiende para todos nuestros pacientes sin costo adicional AGENDANDO CITA con 24 h. de anticipación.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row my-2">
                        <div class="col-sm-2 col-md-3 text-center">
                            <img src="assets/img/icons/entregaOportuna.png" alt="icon">
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <p><span>Entrega oportuna de resultados</span> Además de entregarse físicamente en nuestras instalaciones, usted o su médico puede consultarlos en nuestra página web:
                            <b>www.curielaboratorios.com.mx</b> o si lo prefiere solicite el envío a su correo electrónico o whatsapp.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Barra de estudios -->
    <div class="container-fluid">
        <div class="row contenedorSeparadorSeccion">
            <div class="col-12 iconoFlechaAbajo text-center">
                <img src="assets/img/icons/flechaAbajoIcon.png" alt="Icon">
            </div>
            <div class="col-12 text-center">
                <p>Estudios</p>
            </div>
        </div>
    </div>

    <!-- Seccion de Tipos de estudios -->
    <div class="tiposEstudios">
        <div class="fondo d-flex justify-content-center">
            <div class="contenedorEstudios">
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center mt-2">
                        <div class="botonEstudio shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonImg d-flex align-items-center justify-content-center">
                                    <img src="assets/img/icons/ultrasonidoIcon.png" alt="Icon">
                                </div>
                                <div class="contenidoBotonTexto d-flex align-items-center">
                                    Ultrasonido
                                </div>
                            </div>
                            <div class="imagenBoton d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/flechaDerechaAzulIcon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center mt-2">
                        <div class="botonEstudio shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonImg d-flex align-items-center justify-content-center">
                                    <img src="assets/img/icons/colposcopiaIcon.png" alt="Icon">
                                </div>
                                <div class="contenidoBotonTexto d-flex align-items-center">
                                    Colposcopía
                                </div>
                            </div>
                            <div class="imagenBoton d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/flechaDerechaAzulIcon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center mt-2">
                        <div class="botonEstudio shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonImg d-flex align-items-center justify-content-center">
                                    <img src="assets/img/icons/radiologiaIcon.png" alt="Icon">
                                </div>
                                <div class="contenidoBotonTexto d-flex align-items-center">
                                    Radiología
                                </div>
                            </div>
                            <div class="imagenBoton d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/flechaDerechaAzulIcon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center mt-2">
                        <div class="botonEstudio shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonImg d-flex align-items-center justify-content-center">
                                    <img src="assets/img/icons/electrocardiogramaIcon.png" alt="Icon">
                                </div>
                                <div class="contenidoBotonTexto d-flex align-items-center">
                                    Electrocardiograma
                                </div>
                            </div>
                            <div class="imagenBoton d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/flechaDerechaAzulIcon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 d-flex align-items-center mt-2">
                        <div class="botonEstudio shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonImg d-flex align-items-center justify-content-center">
                                    <img src="assets/img/icons/analicisClinicosIcon.png" alt="Icon">
                                </div>
                                <div class="contenidoBotonTexto d-flex align-items-center">
                                    Análisis Clínicos
                                </div>
                            </div>
                            <div class="imagenBoton d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/flechaDerechaAzulIcon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center mt-2">
                        <div class="botonEstudio shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonImg d-flex align-items-center justify-content-center">
                                    <img src="assets/img/icons/microbiologiaAlimentosIcon.png" alt="Icon">
                                </div>
                                <div class="contenidoBotonTexto d-flex align-items-center">
                                    Microbiología de alimentos
                                </div>
                            </div>
                            <div class="imagenBoton d-flex align-items-center justify-content-center">
                                <img src="assets/img/icons/flechaDerechaAzulIcon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row estudiosExtra">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <img class="img"src="assets/img/icons/FlechaCurvaDerechaIcon.png" alt="icon">
                        <div class="botonBuscarEstudios shadow rounded-lg">
                            <div class="contenidoBoton">
                                <div class="contenidoBotonTexto d-flex align-items-center justify-content-center">
                                    ¡Encuentra el estudio que necesites!
                                </div>
                            </div>
                        </div>
                        <img class="img" src="assets/img/icons/flechaCurvaIzquierdaIcon.png" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <? include_once('footer.php'); ?>

    </body>
</html>