<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Metodos Numericos</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <!--<link href="vendor/morrisjs/morris.css" rel="stylesheet">-->
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/jquery-ui/jquery-ui.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.css" media="screen" />
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Metodos Numericos</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Series de Taylor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            {for $ejercicio=1 to 3}
                                <li>
                                    <a href="#" onclick="serie({$ejercicio});">Serie {$ejercicio}</a>
                                </li>
                            {/for}
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="funcionbiseccion(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Metodo Biseccion</a>
                        </li>
                        <li>
                            <a href="#" onclick="funcionSecante(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Metodo de la Secante</a>
                        </li>
                        <li>
                            <a href="#" onclick="newton(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Metodo newton raphson</a>
                        </li>
                        <li>
                            <a href="#" onclick="optunivariada(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Metodo Optimizacion Uniariada</a>
                        </li>
                        <li>
                            <a href="#" onclick="funciontriseccion(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Metodo Triseccion</a>
                        </li>
                        <li>
                            <a href="#" onclick="funcionkseccion(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Metodo K-seccion</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Gauss<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" onclick="gauss(0);">Jordan</a>
                                </li>
                                <li>
                                    <a href="#" onclick="seidel(1);">Seidel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" onclick="integracion(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Integracion Numerica</a>
                        </li>
                        <li>
                            <a href="#" onclick="runggekutta(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Ecuaciones diferenciales numericas</a>
                        </li>
                        <li>
                            <a href="#" onclick="ag(0);"><i class="fa fa-bar-chart-o fa-fw"></i> Algoritmo Genetico</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Resultado</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div id="responseDIV"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <!--<script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>-->
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="./scripts/lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="./scripts/index.js"></script>
</body>
</html>