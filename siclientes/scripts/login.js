$(document).ready(function($){
  $('#btnlogin').bind('click', valid);
});

function valid(){
  var user_login = $("#user_login").val();
  var user_pass = $("#user_pass").val();
  if(user_login===""){
    alert("Debe ingresar un usuario valido!");
    return false;
  }
  if(user_pass===""){
    alert("Debe ingresar una contraseña valida!");
    return false;
  }
  $.ajax({
    type    : "POST",
    cache   : false,
    datatype: "json",
    data : ({ACC:"LOGIN",user_login:user_login,user_pass:user_pass}),
    success: function(data) {
      var response = JSON.parse(data);
      alert(response.msn);
      if(response.val == 200){
        location.href = "index.php";
      }
    },
  }); 
  return false;
}