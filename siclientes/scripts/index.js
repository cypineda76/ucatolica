$(document).ready(function($){

});

function fnclientes(){
	$.ajax({
		type    : "POST",
		cache   : false,
		url     : "index.php",
		data : "ACC=LISTACLIENTES",
		success: function(data) {
			$("#responseDIV").html(data);
		},
	});
	return false;
}

function fnusuadm(){
	$.fancybox({
		modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNUSU"}
		},
		afterShow: function (){
			$("#newuser").bind('click', createUserAdm);
			$("#btncancel").bind("click", cancelar);
		}
	});
}

function newcustomer(){
	$.fancybox({
		modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNNEWCLIENTE"}
		},
		afterShow: function (){
			$("#savclien").bind('click', crearCliente);
			$("#btncancel").bind("click", cancelar);
		}
	});
}

function crearCliente(){
	var type_document_id = $("#type_document_id").val();	
	var docum = $("#document").val();
	var firts_name = $("#firts_name").val();
	var last_name = $("#last_name").val();
	var gender = $("#gender").val();
	var date_birth = $("#date_birth").val();
	var street = $("#street").val();
	var phone = $("#phone").val();
	var email = $("#email").val();
	var code_city = $("#code_city").val();
	var company_code = $("#company_code").val();
	var company_name = $("#company_name").val();
	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "clientes.php?type_document_id="+type_document_id+"&document="+docum
	  +"&firts_name="+firts_name+"&last_name="+last_name+"&gender="+gender+"&street="+street
	  +"&phone="+phone+"&email="+email+"&date_birth="+date_birth+"&code_city="+code_city
	  +"&company_code="+company_code+"&company_name="+company_name,
	  "method": "POST",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "0830a74c-40ae-be7e-2a9d-6b421924302f"
	  }
	}
	$.ajax(settings).done(function (response) {
		if(response.val == 200){
			cancelar();
			fnclientes();
		}
		alert(response.msn);
	});
	return false;
}

function compras(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNCOMPRAS", document:it}
		},
		afterShow: function (){
			$("#addcompra").bind('click', adicionarCompra);
		}
	});
}

function eliminarCliente(it){
	$.fancybox({
		//modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNDELETECLI",  document:it}
		},
		afterShow: function (){
			$("#btndelete").bind('click', borrarCliente);
			$("#btncancel").bind("click", cancelar);
		}
	});
}

function editarCliente(it){
	$.fancybox({
		modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNEDITCLI", document:it}
		},
		afterShow: function (){
			$("#savedit").bind('click', modificarCliente);
			$("#btncancel").bind("click", cancelar);
		}
	});
}

function cancelar(){
	parent.$.fancybox.close();
}

function borrarCliente(){
	var docum = $("#clidoc").val();
	var settings = {
	  "async": true,
	  "crossDomain": true,
	  "url": "clientes.php?document="+docum,
	  "method": "DELETE",
	  "headers": {
	    "cache-control": "no-cache",
	    "postman-token": "c7eb58be-021f-52fd-0cb6-68d1e5beee04"
	  }
	}

	$.ajax(settings).done(function (response) {
		if(response.val == 200){
			cancelar();
			fnclientes();
		}
		alert(response.msn);
	});
	return false;
}

function modificarCliente(){
	var type_document_id = $("#type_document_id").val();
	var document_mod = $("#document_mod").val();
	var docum = $("#document").val();
	var firts_name = $("#firts_name").val();
	var last_name = $("#last_name").val();
	var gender = $("#gender").val();
	var date_birth = $("#date_birth").val();
	var street = $("#street").val();
	var phone = $("#phone").val();
	var email = $("#email").val();
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "clientes.php?type_document_id="+type_document_id+"&document="+docum+"&document_mod="+document_mod
		+"&firts_name="+firts_name+"&last_name="+last_name+"&gender="+gender+"&street="+street+"&phone="+phone+"&email="+email,
		"method": "PUT",
		"headers": {
			"cache-control": "no-cache",
			"postman-token": "43eabf1d-0c36-f849-19f1-ec9560f3372b"
		}
	}
	$.ajax(settings).done(function (response) {
		if(response.val == 200){
			cancelar();
			fnclientes();
		}
		alert(response.msn);
	});
	return false;
}

function adicionarCompra(){
	var docum = $("#document").val();
	var producto = $("#producto").val();
	var nombre_producto = $("#nombre_producto").val();
	var cantidad = $("#cantidad").val();
	var total = $("#total").val();
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "compras.php?document="+docum+"&producto="+producto+"&nombre_producto="
		+nombre_producto+"&cantidad="+cantidad+"&total="+total,
		"method": "POST",
		"headers": {
			"cache-control": "no-cache",
			"postman-token": "fe03ff3b-7edc-d60e-ab48-3889bb016fc1"
		}
	}
	$.ajax(settings).done(function (response) {
		if(response.val == 200){
			compras();
		}
		alert(response.msn);
	});
	return false;
}

function fnusucli(it){
	$.fancybox({
		modal	: 'true',
		href	: 'index.php',
		type 	: 'ajax',
		ajax	: {
			type : 'post',
			data : {ACC:"VTNUSUCLIEN", document:it}
		},
		afterShow: function (){
			$("#newuser").bind('click', createUserClient);
			$("#btncancel").bind("click", cancelar);
		}
	});
}

function createUserClient(){
	var docum = $("#document").val();
	var usunom = $("#usunom").val();
	var usulog = $("#usulog").val();
	var usupas = $("#usupas").val();
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "usuarios.php?usunom="+usunom+"&usulog="+usulog+"&usupas="+usupas+"&document="+docum,
		"method": "POST",
		"headers": {
			"cache-control": "no-cache",
			"postman-token": "cff3e2cf-2ef4-ae3b-7f48-97aecea7b3e0"
		}
	}
	$.ajax(settings).done(function (response) {
		if(response.val == 200){
			cancelar();
		}
		alert(response.msn);
	});
	return false;
}

function createUserAdm() {
	var usunom = $("#usunom").val();
	var usulog = $("#usulog").val();
	var usupas = $("#usupas").val();
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "usuariosAdmin.php?usunom="+usunom+"&usulog="+usulog+"&usupas="+usupas,
		"method": "POST",
		"headers": {
			"cache-control": "no-cache",
			"postman-token": "cff3e2cf-2ef4-ae3b-7f48-97aecea7b3e0"
		}
	}
	$.ajax(settings).done(function (response) {
		if(response.val == 200){
			cancelar();
		}
		alert(response.msn);
	});
	return false;
}