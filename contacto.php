<?php require_once "header.php" ?>
<link rel="stylesheet" href="Css/EsContacto.css">

<div class="container my-contenedor">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto ">
            <h1 class="title-contact">
                Contáctanos
            </h1>
            <p class="text-plain">
                Hola
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nihil quibusdam aliquid. Aut, eos
                consequatur.
            </p>
            <span class="marca">ANDIC A.C.</span>
            <hr class="separador">
            <h2 class="subtitle-contact">
                ¿Necesitas platicar con nosotros?
            </h2>
            <p class="text-plain">Puedes hacerlo a través de:</p>
            <p class="text-black"><i class="fab fa-whatsapp" aria-hidden="true"></i>&nbsp; 55 12469822</p>
            <a class="text-mail" href="mailto:micorreo@andic.org">micorreo@andic.org</a>
            <h2 class="subtitle-contact">Tlahuac, CDMX</h2>
        </div>
        <div class="col-12 col-md-6 mx-auto mt-3">
            <form action="#" method="POST" class="contact-form" id="form-contact">
                <div class="group-form">
                    <div class="input-grup">
                        <label for="">Nombre(s):</label>
                        <input type="text" style="text-transform: uppercase;" class="form-control" maxlength="20">
                    </div>

                    <div class="input-grup">
                        <label for="">Apellidos:</label>
                        <input type="text" style="text-transform: uppercase;" class="form-control" maxlength="20">
                    </div>
                </div>
                <br>
                <div class="input-grop">
                    <label for="">Correo Electronico:</label>
                    <input type="mail" style="text-transform: uppercase;" class="form-control" maxlength="20">
                </div>
                <br>
                <div class="input-grop">
                    <label for="">Mensaje:</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                
                <br>

                <button class="my-btn">Enviar <i class="fa fa-paper-plane" aria-hidden="true"></i></button>

            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>