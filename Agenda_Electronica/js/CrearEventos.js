window.onload = function (){
   
  
   var btn = document.getElementById("enviar");

    btn.onclick = function(){
        //validar imagen
        var file = document.getElementById("imagen").value;
        var expFile = /\.(jpg|png|gif)$/i;
        var valFile = expFile.test(file);
        

        if(valFile == false){

            alert("Ingrese correctamente la imagen");
        }

        //validar tema
        var titulo = document.getElementById("titulo").value;
        var expTitulo = /^[a-zA-Z0-9üéáíóúñÑ\s]{3,40}$/;
        var valTitulo = expTitulo.test(titulo);
        

        if(valTitulo == false){

            alert("Ingrese correctamente el titulo");
        }

        //validar lugar
        var lugar = document.getElementById("lugar").value;
        var expLugar = /^[a-zA-Z0-9üéáíóúñÑ\s]{3,30}$/;
        var valLugar = expLugar.test(lugar);
        

        if(valLugar == false){

            alert("Ingrese correctamente el lugar");
        }

        if(valFile == true && valLugar == true && valTitulo == true){
            btn.type = "submit";
            
        }

    }


    
    
}