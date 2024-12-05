<?php
$titulo="ReserDAWtions";
include_once "./environment.php";
include_once "View/template/inicio.php";
include_once "View/template/arribaNavegacion.php";
include_once "View/template/navegacion.php";
?>

    <section id="services" class="text-center">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <?php
            foreach ($hoteles as $hotel){?>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?=$hotel->getNombre()?></h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light"><?=$hotel->getNombre()." ".$hotel->getApellidos()?></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><?=$hotel->getDireccion()?></li>
                                <li><?=$hotel->get?></li>
                                <li><?=$hotel->get()?></li>
                                <li>
                                    <?php
                                    foreach ($hotel->getServicios() as $servicio){
                                        echo $servicio->obtenerServicioFormateado()." ";
                                    }
                                    ?>
                                </li>
                            </ul>
                            <a href="/users/<?=$usuario->getuuid()?>" class="btn btn-brand">Ver detalles</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

<?php
include_once "View/template/footer.php";
include_once "View/template/modal.php";
include_once "View/template/final.php";
