var contacto = new Object(); //creamos el objeto contacto





var ExpresionRegularNombreApellido = /^[A-Za-z ]{1,}$/;
var ExpresionRegularCorreo = /^[a-zA-Z0-9_.-]{1,30}@[a-z.]{1,30}.[a-z]{1,10}$/;
var ExpresionRegularComentario = /^[A-Za-z0-9!#$% ?,.¡¿¡:;_-]{1,}$/;

var expresionemail = /^((([""]{0,1}[\s]*?)(?<displayName>[\w\s!#@$%&'*+\-=?\^_\.`{|}~,]*?)([""]{0,1}[\s]*?))??(<{0,1})(?<address>[\w\.!#$%&'*+\-=?\^_`{|}~]+@([\w\d-]+\.)+[\w]{2,4})(>{0,1})(\;|$))+$/;


function iniciar() {
  var btnEnviar = document.getElementById("enviar");

  if (btnEnviar.addEventListener) {
    btnEnviar.addEventListener("click", function() {
        createObject(document.contactar);
      },false);
    
  } else if (btnEnviar.attachEvent) {
    btnEnviar.attachEvent("onclick", function() {
      createObject(document.contactar);
    });
  }

}

function createObject(form) {

  contacto.nombre = document.getElementById("nombre").value;
  contacto.apellido = document.getElementById("apellido").value;
  contacto.correo = document.getElementById("correo").value;
  contacto.asunto = document.getElementById("asunto").value;
  contacto.comentario = document.getElementById("comentarios").value;

  if (ExpresionRegularNombreApellido.test(contacto.nombre)) {
    if (ExpresionRegularNombreApellido.test(contacto.apellido)) {
      if (ExpresionRegularCorreo.test(contacto.correo)) {
        if (contacto.asunto != "---") {
          if (ExpresionRegularComentario.test(contacto.comentario)) {

            var btnEnviar = document.getElementById("enviar");

           btnEnviar.setAttribute('type', 'submit');
              
          }else{
            alert("Ingrese un comentario");
          }
        }else{
          alert("Seleccione un asunto");
        }
      }else{
        alert("Correo no válido");
      }
    }else{
      alert("Apellido no válido");
    }
  }else{
    alert("Nombre no válido");
  }



}


if (window.addEventListener) {
  window.addEventListener("load", iniciar, false);
} else if (window.attachEvent) {
  window.attachEvent("onload", iniciar);
}
