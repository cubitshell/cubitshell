
<div class="grid-container fluid padding-2" id="registro">
	<div id="fondoRegistro">
		<h4 class="h4 separator-center subheader margin-0">Registro </h4>
		<hr>
		<form  class="grid-x grid-margin-x padding-2" action="<?php echo URL . $this->idioma.DIRECTORY_SEPARATOR;?>login/registroUsuario" method="POST" > 
			<div class="alert callout cell" style="display: none;">
			    <p><i class="fi-alert"></i> There are some errors in your form.</p>
			</div>
	  		<div class="medium-6 cell">
		  		<label> Nombre
			  		<input  type="text" name="nombre" placeholder="nombre" required minlength="3" >
			  		<span class="form-error">Yo, you had better fill this out, it's required.</span>
			  	</label>
			</div>
			<div class="medium-6 cell">
				<label> Apellidos
					<input  type="text" name="apellidos" placeholder="apellidos" required="" minlength="3">
				</label>
			</div>
			<div class="medium-6 cell">
				<label style="color:white"><?php echo $this->contenido_idioma['menu']['labelIdioma']; ?>
            <select name="pais" id="idiomaSelect">
              <option value="<?php echo $this->idioma; ?>"><?php echo $this->idioma; ?></option>

              <?php
                unset( $this->contenido_idioma['menu']['botonIdioma'][$this->idioma]);
                foreach ($this->contenido_idioma['menu']['botonIdioma'] as $key) {
                  echo '<option value="'.$key.'">'.$key.'</option>';
                } 
              ?>
            </select>
			</div>
			<div class="medium-6 cell">
				<label> Dirección
					<input  type="text" name="direccion" placeholder="Direccion" required>
				</label>
			</div>
			<div class="medium-6 cell">
				<label> Telefono
					<input  type="text" name="telefono" placeholder="Telefono" required>
				</label>
			</div>
			<div class="medium-6 cell">
				<label> correo
					<input  type="email" name="correo" placeholder="El correo sera su usuario" required>
				</label>
			</div>
			<div class="medium-6 cell">
				<label> Contraseña
				  		<input  type="password" name="contrasena" placeholder="Contraseña" requiredm minlength="10" >
				</label>
			</div>
			<div class="medium-6 cell">
				<label> Repite Contraseña
				  		<input  type="password" name="contrasenaVal" placeholder="Repita Contraseña" requiredm minlength="10">
				</label>
			</div>
			<?php if (isset($_SESSION['usuario']['tipoUsuario'])): ?>

			<div class="medium-6 cell">
				<label> Privilegios (1 Todos Los privilegios , 0 usuario Comun)
				  		<input  type="text" name="tipoUsuario" placeholder="0" requiredm minlength="1">
				</label>
			</div>
			<?php endif ?>
			<div class="auto cell text-center">

				<button class="button expanded warning" type="submit"> Enviar </button>
			</div>
			</form>

		</div>
	</div>
<!-- id 	usuario 	contrasena 	nombre 	apellidos 	pais 	direccion 	telefono  -->