<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/1402/1402219.png" />
    <meta name="theme-color" content="#daa37f">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Only Pet's</title>
</head>

<body>

    <!-- navigation menu -->
    <nav>
        <div class="navbar">
            <div class="logo"><a href="#">Only Pet's.</a></div>
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Acerca de Nosotros</a></li>
                <li><a href="#staff">Staff</a></li>
                <li><a href="#historia">Historia</a></li>
                <li><a href="#resultados">Resultados</a></li>
                <li><a href="#contacto">Contactanos</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="{{ route('login') }}" target="_blank">Ingresar</a></li>
                <li><a href="{{ route('register') }}" target="_blank">Registrar</a></li>
                <div class="cancel-btn">
                    <i class="fas fa-times"></i>
                </div>
            </ul>
        </div>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <div class="banner">
        <div class="banner__overlay">
            <div class="banner__container">
                <p class="banner__text">Bienvenido a Clinica Veterinaria Only Pet's</p>
                <h1 class="banner__title">Trabajamos contigo por la salud de tu mascota</h1>
            </div>
            <a href="#servicios">
                <img class="banner__scroll-down" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im0xMjEuMywzNC42Yy0xLjYtMS42LTQuMi0xLjYtNS44LDBsLTUxLDUxLjEtNTEuMS01MS4xYy0xLjYtMS42LTQuMi0xLjYtNS44LDAtMS42LDEuNi0xLjYsNC4yIDAsNS44bDUzLjksNTMuOWMwLjgsMC44IDEuOCwxLjIgMi45LDEuMiAxLDAgMi4xLTAuNCAyLjktMS4ybDUzLjktNTMuOWMxLjctMS42IDEuNy00LjIgMC4xLTUuOHoiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+Cjwvc3ZnPgo=" />
            </a>
        </div>
    </div>
    <div class="sect sect--type" id="servicios">
        <div class="container">
            <div class="row row--center">
                <div class="col-md-5 col-xs-8 col-sm-6 col--inbl">
                    <h1 class="sect__title_1">NUESTROS SERVICIOS</h1>
                </div>
            </div>
            <div class="row row--small row--margin row--center">
                <div class="col-md-4 col-sm-4 coffee">
                    <img src="/images/inicio/medicos-servicios.jpg" class="coffee__img">
                    <h2 class="coffee__name">Servicios Medicos</h2>
                    <p class="coffee__descr">
                        En ONLY PET'S ofrecemos servicios médicos veterinarios integrales. Contamos con el personal idóneo y las herramientas necesarias para dar la mejor atención a sus mascotas.
                    </p>
                    <p>Consulta:</p>
                    <ul>
                        <li>Consulta general</li>
                        <li>Consulta especializada</li>
                    </ul>
                    <p>Medicina preventiva:</p>
                    <ul>
                        <li>Cirugía</li>
                        <li>Protocolo de vacunación</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 coffee">
                    <img src="/images/inicio/estetica-servicios.jpg" class="coffee__img">
                    <h2 class="coffee__name">Estetica</h2>
                    <p class="coffee__descr">
                        En ONLY PET'S trabajamos en la prestación de servicios estéticos para mascotas. La calidad de nuestra labor profesional se encuentra avalada por la recomendación de nuestros clientes.
                    </p>
                    <p>Baños estéticos y medicados:</p>
                    <ul>
                        <li>Baños estéticos</li>
                        <li>Baños medicados</li>
                    </ul>
                    <p>Peluquería:</p>
                    <ul>
                        <li>Corte comercial</li>
                        <li>Estilismos en razas</li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 coffee">
                    <img src="/images/inicio/otros-servicios.jpg" class="coffee__img">
                    <h2 class="coffee__name">Otros Servicios</h2>
                    <p class="coffee__descr">
                        En ONLY PET'S ofrecemos productos farmacéuticos y artículos para mascotas. Somos una empresa sólida que cuenta con profesionales con una profunda sensibilidad hacia los animales.
                    </p>
                    <p>Pet shop:</p>
                    <ul>
                        <li>Alimentos</li>
                        <li>Pet shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sect sect--brown sect--no-bottom" id="nosotros">
        <div class="container">
            <div class="row row--center">
                <div class="col-md-5 col-sm-6 col--inbl ">
                    <h1 class="sect__title sect--white-text">Nosotros</h1>
                    <p class="sect__subtitle sect--white-text">
                        Somos una clínica veterinaria privada confiable con más de 20 años de experiencia médica. Nuestros médicos están altamente calificados y siempre a la vanguardia con los últimos protocolos diagnósticos y terapéuticos.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="story-img"></div>

    <div class="half-sect" id="staff">
        <div class="half half-sect__first">
            <div class="description">
                <h2 class="description__title">STAFF</h2>
                <p class="description__p">Nos esforzamos por brindar una atención integral, contando con el respaldo de un equipo de médicos de reconocida trayectoria en cada una sus especialidades y demás profesionales de la salud altamente capacitados en sus respectivas áreas médicas o quirúrgicas, que te brindarán una trato amable y cálido en cada una de tus visitas.</p>
            </div>

        </div>
        <div class="half half-sect__second"> </div>
    </div>

    <div class="sect sect--great" id="historia">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-7 col-sm-offset-4 col-md-offset-7">
                    <div class="description">
                        <h2 class="description__title">HISTORIA</h2>
                        <p class="description__p">Este proyecto inicio en el 2005 con un pequeño consultorio en un garaje de la Av. Tomas Marsano 1794 La Aurora-Miraflores. Nos mudamos a una calle en el distrito de Surquillo, llamada San Diego y desde allí el nombre. Luego de dos años y con la idea de implementar equipos diagnósticos y terapéuticos, rentamos esta linda cada que aun nos alberga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sect sect--best sect--center" id="resultados">
        <div class="container">
            <div class="row row--center">
                <div class="col-md-6 col-sm-7 col-xs-12">
                    <h1 class="sect__title best--bottom sect--white-text">NUESTROS RESULTADOS</h1>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <img src="https://cdn.icon-icons.com/icons2/1392/PNG/512/health_96630.png" class="best__img">
                            <h2 class="best__title">+300 Casos clínicos mensuales</h2>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <img src="https://cdn.icon-icons.com/icons2/2255/PNG/512/glove_gloves_icon_140172.png" class="best__img">
                            <h2 class="best__title">90% Procedimientos quirúrgicos son de mínima invasión</h2>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <img src="https://cdn.icon-icons.com/icons2/688/PNG/512/like-thumbs-up-hand-social-media_icon-icons.com_61429.png" class="best__img">
                            <h2 class="best__title">+20 Años de experiencia</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="three-img">
        <div class="col-md-4 col-sm-4 col-xs-4 three-img__img three-img--1"></div>
        <div class="col-md-4 col-xs-4 col-sm-4 three-img__img three-img--2"></div>
        <div class="col-md-4 col-xs-4 col-sm-4 three-img__img three-img--3"></div>
    </div>


    <div class="sect blog sect--grey">
        <div class="container">
            <div class="row row--center">
                <div class="col-md-5 col-sm-6 col--inbl">
                    <h1 class="sect__title">Desarrolladores Web</h1>
                </div>
            </div>
            <div class="row last-articles">
                <div class="col-md-4 col-sm-4">
                    <div class="article-pre article-pre-1">
                        <div class="article-pre__img">
                        </div>
                        <div class="article-pre__info">
                            <h1 class="article-pre__title">
                                Toledo Canna Marco David
                            </h1>
                            <span class="article-pre__date">Frontend</span>
                            <p class="article-pre__ex">
                                Implementador Frontend y aporte Backend
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="article-pre article-pre-2">
                        <div class="article-pre__img">
                        </div>
                        <div class="article-pre__info">
                            <h1 class="article-pre__title">
                                Ramírez Pineda Ricky Roy
                            </h1>
                            <span class="article-pre__date">Backend</span>
                            <p class="article-pre__ex">
                                Implementador Backend y aporte Frontend
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="article-pre article-pre-3">
                        <div class="article-pre__img">
                        </div>
                        <div class="article-pre__info">
                            <h1 class="article-pre__title">
                                Sucre Hinojosa Johnny
                            </h1>
                            <span class="article-pre__date">Frontend</span>
                            <p class="article-pre__ex">
                                Implementador Frontend y aporte Backend
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4" style="margin-top: 3%;">
                    <div class="article-pre article-pre-4">
                        <div class="article-pre__img">
                        </div>
                        <div class="article-pre__info">
                            <h1 class="article-pre__title">
                                Torres Rocha Luis Alejandro
                            </h1>
                            <span class="article-pre__date">Documentacion</span>
                            <p class="article-pre__ex">
                                Documentacion y aporte Backend
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4" style="margin-top: 3%;">
                    <div class="article-pre article-pre-5">
                        <div class="article-pre__img">
                        </div>
                        <div class="article-pre__info">
                            <h1 class="article-pre__title">
                                Flores Sarmiento Kevin Jhoel
                            </h1>
                            <span class="article-pre__date">Backend</span>
                            <p class="article-pre__ex">
                                Implementador Backend y aporte Frontend
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row--margin row--center">
                <a href="#" class="btn">Inicio</a>
            </div>
        </div>
    </div>
    <div class="sect-t-footer" id="contacto"></div>

    <footer class="footer">
        <div class="footer__half footer__half-1">
            <h2 class="footer__big-title">¡VEN YA!</h2>
            <h3 class="footer__title">Dias a la semana</h3>
            <p class="footer__desc">08AM - 8PM</p>
            <h3 class="footer__title">Fines de Semana</h3>
            <p class="footer__desc">08AM- 2PM</p>
        </div>
        <div class="footer__half footer__half-2">
            <h2 class="footer__big-title">CONTACTANOS</h2>
            <h3 class="footer__title">Telefono</h3>
            <p class="footer__desc">+(000) 111 222 333</p>
            <h3 class="footer__title">Correo Electronico</h3>
            <p class="footer__desc">address@mail.com</p>
            <h3 class="footer__title">Direccion</h3>
            <p class="footer__desc">543 TN, doula street<br>
                NY, New York
            </p>
        </div>
    </footer>
    <!-- Libreria jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/inicio.js') }}"></script>

</body>

</html>