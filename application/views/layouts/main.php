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

        <script src="<?= asset_url('js/vendor/modernizr-2.6.2.min.js') ?>"></script>
        <script src="<?= asset_url('js/vendor/jquery-1.9.0.min.js') ?>"></script>
        
        <style type="text/css">
        	h1,h2,h3,h4,h5,h6{
				font-family: "Oswald", sans-serif;
				font-weight:normal;
				color:#666;
				margin:3px 0px;
				padding:3px 0px;
			}
			
			.afeature {
				display: block;
			}
			
			.afeature{
				width:190px;
				height:190px;
				margin:10px auto;
				background:#eee url("http://responsivewebinc.com/premium/ericka/ericka-o/img/header-back.png") repeat;
				border-radius:250px;
				border:5px solid #fff;
				box-shadow:0px 0px 3px #aaa;
				text-align:center;
				-webkit-transition:border 1s ease;
				-moz-transition:border 1s ease;
				-o-transition:border 1s ease;
				transition:border 1s ease;
			}
			
			
			.afeature:hover{text-decoration: none; cursor: pointer; cursor: hand;}
			.afeature:hover{
				-webkit-transition:border 1s ease;
				-moz-transition:border 1s ease;
				-o-transition:border 1s ease;
				transition:border 1s ease;
			}
			
			.afeature:hover{
				border:5px solid #e24e35;
			}
			
			.afmatter{
				width:80%;
				margin:10px auto;
				padding-top:15px;
				line-height:19px;
				font-size:13px;
				color:#666;
			}
			
			.afmatter i{
				font-size:40px;
				width:40px;
				margin-bottom:12px;
			}
			
			.afmatter i{
				color:#e24e35;
			}
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
        <div class="container">
        	<div class="row">
        		<div class="span3">
        			<a class="afeature" href="#">
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

        <?= $contents ?>
        
    </body>
</html>