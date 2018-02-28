
<div class="grid-container">
	<div class="grid-margin-x">
		<h4>Ingresa </h4>
		<hr>
		<form action="<?php echo URL ?>login/ingresar" method="POST"> 
			<div class="input-group">
		  		<span class="input-group-label"><i class="fa fa-user" aria-hidden="true"></i> Usuario</span>
			  	<input class="input-group-field" type="text" name="usuario" placeholder="Usuario">
		  	</div>
			<div class="input-group">
		 		<span class="input-group-label"><i class="fa fa-key" aria-hidden="true"></i> Contraseña</span>
		  		<input class="input-group-field" type="password" name="contrasena" placeholder="Contraseña">
			</div>
			<button class="button" type="submit"> Enviar </button>
		</form>

	</div>
</div>