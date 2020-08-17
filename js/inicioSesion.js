$(document).ready(function() {
 
  $("#submit").click(function () {
    if($("#name").val() == "gaston"){
      if($("#email").val() == "1234"){
        window.location.href ="subirFotos.html"; 
        alert("correcto") 
      } else {
        alert('Contraseña incorrecta')
      }

    }else {
      alert('Usuario incorrecto')
    }
  });
});