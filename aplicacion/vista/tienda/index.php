

<div class="grind-container fliud">
	<div class="grid-x grid-margin-x">
		<div class="cell margin-top-2">
			<h3 class="separator-center "> <i class="fa fa-microchip" aria-hidden="true"></i> Mechatronic Components</h3>
		</div>
		<?php if (isset($_SESSION['sessionNoIniciada']) && $_SESSION['sessionNoIniciada']): ?>
			<div class="cell margin-1">
				<div class="h4 callout alert text-center">
					No haz iniciado Sesion o no estas registrado.
				</div>
			</div>
			<?php unset($_SESSION['sessionNoIniciada']); ?>	
		<?php endif ?>
		
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<?php foreach ($productos as $key): ?>
					<div class=" medium-4 large-4 cell">
					<div class="grid-container fluid">
						<div class="grid-x grid-margin-x">
							<div class="radius bordered card  shadow cell">
							  <img src="<?php echo URL .'img/componentes/productosImagenes/'.$key["url"] ;?>">
							  <div class="card-divider">
							   <p>Category :<?php echo $key["categoria"]; ?> </p>
							  </div>
							  <div class="card-divider">
							  	<p>Component <?php echo '<br>'.$key["tipoComponentes"]; ?></p>
							  </div>
							  <div class="card-section">
							    <label> Name :<?php echo $key["nombre"];?></label>
							    <p style="color: gold; background: black;"> Price :$ <?php echo (float)$key['precio']; ?></p>
							   	<form method="POST" action="<?php echo URL.$this->idioma; ?>/tienda/addCar">		
								<p>
									<label> Select 
									<select name="cantidad" id="">
										<?php 
											for ($i=1; $i < 6; $i++) { 
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										  ?>

									</select>
									</label>
								</p>	
							   	<p><button class="button expanded">Add Car Now</button></p>
									<input type="hidden" value="<?php echo $key['id'] ?>" name="id">
								</form>
							   	<form method="POST" action="<?php echo URL.$this->idioma; ?>/tienda/informacionComponente">
							   	<p><button class="button expanded success">More info</button></p>
									<input type="hidden" value="<?php echo $key['id'] ?>" name="id">
								</form>

							  </div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>