	<div class="container" style="margin:auto; width: auto;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<a href="index"><img src="images/logo.png" alt="#" /></a>
				<br>
                <h3>Agregar Curso</h3>
				<form style="margin: auto;" method="POST" action="cargacursos_be.php" enctype="multipart/form-data">
				    <select name="categorias" class="form-control" style="width: 80%">
                      <option value="ortodoncia">Ortodoncia</option>
                      <option value="estetica">Estetica</option>
                      <option value="atm">Atm</option>
                      <option value="implatologia" selected>Implantologia</option>
                      <option value="ortopedia" selected>Ortopedia</option>
                      <option value="prostodoncia" selected>Prostodoncia</option>
                    </select>
				    <input required="" data-error="Porfavor ingresa el nombre del curso" type="text" placeholder="Nombre del Curso" name="nombre_curso" tabindex="1" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;"><br>
				    <input required="" data-error="Porfavor ingresa el Precio" type="text" placeholder="Precio" name="precio" tabindex="1" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;"><br>
					<input required="" data-error="Porfavor ingresa la foto del curso" type="file" name="file" placeholder="Archivo" tabindex="0" style="color: black; border-style: solid;  border-color: gray; border-width: 2px; border-radius: 5px; padding: 5px; margin-top: 10px; width: 80%;">
					<br>
					<button placeholder="Registrarse" name="enviarfoto" style="background-color: #450d16; color: white; border-radius: 10px;">Agregar</button>
				</form>
				<br>
				<hr>
                <br>
		    </div>
		</div>
	</div>