<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C:\Users\Bossun\Desktop\bootstrap studio 2-win32-x64\Nueva carpeta\Libreria</title>
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
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="#">Favoritos </a></li>
                    <li role="presentation"><a href="#">Mi Lista</a></li>
                    <li role="presentation"></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input class="form-control" type="text" name="Anime" placeholder="Anime">
                    <button class="btn btn-info" type="button">Buscar </button>
                </form>
                <form class="navbar-form navbar-right visible-lg-inline-block" action="./php/login.php" method="post">
                    <input class="form-control" type="text" name="Usuario" required="" placeholder="Usuario" autofocus="" autocomplete="on"><span> </span>
                    <input class="form-control" type="password" name="Password" required="" placeholder="Contraseña">
                    <button class="btn btn-success" type="submit">Ingresar </button>

                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Nombre de Usuario</a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#">MI perfil</a></li>
                            <li><a href="#">Desconectar </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="form-group"></div>
        <form id="Registro" class="bootstrap-form-with-validation" enctype="multipart/form-data" method="post" action="./php/Registro.php">
            <h2 class="text-center">Registro de Usuario</h2>
            <div class="form-group">
                <label class="control-label" for="text-input">Nombre de Usuario:</label>
                <input class="form-control" type="text" name="Nombre_Usuario" required="" id="text-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input">Contraseña: </label>
                <input class="form-control" type="password" id="pass" name="Contraseña" required="" id="password-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="password-input">Retipa la contraseña </label>
                <input class="form-control" type="password" id="pass_re" name="Contraseña_repetido" required="" id="email-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="email-input">Email:</label>
                <input class="form-control" type="email" name="Email" required="" id="email-input">
            </div>
            <div class="form-group">
                <label class="control-label" for="Avatar">Avatar:(No obligatorio):</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                <input type="file" name="subida" id="Avatar">
            </div>
            <div class="form-group">
                <button id="enviar" class="btn btn-primary" type="submit">Registrarte </button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Bloqueo_form.js"></script>
</body>

</html>