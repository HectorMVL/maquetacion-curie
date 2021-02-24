<!-- Parte superior -->
<div class="container-fluid header">
    <div class="row">
        <div class="col-6">
            <a href="index.php">Pacientes</a>
        </div>
        <div class="col-6">
            <a href="empresas.php">Empresa</a>
        </div>
    </div>
</div>
<!-- Parte hero -->
<div class="contenedorHeader">
    <div class="hero">
        <div class="seccionNavegacion">
            <div class="container-fluid">
                <div class="row">
                    <div class="order-1 order-sm-1 order-md-1 col-sm-12 col-lg-3 col-xl-3 logo">
                        <a href="index.php"><img src="assets/img/curieLabs_logo.png" alt="Logo"></a>
                    </div>
                    <div class="order-3 order-sm-2 order-md-2 col-sm-12 col-md-6 col-lg-4 col-xl-5 d-flex justify-content-end align-items-center">
                        <ul class="nav navegacion" >
                            <li class="nav-item">
                                <a class="nav-link" href="conocenos.php">Conócenos <img src="assets/img/icons/flechaDerechaIcon.png" alt="Icon"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://curielaboratorios.dyndns.org/labtivity/consultaweb">Resultados <img src="assets/img/icons/flechaDerechaIcon.png" alt="Icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="order-2 order-sm-3 order-md-3 col-sm-12 col-md-6 col-lg-5 col-xl-4 d-flex align-items-center">
                        <div class="buscadorContenedor w-100">
                            <div class="float-left w-25 text-right"><img src="assets/img/icons/buscadorIcon.png" alt="Icono Buscar" id="iconoBuscar"></div>
                            <div class="float-left w-75"><input id="search" class="buscador" type="search" placeholder="¿Qué estudio deseas buscar?" aria-label="Search"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <? include('slider.php') ?>
    </div>
</div>