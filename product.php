<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/main.css">

	<link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		$data = file_get_contents('list.json');
		$json = json_decode($data);
	?>
	
	<!-- <div class="new_products">
		<div class="container">
			<div class="product">

				<?php 
					$image = "<img src=".$json->products[0]->image.">";
					echo $image;
				?>
				<div class="txt">

					<a class="txt1" href = "">
						<?php print_r($json->products[0]->name);?>
					</a>

					<div class="price">
						<?php print_r($json->products[0]->price);?>
					</div>

					<a class="purchase" href="">В КОРЗИНУ</a>

				</div>

			</div>
		</div>
	</div> -->


	<div class="new_products">
		<div class="container">

			<?php
				for($i=0; $i<count($json->products); $i++){
			?>
					<div class="product">

						<?php 
							$image = "<img src=".$json->products[$i]->image.">";
							echo $image;
						?>
						<div class="txt">

							<a class="txt1" href = "">
								<?php print_r($json->products[$i]->name);?>
							</a>

							<div class="price">
								<?php print_r($json->products[$i]->price);?>
							</div>

							<a class="purchase" href="">В КОРЗИНУ</a>

						</div>

					</div>
			<?php
				}
			?>

			<?php
				for($i=count($json->manufacturer)-1; $i<count($json->manufacturer); $i++){
			?>
				<div class="man">
					<?php 
						echo $json->manufacturer[$i];
					?>
				</div>
			<?php
				}
			?>
		</div>
	</div>


</body>
</html>

<!-- count($json->products); -->