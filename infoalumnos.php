<?php
include 'conexion_be.php';
$sql = mysqli_query($conexion, "SELECT * FROM `usuarios`");
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($sql);
echo '<html><style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  width: 209px;
}

tr:nth-child(even) {
  background-color: #ddd;
}
</style>';

      if(!empty($sql)){
          echo '<br><h2>Listado de Alumnos</h2><hr><br>
                      <table class="table table-hover" style="width:80%;">
                          <thead>
                            <tr style="background-color:#7ba4e3">
                              <th scope="col">Nombre y Apellido</th>
                              <th scope="col">Email</th>
                              <th scope="col">Dni</th>
                              <th scope="col">Celular</th>
                              <th scope="col">Lugar de Nacimiento</th>
                              <th scope="col">Fecha de Nacimiento</th>
                              <th scope="col">Fecha de Registro</th>                              
                            </tr>
                          </thead>';
          
      }
          foreach($sql as $turnosc){
              echo '
              
                 <tbody>
                  <tr>
                    <td>'.$turnosc['nombre_completo'].'</td>
                    <td>'.$turnosc['correo'].'</td>
                    <td>'.$turnosc['dni'].'</td>
                    <td>'.$turnosc['telefono'].'</td>
                    <td>'.$turnosc['lnacimiento'].'</td>
                    <td>'.$turnosc['fechanac'].'</td>
                    <td>'.$turnosc['fecha_registro'].'</td>
                  </tr>
                  </tbody> 
              
              ';
              
              }
              echo '</table></html>';


?>