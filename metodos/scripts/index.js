$(document).ready(function($){});

function ag(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"MATRIZAG", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#dimfil").bind('change', genmatrizag).trigger('change');
			$("#btnproc").bind("click", enviarMatrizag);
		},
	});
}

function genmatrizag(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimfil").val();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "index.php",
		data	: "ACC=GENERARMATRIZAG&dimfil="+dimfil+"&dimcol="+dimcol,
		success: function(data) {
			$("#divmatriz").html(data);
		}
	});
}

function llenarmatrizag(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimfil").val();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "index.php",
		data	: "ACC=GENERARMATRIZAG&dimfil="+dimfil+"&dimcol="+dimcol+"&LLENAR=OK",
		success: function(data) {
			$("#divmatriz").html(data);
		}
	});
}

function enviarMatrizag(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimcol").val();
	var population = $("#population").val();
	var generations = $("#generations").val();
	var elitism = $("#elitism").val();
    $("#formMatriz :input:text").map(function(){
         if( !$(this).val() ) {
         	alert("Debe llenar toda la matriz");
         	return false;
        }   
    });
    var matriz = $("#formMatriz").serialize();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "algortimoGenetico.php",
		data	: "matriz="+matriz+'&population='+population+'&generations='+generations+'&elitism='+elitism+'&city='+dimfil,
		success: function(data) {
			parent.$.fancybox.close();
			$("#responseDIV").html(data);
		}
	});
}

function gauss(it){ //0 = Jordan, 1= Seidel
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNMATRIZ", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#dimfil").bind('change', genmatriz).trigger('change');
			$("#dimcol").bind('change', genmatriz).trigger('change');
			$("#btnproc").bind("click", enviarMatriz);
		},
	});
}

function runggekutta(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS4", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var parh = $("#parh").val();
				var parx = $("#parx").val();
				var pary = $("#pary").val();
				var parrk = $("#parrk").val();
				var parn = $("#parn").val();
				if(parh === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				if(parx === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				if(pary === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				if(parrk === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				if(parn === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "rungekutta.php",
					data	: "parh="+parh+"&parx="+parx+"&pary="+pary+"&parrk="+parrk+"&parn="+parn,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function seidel(it){ //0 = Jordan, 1= Seidel
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNMATRIZ2", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#dimfil").bind('change', genmatriz).trigger('change');
			$("#dimcol").bind('change', genmatriz).trigger('change');
			$("#btnproc").bind("click", enviarMatriz2);
		},
	});
}

function genmatriz(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimcol").val();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "index.php",
		data	: "ACC=GENERARMATRIZ&dimfil="+dimfil+"&dimcol="+dimcol,
		success: function(data) {
			$("#divmatriz").html(data);
		}
	});
}

function llenarmatriz(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimcol").val();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "index.php",
		data	: "ACC=GENERARMATRIZ&dimfil="+dimfil+"&dimcol="+dimcol+"&LLENAR=OK",
		success: function(data) {
			$("#divmatriz").html(data);
		}
	});
}

function enviarMatriz(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimcol").val();
	console.log("OOOOOO");
	var errors = 0;
    $("#formMatriz :input:text").map(function(){
         if( !$(this).val() ) {
         	alert("Debe llenar toda la matriz");
         	return false;
        }   
    });
    var matriz = $("#formMatriz").serialize();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "jordan.php",
		data	: "matriz="+matriz,
		success: function(data) {
			parent.$.fancybox.close();
			$("#responseDIV").html(data);
		}
	});
}

function enviarMatriz2(){
	var dimfil = $("#dimfil").val();
	var dimcol = $("#dimcol").val();
	var valx = $("#valx").val();
	var valy = $("#valy").val();
	var valz = $("#valz").val();
	var base = $("#base").val();
	var exponente = $("#exponente").val();
	if(valx === ""){
		alert('Debe llenar todo el formulario');
		return false;
	}
	if(valy === ""){
		alert('Debe llenar todo el formulario');
		return false;
	}
	if(valz === ""){
		alert('Debe llenar todo el formulario');
		return false;
	}
	if(base === ""){
		alert('Debe llenar todo el formulario');
		return false;
	}
	if(exponente === ""){
		alert('Debe llenar todo el formulario');
		return false;
	}
	var errors = 0;
    $("#formMatriz :input:text").map(function(){
         if( !$(this).val() ) {
         	alert("Debe llenar toda la matriz");
         	return false;
        }   
    });
    var matriz = $("#formMatriz").serialize();
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "seidel.php",
		data	: "matriz="+matriz+'&valx='+valx+'&valy='+valy+'&valz='+valz+'&base='+base+'&exponente='+exponente,
		success: function(data) {
			parent.$.fancybox.close();
			$("#responseDIV").html(data);
		}
	});
}

function serie(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "series.php",
					data	: "ACC=SERIE"+it+"&base="+base+"&exponente="+exponente,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function funcionbiseccion(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "biseccion.php",
					data	: "base="+base+"&exponente="+exponente,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function funcionSecante(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "secante.php",
					data	: "base="+base+"&exponente="+exponente,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function newton(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "newtonrapson.php",
					data	: "base="+base+"&exponente="+exponente,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function optunivariada(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "optimizacionuni.php",
					data	: "base="+base+"&exponente="+exponente,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function funciontriseccion(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "triseccion.php",
					data	: "base="+base+"&exponente="+exponente,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function funcionkseccion(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS2", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var base = $("#base").val();
				var exponente = $("#exponente").val();
				var seccion = $("#seccion").val();
				if(base === ""){
					alert("Debe ingresar la base");
					return false;
				}
				if(exponente === ""){
					alert("Debe ingresar el exponente");
					return false;
				}
				if(seccion === ""){
					alert("Debe ingresar el numero de seccion");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "kseccion.php",
					data	: "base="+base+"&exponente="+exponente+"&seccion="+seccion,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

function integracion(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNPARAMETROS3", it:it}
		},
		topRatio: '0',
		afterShow: function (){
			$("#btnproc").bind("click",function(){
				var para = $("#para").val();
				var parb = $("#parb").val();
				var parn = $("#parn").val();
				if(para === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				if(parb === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				if(parn === ""){
					alert("Debe ingresar todos los parametros");
					return false;
				}
				parent.$.fancybox.close();
				$.ajax({
					type    : "POST",
					cache   : false,
					url     : "integracionnum.php",
					data	: "para="+para+"&parb="+parb+"&parn="+parn,
					success: function(data) {
						$("#responseDIV").html(data);
					}
				});
			});
		},
	});
}

window.alert = function (message) {
    $(document.createElement('div'))
        .attr({
            title: 'Alert'
        })
        .html(message)
        .dialog({
            buttons: {
                OK: function () {
                    $(this).dialog('close');
                }
            },
            close: function () {
                $(this).remove();
            },
            draggable: true,
            modal: true,
            resizable: false,
            width: 'auto',
            closeOnEscape: false
        });
};

function _cerrar() { //Cerrar Ventana
    parent.$.fancybox.close();
}