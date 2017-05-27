<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="source/css/css" rel="stylesheet">
    <link href="source/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/css/content.css" rel="stylesheet">
    <link href="source/css/components.css" rel="stylesheet">
    <link href="source/css/style.css" rel="stylesheet">
    <link href="source/css/custom.css" rel="stylesheet">
    <link href="source/css/own.css" rel="stylesheet">
    <base target="_parent">
    <script type="text/javascript">
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', 'b1870c0caf443a359541cb9c16950ad6e36f1698');
    </script>
</head>

<body>
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>
        <header class="header">

            <!-- Header Top Bar -->
            <div class="header__top-bar clearfix">
                <div class="container">
                </div>
            </div>
            <br>
            <!-- Header Top Bar / End -->

            <!-- Header Secondary -->
            <div class="header__secondary">
                <div class="container">
                    <!-- Header Search Form -->
                    <img src="source/img/escom.png" style="height:80px; margin:6px 0;" alt="">
                    <img src="source/img/ipn.png" style="height:80px; margin:6px 0; " alt="">


                </div>
            </div>
            <!-- Header Secondary / End -->

            <!-- Header Primary -->
            <div class="header__primary">
                <div class="container">
                    <div class="header__primary-inner">

                        <!-- Header Logo -->
                        <div class="header-logo">
                            <a href=""><img src="source/img/logo-FUT.png" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists" class="header-logo__img"></a>
                        </div>
                        <!-- Header Logo / End -->

                        <!-- Main Navigation -->

                        <nav class="main-nav clearfix">
                            <ul class="main-nav__list">

                                <li class="active"><a href="#">Inicio</a></li>
                                <li><a href="#">Conócenos</a></li>
                                <li><a href="#">Contáctanos</a></li>
                                <li><a href="home">Acceder a mi cuenta</a></li>
                                <li><a href="registrarCuenta">Registrarse</a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                </div>
            </div>
            <!-- Header Primary / End -->

        </header>
        <div class="header-mobile clearfix" id="header-mobile">
            <div class="header-mobile__logo">
                <a href="#"><img src="source/img/logo-FUT.png" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
            </div>
            <div class="header-mobile__inner">
                <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
                <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
            </div>


            <div class="header-search-form">
                <form action="##" id="mobile-search-form" class="search-form">
                    <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your seach here...">
                    <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="header-search-form">
                <form action="##" id="mobile-search-form" class="search-form">
                    <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your seach here...">
                    <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="header-search-form">
                <form action="##" id="mobile-search-form" class="search-form">
                    <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your seach here...">
                    <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <section id="headshow">
            <div class="covershow"></div>
            <div class="contentshow ">
                <div class="container" align="center">
                    <h1 class="page-heading__title"><span style="font-size:45px;">CLUB DE Fútbol & Fútbol RÁPIDO </span><br><span class="highlight">PRÓXIMOS PARTIDOS</span> </h1>
                </div>

                <div class="container">
                    <aside class="widget widget--sidebar card widget-preview col-md-12" style="overflow-y:scroll;max-height:400px;">
                        <div class="widget__content card__content">

                            <!-- Match Preview -->
                            <?php tablas_resultados_Torneos_index() ?>


                        </div>
                        <!-- Match Preview / End -->
                    </aside> 
                </div>
                

            </div>

        </section>

        <div style="margin-top:4rem;"></div>

        <div class="container" id="principal-content" style="padding-left: 0px;padding-right: 0px;">
            <div class="col-md-12">

                <div class="container" style="padding-left: 0px;padding-right: 0px;">
                    <aside class="widget widget--sidebar card widget-preview col-md-12" style="padding-left: 0px;padding-right: 0px;">
                        <div class="widget__content card__content">
                            <div class="widget__title card__header card__header--has-btn">
                                <h4>Torneos</h4>

                            </div>
                            <!-- Match Preview -->
                               <h5> Torneos de Fútbol Soccer</h5>

                            <table class="table  table-striped ">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Inicio</th>
                                        <th>Limite de inscripciones</th>
                                        <th>Días de juego</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php tabla_torneos_soccer_index() ?>
                                </tbody>
                            </table>
                            <br>
                            <h5>Torneos de Fútbol Rápido</h5>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Inicio</th>
                                        <th>Limite de inscripciones</th>
                                        <th>Días de juego</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php tabla_torneos_rapido_index() ?>
                                </tbody>
                            </table>

                        </div>
                        <!-- Match Preview / End -->
                    </aside>
                </div>

                <div class="container">
                    <aside class="widget card widget--sidebar widget-game-result">

                        <div class="widget__content card__content">
                            <!-- Game Score -->






                            <!-- Game Score / End -->
                        </div>
                    </aside>
                </div>
                <div class="main-news-banner main-news-banner--soccer-ball">
                    <div class="main-news-banner__inner">
                        <div class="posts posts--simple-list posts--simple-list--xlg">
                            <div class="posts__item posts__item--category-1">
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Club de Fútbol</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">¡Forma parte del <span class="main-news-banner__highlight">Club de Fútbol</span> hoy mismo!</a></h6>
                                    <div class="posts__more">
                                        <a href='registrarCuenta' class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed">¡Regístrate ahora! <i class="fa fa-plus text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div id="footright">Creado por la clase de ingenieria de software</div>
            </div>
        </footer>
    </div>
</body>

</html>

