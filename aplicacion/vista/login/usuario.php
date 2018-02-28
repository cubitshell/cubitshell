<div class="grid-container fluid padding-0">
	<div class="grid-x ">

		  <div class="medium-3 cell padding-0">
		    <ul class="vertical tabs" data-tabs id="example-tabs">
		      <li class="tabs-title is-active"><a href="#Carrito" aria-selected="true">Carrito</a></li>
		      <li class="tabs-title"><a href="#Cuenta">Cuenta</a></li>
		      <li class="tabs-title"><a href="#Actualizar">Actualizar</a></li>
		      <li class="tabs-title"><a href="#Eliminar">Eliminar mi cuenta</a></li>
		    </ul>
		  </div>
		  <div class="medium-9 cell">
		    <div class="tabs-content" data-tabs-content="example-tabs">
		      <div class="tabs-panel is-active" id="Carrito">
		       <div class="grid-container">
		       	<div class="grid-x grid-margin-x padding-top-3 padding-bottom-3">
		       		<?php if ($carrito): ?>

		       			<?php foreach ($carrito as $key ): ?>
                
		       				<?php $componente = $conexion->infoComponente($key['idComponenete']); ?>
		       			<table>
					  <thead>
					    <tr>
					      <th width="200">Client</th>
					      <th>Product</th>
					      <th width="150">Number of pizes</th>
					      <th width="150">Total Price</th>
					    </tr>
					  </thead>		
					  <tbody>
					    <tr>
					      <td><?php echo $_SESSION['usuario']['nombre'] ?></td>
					      <td><div class="grid-container">
					      	<div class="grid-x grid-margin-x">
					      		<div class="small-6 medium-6 large-6 cell">
					      			<img src="<?php echo URL .'img/componentes/productosImagenes/'.$componente["url"] ;?>">
					      		</div>
					      		<div class="small-6 medium-6 large-6 cell">
					      			<label>
					      				Componenet : <?php echo  $componente['nombre']; ?>
					      			</label>
					      			<label>
					      				price :$ <?php echo  $componente['precio']; ?>
					      			</label>
					      		</div>
					      	</div>
					      </div></td>
					      <td># : <?php echo $key['cantidad']; ?></td>
					      <td>$ <?php echo ((float)$componente['precio'])*((float)$key['cantidad']); ?></td>
					    </tr>
					  </tbody>
					</table>

		       			<?php endforeach ?>
						
		       		<?php else: ?>
		       			<div class="grid-x grid-margin-x">
		        			<div class="cell">
		       					<h3>No Tienes Nada En tu carrito </h3>
		       					<p><a href="<?php echo URL.$this->idioma; ?>/tienda"> Elige un producto</a></p>
		       				</div>
		       			</div>
		       		<?php endif ?>
		       		
		       	</div>
		       </div>
		      </div>
		      <div class="tabs-panel" id="Cuenta">
		        <div class="grid-x grid-margin-x">
		        	<div class="cell">
		        		<form action="">
		        			<h3>Mi Cuenta </h3>
		        			<?php 
		        			
		        			$nombre = array(
		        				'id' => $_SESSION['usuario']['id'],
		        				$_SESSION['usuario']['correo'] =>'Correo',
		        				$_SESSION['usuario']['contrasena'] =>'Contraseña',
		        				$_SESSION['usuario']['nombre'] =>'Nombre',
		        				$_SESSION['usuario']['apellidos'] =>'Apellidos',
		        				$_SESSION['usuario']['pais'] =>'Pais',
		        				$_SESSION['usuario']['direccion'] =>'Direcci&oacute;n',
		        				$_SESSION['usuario']['telefono'] =>'Telefono'
		        			);
		        			if (isset($_SESSION['usuario']['tipoUsuario'])) {
		        				$nombre["{$_SESSION['usuario']['tipoUsuario']}"] = 'Privilegio';
		        			}

		        			?>
		        			<?php foreach ($_SESSION['usuario'] as $key): ?>
	        					<?php if ($nombre['id'] === $key): ?>
	        					<input type="hidden" value="<?php echo $key; ?>" name="id">
	        					<?php else: ?>
	        					<label><?php echo $nombre[$key]; ?>
	        						<input readonly type="text" value="<?php echo $key; ?>" name="<?php echo $nombre[$key]; ?>" >
		        				</label>
	        					<?php endif ?>
		        			<?php endforeach ?>
		        		</form>
		        	</div>
		        </div>
		        <!--  id 	correo 	contrasena 	 	nombre 	apellidos 	pais 	direccion 	telefono -->
		      </div>
		      <!-- Actualizar -->
		      <div class="tabs-panel" id="Actualizar">
	    		<form action="">
    			<h3>Actualizar Mi Cuenta </h3>
				<?php foreach ($_SESSION['usuario'] as $key): ?>
					<?php if ($nombre['id'] === $key): ?>
					<input type="hidden" value="<?php echo $key; ?>" name="id">
					<?php else: ?>
					<label><?php echo $nombre[$key]; ?>
						<input type="text" value="<?php echo $key; ?>" name="<?php echo $nombre[$key]; ?>" required>
    				</label>
					<?php endif ?>
    			<?php endforeach ?>		        
    			<button class="button success hollow expanded">Actualizar</button>
    			</form>
		      </div>
		      <!-- fin de actualizar -->
		      <!-- eliminar -->
		      <div class="tabs-panel" id="Eliminar">
		        <p class="h4">Eliminar Su cuenta</p>
				<p>Nota : Esta seccion es para Eliminar su cuenta !</p>
				<p>Se eliminara toda informacion de usted que haya Registrado en nuestro Servicio .</p>
				<div class="callout">
					<h4>¿ESTA SEGURO DE ELIMINA SU CUENTA?</h4>
					<label>
						Si es asi 
						<button class="button warning"> Presione Aqui para continuar </button>
					</label>
				</div>
		      </div>
		      <!-- eliminar -->
		  </div>
		
	</div>
</div>
