<?php

Class EventosAdminForm{



public function fomFilter(){

echo'
<div class="row">         
  <div class="col-md-offset-4 col-md-11">   
    <form action="EventosFiltrados.php" method="POST">             
           
        <div class="row" style="display: inline-block;">
            <div class="col-offset-2 col-md-10">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <br>
                        <label>Categorias</label>
                        <br>
                        <select name=\'cat\' id=\'cat\' class=\'txt\'>
                        <option value=\'Todas\'>Todas</option>
                        <option value=\'1\'>Social</option>
                        <option value=\'2\'>Privada</option>
                        <option value=\'3\'>Gubernamental</option>
                        <option value=\'4\'>Empresarial</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="display: inline-block;">
            <div class="col-offset-6 col-md-16">
                <div class="row">
                    <div class="col-md-offset-2 col-md-12">
                        <br>
                        <label>Estado</label>
                        <br>
                        <select name=\'est\' id=\'est\' class=\'txt\'>
                        <option value=\'Todos\'>Todos</option>
                        <option value=\'En Espera\'>En Espera</option>
                        <option value=\'Activo\'>Activo</option>
                        <option value=\'Inactivo\'>Inactivo</option>                        
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-offset-1 col-md-12">
                <div class="row">
                    <div class="col-md-offset-1 col-md-12">
                        <br>
                       <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
        </div>                  
    </form>
 </div>     
</div>   

		';
	}



}

?>