
	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				
				<br>
					<h3>Cargar Videos</h3>
					

					<form style="margin: auto;" method="POST" action="cargarvideos_be.php" enctype="multipart/form-data">
				    <select name="modulov" class="form-control" style="width: 80%">
                        <?php
                        include 'conexion_be.php';
                        $sql = mysqli_query($conexion, "SELECT mo.id AS idmodulo, mo.nombre AS nombremodulo, cu.nombre_curso AS nombrecurso FROM nombre_modulos AS mo INNER JOIN nombre_cursos AS cu ON cu.id=mo.tabla_cursos_id");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                        echo '<option value="'.$row['idmodulo'] .'">'.$row['nombrecurso'] .' - ' .$row['nombremodulo'] .'</option>' ;
                        }
                        ?>
                    </select>
                    <br>
                    <input type="file" name="file" placeholder="Selecionar Archivo">
                    
                    <br>
                    <br>
					<input type="submit" name="enviarvideos"  style="background-color: #450d16; color: white; border-radius: 10px;">
					<br>
					<br>

					
				</form>
				 
		    </div>
		</div>
	</div>
