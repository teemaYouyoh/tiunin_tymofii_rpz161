<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/shop.css">

	<link href="https://fonts.googleapis.com/css?family=Cookie&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>

	<?php
	
		include('functions.php');

		$data = file_get_contents('list.json');
		$json = json_decode($data);

	?>
	
	<div class="wrapper">
		
		<header>
			<div class="container">

				<div class="header-title">CardHouse</div>
				<div class="header-menu">
					<ul>
						<li><a href="index.php">Головна</a></li>
						<li><a class="active-menu-link" href="shop.php">Магазин</a></li>
						<li><a href="#">Про Нас</a></li>
						<li><a href="contacts.html">Контакти</a></li>
					</ul>
				</div>
				<div class="clear-line"></div>
			</div>
		</header>

		<div class="main-wrapper">

			<div class="inputs">
				<div class="container">

					<?php 

						$select_manufacturer = $_POST['select_manufacturer'];
						$select_sortprice = $_POST['select_sortprice'];
					?>

					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<select name="select_manufacturer">
							<option value="nothing" selected="">nothing</option>
							<option value="Bycicle">Bycicle</option>
							<option value="Tally-Ho">Tally-Ho</option>
							<option value="Cartamundi">Cartamundi</option>
							<option value="Bee">Bee</option>
							<option value="Madison">Madison</option>
							<option value="Aviator">Aviator</option>
						</select>
					<select name="select_sortprice">
							<option value="nothing" selected="">nothing</option>
							<option value="min">Спочатку найменша</option>
							<option value="max">Спрчатку найбільша</option>
						</select>
					<input type="submit" name="submit">
					</form>

				</div>
			</div>
			

			<div class="new_products">
				<div class="container">

					<?php

						if($select_manufacturer == '' || $select_sortprice == ''){
							for($i=count($json->products)-1; $i>=0; $i--){
								printProduct($json, $i);
							}
						}

						sortProduct($json, $select_manufacturer, $select_sortprice);

						/*for($i=0; $i<count($json->products); $i++){	

							if($select_manufacturer ==  $json->products[$i]->manufacturer){
								printProduct($json, $i);
							}
							else if($select_manufacturer == "nothing") {
								printProduct($json, $i);
							}

						}

						if($select_sortprice == 'min'){
							sortPriceMinMax($json);
						}
						else if($select_sortprice == 'max'){
							sortPriceMaxMin($json);
						}
*/
						
					?>

					
				</div>
			</div>
		</div>

	</div>

</body>
</html>

<!-- count($json->products); -->