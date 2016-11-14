<?php
    session_start();
    require './php/funciones.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lista .-</title>

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
       
    </head>

    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Biblioteca</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Favoritos</a></li>
                        <li><a href="#">Mi lista</a></li>
                        <li><a href="#">Mi cuenta</a></li>

                        <form class="navbar-form navbar-left" id="right" method=" GET " action="# ">
                            <div class="form-group">
                                <input type="text " class="form-control " placeholder="Anime ">
                                <button type="submit " class="btn btn-default ">Buscar</button>
                            </div>
                        </form>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <fieldset>
                            <legend>Lista de series[REGISTRO]</legend>
                            <form method="post">
                                <select id="Sources">
                                    <?php get_Sources()?>
                 </select>

                            </form>
                            <button id="btn-guardar">Guardar en lista.</button>
                        </fieldset>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <fieldset>
                            <legend>Lista de series[USUARIO]</legend>
                            <form method="post">
                                <select id="Sources_lista">
                                        <?php get_Sources_Usuario() ;?>
                                    </select>

                            </form>
                            <button id="btn-borrar">Borrar Source</button>
                        </fieldset>
                    </div>

                </div>

            </div>

        </main>
















        <script src="./js/jquery-3.1.1.min.js "></script>
        <script src="./js/bootstrap.js "></script>
        <script src="./js/script.js"></script>

    </body>

    </html>