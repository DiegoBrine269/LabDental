<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)){
        $inicio = false;
    }

    if(!isset($pagina)){
        $pagina = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../build/css/app.css">
    <title>Laboratorio dental</title>
</head>
<body>
    <header class="header">

    <div class="hamburger hamburger--elastic" tabindex="0" aria-label="Menu" role="button" aria-controls="navigation">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
        <nav class="contenedor invisible animate__animated animate__slideInDown" id="navbar">
            <ul>
                <?php if($pagina == 'inicio') { ?>
                    <li><a class="link" href="/">Inicio</a></li>
                    <li><a class="link" href="#precios">Precios</a></li>
                    <li><a class="link" href="#galeria">Galería</a></li>
                    <li><a class="link" href="#contacto">Contacto</a></li>
                <?php } ?>

                <?php if($pagina == 'admin') { ?>
                    <li><a class="link" href="/">Inicio</a></li>
                    <li><a class="link" href="/">Cerrar Sesión</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>

</div>
    <main class="contenedor main">
        <?php echo $contenido?>
    </main>

    <footer class="footer">
        <div class="contenedor">
            Sitio hecho por <a href="https://diego-oloarte-mi-portafolio.netlify.app/">Diego Oloarte</a>
        </div>
    </footer>

    <script src="../build/js/bundle.min.js"></script>
</body>
</html>