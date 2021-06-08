<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>LavandaBeauty</title>
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>
  <!-- Nav Strike -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <!--<link rel="stylesheet" type="text/css" href="css/style2.css">-->
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
     <!-- Costum Styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Modernizer & Respond js -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- Ancla -->
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
    <script src="js/vendor/arriba.js"></script>
  </head>
<body>
  <div >
    <ol class="breadcrumb">
    <li class="breadcrumb-item" style="font-family: Tw Cen MT; font-size: 17px; text-decoration: none; color:#9669BB"><b><a href="index" style="text-decoration: none;color:#9669BB">Inicio</a></b></li>
    <li class="breadcrumb-item active" style="font-family: Tw Cen MT; font-size: 17px; text-decoration: none; color:#9669BB"><b><a href="Productos2" style="text-decoration: none;color:#9669BB">Producto</a></b></li>
    <li class="breadcrumb-item active" aria-current="page" id="current">Maquillaje</li>
  </ol>
</div>
<!-- Boton menu-->
<button class="main-menu-indicator" id="open-button">
                <span class="line"></span>
            </button>
<!-- Menu -->
<div class="menu-wrap" style="background-color: #CE98FC">
                <div class="menu-content">
                    <div class="navigation">
                        <span class="pe-7s-close close-menu" id="close-button"></span>
                            <span class="eks js-ui-close"></span>
                        </div>
                    </div>
                    <nav class="menu">
                        <div class="menu-list">
                            <ul>
							<li><a href="Login">Iniciar sesión</a></li>
                                <li class="menu-item-has-children"><a href="/">Inicio</a>
                                </li>
                                <li><a href="{{ asset('docs/catalogo.pdf')}}">Descarga nuestro catalogo</a></li>
                                <li class="menu-item-has-children"><a href="#">Categorias</a>
                                    <ul class="sub-menu">
                                        <li><a href="Productos">-Cuidado de la piel</a></li>
                                        <li><a href="Productos2">-Maquillaje</a></li>
                                        <li><a href="Productos3">-Brochas</a></li>
                                    </ul>
                                </li>
                                <li><a href="Mapa">Mapa del sitio</a></li>
								<li><a href="Ayuda">Ayuda</a></li>
                            </ul>
                        </div>
                    </nav>
                    </div>
                </div>
                <div style="margin-left:30%; margin-right:30%; margin-top: -15%;height: 300px;width: auto;" >
                    <img src="img/lavandaBeauty.png">
                         </div>
<div class="productPage" >
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Cargando</span>
      </div>
    </div>
  <section id="menu">
  <div style="width: 100%; text-align: center; margin-top: 2%;">
                    <input type="text" id="formulario" style="width: 30%; text-align: center; margin:auto; border-color: #D0C3F1"></input>
                        <td><button class="btn btn-info" id="boton" style="background-color: #D0C3F1; border-color:#D0C3F1" > Buscar </button>
                  </div>
  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Ordenar por</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Nombre</option>
                    <option value="3">Precio</option>
                    <option value="4">Fecha</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Mostrar</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
			  <div id="productos">
			  </div>
              <!-- quick view modal -->                  
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">                      
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        <!-- Modal view slider -->
                        <div class="col-md-6 col-sm-6 col-xs-12">                              
                          <div class="aa-product-view-slider">                                
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>                                    
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>Producto</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Hola soy un producto, porfavor no me mires porque me da amsiedad, pero si no compras tambien me da amsiedad!</p>
                            <h4>Modelo</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">Modelo 1</a>
                              <a href="#">Modelo 2</a>
                              <a href="#">Modelo 3</a>
                              <a href="#">Modelo 4</a>
                            </div>
                            <div class="aa-prod-quantity">
                              
                              <p class="aa-prod-category">
                                Category: <a href="#">Default</a>
                              </p>
                            </div>        
                          </div>
                        </div>
                      </div>
                    </div>                        
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div>
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div id="up">
      <i class="fas fa-angle-up"></i>
    </div>
  </section>     
  </section>
  <!-- / product category --> 
</div>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  <script data-pace-options='{ "ajax": false }' src="js/vendor/pace.min.js"></script>
    <script src="js/vendor/classie.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/jquery.velocity.min.js"></script>
    <script src="js/vendor/jquery.kenburnsy.min.js"></script>
    <script src="js/vendor/textslide.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/tabs.js"></script>
    <script src="js/ef-slider.js"></script>    
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/jquery.social-buttons.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
	<script src="js/dbmanager.js"></script>
    <footer id="Contact">
    <p> ! Siguenos en nuestras redes sociales ! <br> </p>
    <ul class="social-icons">
      <li><a href="https://www.facebook.com/Lavanda-Beauty-104436778279033" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=3111513122"target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
      <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
</footer>
  </body>
</html>