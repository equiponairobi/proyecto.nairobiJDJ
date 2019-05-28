<?php
				$sentencia=$pdo->prepare("SELECT * FROM 'nombre de la tabla'");
				$sentencia->execute();
				$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
				//print_r($listaProductos);
			?>
			<?php  foreach($listaProductos as $producto){ ?>
				<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<a href="work.html">
							<img src="<?php echo $producto['Imagen'];?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<h3 class="fh5co-work-title"><?php echo $producto['Nombre'];?></h3>
							<h5 class= "card-title">$<?php echo $producto['Precio'];?></h5>
							
							<form action="" method="post">
							
							<input type="text" name="id" id= "id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
							<input type="text" name="nombre" id= "nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
							<input type="text" name="precio" id= "precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>"">
							<input type="text" name="cantidad" id= "cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

							<button class="btn btn-primary"
							name="btnAccion"
							value= "Agregar"
							type="submit" >
							Agregar al carrito
							</button>

							</form>
							
							<button class="btn btn-primary"
							name="btnAccion"
							value= "Agregar"
							type="submit" >
							Agregar al carrito
							</button>
						</a>
					</div>
						
			<?php/* } */?>