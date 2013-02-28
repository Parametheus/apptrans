<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $title ?> | <?= $this->config->item('site_name') ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?= asset_url('css/normalize.css') ?>">
        <link rel="stylesheet" href="<?= asset_url('css/main.css') ?>">
        <link rel="stylesheet" href="<?= asset_url('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= asset_url('css/site.css') ?>">

        <link href='http://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'>

        <script src="<?= asset_url('js/vendor/modernizr-2.6.2.min.js') ?>"></script>
        <script src="<?= asset_url('js/vendor/jquery-1.9.0.min.js') ?>"></script>

        <style type="text/css">
            .navbar-custom {background-image: none; background-color: transparent; background: white; height: 45px; padding-top: 4px;}

            section h2 { color: #2d2828; }
            section h2 { text-align: center; padding-top: 80px; }
            h2, h3 { font-family: "Chivo", serif; font-weight: normal; font-size: 38px; line-height: 48px; color: #000; }

        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="main-wrapper" style="background: #E3E3E3; padding-top: 40px;">
            <header>
                <nav class="navbar navbar-fixed-top">
                    <div class="navbar-inner navbar-custom">
                        <div class="container">
                            <a class='btn btn-navbar' data-target='.nav-collapse' data-toggle='collapse'>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                            </a>
                            <div class="nav-collapse collapse">
                                <a class="brand" href="#">Autoservicio Online</a>
                                <ul id="tab" class="nav pull-right">
                                    <li><a href="#Tab1" data-toggle="tab">Servicio</a></li>
                                    <li><a href="#Tab1" data-toggle="tab">Nosotros</a></li>
                                    <li><a href="#Tab1" data-toggle="tab">Ayuda</a></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <section style="padding-bottom: 20px;">
                <div class="container">
                    <!--h2>Licores y otras bebidas alcohólicas</h2-->
                    <div class="row" style="margin-top: 30px;">
                        <div class="span3">
                            <a class="afeature" href="<?= site_url('/apptrans/web'); ?>">
                                <div class="afmatter">
                                    <i>o</i>
                                    <h4>Ron</h4>
                                    <p>Ron</p>
                                </div>
                            </a>
                        </div>
                        <div class="span3">
                            <a class="afeature" href="#">
                                <div class="afmatter">
                                    <i>o</i>
                                    <h4>Vodka</h4>
                                    <p>Vodka</p>
                                </div>
                            </a>
                        </div>
                        <div class="span3">
                            <a class="afeature" href="#">
                                <div class="afmatter">
                                    <i>o</i>
                                    <h4>Cervezas</h4>
                                    <p>Cervezas</p>
                                </div>
                            </a>
                        </div>
                        <div class="span3">
                            <a class="afeature" href="#">
                                <div class="afmatter">
                                    <i>o</i>
                                    <h4>Jugos</h4>
                                    <p>Jugos</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>