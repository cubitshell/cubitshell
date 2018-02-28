<div class="grind-container fliud">
	<div class="grid-x grid-margin-x">
		<div class="cell margin-top-2">
			<h3 class="separator-center "> <i class="fa fa-microchip" aria-hidden="true"></i> Mechatronic Components</h3>
		</div>
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="medium-6 large-6 cell">
					<img src="<?php echo URL .'img/componentes/productosImagenes/'.$producto["url"] ;?>">
					<form method="POST" action="<?php echo URL.$this->idioma; ?>/tienda/addCar">		
					<h4>Price: $<?php echo $producto['precio']; ?></h4>
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
				   	<button class="button expanded">Add Car Now</button>
						<input type="hidden" value="<?php echo $producto['id'] ?>" name="id">
					</form>
				</div>
				<div class="medium-6 large-6 cell">
					<h5>Category : <?php echo $producto ['categoria'] ?></h5>
					<h4>Ref: <?php echo $producto['nombre']; ?></h4>
					
					<img src="<?php echo URL .'img/banco.jpg';?>" alt="">
				</div>
				<div class="cell">
					<div class="grid-container fluid">
						<div class="grid-x grid-margin-x">
							<div class="medium-12 large-12 cell text-center callout margin-top-2 ">
								<h5>Details :</h5>
								<?php foreach ($productoDeta as $key): ?>
									<li><?php echo $key['info']; ?></li>
								<?php endforeach ?>
							</div>
							<div class="medium-12 large-12 cell text-center callout margin-top-2 ">
								<h5> Caracteristcs : </h5>
								<?php foreach ($productoCarac as $key): ?>
									<li><?php echo $key['info']; ?></li>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

