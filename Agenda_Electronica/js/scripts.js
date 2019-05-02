window.onload = function (){
  
   var btn = document.getElementById("btn");

    btn.onclick = function(){
        
        var finicio = document.getElementById("finicio").value;
        var expFinicio = /^\d$/;
        var valFinicio = expFinicio.test(finicio);

        if(valFinicio == false){

            alert("Ingrese correctamente la fecha");
        }

    }
}