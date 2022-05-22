<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <title>Registro</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,100;1,600&display=swap');

        body {
            background-image: url(/images/login/fondo.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .encabezadoSombra {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        }

        .textoEncabezado {
            background-color: #2FE276;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            padding: 0.2rem 2rem;
        }

        .encabezado {
            background-color: #2FE276;
            background-image: url(/images/login/encabezado.png);
            background-repeat: no-repeat;
            height: 80px;
            bottom: 0px;
            width: 100%;
        }

        /*funcion boostrap crea un cuadrado en medio de la pantalla dado parametros en css*/
        .container {
            position: absolute;
            max-width: 1000px;
            height: 500px;
            margin: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .rectanguloDerecho {
            position: relative;
            background: #2FE276;
            border-radius: 10px;
            height: 100%;
            padding: 25px;
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(/images/login/welcome.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }

        .rectanguloIzquierdo {
            position: relative;
            background: #fff;
            border-radius: 10px;
            height: 100%;
            padding: 25px;
            padding-left: 50px;
        }

        .row {
            height: 100%;
        }

        .rectanguloGrande {
            position: relative;
            background: #fff;
            height: 100%;
            border-radius: 25px;

            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        }

        .textIniciarSesion {
            position: absolute;

            color: #545454;
            font-size: 24px;
            font-weight: 700;

            position: relative;
            /* margen con el de arriba */
            margin-top: 40px;
        }

        .nombre,
        .apellido,
        .email,
        .contraseña,
        .texto2 {
            color: black;
            margin-top: 18px;
            font-weight: 600;
            font-size: 15px;
        }

        .buttonRegistrame {
            font-size: 20px;
            font-weight: 700;

            width: 250px;
            padding: 13px;

            /* margen con el de arriba*/
            margin-top: 40px;

            /* centrando el boton */
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .buttonTengoCuenta{
            font-size: 20px;
            font-weight: 700;
            text-align: center;

            width: 250px;
            padding: 13px;

             /* centrando el boton */
             display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* sombreado de los botones , color de letra , borde y color del contorno*/
        .buttonRegistrame {
            /* color contorno*/
            background: #2FE276;
            /* color de la letra*/
            color: #fff;
            /* sombreado*/
            box-shadow: 0px 10px 20px rgba(47, 226, 118, 0.41);
            /*borde*/
            border-radius: 10px;
            border: none;
        }

        .buttonTengoCuenta {
            /* color contorno*/
            background:#fff;
            /* color de la letra*/
            color:#2FE276;
            /* sombreado*/
            box-shadow: 0px 10px 20px rgba(47, 226, 118, 0.41);
            /*borde*/
            border-radius: 10px;
            border: none;

            margin-top: 20px;
        }

        .myInput {
            height: 100%;
            width: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 3px solid #2FE276;
            margin-top: 10px;
            outline: 0px;
        }

        .texto {
            margin-top: 25px;
        }

        .texto1 {
            margin-top: 10px;
        }
    </style>
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
                            <header>Crear una cuenta</header>
                        </div>

                        <form action="{{ route('usuarios.store') }}" method="POST">
                            @csrf
                            <div class="nombre">Nombre</div>

                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu Nombre" type="text" id="nombre" required 
                                name="nombre" value="{{old('nombre')}}">
                            </div>
    
                            <div class="apellido">Apellido Paterno</div>
    
                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu Apellido Paterno" type="text" id="apellido" required 
                                name="apellido_paterno" value="{{old('apellido_paterno')}}">
                            </div>
    
                            <div class="apellido">Apellido Materno</div>
    
                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu Apellido Materno" type="text" id="apellido" required 
                                name="apellido_materno" value="{{old('apellido_materno')}}">
                            </div>
    
                            <div class="apellido">Ci</div>
    
                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu Ci" type="text" id="apellido"
                                name="ci" value="{{old('ci')}}">
                            </div>
    
                            <div class="apellido">Direccion</div>
    
                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu direccion" type="text" id="apellido"
                                name="direccion" value="{{old('direccion')}}">
                            </div>
    
                            <div class="email">email</div>
    
                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu email" type="email" id="email" required 
                                name="email" value="{{old('email')}}">
                            </div>
    
                            <div class="apellido">Fecha de nacimiento</div>
    
                            <div class="form-group">
                                <input class="myInput" type="date" id="apellido" 
                                name="fecha_de_nacimiento" value="{{old('fecha_de_nacimiento')}}">
                            </div>
    
                            <div class="apellido">Sexo</div>
    
                            <div class="radio-inputs">
                                <input type="radio" id="apellido" 
                                name="sexo" value="{{'M'}}" checked>
                                <label class="">Masculino</label>
                                <input type="radio" id="apellido"
                                name="sexo" value="{{'F'}}">
                                <label class="">Femenino</label>
                            </div>
    
                            <div class="apellido">Usuario</div>
    
                            <div class="form-group">
                                <input class="myInput" placeholder="Ingresa tu nombre de usuario" type="text" id="apellido" required 
                                name="nombre_usuario" value="{{old('nombre_usuario')}}">
                            </div>
    
                            <div class="contraseña">Contraseña</div>
                            
                            <div class="form-group">
                                <input class="myInput" type="password" id="password" placeholder="Ingresa tu contraseña" required 
                                name="password">
                            </div>

                            <div class="contraseña">Confirmar contraseña</div>
    
                            <div class="form-group">
                                <input class="myInput" type="password" id="Conf_password" placeholder="Repite tu contraseña" required 
                                name="password_confirmation">
                            </div>
    
                            <div class="texto2 text-center">
                                <header>Acepto los terminos y condiciones del servicio</header>
                            </div>
    
                            <input type="submit" class="buttonRegistrame" value="Registrarme">
                        </form>

                        <a type='button'class="buttonTengoCuenta" href="http://127.0.0.1:8000/login">Ya tengo cuenta</a>                      

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