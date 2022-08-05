<?php require_once "header.php" ?>
<link rel="stylesheet" href="Lib/calendar/css/mobiscroll.jquery.min.css">
<link rel="stylesheet" href="Css/EsEventos.css">

<div class="banner mt-5">
    <div class="text-box">
        <h3>Eventos</h3>
        <p>No te pierdas ninguna actividad</p>
    </div>
</div>

<div class="lienzo">
    <div class="calendario mb-5" id="calendario">
        <h2 class="mb-2 text-center mt-3">Vista de Calendario</h2>
        <div mbsc-page class="demo-month-view">
            <div style="height:100%">
                <div id="demo-desktop-month-view"></div>
            </div>
        </div>
    </div>

    <div class="event-detail mb-3" id="my-col">
        <img src="" id="img-event" alt="">
        <div class="info-box">
            <center>
                <h2 class="title-event" id="title-event">Event Title</h2>
            </center>
            <p id="fechas">
                <span id="inicio">2022-11-05 05:00:00</span>
                <span>--</span>
                <span id="fin">2022-11-05 05:00:00</span>
            </p>

            <p>Horario:
                <span id="horario">17:00-21:00</span>
            </p>

            <p id="descript">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui doloremque neque doloribus ut ipsam ad hic eius, enim corporis perferendis maxime autem facere harum culpa.
            </p>
            <hr>
            <center>
                <button class="btn btn-primary" id="registro" onclick="registro()">
                    <i class="fa fa-ticket-alt" aria-hidden="true"></i>
                    &nbsp;
                    Obtener mi Ticket
                </button>
                <h6 id="frase">
                    No es necesario el registro, aprovecha esta oportunidad!
                </h6>
            </center>
        </div>
    </div>
</div>


<?php require_once "footer.php" ?>
<script src="Lib/calendar/js/mobiscroll.jquery.min.js"></script>
<script src="Js/events.js"></script>