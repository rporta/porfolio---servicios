<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySql, Bootstrap, Google Maps API, jQuery, Ramiro Portas, Design">
    <meta name="description" content="Ramiro Portas desarrollador de páginas Web">
    <meta name="author" content="Ramiro Portas">
    <title>Ramiro Portas Design</title>
    <link href="css/body.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/litebox.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jqueryux.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-toolkit.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/images-loaded.min.js"></script>
    <script src="js/litebox.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
	<div class="load">
    	<figure class="center">
        	<img src="img/loading/loading.gif" class="load-gif">
        </figure>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: rgba(0, 0, 0, 0.8);border-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            
                <ul class="nav navbar-nav">
                	<li >
                    	<div class="animacion-nav"></div>
                        <a href="#myCarousel" class="nav-btn btn-1">Inicio</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#mi_perfil" class="nav-btn btn-2">Mi Perfil</a>
                    </li >
                    <li>
                    	<div class="animacion-nav"></div>
                        <a href="#portfolio" class="nav-btn btn-3">Portfolio</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#servicios" class="nav-btn btn-4">Servicios</a>
                    </li>
                    <li >
                    	<div class="animacion-nav"></div>
                        <a href="#contacto" class="nav-btn btn-5">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!--Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!--image1-->
                <div class="fill" style=" background-image:url(img/slider/1.jpg);">
                	<div class="divcenter">
                	<div style="color:#FFF;background-color: rgba(73, 123, 178, 0.54);border-radius: 10px 10px 10px 10px;-moz-border-radius: 10px 10px 10px 10px;-webkit-border-radius: 10px 10px 10px 10px; margin:auto; padding:30px; max-width:963px">
                		<h3 style="font-size:50px;">¡Hola! Me llamo Ramiro Portas.</h3>
                    	<h2 style="margin-bottom:0px;">Soy Diseñador y Programador Web en Buenos Aires, Argentina. </h2>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <!--image2-->
                <div class="fill" style="background-image:url(img/slider/2.jpg);">
                	<div class="divcenter">
                	<div style="color:#FFF;background-color: rgba(73, 123, 178, 0.85);border-radius: 10px 10px 10px 10px;-moz-border-radius: 10px 10px 10px 10px;-webkit-border-radius: 10px 10px 10px 10px; margin:auto; padding:30px; max-width:811px">
                        <h3 style="font-size:50px;">Realizo sitios web administrables.</h3>
                        <h2 style="margin-bottom:0px;">Y se pueden adaptar a cualquier dispositivo.</h2>
                    </div>
                </div>
                </div>
            </div>
            <div class="item">
                <!--image3-->
                <div class="fill" style="background-image:url(img/slider/3.jpg);">
                	<div class="divcenter">
                	<div style="color:#FFF;background-color: rgba(73, 123, 178, 0.69);border-radius: 10px 10px 10px 10px;-moz-border-radius: 10px 10px 10px 10px;-webkit-border-radius: 10px 10px 10px 10px; margin:auto; padding:30px; max-width:699px">
                        <h3 style="font-size:50px;">¡Comunicate!</h3>
                        <h2 style="margin-bottom:0px;">¡Te prometo que haremos un exelente proyecto!</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!-- Page Content -->
    <div class="container">
    	<section id="mi_perfil">
            <!-- perfil Estudios & Experiencias-->
            <br>
            <br>
            <h2 style="text-align:center;">Mi Perfil</h2>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h3>Estudios</h3>
                    <br>
                    <p style="text-align:justify;">Comencé a estudiar programación web de forma autodidacta a los 14 años. Junto con ello siempre me interesó el diseño web. Es por esto que realicé diferentes cursos referidos a ambos temas. Asimismo me capacité en tecnología e informática en CCTI (Terciario Ramos Mejía). Y actualmente sigo formándome incorporando nuevos conocimientos y actualizando los ya adquiridos.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <h3>Experiencia</h3>
                    <br>
                    <p style="text-align:justify;">Trabajo como Diseñador y Programador Web desde el año 2012 confeccionando y administrando diferentes páginas web para importantes clientes como estudios jurídicos, estudios contables, etc. (Ver portfolio). Poseo amplios conocimientos en diferentes lenguajes de programación como HTML, CSS, Bootstrap, Javascript, jQuery, Php, MySql, API Javascript Google Maps, AS3. Por otro lado, y respecto del diseño web, me destaco utilizando Rhinoceros, v-ray, mental-ray, 3ds MAX, Cinema 4D, Photoshop, After Effects, Illustrator y Flash.</p>
                </div>
            </div>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
            <!-- Skills-->
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <h3>Habilidades Web</h3>
                    <!--Barras-->
                    <div>
                        <p>
                            <div style="display:inline;">Html</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Html_text_porcentaje" class="tiempo" data-from="0" data-to="98" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 98%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Css3</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Css3_text_porcentaje" class="tiempo" data-from="0" data-to="87" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 87%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Javascript</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Javascript_text_porcentaje" class="tiempo" data-from="0" data-to="66" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 66%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">jQuery</div>
                            <span style="float:right;">%</span><div style="float:right;" id="jQuery_text_porcentaje" class="tiempo" data-from="0" data-to="90" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 90%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Bootstrap</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Bootstrap_text_porcentaje" class="tiempo" data-from="0" data-to="67" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 67%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Php</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Php_text_porcentaje" class="tiempo" data-from="0" data-to="70" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 70%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">MySql</div>
                            <span style="float:right;">%</span><div style="float:right;" id="MySql_text_porcentaje" class="tiempo" data-from="0" data-to="66" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 66%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">As3</div>
                            <span style="float:right;">%</span><div style="float:right;" id="As3_text_porcentaje" class="tiempo" data-from="0" data-to="47" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 47%; display:none;">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <h3>Habilidades Diseño 3D</h3>
                    <!--Barras-->
                    <div>
                        <p>
                            <div style="display:inline;">Rhinoceros</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Rhinoceros_text_porcentaje" class="tiempo" data-from="0" data-to="96" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 96%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">V-Ray</div>
                            <span style="float:right;">%</span><div style="float:right;" id="V_Ray_text_porcentaje" class="tiempo" data-from="0" data-to="40" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 40%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Mental-Ray</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Mental_Ray_text_porcentaje" class="tiempo" data-from="0" data-to="36" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 36%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">T-splines</div>
                            <span style="float:right;">%</span><div style="float:right;" id="T_splines_text_porcentaje" class="tiempo" data-from="0" data-to="46" data-speed="980">0%</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 46%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">RealFlow</div>
                            <span style="float:right;">%</span><div style="float:right;" id="RealFlow_text_porcentaje" class="tiempo" data-from="0" data-to="32" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 32%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Vue xStream</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Vue_xStream_text_porcentaje" class="tiempo" data-from="0" data-to="26" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 26%; display:none;">
                          </div>
                        </div>
                    </div>
                </div>
                
    
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <h3>Habilidades Animación</h3>
                    <!--Barras-->
                    <div>
                        <p>
                            <div style="display:inline;">Flash</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Flash_text_porcentaje" class="tiempo" data-from="0" data-to="58" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 58%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">After Effects</div>
                            <span style="float:right;">%</span><div style="float:right;" id="After_Effect_text_porcentaje" class="tiempo" data-from="0" data-to="40" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 40%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Cinema 4D</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Cinema_4D_text_porcentaje" class="tiempo" data-from="0" data-to="46" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 46%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">3ds Max</div>
                            <span style="float:right;">%</span><div style="float:right;" id="3ds_Max_text_porcentaje" class="tiempo" data-from="0" data-to="52" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 52%; display:none;">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>
                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <h3>Habilidades Diseño Gráfico</h3>
                    <!--Barras-->
                    <div>
                        <p>
                            <div style="display:inline;">Photoshop</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Photoshop_text_porcentaje" class="tiempo" data-from="0" data-to="96" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 96%; display:none;">
                          </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            <div style="display:inline;">Illustrator</div>
                            <span style="float:right;">%</span><div style="float:right;" id="Illustrator_text_porcentaje" class="tiempo" data-from="0" data-to="68" data-speed="980">0</div>
                        </p>
                        <div class="progress progress-striped" style=" height:8px;">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                               style="width: 68%; display:none;">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="portfolio">
            <!-- Portfolio-->
            <br>
            <br>
            <h2 style="text-align:center;">Portfolio</h2>
            <br>
            <br>
            <br>
            <div style="margin:auto; text-align:center;">
                <button id="btn_gal_1" class="btn btn-default btn-lg transition" type="button" style="margin-right:30px;">Páginas web</button>
                <button id="btn_gal_2" class="btn btn-default btn-lg transition" type="button">Renders 3D</button>
            </div>
            <br>
            <br>
            <div id="gal_1">
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/web/1.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/web/1.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/web/2.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/web/2.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/web/3.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/web/3.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/web/4.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/web/4.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/web/5.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/web/5.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/web/6.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-1" data-litebox-text="">
								<img src="img/galeria/web/6.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div id="gal_2">
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/3d/1.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/3d/1.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/3d/2.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/3d/2.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/3d/3.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/3d/3.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/3d/4.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/3d/4.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/3d/5.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/3d/5.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">	
                        <figure style="position:relative; padding:15px;" class="animation-web">
                        	<div style="position:relative;">
                        		<img src="img/lupa/lupa.png" class="lupa">
                            </div>
                            <a href="img/galeria/3d/6.jpg" target="_self" class="inline-block litebox" data-litebox-group="gal-2" data-litebox-text="">
								<img src="img/galeria/3d/6.jpg" style="width:100%;" class="imagen inline-block" />
							</a>
                        </figure>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
		</section>
        <section id="servicios">
            <br>
            <br>
            <h2 style="text-align:center;">Servicios</h2>
            <br>
            <br>
            <br>
			<div class="row">
            	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
                	<figure style="padding:15px;" class="scale_1 scale transition">
                    	<img src="img/servicios/ser-c.png" style="margin:auto; display:block; opacity:0px;" class="ser-img transition rotate_scale_1">
                    </figure>
                    <br>
                    <br>
                    <h3 style="text-align:center;">Web Gastronómicas</h3>
                    <br>
                    <div class="ser-div ser_">
                    	<p>
                            - Catálogo (auto administrable -opcional-).<br>
                            - Formulario de contactos (auto administrable -opcional-).<br>
                            - Introducción (auto administrable -opcional-).<br>
                            - Mapa en Google (auto administrable -opcional-).<br>
                            - Post (promociones administrables -opcional-).<br>
                            - Preload (animación carga inicial).<br>
                            - Sistema delivery online(auto administrable -opcional-).<br>
                            - Slider 3 imágenes promocionales (auto administrable -opcional-).<br>
                            - Vinculación a redes sociales (auto administrable -opcional-).<br>
                            - Web adaptable a cualquier dispositivo.<br>
                        </p>
                    </div>
                    <br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
                    <figure style="padding:15px;" class="scale_1 scale transition">
                    	<img src="img/servicios/ser-n.png" style="margin:auto; display:block; opacity:0px;" class="ser-img transition rotate_scale_1">
                    </figure>
                    <br>
                    <br>
                    <h3 style="text-align:center;">Web Negocios</h3>
                    <br>
                    <div class="ser-div ser_">
                    	<p>
                            - Catálogo (auto administrable -opcional-).<br>
                            - Formulario de contactos (auto administrable -opcional-).<br>
                            - Introducción (auto administrable -opcional-).<br>
                            - Mapa en Google (auto administrable -opcional-).<br>
                            - Post (promociones administrables -opcional-).<br>
                            - Preload (animación carga inicial).<br>
                            - Slider 3 imágenes promocionales (auto administrable -opcional-).<br>
                            - Vinculación a redes sociales (auto administrable -opcional-).<br>
                            - Web adaptable a cualquier dispositivo.<br>
                            <br>
                            Opcional: <br>
                            <br>
                            - Colocación del sistema MercadoPago y MercadoEnvíos a sus servicios (auto administrable -opcional-).<br>
                        </p>
                    </div>
                    <br>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 img">
                	<figure style="padding:15px;" class="scale_1 scale transition">
                    	<img src="img/servicios/ser-p.png" style="margin:auto; display:block; opacity:0px;" class="ser-img transition rotate_scale_1">
                    </figure>
                    <br>
                    <br>
                    <h3 style="text-align:center;">Web Profesionales</h3>
                    <br>
                    <div class="ser-div max">
                    	<p>
                            - Formulario de contactos (auto administrable -opcional-).<br>
                            - Introducción (auto administrable -opcional-).<br>
                            - Mapa en Google (auto administrable -opcional-).<br>
                            - Post (promociones administrables -opcional-).<br>
                            - Preload (animación carga inicial).<br>
                            - Slider 3 imágenes promocionales (auto administrable -opcional-).<br>
                            - Vinculación a redes sociales (auto administrable -opcional-).<br>
                            - Web adaptable a cualquier dispositivo.<br>
                            <br>
                            Opcionales:<br>
                            <br>
                            - Colocación del sistema MercadoPago y MercadoEnvíos a sus servicios (auto administrable -opcional-).<br>
                            - Galería de imágenes.<br>
                            - Galería de videos.<br>
                            - Sistema de turnos via mail(auto administrable -opcional-).<br>
                        </p>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:auto; background-color:#000; width:70%; height:1px;"></div>
            <br>
            <br>
        </section>
        <section id="contacto">
            <!-- Contacto-->
            <br>
            <br>
            <h2 style="text-align:center;">Contacto</h2>
            <br>
            <br>
            <br>
            <form role="form" method="post" id="contacto_form">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        <br>
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                        <br>
                        <input type="text" class="form-control" placeholder="Teléfono" name="telefono">
                        <br>
                        <input type="email" class="form-control" placeholder="Correo" name="correo">
                        <br>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <textarea class="form-control" rows="9" id="comment" placeholder="Consulta" name="comentario"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <button name="Enviar_Mail" class=" btn btn-default btn-lg transition" type="submit" style="margin:auto;display: block;">Enviar</button>
            </form>
            <?php
				$mail="contacto@ramiroportasdesign.tk, ramiro.portas@gmail.com";
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$telefono = $_POST['telefono'];
				$correo = $_POST['correo'];
				$comentario = $_POST['comentario'];
				$subject ="ramiroportasdesign.tk";
				$message ="
				Nombre:					".$nombre."
				Apellido:			".$apellido."
				Teléfono:			".$telefono."
				Correo:					".$correo."
				Comentario:			".$comentario."
				";
				if(isset($_POST['Enviar_Mail']))
				{
					if(@mail($mail, $subject, $message))
					{
						echo 
						'<script type="text/javascript">
							 $(document).ready(function(){
								$(\'body\').prepend(\'<div class="f_alert"><div class="m_alert"><h3>El mensaje ha sido enviado con éxito.</h3></div></div>\');
								$(\'.f_alert\').delay(1500).fadeOut(500, function() {$(this).remove();});	
							});
						</script>';						
					}else{
						echo 
						'<script type="text/javascript">
							 $(document).ready(function(){
								$(\'body\').prepend(\'<div class="f_alert"><div class="m_alert"><h3>Se ha detectado un error al enviar tu mensaje, intenta nuevamente.</h3></div></div>\');
								$(\'.f_alert\').delay(1500).fadeOut(500, function() {$(this).remove();});	
							});
						</script>';	
					}
				}			
            ?>
            <br>
            <br>
            <br>
            <br>
		</section>
    </div>
    <footer style="margin:0px; background-color:#333;">
        <div class="container">
        	<br>
        	<br>
            <div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:#FFF;text-align: left;">
                Ramiro Portas Diseñador Web Buenos Aires, Argentina
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="color:#FFF; text-align: right;">
                Copyright © 2016. Todos los derechos reservados.
                </div>
            </div>
            <br>
            <br>
        </div>
    </footer>
    <script>
    	$(window).load(function(){
			$('.load').fadeOut(500);
		});
        $('.carousel').carousel({
            interval: 5000
        })
		$('.litebox').liteBox();
	</script>
</body>
</html>
