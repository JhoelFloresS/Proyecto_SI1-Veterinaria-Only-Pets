<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="encabezadoSombra">
        <div class="textoEncabezado">Clinica veterinaria Only Pet's
        </div>
        <div class="encabezado">
        </div>
    </div>

    <!-- funcion boostrap crea un cuadrado en medio de la pantalla dado parametros en css -->
    <div class="container">
        <div class="rectanguloGrande">
            <div class="row">
                <div class="col-md-6">
                    <div class="rectanguloIzquierdo">
                        <div class="textIniciarSesion text-center">
                            <header>Iniciar Sesion</header>
                        </div>

                        <div class="email">Email</div>

                        <div class="form-group">
                            <input class="myInput" placeholder="Ingresa tu email" type="text" id="email" required>
                        </div>

                        <div class="contraseña">Contraseña</div>

                        <div class="form-group">
                            <input class="myInput" type="password" id="password" placeholder="Ingresa tu contraseña" required>
                        </div>

                        <input type="submit" class="buttonIniciarSesion" value="Iniciar Sesión">

                        <div class="texto text-center">
                            <header>¿Todavia no tienes una cuenta?</header>
                        </div>
                        <div class="texto1 text-center">
                            <a class="texto_registro" href="/register">Registrate aqui</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rectanguloDerecho">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>