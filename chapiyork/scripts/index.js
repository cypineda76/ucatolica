$(document).ready(function($){});

function detalle(it){
	$.fancybox({
		href	: 'detalle.php',
		type 	: 'ajax',
		ajax	: {
			type : 'get',
			data : {it:it}
		},
		topRatio: '0',
		afterShow: function (){
			
		},
	});
}

function editarNoticia(it){
	$.fancybox({
		href	: 'editar.php',
		type 	: 'ajax',
		ajax	: {
			type : 'get',
			data : {it:it}
		},
		topRatio: '0',
		afterShow: function (){
			
		},
	});
}

function saveEdit(){
	var artcod = $("#artcod").val();
	var artnom = $("#artnom").val();
	var artsec = $("#artsec").val();
	var artdes = $("#artdes").val();
	var artimg = $("#artimg").val();
	var artpri = $("#artpri").val();
	$.ajax({
    type    : "POST",
    cache   : false,
    datatype: "json",
    url     : "editar.php",
    data : ({ACC:"EDITAR",artcod:artcod,artnom:artnom,artsec:artsec,artdes:artdes,artimg:artimg,artpri:artpri}),
    success: function(data) {
      if(data === "OK"){
        alert("Se realizo el proceso");
        location.reload();
      } else{
        alert("Ocurrio un error realizando el proceso");
        return false;
      }
      return false;
    },
  });
	return false;
}

function registroUsuario(){
	var usunom = $("#usunom").val();
	var usulog = $("#usulog").val();
	var usupas = $("#usupas").val();
	$.ajax({
    type    : "POST",
    cache   : false,
    datatype: "json",
    url     : "registro.php",
    data : ({usunom:usunom,usulog:usulog,usupas:usupas}),
    success: function(data) {
      if(data === "OK"){
        alert("Se realizo el proceso");
        location.reload();
      } else{
        alert("Ocurrio un error realizando el proceso");
        return false;
      }
      return false;
    },
  });
	return false;
}

function _cerrar() { //Cerrar Ventana
    parent.$.fancybox.close();
}