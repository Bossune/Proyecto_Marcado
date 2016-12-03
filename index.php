<?php
    session_start();
    require './php/funciones.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria .-</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <spBBan class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#">Libreria </a></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <?php if(!empty($_SESSION['Usuario'])){?>
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="#">Favoritos </a></li>
                    <li role="presentation"><a href="#">Mi Lista</a></li>
                    <li role="presentation"></li>
                </ul>
                <form class="navbar-form navbar-right" method="get" action="./Buscador.php">
                    <input class="form-control" type="text" name="Anime" placeholder="Anime">
                    <button class="btn btn-info" type="submit">Buscar </button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><?php echo $_SESSION['Usuario']?></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">Mi perfil</a></li>
                            <li><a href="./php/logout.php">Desconectar </a></li>
                        </ul>
                    </li>
                </ul>
                <?php }
                    else{?>
                <form class="navbar-form navbar-right visible-lg-inline-block" action="./php/login.php" method="post">
                    <input class="form-control" type="text" name="Usuario" required="" placeholder="Usuario" autofocus="" autocomplete="on"><span> </span>
                    <input class="form-control" type="password" name="Password" required="" placeholder="Contraseña">
                    <button class="btn btn-success" type="submit">Ingresar </button>
                </form>
                    <?php }?>
            </div>
        </div>
    </nav>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>