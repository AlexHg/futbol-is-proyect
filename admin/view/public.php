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
</head>

<body>
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>
        <header class="header">

            <!-- Header Top Bar -->
            <div class="header__top-bar clearfix">
                <div class="container">
                    <ul class="nav-account">
                        <li class="nav-account__item"><a href="home" data-toggle="modal" data-target="#modal-login-register-tabs">Acceder a mi cuenta</a></li>
                    </ul>
                </div>
            </div>
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
                                <li><a href="#">Unirme al club</a></li>
                                <li><a href="#">Formar o unirme a un equipo</a></li>
                                <li><a href="#">Torneos</a></li>
                                <li><a href="#">Horarios</a></li>
                                <li><a href="#">Contacto</a></li>


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
                    <aside class="widget widget--sidebar card widget-preview col-md-12">
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

        <div class="container" id="principal-content">
            <div class="col-md-8">
                <aside class="widget card widget--sidebar widget-game-result">
                    <div class="widget__title card__header card__header--has-btn">
                        <h4>Ultimo partido Torneo 26 - Fútbol rapido</h4>
                        <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Ver todos</a>
                    </div>
                    <div class="widget__content card__content">
                        <!-- Game Score -->
                        <div class="widget-game-result__section" style="display:flex;justify-content: center;">
                            <div class="widget-game-result__section-inner" style="max-width: 450px;">
                                <header class="widget-game-result__header">
                                    <h3 class="widget-game-result__title">Cuarto de final</h3>
                                    <time class="widget-game-result__date" datetime="2016-03-24">VIERNES 25 DE MARZO</time>
                                </header>

                                <div class="widget-game-result__main">
                                    <!-- 1st Team -->
                                    <div class="widget-game-result__team widget-game-result__team--first">
                                        <figure class="widget-game-result__team-logo">
                                            <a href="#"><img src="source/img/alchemists_last_game_results_big.png" alt=""></a>
                                        </figure>
                                        <div class="widget-game-result__team-info">
                                            <h5 class="widget-game-result__team-name">Alchemists</h5>
                                            <div class="widget-game-result__team-desc">Elric Bros School</div>
                                        </div>
                                    </div>
                                    <!-- 1st Team / End -->

                                    <div class="widget-game-result__score-wrap">
                                        <div class="widget-game-result__score">
                                            <span class="widget-game-result__score-result widget-game-result__score-result--winner">2</span> <span class="widget-game-result__score-dash">-</span> <span class="widget-game-result__score-result widget-game-result__score-result--loser">0</span>
                                        </div>
                                        <div class="widget-game-result__score-label">Final Score</div>
                                    </div>

                                    <!-- 2nd Team -->
                                    <div class="widget-game-result__team widget-game-result__team--second">
                                        <figure class="widget-game-result__team-logo">
                                            <a href="#"><img src="source/img/logo-l-clovers--sm.png" alt=""></a>
                                        </figure>
                                        <div class="widget-game-result__team-info">
                                            <h5 class="widget-game-result__team-name">Clovers</h5>
                                            <div class="widget-game-result__team-desc">St Paddy's Institute</div>
                                        </div>
                                    </div>
                                    <!-- 2nd Team / End -->
                                </div>
                            </div>
                        </div>
                        <!-- Game Score / End -->
                    </div>
                </aside>
                <div class="main-news-banner main-news-banner--soccer-ball">
                    <div class="main-news-banner__inner">
                        <div class="posts posts--simple-list posts--simple-list--xlg">
                            <div class="posts__item posts__item--category-1">
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Club de Fútbol</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">¡Forma parte del <span class="main-news-banner__highlight">Club de Fútbol</span> hoy mismo!</a></h6>

                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                    </div>
                                    <div class="posts__more">
                                        <a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed">Envíar solicitud <i class="fa fa-plus text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <aside class="widget card widget--sidebar widget-standings">
                    <div class="widget__title card__header card__header--has-btn">
                        <h4>Torneos</h4>

                    </div>
                    <div class="widget__content card__content">
                        <div class="table-responsive">
                            <table class="table table-hover table-standings">
                            <h5> Torneos de f. soccer</h5>

                                <table class="table table-striped table-responsive ">

                                    <thead>



                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Inicio</th>
                                            <th>Limite de inscripciones</th>
                                            <th>Finalización</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php tabla_torneos_soccer_index() ?>
                                    </tbody>
                                </table>

                                <h5>Torneos de f. rapido</h5>
                                <table class="table table-striped table-responsive  ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Inicio</th>
                                            <th>Limite de inscripciones</th>
                                            <th>Finalización</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php tabla_torneos_rapido_index() ?>
                                    </tbody>
                                </table>

                            </table>
                        </div>
                    </div>
                </aside>
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
