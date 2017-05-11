<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Metodos Numericos</title>
    <meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./lib/common/bootstrap/css/bootstrap.min.css"><!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" type="text/css" href="./lib/common/css/animate.min.css"><!-- Animate -->
    <link rel="stylesheet" type="text/css" href="./lib/common/css/font-awesome.min.css"><!-- FontAwesome Icons -->
    <link rel="stylesheet" type="text/css" href="./lib/common/css/normalize.min.css"><!-- Normailize Stylesheet -->
    <link rel="stylesheet" type="text/css" href="./lib/common/css/index.css">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/jquery-ui/jquery-ui.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/jquery-ui/jquery-ui.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.css" media="screen" />

    <script type="text/javascript" src="./scripts/lib/jquery.js"></script>
    <script type="text/javascript" src="./lib/common/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./scripts/lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="./scripts/index.js"></script>
</head>
<body>
    <!-- TOP CONTENT -->
    <input type="hidden" name="numeje" id="numeje" value="3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">Parametros</div>
                            <div class="panel-body">
                                {for $ejercicio=1 to 3}
                                <button type="button" class="btn btn-info" id="btn_{$ejercicio}" name="btn_{$ejercicio}" valor="{$ejercicio}">Ejercicio {$ejercicio}</button>
                                {/for}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="responseDIV"></div>
            </div>
       </div>
    </div>
    <div class="container">
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">Parametros</div>
                            <div class="panel-body">
                                {for $ejercicio=1 to 3}
                                <button type="button" class="btn btn-info" id="btn_{$ejercicio}" name="btn_{$ejercicio}" valor="{$ejercicio}">Ejercicio {$ejercicio}</button>
                                {/for}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="responseDIV"></div>
            </div>
       </div>
    </div>
</body>
</html>