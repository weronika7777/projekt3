<!DOCTYPE html>
<html lang="pl">
<meta charset="UTF-8">
<head style="font-size: 50pt">
    <title>Cytrusowe Love</title>
    <script src="js/JQuery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<header style="font-size: 50pt"  >Cytrusowe love
</header>
<body>
<div class="cointeiner-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">MENU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                        <a class="nav-link" href="skrypt.php">Strona Główna
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skrypt.php?pokaz=2">Cennik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skrypt.php?pokaz=3">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skrypt.php?pokaz=4">Logowanie</a>
                    </li>

                </ul>
            </div>
        </nav>
        <section>
            <?php
                if($_GET['pokaz'] == ""){
                    include("index.php");
                }
                if($_GET['pokaz'] == "2"){
                    include("cennik.php");
                }
                if($_GET['pokaz'] == "3"){
                    include("galeria.php");
                }
                if($_GET['pokaz'] == "4"){
                    include("logowanie.php");
                }

            ?>
        </section>
    <footer> Stronka stworzona na potrzeby przedmoitu</footer>
</body>
</html>