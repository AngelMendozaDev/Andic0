<?php
require_once "header.php";
require_once "Class/General.php";
$class = new general;
$package = $class->getAcciones();
?>
<link rel="stylesheet" href="Css/EsResultados.css">

<div class="banner">
    <div class="texto">
        Nuestros Resultados
    </div>
</div>

<div class="title-box">
    <div class="title-text">
        Todos trabajamos para lograr los objetivos
        <hr class="separador">
        <i class="fas fa-award icon-title"></i>
    </div>
</div>

<div class="time-line">
    <ul class="timeline-list">
        <?php while ($data = $package->fetch_array()) { ?>
            <li class="timeline-item">
                <div class="timeline-data">
                    <center>
                        <span class="year"><?php echo $data['ano']; ?></span>
                        <br>
                        <span class="year"><?php echo $data['titulo']; ?></span>
                    </center>
                    <p class="timeline-text">
                        <?php echo $data['texto']; ?>
                    </p>
                    <img src="Media/Pictures/<?php echo $data['media'] ?>" width="100%" alt="">
                </div>
            </li>
        <?php } ?>
    </ul>
</div>

<?php require_once "footer.php" ?>
<script src="Js/timeLine.js"></script>