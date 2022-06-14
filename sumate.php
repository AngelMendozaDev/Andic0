<?php require_once "header.php"; ?>
<link rel="stylesheet" href="Css/EsSumate.css">

<div class="banner">
    <div class="banner-text">
        + SUMATE <br>
        A ESTE AMBICIOSO PROYECTO
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-12 col-md-7 mx-auto">
            <h2 class="text-title"> <i class="fa fa-plus icon-text-title" aria-hidden="true"></i> Sumate</h2>
            <br><br>
            <p class="text-body">
                Tú puedes sumarte a la Comunidad de ANDIC A.C. para aportar tu experiencia, conocimientos y tiempo al
                objetivo común de crear mejores condiciones de vida para el futuro.
                <br>
                <br>
                Puedes ser parte de este ambicioso proyecto para el mejoramiento de la comunidad, a partir de tu
                formación educativa, experiencia e intereses, puedes sumar a este propósito.
                <br>
                <br>
                Lo anterior lo podrás hacer a través de las siguientes modalidades:
            </p>
        </div>

        <div class="col-12 col-md-4 mx-auto img-vb">
            <img src="Media/Pictures/Suma.jpg" alt="Andic" width="100%">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 col-md-4 mx-auto img-vb">
            <img src="Media/Pictures/Sumat.jpeg" alt="Andic" width="100%">
        </div>

        <div class="col-12 col-md-7 mx-auto">
            <h2 class="text-title"> <i class="fa fa-bullseye icon-text-title" aria-hidden="true"></i> VOLUNTARIADO:</h2>
            <p class="text-body">
                Para poder participar en el voluntariado necesitas:
                <br><br>
                1.- Disponibilidad de tiempo.
                <br><br>
                2.- Edad Minima 20 Años.
                <br><br>
                3.- Compromiso y vocación.
            </p>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#voluntierModal">
                <i class="fa fa-child" aria-hidden="true"></i> Postularme como Voluntario
            </button>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12 col-md-7 mx-auto">
            <h2 class="text-title"> <i class="fa fa-bullseye icon-text-title" aria-hidden="true"></i> Servicio Social
            </h2>
            <br><br>
            <p class="text-body">
                Dentro de ANDIC A.C. pondrás tus conocimientos en práctica, que has adquirido durante tu formación
                escolar para contribuir a mejorar las condiciones del entorno, para mejorar el estilo de vida de
                vuestras comunidades.
                <br><br>
                1.- Disponibilidad de tiempo
                <br><br>
                2.- Edad mínima
                <br><br>
                3.- Compromiso y vocación;
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceSModal">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                Quiero hacer mi servicio aqui!
            </button>
        </div>

        <div class="col-12 col-md-4 mx-auto img-vb">
            <img src="Media/Pictures/Resultados.jpg" alt="Andic" width="100%">
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="voluntierModal" tabindex="-1" aria-labelledby="voluntierModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="voluntierModalLabel">Formulario de voluntariado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" class="form-voluntario" onsubmit="return newUser()" id="form-voluntieer">
                    <div class="alert alert-warning msgbox">
                        <i class="fab fa-yelp requerido" aria-hidden="true"></i> &nbsp; Campos Obligatorios
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nombre: <i class="fab fa-yelp requerido" aria-hidden="true"></i></label>
                        <input type="text" class="form-control" maxlength="60" style="text-transform: uppercase;" name="nameV" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Telefono: <i class="fab fa-yelp requerido" aria-hidden="true"></i></label>
                        <input type="number" class="form-control" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="phoneV" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Correo Electronico: <i class="fab fa-yelp requerido" aria-hidden="true"></i></label>
                        <input type="email" class="form-control" maxlength="60" name="mailV" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Como podrias ayudarnos?</label>
                        <textarea name="msjV" cols="10" rows="3" class="form-control"></textarea>
                    </div>

                    <center><button class="btn btn-outline-success"><i class="fas fa-paper-plane" aria-hidden="true"></i> Postularme</button></center>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="closeModal" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Servicio Social-->
<div class="modal fade" id="serviceSModal" tabindex="-1" aria-labelledby="serviceSModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceSModalLabel">Formulario para Servicio Social</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" id="serviceS-form" onsubmit="return serviceSocial()">
                    <div class="form-group mb-3">
                        <label for="">Nombre de Interesado:</label>
                        <input type="text" class="form-control" maxlength="50" style="text-transform: uppercase;" name="person" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Nombre de la Institucion:</label>
                        <input type="text" class="form-control" maxlength="80" style="text-transform: uppercase;" name="school" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Correo Electronico:</label>
                        <input type="mail" class="form-control" maxlength="80" name="mail" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>Numero de Contacto</label>
                        <input type="number" class="form-control" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="phone" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Mensaje:</label>
                        <textarea name="msj" cols="30" rows="5" class="form-control" placeholder="Cuentanos que conocimientos tienes..." maxlength="200"></textarea>
                    </div>

                    <center>
                        <button class="btn btn-outline-success">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            Enviar Formulario
                        </button>
                    </center>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeModalS" data-bs-dismiss="modal" hidden>Close</button>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>
<script src="Js/sumate.js"></script>