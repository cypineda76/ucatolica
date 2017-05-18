$(document).ready(function($){
  $('#btning').bind('click', valid);
});

function valid(){
  var usr = $("#form-username").val();
  var pas = $("#form-password").val();
  if(usr===""){
    alert("Debe ingresar un usuario valido!");
    return false;
  }
  if(pas===""){
    alert("Debe ingresar una contraseña valida!");
    return false;
  }
  $.ajax({
    type    : "POST",
    cache   : false,
    datatype: "json",
    data : ({ACC:"LOGIN",usr:usr,pas:pas}),
    success: function(data) {
      if(data === "1"){
        //location.reload();
        location.href = "index.php";
      } else{
        alert("El usuario no existe o no se pudo comprobar la informaci&oacute;n");
        return false;
      }
      return false;
    },
  });
  
  return false;
}

window.alert = function (message) {
    $(document.createElement('div'))
        .attr({
            title: 'ERROR'
        })
        .html(message)
        .dialog({
            buttons: {
                Aceptar: function () {
                    $(this).dialog('close');
                }
            },
            close: function () {
                $(this).remove();
            },
            draggable: false,
            modal: true,
            resizable: false,
            width: 'auto',
            closeOnEscape: false,
        });
};