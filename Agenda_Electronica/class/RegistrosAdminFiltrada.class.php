<?php

Class RegistrosAdminFiltrada{

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
        header("Location: Registro.php");
     }

    else if ($estado == 'Todos' && $categoria != 'Todas') {
echo '
            
            <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod. Reporte</th>
                            <th class="text-center">Cod. Evento</th>
                            <th class="text-center">Titulo Evento</th>
                            <th class="text-center">Modificaion</th>
                            <th class="text-center">Fecha modificacion</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Usuarios</th>
                            <th class="text-center">Categorias</th>
                            <th class="text-center">Estado</th>
                        </tr>
                    </thead>
                    
                    <tbody>
         ';
                         
                             include 'connection.php';
                            $pdocn = Database::connect();
                            $sql = ('SELECT * FROM reporte ORDER BY idReporte DESC');
                             $sql = ('SELECT R.*, E.Titulo, Em.Nombres, Em.Usuarios, C.Categoria, E.Estado
                                    from reporte as R 
                                    inner join eventos as E on R.idEventos = E.idEventos 
                                    inner join empleados as Em on Em.idEmpleados =  E.idEmpleados
                                    inner join categoria as C on E.idCategoria = C.idCategoria where C.idCategoria = '.$categoria.' ORDER BY R.idReporte DESC');

                            foreach ($pdocn->query($sql) as $row){
                          echo '<tr>
                                        <td class="text-center">'.$row["idReporte"].'</td>
                                        <td class="text-center">'.$row["idEventos"].'</td>
                                        <td class="text-center">'.$row["Titulo"].'</td>
                                        <td class="text-center">'.$row["Descripcion"].'</td>
                                        <td class="text-center">'.$row["Fecha_modificacion"].'</td>
                                        <td class="text-center">'.$row["Nombres"].'</td>
                                        <td class="text-center">'.$row["Usuarios"].'</td>
                                        <td class="text-center">'.$row["Categoria"].'</td>
                                        <td class="text-center">'.$row["Estado"].'</td>

                                </tr>';
                            }
             Database::disconnect();
    echo'   


                 </tbody>
                </table>
            </div>
        </div>';

       
    } else  if ($estado != 'Todos' && $categoria == 'Todas') {
       
echo '
            
            <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod. Reporte</th>
                            <th class="text-center">Cod. Evento</th>
                            <th class="text-center">Titulo Evento</th>
                            <th class="text-center">Modificaion</th>
                            <th class="text-center">Fecha modificacion</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Usuarios</th>
                            <th class="text-center">Categorias</th>
                            <th class="text-center">Estado</th>
                        </tr>
                    </thead>
                    
                    <tbody>
         ';
                         
                             include 'connection.php';
                            $pdocn = Database::connect();
                            $sql = ('SELECT * FROM reporte ORDER BY idReporte DESC');
                             $sql = ('SELECT R.*, E.Titulo, Em.Nombres, Em.Usuarios, C.Categoria, E.Estado
                                    from reporte as R 
                                    inner join eventos as E on R.idEventos = E.idEventos 
                                    inner join empleados as Em on Em.idEmpleados =  E.idEmpleados
                                    inner join categoria as C on E.idCategoria = C.idCategoria where E.Estado = "'.$estado.'" ORDER BY R.idReporte DESC');

                            foreach ($pdocn->query($sql) as $row){
                          echo '<tr>
                                        <td class="text-center">'.$row["idReporte"].'</td>
                                        <td class="text-center">'.$row["idEventos"].'</td>
                                        <td class="text-center">'.$row["Titulo"].'</td>
                                        <td class="text-center">'.$row["Descripcion"].'</td>
                                        <td class="text-center">'.$row["Fecha_modificacion"].'</td>
                                        <td class="text-center">'.$row["Nombres"].'</td>
                                        <td class="text-center">'.$row["Usuarios"].'</td>
                                        <td class="text-center">'.$row["Categoria"].'</td>
                                        <td class="text-center">'.$row["Estado"].'</td>

                                </tr>';
                            }
             Database::disconnect();
    echo'   


                 </tbody>
                </table>
            </div>
        </div>';

    } else  if ($estado != 'Todos' && $categoria != 'Todas'){

echo '
            
            <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Cod. Reporte</th>
                            <th class="text-center">Cod. Evento</th>
                            <th class="text-center">Titulo Evento</th>
                            <th class="text-center">Modificaion</th>
                            <th class="text-center">Fecha modificacion</th>
                            <th class="text-center">Nombres</th>
                            <th class="text-center">Usuarios</th>
                            <th class="text-center">Categorias</th>
                            <th class="text-center">Estado</th>
                        </tr>
                    </thead>
                    
                    <tbody>
         ';
                         
                             include 'connection.php';
                            $pdocn = Database::connect();
                            $sql = ('SELECT * FROM reporte ORDER BY idReporte DESC');
                             $sql = ('SELECT R.*, E.Titulo, Em.Nombres, Em.Usuarios, C.Categoria, E.Estado
                                    from reporte as R 
                                    inner join eventos as E on R.idEventos = E.idEventos 
                                    inner join empleados as Em on Em.idEmpleados =  E.idEmpleados
                                    inner join categoria as C on E.idCategoria = C.idCategoria where E.Estado = "'.$estado.'" and C.idCategoria = '.$categoria.' ORDER BY R.idReporte DESC');

                            foreach ($pdocn->query($sql) as $row){
                          echo '<tr>
                                        <td class="text-center">'.$row["idReporte"].'</td>
                                        <td class="text-center">'.$row["idEventos"].'</td>
                                        <td class="text-center">'.$row["Titulo"].'</td>
                                        <td class="text-center">'.$row["Descripcion"].'</td>
                                        <td class="text-center">'.$row["Fecha_modificacion"].'</td>
                                        <td class="text-center">'.$row["Nombres"].'</td>
                                        <td class="text-center">'.$row["Usuarios"].'</td>
                                        <td class="text-center">'.$row["Categoria"].'</td>
                                        <td class="text-center">'.$row["Estado"].'</td>

                                </tr>';
                            }
             Database::disconnect();
    echo'   


                 </tbody>
                </table>
            </div>
        </div>';


    }
    
    }
}
?>