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
    <link rel="stylesheet" href="{{ asset('css/animacion-inicio.css') }}">
    <title>Only Pet{{"'"}}s</title>
</head>

<body>

    <!-- navigation menu -->
    <nav>
        <div class="navbar">
            <div class="logo"><a href="#">Only Pet{{"'"}}s.</a></div>
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Acerca de Nosotros</a></li>
                <li><a href="#staff">Staff</a></li>
                <li><a href="#historia">Historia</a></li>
                <li><a href="#resultados">Resultados</a></li>
                <li><a href="#ubicacion">Ubicacion</a></li>
                <li><a href="#contacto">Contactanos</a></li>
                <li><a href="/shop">Tienda</a></li>
                <li><a href="{{ route('login') }}" target="_blank">Ingresar</a></li>
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
                <p class="banner__text">Bienvenido a Clinica Veterinaria Only Pet{{"'"}}s</p>
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
                    <img src="{{asset('/images/inicio/medicos-servicios.jpg')}}" class="coffee__img">
                    <h2 class="coffee__name">Servicios Medicos</h2>
                    <p class="coffee__descr">
                        En ONLY PET'\''S ofrecemos servicios médicos veterinarios integrales. Contamos con el personal idóneo y las herramientas necesarias para dar la mejor atención a sus mascotas.
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
                    <img src="{{asset('/images/inicio/estetica-servicios.jpg')}}" class="coffee__img">
                    <h2 class="coffee__name">Estetica</h2>
                    <p class="coffee__descr">
                        En ONLY PET{{"'"}}S trabajamos en la prestación de servicios estéticos para mascotas. La calidad de nuestra labor profesional se encuentra avalada por la recomendación de nuestros clientes.
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
                    <img src="{{asset('/images/inicio/otros-servicios.jpg')}}" class="coffee__img">
                    <h2 class="coffee__name">Otros Servicios</h2>
                    <p class="coffee__descr">
                        En ONLY PETS ofrecemos productos farmacéuticos y artículos para mascotas. Somos una empresa sólida que cuenta con profesionales con una profunda sensibilidad hacia los animales.
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
                    <h1 class="sect__title">Desarrolladores Sistema de Informacion</h1>
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

                <div class="col-md-4 col-sm-4" style="margin-top: 3%;">
                    <!-- ANIMACION COMPUTADORA -->
                    <svg viewBox="-50 0 500 458.4" width="250" height="350">

                        <defs>
                            <filter id="f1" x="0" y="0" width="200%" height="200%">
                                <feGaussianBlur stdDeviation="7" />
                            </filter>
                        </defs>

                        <g id="shadow" filter="url(#f1)">
                            <path fill="#151618" d="m14,358l149,86l235,-136l-150,-87l-234,137z" />
                        </g>

                        <g id="hole">
                            <ellipse cx="200" cy="360" rx="240" ry="115" />
                        </g>

                        <g>
                            <defs>
                                <path id="computer-cover" d="m-37,-41l480,0l0,399q-15,110 -240,115q-225,-10 -240,-115l0,-399z" />
                            </defs>
                            <clipPath id="computer-clip">
                                <use xlink:href="#computer-cover" overflow="hidden" />
                            </clipPath>
                            <g clip-path="url(#computer-clip)">
                                <g id="computer">
                                    <g id="screen">
                                        <g id="corner-top-right">
                                            <defs>
                                                <path id="SVGID_1_" d="M240.8,9.2l4.5,2.6c-1-0.6-2.4-0.5-3.9,0.4l-4.5-2.6 C238.4,8.7,239.8,8.6,240.8,9.2z" />
                                            </defs>
                                            <clipPath id="SVGID_2_">
                                                <use xlink:href="#SVGID_1_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_2_)">
                                                <path fill="#C7C8CA" d="M241.4,12.2l-4.5-2.6c0.3-0.1,0.5-0.3,0.8-0.4l4.5,2.6C241.9,11.9,241.7,12,241.4,12.2" />
                                                <path fill="#C3C4C6" d="M242.2,11.8l-4.5-2.6c0.2-0.1,0.4-0.2,0.6-0.2l4.5,2.6C242.6,11.6,242.4,11.7,242.2,11.8" />
                                                <path fill="#BFC0C2" d="M242.8,11.6l-4.5-2.6c0.2,0,0.3-0.1,0.5-0.1l4.5,2.6C243.1,11.5,243,11.5,242.8,11.6" />
                                                <path fill="#BBBCBE" d="M243.3,11.5l-4.5-2.6c0.1,0,0.3,0,0.4,0l4.5,2.6C243.6,11.4,243.4,11.4,243.3,11.5" />
                                                <path fill="#B7B9BA" d="M243.7,11.4l-4.5-2.6c0.1,0,0.2,0,0.4,0l4.5,2.6C243.9,11.4,243.8,11.4,243.7,11.4" />
                                                <path fill="#B3B5B6" d="M244.1,11.4l-4.5-2.6c0.1,0,0.2,0,0.3,0l4.5,2.6C244.3,11.4,244.2,11.4,244.1,11.4" />
                                                <path fill="#AFB1B3" d="M244.4,11.5l-4.5-2.6c0.1,0,0.2,0,0.3,0.1l4.5,2.6C244.6,11.5,244.5,11.5,244.4,11.5" />
                                                <path fill="#ABADAF" d="M244.7,11.5l-4.5-2.6c0.1,0,0.2,0.1,0.3,0.1l4.5,2.6C244.9,11.6,244.8,11.6,244.7,11.5" />
                                                <path fill="#A7A9AB" d="M245,11.6L240.5,9c0.1,0,0.2,0.1,0.3,0.1l4.5,2.6C245.2,11.7,245.1,11.7,245,11.6" />
                                                <path fill="#A3A5A7" d="M245.3,11.8l-4.5-2.6c0,0,0,0,0,0L245.3,11.8C245.3,11.8,245.3,11.8,245.3,11.8" />
                                            </g>
                                        </g>
                                        <g id="corner-bottom-left">
                                            <defs>
                                                <path id="SVGID_3_" d="M16.3,315.7l-4.5-2.6c-1-0.6-1.6-1.8-1.6-3.5l4.5,2.6
                            C14.7,313.9,15.4,315.1,16.3,315.7z" />
                                            </defs>
                                            <clipPath id="SVGID_4_">
                                                <use xlink:href="#SVGID_3_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_4_)">
                                                <path fill="#909294" d="M16.3,315.7l-4.5-2.6c-1-0.6-1.6-1.8-1.6-3.5l4.5,2.6C14.7,313.9,15.4,315.1,16.3,315.7" />
                                            </g>
                                        </g>
                                        <polygon id="border-left" fill="#939497" points="14.7,312.2 10.2,309.5 9.8,147 14.3,149.6" />
                                        <polygon id="border-top" fill="#D3D4D5" points="19.8,140.1 15.2,137.5 236.9,9.5 241.4,12.2" />
                                        <path id="frame" fill="#606161" d="M241.4,12.2c3-1.7,5.5-0.3,5.5,3.1l0.5,162.5c0,3.5-2.5,7.7-5.5,9.5l-221.6,128c-3,1.7-5.5,0.3-5.5-3.1
                        l-0.5-162.5c0-3.5,2.5-7.7,5.5-9.5L241.4,12.2z" />
                                        <g id="corner-top-left">
                                            <defs>
                                                <path id="SVGID_5_" d="M14.3,149.6L9.8,147c0-3.5,2.5-7.7,5.5-9.5l4.5,2.6
                            C16.7,141.9,14.3,146.2,14.3,149.6z" />
                                            </defs>
                                            <clipPath id="SVGID_6_">
                                                <use xlink:href="#SVGID_5_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_6_)">
                                                <path fill="#909294" d="M14.3,149.6L9.8,147c0-0.3,0-0.7,0.1-1.1l4.5,2.6C14.3,148.9,14.3,149.3,14.3,149.6" />
                                                <path fill="#949598" d="M14.3,148.6l-4.5-2.6c0-0.3,0.1-0.5,0.1-0.8l4.5,2.6C14.4,148.1,14.4,148.3,14.3,148.6" />
                                                <path fill="#98999C" d="M14.5,147.8l-4.5-2.6c0-0.2,0.1-0.4,0.2-0.6l4.5,2.6C14.6,147.4,14.5,147.6,14.5,147.8" />
                                                <path fill="#9B9D9F" d="M14.6,147.2l-4.5-2.6c0.1-0.2,0.1-0.4,0.2-0.6l4.5,2.6C14.7,146.8,14.7,147,14.6,147.2" />
                                                <path fill="#9FA1A3" d="M14.8,146.6l-4.5-2.6c0.1-0.2,0.1-0.3,0.2-0.5l4.5,2.6C14.9,146.3,14.9,146.4,14.8,146.6" />
                                                <path fill="#A3A5A7" d="M15,146.1l-4.5-2.6c0.1-0.2,0.1-0.3,0.2-0.5l4.5,2.6C15.1,145.8,15.1,145.9,15,146.1" />
                                                <path fill="#A7A9AB" d="M15.2,145.6l-4.5-2.6c0.1-0.2,0.1-0.3,0.2-0.5l4.5,2.6C15.3,145.3,15.3,145.4,15.2,145.6" />
                                                <path fill="#ABADAF" d="M15.4,145.1l-4.5-2.6c0.1-0.2,0.2-0.3,0.2-0.5l4.5,2.6C15.6,144.8,15.5,145,15.4,145.1" />
                                                <path fill="#AFB1B3" d="M15.7,144.6l-4.5-2.6c0.1-0.2,0.2-0.3,0.3-0.5l4.5,2.6C15.8,144.3,15.7,144.5,15.7,144.6" />
                                                <path fill="#B3B5B6" d="M15.9,144.2l-4.5-2.6c0.1-0.2,0.2-0.3,0.3-0.5l4.5,2.6C16.1,143.9,16,144,15.9,144.2" />
                                                <path fill="#B7B9BA" d="M16.2,143.7l-4.5-2.6c0.1-0.2,0.2-0.3,0.3-0.5l4.5,2.6C16.4,143.4,16.3,143.6,16.2,143.7" />
                                                <path fill="#BBBCBE" d="M16.5,143.2l-4.5-2.6c0.1-0.2,0.2-0.3,0.4-0.5l4.5,2.6C16.8,142.9,16.6,143.1,16.5,143.2" />
                                                <path fill="#BFC0C2" d="M16.9,142.7l-4.5-2.6c0.1-0.2,0.3-0.4,0.4-0.5l4.5,2.6C17.2,142.4,17,142.5,16.9,142.7" />
                                                <path fill="#C3C4C6" d="M17.3,142.2l-4.5-2.6c0.2-0.2,0.4-0.4,0.6-0.6l4.5,2.6C17.7,141.8,17.5,142,17.3,142.2" />
                                                <path fill="#C7C8CA" d="M17.9,141.6l-4.5-2.6c0.6-0.6,1.2-1,1.8-1.4l4.5,2.6C19.1,140.5,18.5,141,17.9,141.6" />
                                            </g>
                                        </g>

                                        <polygon id="code-blue-bg" fill="#8ED4DC" points="238.5,22.8 239,174 23.3,298.5 22.9,147.3" />
                                        <path class="screen" fill="#11191A" d="M239.6,23.2c0-2.3-0.4-2.3-1.7-1.6c-0.5,0.3-1.2,0.7-2,1.2l-211.3,122c-0.8,0.5-1.3,0.7-1.7,0.9 c-0.8,0.5-0.5,0.6-0.5,2.9L22.9,302c0,2.2-0.3,2.7,0.5,2.3c0.3-0.2,0.9-0.6,1.7-1l212-122.4c0.8-0.5,1.4-0.8,1.8-1 c1-0.6,1.1-1,1.1-3.2L239.6,23.2z" />

                                        <g>
                                            <defs>
                                                <path id="code-cover-screen-1" d="m26.5,210l209.5,-118.5l2,89l-213,123l1.5,-93.5z" />
                                            </defs>
                                            <clipPath id="clip-path-screen-2">
                                                <use xlink:href="#code-cover-screen-1" overflow="hidden" />
                                            </clipPath>
                                            <g clip-path="url(#clip-path-screen-2">
                                                <g id="scrolling-code">
                                                    <polygon class="code line-1" fill="#7D7E7E" points="93.9,176.3 93.9,182.2 56.6,203.8 56.5,197.9" />
                                                    <polygon class="code line-1" fill="#3B963D" points="47.6,203 47.7,208.9 34.6,216.4 34.6,210.5" />
                                                    <polygon class="code line-1" fill="#7D7E7E" points="144.7,147 144.7,152.9 98.2,179.7 98.2,173.8" />
                                                    <polygon class="code line-1" fill="#7D7E7E" points="187.7,122.1 187.7,128 149,150.4 149,144.5" />

                                                    <polygon class="code line-2" fill="#3A4488" points="51.9,211.8 51.9,217.7 29.2,230.8 29.2,224.9" />
                                                    <polygon class="code line-2" fill="#7D7E7E" points="179.5,138.1 179.5,144 140.8,166.3 140.8,160.4" />
                                                    <polygon class="code line-2" fill="#7D7E7E" points="136.2,163.1 136.2,169 98.2,191 98.2,185.1" />
                                                    <polygon class="code line-2" fill="#7D7E7E" points="88.5,190.6 88.5,196.5 56.6,215 56.6,209.1" />

                                                    <polygon class="code line-3" fill="#CA9733" points="47.7,224.8 47.7,230.7 34.7,238.3 34.7,232.4" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="151.4,165 151.4,170.9 126,185.6 126,179.7" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="121.2,182.4 121.2,188.3 98.2,201.6 98.2,195.7" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="183.9,146.2 183.9,152.1 158.5,166.8 158.5,160.9" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="93.9,198.2 93.9,204.1 56.6,225.6 56.6,219.7" />

                                                    <polygon class="code line-4" fill="#3A4488" points="52,231.8 52,237.7 29.3,250.8 29.3,244.9" />
                                                    <polygon class="code line-4" fill="#7D7E7E" points="169.8,163.8 169.8,169.7 131.1,192 131.1,186.1" />
                                                    <polygon class="code line-4" fill="#7D7E7E" points="126.9,188.6 126.9,194.5 98.3,211 98.2,205.1" />
                                                    <polygon class="code line-4" fill="#7D7E7E" points="89.3,210.3 89.3,216.2 56.7,235.1 56.6,229.1" />

                                                    <polygon class="code line-5" fill="#3B963D" points="47.8,246.1 47.8,252 34.7,259.5 34.7,253.6" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="186.3,166.1 186.4,172 167.8,182.7 167.8,176.8" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="163.1,179.5 163.1,185.4 135.4,201.4 135.4,195.5" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="93.3,219.8 93.3,225.7 56.7,246.9 56.7,241" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="130.7,198.2 130.7,204.1 98.3,222.8 98.3,216.9" />

                                                    <polygon class="code line-6" fill="#3B963D" points="47.8,256.7 47.8,262.6 34.8,270.2 34.8,264.2" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="182.1,178.6 182.1,184.5 158.6,198.1 158.6,192.2" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="131.2,208.6 131.2,214.5 98.3,233.5 98.3,227.6" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="154.1,195.3 154.2,201.2 135.4,212.1 135.4,206.1" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="94,230 94,235.9 56.7,257.5 56.7,251.6" />

                                                    <polygon class="code line-7" fill="#7D7E7E" points="163.1,200.2 163.1,206.1 131.2,224.5 131.2,218.6" />
                                                    <polygon class="code line-7" fill="#7D7E7E" points="186.4,186.8 186.4,192.7 167.9,203.4 167.9,197.5" />
                                                    <polygon class="code line-7" fill="#7D7E7E" points="127,221.1 127,227 98.4,243.5 98.3,237.6" />

                                                    <polygon class="code line-8" fill="#7D7E7E" points="121.3,235.6 121.4,241.5 98.4,254.7 98.4,248.8" />
                                                    <polygon class="code line-8" fill="#7D7E7E" points="184.1,199.3 184.1,205.2 158.7,219.9 158.6,214" />
                                                    <polygon class="code line-8" fill="#7D7E7E" points="151.5,218.1 126.1,232.8 126.1,238.7 151.6,224" />
                                                </g>
                                            </g>

                                            <g clip-path="url(#clip-path-screen-2">
                                                <g id="scrolling-code-2">
                                                    <polygon class="code line-1" fill="#7D7E7E" points="93.9,176.3 93.9,182.2 56.6,203.8 56.5,197.9" />
                                                    <polygon class="code line-1" fill="#3B963D" points="47.6,203 47.7,208.9 34.6,216.4 34.6,210.5" />
                                                    <polygon class="code line-1" fill="#7D7E7E" points="144.7,147 144.7,152.9 98.2,179.7 98.2,173.8" />
                                                    <polygon class="code line-1" fill="#7D7E7E" points="187.7,122.1 187.7,128 149,150.4 149,144.5" />

                                                    <polygon class="code line-2" fill="#3A4488" points="51.9,211.8 51.9,217.7 29.2,230.8 29.2,224.9" />
                                                    <polygon class="code line-2" fill="#7D7E7E" points="179.5,138.1 179.5,144 140.8,166.3 140.8,160.4" />
                                                    <polygon class="code line-2" fill="#7D7E7E" points="136.2,163.1 136.2,169 98.2,191 98.2,185.1" />
                                                    <polygon class="code line-2" fill="#7D7E7E" points="88.5,190.6 88.5,196.5 56.6,215 56.6,209.1" />

                                                    <polygon class="code line-3" fill="#CA9733" points="47.7,224.8 47.7,230.7 34.7,238.3 34.7,232.4" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="151.4,165 151.4,170.9 126,185.6 126,179.7" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="121.2,182.4 121.2,188.3 98.2,201.6 98.2,195.7" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="183.9,146.2 183.9,152.1 158.5,166.8 158.5,160.9" />
                                                    <polygon class="code line-3" fill="#7D7E7E" points="93.9,198.2 93.9,204.1 56.6,225.6 56.6,219.7" />

                                                    <polygon class="code line-4" fill="#3A4488" points="52,231.8 52,237.7 29.3,250.8 29.3,244.9" />
                                                    <polygon class="code line-4" fill="#7D7E7E" points="169.8,163.8 169.8,169.7 131.1,192 131.1,186.1" />
                                                    <polygon class="code line-4" fill="#7D7E7E" points="126.9,188.6 126.9,194.5 98.3,211 98.2,205.1" />
                                                    <polygon class="code line-4" fill="#7D7E7E" points="89.3,210.3 89.3,216.2 56.7,235.1 56.6,229.1" />

                                                    <polygon class="code line-5" fill="#3B963D" points="47.8,246.1 47.8,252 34.7,259.5 34.7,253.6" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="186.3,166.1 186.4,172 167.8,182.7 167.8,176.8" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="163.1,179.5 163.1,185.4 135.4,201.4 135.4,195.5" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="93.3,219.8 93.3,225.7 56.7,246.9 56.7,241" />
                                                    <polygon class="code line-5" fill="#7D7E7E" points="130.7,198.2 130.7,204.1 98.3,222.8 98.3,216.9" />

                                                    <polygon class="code line-6" fill="#3B963D" points="47.8,256.7 47.8,262.6 34.8,270.2 34.8,264.2" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="182.1,178.6 182.1,184.5 158.6,198.1 158.6,192.2" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="131.2,208.6 131.2,214.5 98.3,233.5 98.3,227.6" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="154.1,195.3 154.2,201.2 135.4,212.1 135.4,206.1" />
                                                    <polygon class="code line-6" fill="#7D7E7E" points="94,230 94,235.9 56.7,257.5 56.7,251.6" />

                                                    <polygon class="code line-7" fill="#7D7E7E" points="163.1,200.2 163.1,206.1 131.2,224.5 131.2,218.6" />
                                                    <polygon class="code line-7" fill="#7D7E7E" points="186.4,186.8 186.4,192.7 167.9,203.4 167.9,197.5" />
                                                    <polygon class="code line-7" fill="#7D7E7E" points="127,221.1 127,227 98.4,243.5 98.3,237.6" />

                                                    <polygon class="code line-8" fill="#7D7E7E" points="121.3,235.6 121.4,241.5 98.4,254.7 98.4,248.8" />
                                                    <polygon class="code line-8" fill="#7D7E7E" points="184.1,199.3 184.1,205.2 158.7,219.9 158.6,214" />
                                                    <polygon class="code line-8" fill="#7D7E7E" points="151.5,218.1 126.1,232.8 126.1,238.7 151.6,224" />
                                                </g>
                                            </g>
                                        </g>

                                        <polygon class="code line-0" fill="#A2A75C" points="33.7,158.5 33.7,164.4 29.1,167.1 29,161.2" />
                                        <polygon class="code line-0" fill="#7D7E7E" points="114.3,111.9 114.3,117.9 101.3,125.4 101.3,119.5" />
                                        <polygon class="code line-0" fill="#7D7E7E" points="156.9,87.3 156.9,93.2 119.6,114.8 119.6,108.9" />
                                        <polygon class="code line-0" fill="#7D7E7E" points="97.1,121.9 97.1,127.8 73.8,141.3 73.7,135.4" />
                                        <polygon class="code line-0" fill="#C1426F" points="69,138.1 69,144 37,162.5 36.9,156.6" />

                                        <polygon class="code core" fill="#5CA6AB" points="54.5,177.5 54.5,180.5 51.6,182.3 51.6,179.3" />
                                        <polygon class="code core" fill="#5CA6AB" points="62.4,177.2 62.4,180.2 52.9,185.6 52.9,182.6" />
                                        <polygon class="code core" fill="#5CA6AB" points="110.9,140.9 110.9,143.9 107.9,145.7 107.9,142.7" />
                                        <polygon class="code core" fill="#5CA6AB" points="109.6,133.6 109.6,136.6 100.2,142 100.1,139" />
                                        <polygon class="code core" fill="#5CA6AB" points="63.7,164.1 63.7,167.1 60.7,168.8 60.7,165.8" />
                                        <polygon class="code core" fill="#5CA6AB" points="75.8,157.1 75.8,160.1 72.8,161.8 72.8,158.8" />
                                        <polygon class="code core" fill="#5CA6AB" points="75.8,165.3 75.8,168.3 72.8,170 72.8,167" />
                                        <polygon class="code core" fill="#5CA6AB" points="110.9,136.9 110.9,139.9 107.9,141.6 107.9,138.6" />
                                        <polygon class="code core" fill="#5CA6AB" points="97.2,140.6 97.2,143.6 94.3,145.4 94.2,142.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="97.2,148.8 97.3,151.8 94.3,153.5 94.3,150.5" />
                                        <polygon class="code core" fill="#5CA6AB" points="97.2,144.7 97.2,147.7 94.3,149.4 94.3,146.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="110.9,145 110.9,148 107.9,149.7 107.9,146.7" />
                                        <polygon class="code core" fill="#5CA6AB" points="101.7,150.3 101.7,153.3 98.8,155 98.8,152" />
                                        <polygon class="code core" fill="#5CA6AB" points="97.3,156.9 97.3,159.9 94.3,161.7 94.3,158.7" />
                                        <polygon class="code core" fill="#5CA6AB" points="109.6,149.9 109.6,152.9 100.2,158.3 100.2,155.3" />
                                        <polygon class="code core" fill="#5CA6AB" points="101.7,146.2 101.7,149.2 98.8,150.9 98.7,147.9" />
                                        <polygon class="code core" fill="#5CA6AB" points="97.3,152.9 97.3,155.9 94.3,157.6 94.3,154.6" />
                                        <polygon class="code core" fill="#5CA6AB" points="92.6,159.6 92.6,162.6 89.6,164.4 89.6,161.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="101.7,142.1 101.7,145.1 98.7,146.9 98.7,143.9" />
                                        <polygon class="code core" fill="#5CA6AB" points="88.1,162.3 88.1,165.3 77.3,171.5 77.3,168.5" />
                                        <polygon class="code core" fill="#5CA6AB" points="80.5,162.6 80.5,165.6 77.5,167.3 77.5,164.3" />
                                        <polygon class="code core" fill="#5CA6AB" points="75.8,169.3 75.8,172.3 72.8,174.1 72.8,171" />
                                        <polygon class="code core" fill="#5CA6AB" points="80.4,154.4 80.5,157.4 77.5,159.1 77.5,156.1" />
                                        <polygon class="code core" fill="#5CA6AB" points="68.2,173.7 68.2,176.7 65.2,178.5 65.2,175.5" />
                                        <polygon class="code core" fill="#5CA6AB" points="68.2,169.7 68.2,172.7 65.2,174.4 65.2,171.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="74.3,162.1 74.3,165.1 64.9,170.6 64.8,167.6" />
                                        <polygon class="code core" fill="#5CA6AB" points="63.7,172.3 63.7,175.3 60.7,177 60.7,174" />
                                        <polygon class="code core" fill="#5CA6AB" points="68.1,161.5 68.1,164.5 65.2,166.2 65.2,163.3" />
                                        <polygon class="code core" fill="#5CA6AB" points="63.7,168.2 63.7,171.2 60.7,172.9 60.7,169.9" />
                                        <polygon class="code core" fill="#5CA6AB" points="74.3,154 74.3,157 64.8,162.4 64.8,159.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="54.5,173.5 54.5,176.5 51.6,178.2 51.5,175.2" />
                                        <polygon class="code core" fill="#5CA6AB" points="115.1,155.1 115.2,156.5 35,202.7 35,201.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="54.5,169.4 54.5,172.4 51.5,174.1 51.5,171.1" />
                                        <polygon class="code core" fill="#5CA6AB" points="50.1,184.3 50.1,187.3 40.6,192.7 40.6,189.7" />
                                        <polygon class="code core" fill="#5CA6AB" points="62.3,160.9 62.3,163.9 52.9,169.3 52.9,166.3" />
                                        <polygon class="code core" fill="#5CA6AB" points="42.2,184.6 42.2,187.6 39.3,189.4 39.2,186.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="42.2,176.5 42.2,179.5 39.2,181.2 39.2,178.2" />
                                        <polygon class="code core" fill="#5CA6AB" points="50,168 50,171 40.6,176.4 40.6,173.4" />
                                        <polygon class="code core" fill="#5CA6AB" points="115.1,125.6 115.1,127 35,173.2 35,171.8" />
                                        <polygon class="code core" fill="#5CA6AB" points="85,155.9 85,158.9 77.5,163.3 77.5,160.3" />
                                        <polygon class="code core" fill="#5CA6AB" points="88.1,146 88.1,149 77.3,155.2 77.3,152.2" />
                                        <polygon class="code core" fill="#5CA6AB" points="42.2,180.6 42.2,183.6 39.2,185.3 39.2,182.3" />

                                        <g>
                                            <defs>
                                                <path id="code-cover-screen-0" d="M239.6,23.2c0-2.3-0.4-2.3-1.7-1.6c-0.5,0.3-1.2,0.7-2,1.2l-211.3,122c-0.8,0.5-1.3,0.7-1.7,0.9 c-0.8,0.5-0.5,0.6-0.5,2.9L22.9,302c0,2.2-0.3,2.7,0.5,2.3c0.3-0.2,0.9-0.6,1.7-1l212-122.4c0.8-0.5,1.4-0.8,1.8-1 c1-0.6,1.1-1,1.1-3.2L239.6,23.2z" />
                                            </defs>
                                            <clipPath id="clip-path-screen">
                                                <use xlink:href="#code-cover-screen-0" overflow="hidden" />
                                            </clipPath>
                                            <g clip-path="url(#clip-path-screen)">
                                                <path id="code-cover-screen" fill="#11191A" d="M239.6,23.2c0-2.3-0.4-2.3-1.7-1.6c-0.5,0.3-1.2,0.7-2,1.2l-211.3,122c-0.8,0.5-1.3,0.7-1.7,0.9 c-0.8,0.5-0.5,0.6-0.5,2.9L22.9,302c0,2.2-0.3,2.7,0.5,2.3c0.3-0.2,0.9-0.6,1.7-1l212-122.4c0.8-0.5,1.4-0.8,1.8-1 c1-0.6,1.1-1,1.1-3.2L239.6,23.2z" />
                                            </g>
                                        </g>

                                        <path class="control red" fill="#C24C4B" d="M31.8,145.3c1.4-0.8,2.6-0.2,2.6,1.5c0,1.6-1.1,3.6-2.6,4.5c-1.4,0.8-2.6,0.2-2.6-1.5
                  C29.3,148.2,30.4,146.2,31.8,145.3z" />
                                        <path class="control yellow" fill="#CA9733" d="M40.5,140.4c1.4-0.8,2.6-0.2,2.6,1.5c0,1.6-1.1,3.6-2.6,4.5c-1.4,0.8-2.6,0.2-2.6-1.5 C37.9,143.2,39,141.2,40.5,140.4z" />
                                        <path class="control green" fill="#3B963D" d="M49.1,135.4c1.4-0.8,2.6-0.2,2.6,1.5s-1.1,3.6-2.6,4.5c-1.4,0.8-2.6,0.2-2.6-1.5S47.7,136.2,49.1,135.4z" />
                                        <polygon class="control title" fill="#646565" points="142,81.7 142.1,87.6 118.7,101.1 118.7,95.2" />

                                        <path id="reflex" opacity="0.27" fill="#A9A8A8" d="M237,14.7l-85.7,49.5L147,74.8l-22.7,152.2l31.7-25.3l-13.4,27.8l96.7-55.4l-0.8-151.2 C238.5,22.9,247,7.6,237,14.7z" />
                                    </g>

                                    <g id="bottom">
                                        <g>
                                            <defs>
                                                <path id="SVGID_7_" d="M397.2,268.3l0,7.3c0,1.2-0.8,2.3-2.3,3.2l0-7.3 C396.4,270.6,397.2,269.4,397.2,268.3z" />
                                            </defs>
                                            <clipPath id="SVGID_8_">
                                                <use xlink:href="#SVGID_7_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_8_)">
                                                <path fill="#9B9D9F" d="M397.2,268.3l0,7.3c0,0,0,0,0,0.1L397.2,268.3C397.2,268.3,397.2,268.3,397.2,268.3" />
                                                <path fill="#9FA1A3" d="M397.2,268.3l0,7.3c0,0.2,0,0.3-0.1,0.5l0-7.3C397.2,268.6,397.2,268.5,397.2,268.3" />
                                                <path fill="#A3A5A7" d="M397.1,268.8l0,7.3c0,0.1-0.1,0.3-0.1,0.4l0-7.3C397.1,269.1,397.1,268.9,397.1,268.8" />
                                                <path fill="#A7A9AB" d="M397,269.2l0,7.3c-0.1,0.2-0.1,0.3-0.2,0.4l0-7.3C396.9,269.5,396.9,269.4,397,269.2" />
                                                <path fill="#ABADAF" d="M396.8,269.7l0,7.3c-0.1,0.2-0.2,0.3-0.3,0.5l0-7.3C396.6,270,396.7,269.8,396.8,269.7" />
                                                <path fill="#AFB1B3" d="M396.5,270.1l0,7.3c-0.1,0.2-0.3,0.4-0.5,0.5l0-7.3C396.2,270.5,396.3,270.3,396.5,270.1" />
                                                <path fill="#B3B5B6" d="M396,270.7l0,7.3c-0.3,0.3-0.6,0.5-1,0.7l0-7.3C395.4,271.2,395.7,270.9,396,270.7" />
                                                <path fill="#B7B9BA" d="M395,271.4l0,7.3c0,0-0.1,0-0.1,0.1L395,271.4C394.9,271.4,395,271.4,395,271.4" />
                                            </g>
                                        </g>
                                        <g>
                                            <defs>
                                                <path id="SVGID_9_" d="M14.4,325.2l0-7.3c0,1.2,0.8,2.3,2.3,3.2l0,7.3 C15.2,327.5,14.4,326.3,14.4,325.2z" />
                                            </defs>
                                            <clipPath id="SVGID_10_">
                                                <use xlink:href="#SVGID_9_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_10_)">
                                                <path fill="#909294" d="M16.8,321.1l0,7.3c-1.5-0.9-2.3-2.1-2.3-3.2l0-7.3C14.5,319,15.2,320.2,16.8,321.1" />
                                            </g>
                                        </g>
                                        <polygon fill="#C1C3C4" points="394.9,271.4 394.9,278.8 169.1,410 169.2,402.6" />
                                        <polygon fill="#939597" points="158.1,402.6 158.1,410 16.7,328.4 16.8,321.1                 " />
                                        <path fill="#D3D4D5" d="M394.9,265c3.1,1.8,3.1,4.7,0,6.4L169.2,402.6c-3,1.8-8,1.8-11.1,0L16.8,321.1c-3.1-1.8-3.1-4.7,0-6.4 l225.8-131.2c3-1.8,8-1.8,11.1,0L394.9,265z" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_11_" d="M169.2,402.6l0,7.3c-3,1.8-8,1.8-11.1,0l0-7.3 C161.1,404.4,166.1,404.4,169.2,402.6z" />
                                            </defs>
                                            <clipPath id="SVGID_12_">
                                                <use xlink:href="#SVGID_11_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_12_)">
                                                <path fill="#B7B9BA" d="M169.2,402.6l0,7.3c-0.5,0.3-1.1,0.6-1.7,0.7l0-7.3C168.1,403.2,168.6,402.9,169.2,402.6" />
                                                <path fill="#B3B5B6" d="M167.5,403.4l0,7.3c-0.5,0.2-1,0.3-1.5,0.4l0-7.3C166.5,403.7,167,403.5,167.5,403.4" />
                                                <path fill="#AFB1B3" d="M166,403.8l0,7.3c-0.3,0.1-0.7,0.1-1,0.1l0-7.3C165.3,403.9,165.6,403.8,166,403.8" />
                                                <path fill="#ABADAF" d="M165,403.9l0,7.3c-0.3,0-0.6,0-0.9,0.1l0-7.3C164.4,403.9,164.7,403.9,165,403.9" />
                                                <path fill="#A7A9AB" d="M164.1,404l0,7.3c-0.3,0-0.5,0-0.8,0l0-7.3C163.5,404,163.8,404,164.1,404" />
                                                <path fill="#A3A5A7" d="M163.3,404l0,7.3c-0.3,0-0.5,0-0.8,0l0-7.3C162.8,403.9,163,404,163.3,404" />
                                                <path fill="#9FA1A3" d="M162.5,403.9l0,7.3c-0.3,0-0.5,0-0.8-0.1l0-7.3C162,403.9,162.2,403.9,162.5,403.9" />
                                                <path fill="#9B9D9F" d="M161.7,403.8l0,7.3c-0.3,0-0.5-0.1-0.8-0.1l0-7.3C161.2,403.8,161.5,403.8,161.7,403.8" />
                                                <path fill="#98999C" d="M161,403.7l0,7.3c-0.3-0.1-0.6-0.1-0.8-0.2l0-7.3C160.4,403.6,160.7,403.6,161,403.7" />
                                                <path fill="#949598" d="M160.1,403.5l0,7.3c-0.3-0.1-0.6-0.2-0.9-0.3l0-7.3C159.5,403.3,159.8,403.4,160.1,403.5" />
                                                <path fill="#909294" d="M159.2,403.2l0,7.3c-0.4-0.2-0.8-0.3-1.1-0.5l0-7.3C158.4,402.8,158.8,403,159.2,403.2" />
                                            </g>
                                        </g>
                                        <polygon fill="#595959" points="223.2,205.3 71.8,293.3 60.3,286.7 211.8,198.7" />
                                        <polygon fill="#545454" points="223.2,205.3 223.2,206.1 71.8,294.1 71.8,293.3" />
                                        <polygon fill="#464848" points="71.8,293.3 71.8,294.1 60.3,287.5 60.3,286.7" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_13_" d="M306.5,310.4l0,0.8c0,0.2-0.2,0.5-0.5,0.6l0-0.8 C306.3,310.9,306.5,310.7,306.5,310.4z" />
                                            </defs>
                                            <clipPath id="SVGID_14_">
                                                <use xlink:href="#SVGID_13_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_14_)">
                                                <polyline fill="#6E6F6F" points="306.5,310.4 306.5,311.3 306.5,311.3 306.5,310.4 306.5,310.4" />
                                                <path fill="#707172" d="M306.5,310.4l0,0.8c0,0,0,0.1,0,0.1L306.5,310.4C306.5,310.5,306.5,310.5,306.5,310.4" />
                                                <path fill="#737475" d="M306.5,310.5l0,0.8c0,0,0,0.1,0,0.1L306.5,310.5C306.5,310.6,306.5,310.6,306.5,310.5" />
                                                <path fill="#767777" d="M306.5,310.6l0,0.8c0,0,0,0.1,0,0.1L306.5,310.6C306.4,310.7,306.4,310.7,306.5,310.6" />
                                                <path fill="#797A7A" d="M306.4,310.7l0,0.8c0,0,0,0.1-0.1,0.1L306.4,310.7C306.4,310.8,306.4,310.8,306.4,310.7" />
                                                <path fill="#7C7D7D" d="M306.3,310.8l0,0.8c0,0-0.1,0.1-0.1,0.1l0-0.8C306.3,310.9,306.3,310.9,306.3,310.8" />
                                                <path fill="#7F7F80" d="M306.3,310.9l0,0.8c-0.1,0.1-0.1,0.1-0.2,0.1l0-0.8C306.1,311,306.2,311,306.3,310.9" />
                                                <path fill="#828283" d="M306,311.1l0,0.8c0,0,0,0,0,0L306,311.1C306,311.1,306,311.1,306,311.1" />
                                            </g>
                                        </g>
                                        <g>
                                            <defs>
                                                <path id="SVGID_15_" d="M193.3,323.5l0-0.8c0,0.2,0.2,0.5,0.5,0.7l0,0.8 C193.4,324,193.3,323.7,193.3,323.5z" />
                                            </defs>
                                            <clipPath id="SVGID_16_">
                                                <use xlink:href="#SVGID_15_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_16_)">
                                                <path fill="#656667" d="M193.8,323.3l0,0.8c-0.3-0.2-0.5-0.4-0.5-0.7l0-0.8C193.3,322.9,193.4,323.2,193.8,323.3" />
                                            </g>
                                        </g>
                                        <polygon fill="#898989" points="306,311.1 306,311.9 240.6,349.9 240.6,349.1" />
                                        <polygon fill="#686969" points="238.4,349.1 238.4,349.9 193.7,324.2 193.8,323.3" />
                                        <path fill="#959595" d="M306,309.8c0.6,0.4,0.6,0.9,0,1.3l-65.4,38c-0.6,0.4-1.6,0.4-2.3,0l-44.6-25.8c-0.6-0.4-0.6-0.9,0-1.3 l65.4-38c0.6-0.4,1.6-0.4,2.3,0L306,309.8z" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_17_" d="M240.6,349.1l0,0.8c-0.6,0.4-1.6,0.4-2.3,0l0-0.8 C239,349.5,240,349.5,240.6,349.1z" />
                                            </defs>
                                            <clipPath id="SVGID_18_">
                                                <use xlink:href="#SVGID_17_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_18_)">
                                                <path fill="#828283" d="M240.6,349.1l0,0.8c-0.1,0.1-0.2,0.1-0.4,0.2l0-0.8C240.4,349.2,240.5,349.2,240.6,349.1" />
                                                <path fill="#7F7F80" d="M240.3,349.2l0,0.8c-0.1,0-0.2,0.1-0.3,0.1l0-0.8C240.1,349.3,240.2,349.3,240.3,349.2" />
                                                <path fill="#7C7D7D" d="M240,349.3l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C239.8,349.3,239.9,349.3,240,349.3" />
                                                <path fill="#797A7A" d="M239.8,349.3l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C239.6,349.4,239.7,349.4,239.8,349.3" />
                                                <path fill="#767777" d="M239.6,349.4l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C239.5,349.4,239.5,349.4,239.6,349.4" />
                                                <path fill="#737475" d="M239.4,349.4l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C239.3,349.4,239.4,349.4,239.4,349.4" />
                                                <path fill="#707172" d="M239.3,349.4l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C239.2,349.3,239.2,349.3,239.3,349.4" />
                                                <path fill="#6E6F6F" d="M239.1,349.3l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C239,349.3,239.1,349.3,239.1,349.3" />
                                                <path fill="#6B6C6C" d="M239,349.3l0,0.8c-0.1,0-0.1,0-0.2,0l0-0.8C238.8,349.3,238.9,349.3,239,349.3" />
                                                <path fill="#68696A" d="M238.8,349.3l0,0.8c-0.1,0-0.1,0-0.2-0.1l0-0.8C238.7,349.2,238.7,349.2,238.8,349.3" />
                                                <path fill="#656667" d="M238.6,349.2l0,0.8c-0.1,0-0.2-0.1-0.2-0.1l0-0.8C238.4,349.1,238.5,349.2,238.6,349.2" />
                                            </g>
                                        </g>
                                        <g>
                                            <defs>
                                                <path id="SVGID_19_" d="M261.1,344.6l0-1.6c0-0.4,0.3-0.8,0.8-1.1l0,1.6 C261.4,343.8,261.1,344.2,261.1,344.6z" />
                                            </defs>
                                            <clipPath id="SVGID_20_">
                                                <use xlink:href="#SVGID_19_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_20_)">
                                                <path fill="#909294" d="M261.1,344.6l0-1.6c0-0.3,0.2-0.6,0.5-0.9l0,1.6C261.3,344,261.1,344.3,261.1,344.6" />
                                                <path fill="#949598" d="M261.6,343.7l0-1.6c0,0,0.1-0.1,0.1-0.1l0,1.6C261.7,343.6,261.6,343.7,261.6,343.7" />
                                                <path fill="#98999C" d="M261.7,343.6l0-1.6c0,0,0.1-0.1,0.1-0.1l0,1.6C261.8,343.5,261.8,343.6,261.7,343.6" />
                                                <polyline fill="#9B9D9F" points="261.9,343.5 261.9,341.9 261.9,341.9 261.9,343.5 261.9,343.5" />
                                            </g>
                                        </g>
                                        <polygon fill="#A4A5A7" points="261.9,343.5 261.9,341.9 293.7,323.4 293.7,325" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_21_" d="M298.3,324.5l0,1.6c0-0.4-0.3-0.8-0.8-1.1l0-1.6 C298,323.7,298.3,324.1,298.3,324.5z" />
                                            </defs>
                                            <clipPath id="SVGID_22_">
                                                <use xlink:href="#SVGID_21_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_22_)">
                                                <path fill="#DFDFE0" d="M297.5,325l0-1.6c0,0,0.1,0,0.1,0L297.5,325C297.5,325,297.5,325,297.5,325" />
                                                <path fill="#DBDBDC" d="M297.5,325.1l0-1.6c0,0,0.1,0,0.1,0.1L297.5,325.1C297.6,325.1,297.6,325.1,297.5,325.1" />
                                                <path fill="#D7D8D9" d="M297.6,325.1l0-1.6c0,0,0.1,0,0.1,0.1L297.6,325.1C297.7,325.2,297.7,325.1,297.6,325.1" />
                                                <path fill="#D3D4D5" d="M297.7,325.2l0-1.6c0,0,0,0,0.1,0.1L297.7,325.2C297.8,325.2,297.7,325.2,297.7,325.2" />
                                                <path fill="#CFD0D1" d="M297.8,325.2l0-1.6c0,0,0,0,0.1,0.1L297.8,325.2C297.8,325.3,297.8,325.3,297.8,325.2" />
                                                <path fill="#CBCCCD" d="M297.9,325.3l0-1.6c0,0,0,0,0.1,0.1L297.9,325.3C297.9,325.3,297.9,325.3,297.9,325.3" />
                                                <path fill="#C7C8CA" d="M297.9,325.4l0-1.6c0,0,0,0,0.1,0.1L297.9,325.4C298,325.4,297.9,325.4,297.9,325.4" />
                                                <path fill="#C3C4C6" d="M298,325.4l0-1.6c0,0,0,0,0,0.1L298,325.4C298,325.5,298,325.4,298,325.4" />
                                                <path fill="#BFC0C2" d="M298,325.5l0-1.6c0,0,0,0,0,0.1L298,325.5C298,325.5,298,325.5,298,325.5" />
                                                <path fill="#BBBCBE" d="M298.1,325.5l0-1.6c0,0,0,0,0,0.1L298.1,325.5C298.1,325.6,298.1,325.6,298.1,325.5" />
                                                <path fill="#B7B9BA" d="M298.1,325.6l0-1.6c0,0,0,0,0,0.1L298.1,325.6C298.1,325.6,298.1,325.6,298.1,325.6" />
                                                <path fill="#B3B5B6" d="M298.1,325.7l0-1.6c0,0,0,0,0,0.1L298.1,325.7C298.2,325.7,298.1,325.7,298.1,325.7" />
                                                <path fill="#AFB1B3" d="M298.2,325.7l0-1.6c0,0,0,0,0,0.1L298.2,325.7C298.2,325.8,298.2,325.7,298.2,325.7" />
                                                <path fill="#ABADAF" d="M298.2,325.8l0-1.6c0,0,0,0,0,0.1L298.2,325.8C298.2,325.8,298.2,325.8,298.2,325.8" />
                                                <path fill="#A7A9AB" d="M298.2,325.9l0-1.6c0,0,0,0,0,0.1L298.2,325.9C298.2,325.9,298.2,325.9,298.2,325.9" />
                                                <path fill="#A3A5A7" d="M298.2,325.9l0-1.6c0,0,0,0.1,0,0.1L298.2,325.9C298.2,326,298.2,326,298.2,325.9" />
                                                <path fill="#9FA1A3" d="M298.2,326l0-1.6c0,0,0,0.1,0,0.1L298.2,326C298.2,326.1,298.2,326,298.2,326" />
                                                <polyline fill="#9B9D9F" points="298.2,326.1 298.3,324.5 298.3,324.5 298.2,326.1 298.2,326.1" />
                                            </g>
                                        </g>
                                        <path fill="#9B9C9F" d="M297.5,325c1,0.6,1,1.6,0,2.2l-31.8,18.5c-1,0.6-2.7,0.6-3.8,0c-1-0.6-1-1.6,0-2.2l31.8-18.5 C294.7,324.4,296.4,324.4,297.5,325z" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_23_" d="M293.7,325l0-1.6c1-0.6,2.7-0.6,3.8,0l0,1.6 C296.4,324.4,294.7,324.4,293.7,325z" />
                                            </defs>
                                            <clipPath id="SVGID_24_">
                                                <use xlink:href="#SVGID_23_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_24_)">
                                                <path fill="#9B9D9F" d="M293.7,325l0-1.6c0,0,0.1,0,0.1-0.1l0,1.6C293.8,325,293.7,325,293.7,325" />
                                                <path fill="#9FA1A3" d="M293.8,325l0-1.6c0,0,0.1,0,0.1-0.1l0,1.6C293.9,324.9,293.8,324.9,293.8,325" />
                                                <path fill="#A3A5A7" d="M293.9,324.9l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294,324.9,293.9,324.9,293.9,324.9" />
                                                <path fill="#A7A9AB" d="M294,324.9l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.1,324.8,294,324.8,294,324.9" />
                                                <path fill="#ABADAF" d="M294.1,324.8l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.2,324.8,294.2,324.8,294.1,324.8" />
                                                <path fill="#AFB1B3" d="M294.2,324.8l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.3,324.8,294.3,324.8,294.2,324.8" />
                                                <path fill="#B3B5B6" d="M294.3,324.7l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.4,324.7,294.4,324.7,294.3,324.7" />
                                                <path fill="#B7B9BA" d="M294.4,324.7l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.5,324.7,294.5,324.7,294.4,324.7" />
                                                <path fill="#BBBCBE" d="M294.5,324.7l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.6,324.7,294.6,324.7,294.5,324.7" />
                                                <path fill="#BFC0C2" d="M294.6,324.7l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.7,324.6,294.7,324.7,294.6,324.7" />
                                                <path fill="#C3C4C6" d="M294.7,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.8,324.6,294.8,324.6,294.7,324.6" />
                                                <path fill="#C7C8CA" d="M294.8,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C294.9,324.6,294.9,324.6,294.8,324.6" />
                                                <path fill="#CBCCCD" d="M295,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295,324.6,295,324.6,295,324.6" />
                                                <path fill="#CFD0D1" d="M295.1,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.1,324.6,295.1,324.6,295.1,324.6" />
                                                <path fill="#D3D4D5" d="M295.2,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.2,324.6,295.2,324.6,295.2,324.6" />
                                                <path fill="#D7D8D9" d="M295.3,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.4,324.6,295.3,324.6,295.3,324.6" />
                                                <path fill="#DBDBDC" d="M295.4,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.5,324.6,295.4,324.6,295.4,324.6" />
                                                <path fill="#DFDFE0" d="M295.5,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.6,324.6,295.5,324.6,295.5,324.6" />
                                                <path fill="#E3E3E4" d="M295.6,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.7,324.6,295.7,324.6,295.6,324.6" />
                                                <path fill="#E7E7E7" d="M295.7,324.6l0-1.6c0,0,0.1,0,0.1,0l0,1.6C295.8,324.6,295.8,324.6,295.7,324.6" />
                                                <path fill="#EBEBEB" d="M295.9,324.6l0-1.6c0.1,0,0.1,0,0.2,0l0,1.6C296,324.6,295.9,324.6,295.9,324.6" />
                                                <path fill="#F2F2F2" d="M296,324.6l0-1.6c0.1,0,0.2,0,0.3,0l0,1.6C296.2,324.6,296.1,324.6,296,324.6" />
                                                <path fill="#F3F3F3" d="M296.3,324.6l0-1.6c0.1,0,0.2,0,0.3,0.1l0,1.6C296.5,324.7,296.4,324.6,296.3,324.6" />
                                                <path fill="#F2F2F2" d="M296.6,324.7l0-1.6c0.1,0,0.2,0.1,0.3,0.1l0,1.6C296.8,324.7,296.7,324.7,296.6,324.7" />
                                                <path fill="#EBEBEB" d="M296.9,324.8l0-1.6c0.1,0,0.1,0.1,0.2,0.1l0,1.6C297.1,324.8,297,324.8,296.9,324.8" />
                                                <path fill="#E7E7E7" d="M297.1,324.8l0-1.6c0.1,0,0.1,0,0.2,0.1l0,1.6C297.2,324.9,297.2,324.9,297.1,324.8" />
                                                <path fill="#E3E3E4" d="M297.3,324.9l0-1.6c0,0,0.1,0,0.1,0.1l0,1.6C297.4,325,297.3,324.9,297.3,324.9" />
                                                <path fill="#DFDFE0" d="M297.4,325l0-1.6c0,0,0,0,0,0L297.4,325C297.5,325,297.4,325,297.4,325" />
                                            </g>
                                        </g>
                                        <g>
                                            <defs>
                                                <path id="SVGID_25_" d="M315.3,243.2l0,0.8c0,0.5-0.3,1-0.9,1.3l0-0.8 C315,244.2,315.3,243.7,315.3,243.2z" />
                                            </defs>
                                            <clipPath id="SVGID_26_">
                                                <use xlink:href="#SVGID_25_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_26_)">
                                                <path fill="#494A4A" d="M315.3,243.2l0,0.8c0,0,0,0,0,0L315.3,243.2C315.3,243.2,315.3,243.2,315.3,243.2" />
                                                <path fill="#4A4B4B" d="M315.3,243.3l0,0.8c0,0.1,0,0.1,0,0.2l0-0.8C315.3,243.4,315.3,243.3,315.3,243.3" />
                                                <path fill="#4B4C4C" d="M315.3,243.4l0,0.8c0,0.1,0,0.1-0.1,0.2l0-0.8C315.2,243.6,315.2,243.5,315.3,243.4" />
                                                <path fill="#4C4D4D" d="M315.2,243.6l0,0.8c0,0.1-0.1,0.1-0.1,0.2l0-0.8C315.2,243.8,315.2,243.7,315.2,243.6" />
                                                <path fill="#4D4E4E" d="M315.1,243.8l0,0.8c0,0.1-0.1,0.1-0.1,0.2l0-0.8C315,243.9,315.1,243.9,315.1,243.8" />
                                                <path fill="#4E4F4F" d="M315,244l0,0.8c-0.1,0.1-0.1,0.1-0.2,0.2l0-0.8C314.9,244.2,314.9,244.1,315,244" />
                                                <path fill="#505050" d="M314.8,244.2l0,0.8c-0.1,0.1-0.3,0.2-0.4,0.3l0-0.8C314.5,244.4,314.7,244.3,314.8,244.2" />
                                                <path fill="#515152" d="M314.4,244.5l0,0.8c0,0,0,0,0,0L314.4,244.5C314.3,244.5,314.4,244.5,314.4,244.5" />
                                            </g>
                                        </g>
                                        <g>
                                            <defs>
                                                <path id="SVGID_27_" d="M61.7,310.8l0-0.8c0,0.5,0.3,1,1,1.3l0,0.8 C62,311.8,61.7,311.3,61.7,310.8z" />
                                            </defs>
                                            <clipPath id="SVGID_28_">
                                                <use xlink:href="#SVGID_27_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_28_)">
                                                <path fill="#464747" d="M62.7,311.3l0,0.8c-0.6-0.4-1-0.9-1-1.3l0-0.8C61.7,310.5,62,311,62.7,311.3" />
                                            </g>
                                        </g>
                                        <polygon fill="#545454" points="314.3,244.6 314.3,245.4 133.6,350.4 133.6,349.6" />
                                        <polygon fill="#464848" points="129,349.6 129,350.4 62.6,312.1 62.7,311.3" />
                                        <path fill="#595959" d="M314.3,241.9c1.3,0.7,1.3,1.9,0,2.7L133.6,349.6c-1.3,0.7-3.3,0.7-4.6,0l-66.3-38.3 c-1.3-0.7-1.3-1.9,0-2.7l180.8-105.1c1.3-0.7,3.3-0.7,4.6,0L314.3,241.9z" />
                                        <g>
                                            <defs>
                                                <path id="SVGID_29_" d="M133.6,349.6l0,0.8c-1.3,0.7-3.3,0.7-4.6,0l0-0.8 C130.2,350.3,132.3,350.3,133.6,349.6z" />
                                            </defs>
                                            <clipPath id="SVGID_30_">
                                                <use xlink:href="#SVGID_29_" overflow="visible" />
                                            </clipPath>
                                            <g clip-path="url(#SVGID_30_)">
                                                <path fill="#515152" d="M133.6,349.6l0,0.8c-0.2,0.1-0.5,0.2-0.7,0.3l0-0.8C133.1,349.8,133.3,349.7,133.6,349.6" />
                                                <path fill="#505050" d="M132.8,349.9l0,0.8c-0.2,0.1-0.4,0.1-0.6,0.2l0-0.8C132.4,350,132.7,350,132.8,349.9" />
                                                <path fill="#4E4F4F" d="M132.2,350.1l0,0.8c-0.1,0-0.3,0-0.4,0.1l0-0.8C132,350.1,132.1,350.1,132.2,350.1" />
                                                <path fill="#4D4E4E" d="M131.8,350.1l0,0.8c-0.1,0-0.2,0-0.4,0l0-0.8C131.6,350.2,131.7,350.1,131.8,350.1" />
                                                <path fill="#4C4D4D" d="M131.5,350.2l0,0.8c-0.1,0-0.2,0-0.3,0l0-0.8C131.2,350.2,131.3,350.2,131.5,350.2" />
                                                <path fill="#4B4C4C" d="M131.1,350.2l0,0.8c-0.1,0-0.2,0-0.3,0l0-0.8C130.9,350.2,131,350.2,131.1,350.2" />
                                                <path fill="#4A4B4B" d="M130.8,350.1l0,0.8c-0.1,0-0.2,0-0.3,0l0-0.8C130.6,350.1,130.7,350.1,130.8,350.1" />
                                                <path fill="#494A4A" d="M130.5,350.1l0,0.8c-0.1,0-0.2,0-0.3-0.1l0-0.8C130.3,350.1,130.4,350.1,130.5,350.1" />
                                                <path fill="#484949" d="M130.2,350.1l0,0.8c-0.1,0-0.2-0.1-0.3-0.1l0-0.8C129.9,350,130,350,130.2,350.1" />
                                                <path fill="#474848" d="M129.8,350l0,0.8c-0.1,0-0.3-0.1-0.4-0.1l0-0.8C129.6,349.9,129.7,349.9,129.8,350" />
                                                <path fill="#464747" d="M129.4,349.8l0,0.8c-0.2-0.1-0.3-0.1-0.5-0.2l0-0.8C129.1,349.7,129.3,349.8,129.4,349.8" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <!-- FIN ANIMACION COMPUTADORA -->

                </div>
            </div>
            <div class="row row--margin row--center">
                <a href="#" class="btn">Inicio</a>
            </div>
        </div>
    </div>
    <iframe id="ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.0439201516865!2d-63.166152666994!3d-17.742569610458716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e7b050db32db%3A0x916b20fc264aef9e!2sAv.%20Beni%2C%20Santa%20Cruz%20de%20la%20Sierra!5e0!3m2!1sen!2sbo!4v1654407733981!5m2!1sen!2sbo" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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