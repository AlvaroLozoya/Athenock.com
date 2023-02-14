    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./visual/CSS/perfil-img.css">
</head>
<body>
     
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
                <div class="container-fluid">
                    <a href="./index.php" class="img-fluid"><img src="./visual/media/logos/logo4.png" alt="" class="me-1 w-50 img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mr-5">
                            <form class="d-flex">
                                <li class="nav-item dropdown color-custom1">
                                    <a class="nav-link " href="./abandonos.php" id="navbarDropdown" role="button">
                                        Urbex
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link me-1" href="./spots.php" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Spots
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link me-1" href="./contactanos.php" id="navbarDropdown" role="button" >
                                        Contactanos
                                    </a>
                                </li>
                                
                        </ul>
                        <div class="navbardivider me-2 ms-2"></div>
                        <li class="nav-item dropdown dropstart">
                        <a class="nav-link dropdown" href="" id="navbarDropdown" role="" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./visual/media/logos/logologin1.png" alt="" class="rounded-circle perfil-img">
                        </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item textdrop drophover" href="#"><?php echo $_SESSION['nombre']; ?></a></li>
                                <li><a class="dropdown-item textdrop drophover" href="#">Another action</a></li>
                                <li>
                                 <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item textdrop drophover" href="./PHP/close_session.php">Cerrar Sesión</a></li>
                                </ul>
                        </li>
                        </form>
                    </div>
                </div>
            </nav>
</body>
</html>
 