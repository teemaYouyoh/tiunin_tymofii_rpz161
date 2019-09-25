<?php
	function printProduct($json, $i){
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
					<?php print_r($json->products[$i]->price);echo ' грн';?>
				</div>

				<a class="purchase" href="">В КОРЗИНУ</a>

			</div>

		</div>
<?php 
	}
?>

<?php
	
	function sortProduct($json, $select_manufacturer, $select_sortprice){

		if($select_sortprice == 'min' && $select_manufacturer != 'nothing') 
			sortPriceManufacturer($json, $select_manufacturer, $select_sortprice);

		else if ($select_sortprice == 'max' && $select_manufacturer != 'nothing') 
			sortPriceManufacturer($json, $select_manufacturer, $select_sortprice);

		else if($select_sortprice == 'min' && $select_manufacturer == 'nothing') 
			sortPrice($json, $select_sortprice);

		else if($select_sortprice == 'max' && $select_manufacturer == 'nothing') 
			sortPrice($json, $select_sortprice);

		else if($select_sortprice == 'nothing' && $select_manufacturer != 'nothing'){
			for($i=count($json->products)-1; $i>=0; $i--){
				if($select_manufacturer == $json->products[$i]->manufacturer)
					printProduct($json,$i);
			}
		}

		else if($select_sortprice == 'nothing' && $select_manufacturer == 'nothing'){
			for($i=count($json->products)-1; $i>=0; $i--){
				printProduct($json,$i);
			}
		}
	}


	function sortPriceManufacturer($json, $select_manufacturer, $select_sortprice){

		for($i=0; $i<count($json->products); $i++){
			if($select_manufacturer == $json->products[$i]->manufacturer){
				$productPrice[$i] = $json->products[$i]->price;
			}
		}

		if($select_sortprice == 'min') sort($productPrice);
		else if($select_sortprice == 'max') rsort($productPrice);

		$countPrice = count($productPrice);

		for($i=0; $i<$countPrice; $i++){
			for($j=0; $j<count($json->products); $j++){
				if($json->products[$j]->price == $productPrice[0] && $json->products[$j]->manufacturer == $select_manufacturer){
					printProduct($json,$j);
					unset($productPrice[0]);
					if($select_sortprice == 'min') sort($productPrice);
					else if($select_sortprice == 'max') rsort($productPrice);
				}
			}
		}
	}

	function sortPrice($json, $select_sortprice){

		for($i=0; $i<count($json->products); $i++){
				$productPrice[$i] = $json->products[$i]->price;
		}

		if($select_sortprice == 'min') sort($productPrice);
		else if($select_sortprice == 'max') rsort($productPrice);

		$countPrice = count($productPrice);

		for($i=0; $i<$countPrice; $i++){
			for($j=0; $j<count($json->products); $j++){
				if($json->products[$j]->price == $productPrice[0]){
					printProduct($json,$j);
					unset($productPrice[0]);
					if($select_sortprice == 'min') sort($productPrice);
					else if($select_sortprice == 'max') rsort($productPrice);
				}
			}
		}
	}

	function sortManufacturer($json, $manufacturer){

	}
?>