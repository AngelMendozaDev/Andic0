<?php require_once "header.php"; ?>
<link rel="stylesheet" href="Css/EsIndex.css">

<!-- Carrousel -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Media/Pictures/Img1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>La Familia ANDIC. A.C.</h5>
                <p>Unete a esta gran familia!.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Media/Pictures/kids.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Media/Pictures/Sumate.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>..</h5>
                <p></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Carousel Small -->
<div id="myCarouselSm" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarouselSm" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarouselSm" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarouselSm" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Media/Pictures/CeroH.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Media/Pictures/Ranch.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="Media/Pictures/Resultados.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarouselSm" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarouselSm" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Card??s -->
<div class="container-fluid mt-4 mb-5">
    <div class="row mb-4">
        <div class="col-12 col-md-4 mb-3 mx-auto">
            <div class="my-card h-100">
                <div class="card-img">
                    <img src="Media/Pictures/Conc-p.jpg" alt="">
                </div>
                <h2 class="card-title">
                    Conocenos
                </h2>
                <p class="card-text">
                    Conoce un poco de lo que realizamos y nuestro camino por esta noble misi??n.
                </p>

                <a href="conocenos.php" class="btn btn-primary">Ver mas detalles <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

            </div>
        </div>
        <div class="col-12 col-md-4 mb-3 mx-auto">
            <div class="my-card h-100">
                <div class="card-img">
                    <img src="Media/Pictures/Resultados.jpg" alt="">
                </div>
                <h2 class="card-title">
                    Nuestros resultados
                </h2>
                <p class="card-text">
                    En ANDIC A.C. nuestros resultados hablan por nosotros, conoce nuestras acciones y los impactos que
                    han tenido hasta hoy
                </p>

                <a href="resultados.php" class="btn btn-warning">Ver mas detalles <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

            </div>
        </div>
        <div class="col-12 col-md-4 mb-3 mx-auto">
            <div class="my-card h-100">
                <div class="card-img">
                    <img src="Media/Pictures/Hero.png" alt="">
                </div>
                <h2 class="card-title">
                    <i class="fa fa-plus" aria-hidden="true"></i> Sumate
                </h2>
                <p class="card-text">
                    T?? puedes sumarte a la Comunidad de ANDIC A.C. para aportar tu experiencia, conocimientos y tiempo
                    al objetivo com??n de crear mejores condiciones de vida para el futuro.
                </p>

                <a href="sumate.php" class="btn btn-success">Ver mas detalles <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>

            </div>
        </div>
    </div>
</div>

<hr class="featurette-divider mx-auto" width="80%">

<div class="container mx-auto mb-5">
    <div class="row mb-5 mt-5">
        <div class="col-12 col-md-7 mx-auto cont-row">
            <div class="text-box-row">
                <h2 class="row-title">Campa??a Cero Hambre</h2>
                <h3 class="row-subtitle">Santa Catarina Yecahuizotl</h3>
                <p class="row-text">
                    El programa busca apoyar a la poblaci??n m??s desprotegida con el abasto de productos b??sicos de alimentaci??n y salud.
                    <br>
                    Esto se logra mediante la recolecci??n y entrega de donativos en especie a las personas que m??s lo necesiten.
                </p>
                <br>
                <span class="text-small">???El peor enemigo de la lucha contra el hambre, es la indiferencia???</span>
                <br>
                <a href="programa.php" class="btn btn-primary">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    &nbsp;
                    Saber m??s
                </a>
            </div>
        </div>

        <div class="col-12 col-md-5 mx-auto">
            <div class="Cuadro">
                <img src="Media/Pictures/CeroH.jpg" class="img-cuadrado" alt="cero hambre Andic">
            </div>
        </div>

    </div>

    <hr class="featurette-divider mx-auto" width="80%">

    <div class="row mb-5 mt-5">
        <div class="col-12 col-md-5 mx-auto">
            <div class="Cuadro">
                <img src="Media/Pictures/Sumat.jpeg" alt="Rancho" class="img-cuadrado">
            </div>
        </div>
        <div class="col-12 col-md-6 mx-auto cont-row">
            <div class="text-box-row">
                <h2 class="row-title">Desarrollo Econ??mico</h2>
                <h3 class="row-subtitle">Yosondua - Oaxaca</h3>
                <p class="row-text">
                    Contribuir al desarrollo econ??mico de la regi??n mediante la promoci??n de programas y proyectos estrat??gicos orientados a potenciar nuevas ??reas de desarrollo y sus posibles inversionistas.
                </p>
                <!--center>
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        &nbsp;
                        Saber m??s
                    </a>
                </!--center-->
                <br>
                <span class="text-small">Algunas personas quieren que algo ocurra, otras sue??an con que pasara, otras hacen que suceda</span>
            </div>
        </div>
    </div>

    <hr class="featurette-divider mx-auto" width="80%">

</div>

<?php require_once "footer.php" ?>