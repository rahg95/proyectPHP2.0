<?php

Class EventosAdminTablaFiltrada{

private $categoria;
private $estado;


public function __construct(){

$this->categoria = "";
$this->estado = "";

}

        public function setCategoria($categoria){
            $this->categoria=$categoria;
        }
        public function getCategoria(){
            return $this->categoria;
        }

        public function setEstado($estado){
            $this->estado=$estado;
        }
        public function getEstado(){
            return $this->estado;
        }


public function vistaDefaultFiltrada($estado,$categoria){

     if ($estado == 'Todos' && $categoria == 'Todas') {
        header("Status: 301 Moved Permanently");
        header("Location: Eventos.php");
     }

    else if ($estado == 'Todos' && $categoria != 'Todas') {

        echo '
            <br><br>
            <div class="row">
            <div class=" col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod. Evento</th>
                            <th class="text-center">Editor</th>
                            <th class="text-center">Fecha publicacion</th>
                            <th class="text-center">Titulo Evento</th>
                            <th class="text-center">Lugar</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Fecha inicio</th>
                            <th class="text-center">Fecha final</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
         ';
                         
                            include '../Administrador/connection.php';
                            $conection = Database::connect();
                            $sql = ('SELECT * FROM eventos where idCategoria = '.$categoria.' ORDER BY idEventos DESC');


                            foreach ($conection->query($sql) as $row){

                            $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                            $query = $conection->prepare("SELECT Nombres FROM empleados where idEmpleados = ?"); 
                            $query->execute(array($row["idEventos"])); 
                            $Nombre = $query->fetch(PDO::FETCH_ASSOC);

                            $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                            $query = $conection->prepare("SELECT Categoria FROM categoria where idCategoria = ?"); 
                            $query->execute(array($row["idCategoria"])); 
                            $Categoria = $query->fetch(PDO::FETCH_ASSOC);



                          echo '<tr>
                                        <td class="text-center">'.$row["idEventos"].'</td>
                                        <td class="text-center">'.$Nombre["Nombres"].'</td>                                       
                                        <td class="text-center">'.$row["Fecha_publicacion"].'</td>
                                        <td class="text-center">'.$row["Titulo"].'</td>
                                        <td class="text-center">'.$row["Lugar"].'</td>
                                        <td class="text-center">'.$row["Descripcion"].'</td>
                                        <td class="text-center"> <img src="../img/Eventos/'.$row["Imagen"].'" width="100%"</td>
                                        <td class="text-center">'.$row["Fecha_inicio"].'</td>
                                        <td class="text-center">'.$row["Fecha_final"].'</td>
                                        <td class="text-center">'.$Categoria["Categoria"].'</td>
                                        <td class="text-center">'.$row["Estado"].'</td>
                                        <td class="text-center">                                       
                                        <a href="updateEvento.php?id='.$row["idEventos"].'" class="btn btn-success">Modificar</a>
                                        <a href="deleteEvento.php?id='.$row["idEventos"].'" class="btn btn-danger">Eliminar</a>
                                        </td>                                        
                                </tr>';
            }
    echo'                </tbody>
                </table>
            </div>
        </div>';
       
    } else  if ($estado != 'Todos' && $categoria == 'Todas') {
       
        echo '
            <br><br>
            <div class="row">
            <div class=" col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod. Evento</th>
                            <th class="text-center">Editor</th>
                            <th class="text-center">Fecha publicacion</th>
                            <th class="text-center">Titulo Evento</th>
                            <th class="text-center">Lugar</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Fecha inicio</th>
                            <th class="text-center">Fecha final</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
         ';
                         
                            include '../Administrador/connection.php';
                            $conection = Database::connect();
                            $sql = ('SELECT * FROM eventos where Estado = "'.$estado.'" ORDER BY idEventos DESC');


                            foreach ($conection->query($sql) as $row){

                            $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                            $query = $conection->prepare("SELECT Nombres FROM empleados where idEmpleados = ?"); 
                            $query->execute(array($row["idEventos"])); 
                            $Nombre = $query->fetch(PDO::FETCH_ASSOC);

                            $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                            $query = $conection->prepare("SELECT Categoria FROM categoria where idCategoria = ?"); 
                            $query->execute(array($row["idCategoria"])); 
                            $Categoria = $query->fetch(PDO::FETCH_ASSOC);



                          echo '<tr>
                                        <td class="text-center">'.$row["idEventos"].'</td>
                                        <td class="text-center">'.$Nombre["Nombres"].'</td>                                       
                                        <td class="text-center">'.$row["Fecha_publicacion"].'</td>
                                        <td class="text-center">'.$row["Titulo"].'</td>
                                        <td class="text-center">'.$row["Lugar"].'</td>
                                        <td class="text-center">'.$row["Descripcion"].'</td>
                                        <td class="text-center"> <img src="../img/Eventos/'.$row["Imagen"].'" width="100%"</td>
                                        <td class="text-center">'.$row["Fecha_inicio"].'</td>
                                        <td class="text-center">'.$row["Fecha_final"].'</td>
                                        <td class="text-center">'.$Categoria["Categoria"].'</td>
                                        <td class="text-center">'.$row["Estado"].'</td>
                                        <td class="text-center">                                       
                                        <a href="updateEvento.php?id='.$row["idEventos"].'" class="btn btn-success">Modificar</a>
                                        <a href="deleteEvento.php?id='.$row["idEventos"].'" class="btn btn-danger">Eliminar</a>
                                        </td>                                        
                                </tr>';
            }
    echo'                </tbody>
                </table>
            </div>
        </div>';
    } else  if ($estado != 'Todos' && $categoria != 'Todas'){
        echo '
            <br><br>
            <div class="row">
            <div class=" col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod. Evento</th>
                            <th class="text-center">Editor</th>
                            <th class="text-center">Fecha publicacion</th>
                            <th class="text-center">Titulo Evento</th>
                            <th class="text-center">Lugar</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Imagen</th>
                            <th class="text-center">Fecha inicio</th>
                            <th class="text-center">Fecha final</th>
                            <th class="text-center">Categoria</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Operaciones</th>
                        </tr>
                    </thead>
                    
                    <tbody>
         ';
                         
                            include '../Administrador/connection.php';
                            $conection = Database::connect();
                            $sql = ('SELECT * FROM eventos where Estado = "'.$estado.'" and idCategoria = '.$categoria.' ORDER BY idEventos DESC');


                            foreach ($conection->query($sql) as $row){

                            $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                            $query = $conection->prepare("SELECT Nombres FROM empleados where idEmpleados = ?"); 
                            $query->execute(array($row["idEventos"])); 
                            $Nombre = $query->fetch(PDO::FETCH_ASSOC);

                            $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                            $query = $conection->prepare("SELECT Categoria FROM categoria where idCategoria = ?"); 
                            $query->execute(array($row["idCategoria"])); 
                            $Categoria = $query->fetch(PDO::FETCH_ASSOC);



                          echo '<tr>
                                        <td class="text-center">'.$row["idEventos"].'</td>
                                        <td class="text-center">'.$Nombre["Nombres"].'</td>                                       
                                        <td class="text-center">'.$row["Fecha_publicacion"].'</td>
                                        <td class="text-center">'.$row["Titulo"].'</td>
                                        <td class="text-center">'.$row["Lugar"].'</td>
                                        <td class="text-center">'.$row["Descripcion"].'</td>
                                        <td class="text-center"> <img src="../img/Eventos/'.$row["Imagen"].'" width="100%"</td>
                                        <td class="text-center">'.$row["Fecha_inicio"].'</td>
                                        <td class="text-center">'.$row["Fecha_final"].'</td>
                                        <td class="text-center">'.$Categoria["Categoria"].'</td>
                                        <td class="text-center">'.$row["Estado"].'</td>
                                        <td class="text-center">                                       
                                        <a href="updateEvento.php?id='.$row["idEventos"].'" class="btn btn-success">Modificar</a>
                                        <a href="deleteEvento.php?id='.$row["idEventos"].'" class="btn btn-danger">Eliminar</a>
                                        </td>                                        
                                </tr>';
            }
    echo'                </tbody>
                </table>
            </div>
        </div>';

    }
    
	}
}
?>