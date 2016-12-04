<?php
    session_start();
    require './php/funciones.php';

    if(!empty($_GET['id']) && !empty($_SESSION['Id']))
    {
        $Anime  = get_Anime($_GET['id']);
        $Anime_Usuario = get_Libreria($_GET['id'],$_SESSION['Id']);
    }
    else
    {
        header('Location: ./index.php');
    }


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
                    <span class="icon-bar"></span>
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
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">
                                <?php echo $_SESSION['Usuario']?>
                            </a>
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
        <div class="container ">
            <?php 
            if (!empty($Anime)){        
        ?>
            <div class="row ">
                <div class="col-md-12 ">
                    <h1 class="text-center ">
                        <?php echo $Anime['Titulo'] ; ?>
                    </h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-sm-6 col-xs-12 "><img class="img-responsive " src="./php/get_img.php?id=<?php echo $Anime['Id_Source']?>" id="anime_portada "></div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h3>Descripción: </h3>
                    <p class="text-left " id="descripcion ">
                        <?php echo $Anime['Descripcion'];   ?>
                    </p>
                    <div class="row">
                        <?php if(empty($Anime_Usuario)){?>
                            <div class="col-md-6">
                                <h4 class="text-center">Nota: <?php echo $Anime['Nota']?></h4>
                            </div>
                        <?php }
                            else
                        {?>        
                        <div class="col-md-6">
                            <h4 class="text-center">Nota: <?php echo $Anime['Nota']?></h4>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">Tu Nota: <?php echo $Anime_Usuario -> Nota_personal?></h4>
                        </div>
                        <?php }?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-center">N° Capitulos: <?php echo $Anime['Capitulos']?></h4>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-center">Duracion Capitulo: <?php echo $Anime['Duracion_Capitulos']?> min.</h4>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row ">
                
                <?php if(empty($Anime_Usuario)){?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <a href="./php/Agregar_Anime.php?id=<?php echo $_GET['id']; ?>"><button class="btn btn-success btn-block " type="button ">Agregar a la Libreria</button></a>
                </div>
                <?php }
                else
                {?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <a href="./php/Borrar_Anime.php?id=<?php echo $_GET['id']; ?>"><button class="btn btn-danger btn-block " type="button ">Borrar de la libreria</button></a>
                </div>
                <?php }?>
            </div>
            <?php } 
            else{
            ?>
            <h2> No se encuenta el id la base de datos</h2>
            <?php 
            }
            ?>

        </div>
        <script src="assets/js/jquery.min.js "></script>
        <script src="assets/bootstrap/js/bootstrap.min.js "></script>
    </body>

    </html>