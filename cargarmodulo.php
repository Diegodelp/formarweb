	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<a href="index"><img src="images/logo.png" alt="#" /></a>
				<br>
                
                <h3>Agregar Modulo</h3>
                
                
				<form style="margin: auto;" method="POST" action="cargamodulo_be.php" enctype="multipart/form-data">
				    <select name="curso" class="form-control" style="width: 80%">
                <?php
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre_curso FROM nombre_cursos");
                $row = mysqli_num_rows($sql);
                while ($row = mysqli_fetch_array($sql)){
                echo "<option value='".$row['id'] ."'>" .$row['nombre_curso'] ."</option>" ;
                }
                ?>
                </select>
				    <input required="" data-error="Porfavor ingresa el nombre del modulo" type="text" placeholder="Nombre del Modulo" name="nombre_modulo" tabindex="1" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;"><br>
				    <input required="" data-error="Porfavor ingresa la fecha de inicio" type="date" placeholder="Fecha de Inicio" name="fecha" tabindex="0" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;"><br>
					<button placeholder="Registrarse" style="background-color: #450d16; color: white; border-radius: 10px;">Agregar</button>
				</form>
				<br>
				<hr>
				<br>
				
		    </div>
		</div>
	</div>