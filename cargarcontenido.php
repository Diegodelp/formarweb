	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<a href="index"><img src="images/logo.png" alt="#" /></a>
				<br>

				<h3>Agregar Contenido</h3>
				 
				<form style="margin: auto;" method="POST" action="cargacontenido_be.php" enctype="multipart/form-data">
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
				    <select name="modulo" class="form-control" style="width: 80%">
                <?php
                include 'conexion_be.php';
                $sql = mysqli_query($conexion, "SELECT id, nombre FROM nombre_modulos");
                $row = mysqli_num_rows($sql);
                while ($row = mysqli_fetch_array($sql)){
                echo "<option value='".$row['id'] ."'>" .$row['nombre'] ."</option>" ;
                }
                ?>
                </select>
                
                
				    <input required="" data-error="Porfavor ingresa el titulo" type="text" placeholder="Titulo" name="titulo" tabindex="0" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;"><br>
				    <br>
				    <textarea class="form-control" name="contenido" placeholder="Contenido" rows="8" data-error="Escribe tu contenido" style="width:80%" required=""></textarea>
				    <br>
				    <label>Cargar Video: </label> <input type="file" name="archivo" placeholder="Selecionar Archivo"> 
				    <br>
				    <br>
					<button placeholder="Registrarse" style="background-color: #450d16; color: white; border-radius: 10px;">Agregar</button>
					<br>
					<br>
					<br>
					<br>
					<br>
					<hr>
					
				</form>	    
		    </div>
		</div>
	</div>