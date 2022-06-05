<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1402/1402219.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login2.css')}}">
    <title>Ingresar</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Crear Cuenta</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu correo electronico para registrarte</span>
                <div class="contenedor">
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Nombre</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Apellido Paterno</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Apellido Materno</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="" required="">
                        <label>Password</label>
                    </div>
                </div>
                <div class="iniciar">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Registar
                    </a>
                </div>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Ingresa con</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu cuenta</span>
                <div class="contenedor">
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="" required="">
                        <label>Password</label>
                    </div>
                </div>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <div class="iniciar">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Ingresar
                    </a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Ingresar</button>
                    <img style="height: 270px; margin-top: 10%;" src="/images/login/perrito.png">
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola, Amigo!</h1>
                    <p>Ingresa tus datos personales</p>
                    <button class="ghost" id="signUp">Registrar</button>
                    <img style="height: 270px;" src="/images/login/gato.png">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login2.js') }}"></script>
</body>

</html>