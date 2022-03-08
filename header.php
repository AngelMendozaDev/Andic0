<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="ANDIC, Comunitario">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANDIC A.C.</title>
    <link rel="icon" href="Media/Icons/LogoWeb.png">
    <link rel="stylesheet" href="Lib/Bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="Lib/FontAwesome/css/all.min.css">
    <link rel="stylesheet" href="Css/EsHeader.css">
</head>

<body>
    <!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "109303428145862");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light menu" id="myMenu">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="Media/Icons/Logo.png" alt="Logo Andic" height="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Eventos&nbsp;<i
                                class="fas fa-calendar-alt icon-option"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conocenos.php">Conocenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Apoyanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>