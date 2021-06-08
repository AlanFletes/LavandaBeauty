<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>LavandaBeauty</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- Nav Strike -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">

    <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/plugin-active.js"></script>

    <!-- Modernizer & Respond js -->
    <script type="text/javascript" src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<!-- Menu Hamburger (Default) -->
<div>

    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="font-family: Tw Cen MT; font-size: 17px; text-decoration: none; color:#9669BB"><b><a href="index" style="text-decoration: none;color:#9669BB">Inicio</a></b></li>
        <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
    </ol>
</div>
<button class="main-menu-indicator" id="open-button">
    <span class="line"></span>
</button>

<div class="menu-wrap" style="background-color: #CE98FC" id="menu">
    <div class="menu-content">
        <div class="navigation">
            <span class="pe-7s-close close-menu" id="close-button"></span>
            <div class="search-wrap js-ui-search">
                <input class="js-ui-text" type="text" placeholder="Search Here...">
                <span class="eks js-ui-close"></span>
            </div>
        </div>
        <nav class="menu">
            <div class="menu-list">
                <ul id="menuadd">
                    <li><a href="Login">Iniciar sesión</a></li>
                    <li class="menu-item-has-children"><a href="/">Inicio</a>

                    </li>
                    <li><a href="{{ asset('docs/catalogo.pdf')}}">Descarga nuestro catalogo</a></li>
                    <li class="menu-item-has-children"><a href="#">Categorias</a>
                        <ul class="sub-menu">
                            <li><a href="Productos">-Cuidado de la piel</a></li>
                            <li><a href="Productos2">-Maquillaje</a></li>
                            <li><a href="Productos3">-Brochas</a></li>
                            <li id="sbr"></li>
                        </ul>
                    </li>
                    <li><a href="Mapa">Mapa del sitio</a></li>
                    <li><a href="Ayuda">Ayuda</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div style="margin-left:30%; margin-right:30%; margin-top: -9%">

    <img src="img/lavandaBeauty.png">


    <div id="Email">
        <div class="container">
            <a href="Unirse" class="email-btn"><span><i class="fa fa-envelope-o" aria-hidden="true"></i>¡Unete!</span></a>

        </div>

    </div>
</div>
<article style="margin-left:20% ">
    <p style="width: 75%; text-align: justify;font-family: Tw Cen MT;font-size: 20px">
        ¡Hola! Bienvenidos a LavandaBeauty, el lugar donde encontrarás artículos de belleza para
        consentirte. Estamos muy emocionados de que nos visites.
        En la parte superior izquierda encontrarás un menu desplegable dónde podrás tener acceso
        a las secciones de la página. <br>
    <p style="text-align: center; width: 75%;font-size: 17px"><strong><i>Recuerda que la belleza no es querer ser alguien que no eres, sino ser uno mismo.</i></strong></p>
    </p>
</article>
<footer id="Contact">
    <div class="container">
        <p> ! Siguenos en nuestras redes sociales ! <br> </p>

        <ul class="social-icons">
            <li><a href="https://www.facebook.com/Lavanda-Beauty-104436778279033" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=3111513122" target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</footer>
<!-- End of Menu Hamburger (Default) -->
<a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>

<script type="text/javascript" src="{{ asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
<!--<script data-pace-options='{ "ajax": false }' src="js/vendor/pace.min.js"></script>-->
<script type="text/javascript" src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/classie.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/jquery.velocity.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/jquery.kenburnsy.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/textslide.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/tabs.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/ef-slider.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/jquery.social-buttons.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vendor/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/cookie.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/login.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/admincheck.js')}}"></script>
</html>