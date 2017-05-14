    <title>ChapiYork - Noticias</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
    <link href="templates/auto/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="scripts/lib/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
    <link href="scripts/lib/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="./scripts/lib/jquery-ui/jquery-ui.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.css" media="screen" />
    <script type='text/javascript' src='scripts/lib/jquery.js'></script>
    <script type='text/javascript' src='scripts/lib/bootstrap.min.js'></script>
    <script type='text/javascript' src='scripts/lib/jquery-ui/jquery-ui.js'></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script type='text/javascript' src='scripts/index.js'></script>
<div style="width: 800px;">
	<div class="main_bg">
		<div class="wrap">
			<div class="wrapper">	
				<div class="row">
                <div class="col-lg-12">
                    <h1>Editar Noticia</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <input type="hidden" name="artcod" id="artcod" value="{$det.artcod}">
                                        <div class="form-group">
                                            <label>Titulo</label>
                                            <input id="artnom" value="{$det.artnom}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Seccion</label>
                                            <select id="artsec" class="form-control">
                                                <option value="">--Seleccione--</option>
                                                <option value="2" {if $det.artsec == 2} selected {/if}>Deportes</option>
                                                <option value="3" {if $det.artsec == 3} selected {/if}>Politica</option>
                                                <option value="4" {if $det.artsec == 4} selected {/if}>Tecnologia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea id="artdes" class="form-control" rows="3">{$det.artdes}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input id="artimg" class="form-control" value="{$det.artimg}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de noticia</label>
                                            <select id="artpri" class="form-control">
                                                <option value="PRINCIPAL" {if $det.artpri == 'PRINCIPAL'} selected {/if}>Principal</option>
                                                <option value=""  {if $det.artpri == ''} selected {/if}>Secundario</option>
                                            </select>
                                        </div>
                                        <button type="button" id="btnedit" name="btnedit" class="btn btn-primary" onclick="saveEdit();">Editar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>