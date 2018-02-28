
<div class="grid-container fluid">
	<div class="grid-x grid-margin-x">
		<?php if (isset($_SESSION['productoRegistrado'])): ?>
			<div class="cell">
			<div class="callout success">
				<h4>Producto Registrado</h4>
			</div>
		</div>
		<?php unset($_SESSION['productoRegistrado']); ?>
		<?php endif ?>
  <div class="medium-3 cell">
    <ul class="vertical tabs" data-tabs id="example-tabs">
      <li class="tabs-title is-active"><a href="#Buscar" aria-selected="true">Buscar</a></li>
      <li class="tabs-title"><a href="#Registrar">Registrar</a></li>
      <li class="tabs-title"><a href="#Catalogo">Catalogo de Componentes</a></li>
      <!-- <li class="tabs-title"><a href="#panel5v">Tab 5</a></li>
      <li class="tabs-title"><a href="#panel6v">Tab 6</a></li> -->
    </ul>
  </div>
  <div class="medium-9 cell">
    <div class="tabs-content" data-tabs-content="example-tabs">
      <!-- Buscar -->
      <div class="tabs-panel is-active" id="Buscar">
        <p>Buscar Producto</p>
		<p><input type="text"  placeholder="Producto"></p>
      </div>
      <!-- finBuscar -->
	  <!-- Registrar -->
      <div class="tabs-panel" id="Registrar">
 		<form  class="grid-x grid-margin-x padding-2" method="POST" action="<?php echo URL . $this->idioma.DIRECTORY_SEPARATOR;?>producto/registrarProducto" enctype='multipart/form-data'> 
			
	  		<div class="medium-6 cell">
		  		<label> Nombre Producto
			  		<input  type="text" name="nombreProducto" placeholder="Nombre del Producto"   >
			  	</label>
			</div>
			<div class="medium-6 cell">
				<label> Precio
					<input  type="text" name="Precio" placeholder="Precio" ="">
				</label>
			</div>
			<div class="medium-6 cell">
				<label> Referencia
					 <textarea placeholder="Referencia"></textarea>
				</label>
			</div>
			<div class="medium-6 cell">
				<label> Categoria
					<select name="componenteCatagoria" id="">
						<?php foreach ($Categorias as $key ): ?>
							<option value="<?php echo $key ;?>"><?php echo $key ;?></option>	
						<?php endforeach ?>
					</select>
				</label>
			</div>
			<div class="medium-6 cell">
				<label> TipoComponente
					<select name="tipoComponente" id="">
						<?php foreach ($tiposcomponentes as $key): ?>
							<option value="<?php echo $key; ?>"><?php echo $key; ?></option>
						<?php endforeach ?>
					</select>
				</label>
			</div>
			<div class="medium-6 cell">
				<label> Cargar Imagen
					<div class="file-upload">
						<input type="file" class="file-input" name="imagenproducto" multiple>
					</div>
				</label>
				<label> Nombre Imagen
					<input type="text"  name="nombreimagen" >
				</label>
			</div>
			<div class="medium-12 cell callout">
				<label id="caracteristicasAdd"> Caracteristicas
					<input  type="text" name="carateristicas[]" placeholder="Caracteristicas"  >
				</label>
				<div class="button" id="masCaract">+</div>
			</div>
			<div class="medium-12 cell callout" >
				<label id="descrip"> Descripcion
			  			 <textarea name="info[]" placeholder="Descripcion"></textarea>
				</label>
				<div class="button" id="masDesc">+</div>

			</div>
			
			<div class="auto cell text-center">

				<button class="button expanded warning" type="submit"> Enviar </button>
			</div>
		</form>
      </div>
      <!-- fin Registrar -->
      <div class="tabs-panel" id="Catalogo">
      	<div class="grid-x">
      		<div class="cell">
      			<form method="POST" action="<?php echo URL . $this->idioma.DIRECTORY_SEPARATOR;?>producto/registrarCategoria"> 
      				<label> Nueva Categoria
      					<input type="text" name="categoriaComponente" placeholder="Categoria de Componentes">
      				</label>
      				<input type="submit" class="button" value="Registrar Categoria">
      			</form>
      			<hr>
      			<form action="<?php echo URL . $this->idioma.DIRECTORY_SEPARATOR;?>producto/registrarTipo" method="POST">
      				<label> Nueva tipo de Componente
      					<input type="text" name="tipoComponente" placeholder="tipo de Componentes ejemplo: Capacitor">
      				</label>
      				<input type="submit" class="button" value="Registrar Tipo de componente">
      			</form>
      		</div>
      	</div>
      </div>
      <!-- <div class="tabs-panel" id="panel5v">
        <p>Five</p>
        <p>Check me out! I'm a super cool Tab panel with text content!</p>
      </div>
      <div class="tabs-panel" id="panel6v">
        <p>Six</p>
        <img class="thumbnail" src="assets/img/generic/rectangle-8.jpg">
      </div> -->
    </div>
  </div>
</div>
</div>
