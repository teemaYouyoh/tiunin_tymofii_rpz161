<?php
	$data = file_get_contents('list.json');
	$json = json_decode($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CardHouse -  интернет-магазин карт</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="style/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 	<link href="style/bootstrap.min.css" rel="stylesheet"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	
	
	<link rel="stylesheet" href="script/slick/slick.css">
	<link rel="stylesheet" href="script/slick/slick-theme.css">


	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">


</head>
<body>
	<div class="wrapper">
		
		<header>
			<div class="container">

				<div class="header-title">CardHouse</div>
				<div class="header-menu">
					<ul>
						<li><a class="active-menu-link"  href="#">Головна</a></li>
						<li><a href="shop.php">Магазин</a></li>
						<li><a href="#">Про Нас</a></li>
						<li><a href="contacts.html">Контакти</a></li>
					</ul>
				</div>
				<div class="clear-line"></div>
				<div class="header-button">
					<a class="button-text" href="shop.php">ДО МАГАЗИНУ</a>
				</div>

			</div>
		</header>

		<div class="main-wrapper">

			<div class="advantages">
				<div class="container">
					
					<div class="row">	
						<div class="col-3">
							<div class="advantages-img">
								<i class="fa fa-check-square"></i>
							</div>
							<div class="advantages-title">
								ЯКІСТЬ
							</div>
							<div class="advantages-text">
								Найкраща якість від вірибника
							</div>
						</div>	

						<div class="col-3">
							<div class="advantages-img">
								<i class="fa fa-truck"></i>
							</div>
							<div class="advantages-title">
								ДОСТАВКА
							</div>
							<div class="advantages-text">
								Швидко доставимо у будь-яке місце України
							</div>
						</div>	

						<div class="col-3">
							<div class="advantages-img">
								<i class="fa fa-question-circle"></i>
							</div>
							<div class="advantages-title">
								КОНСУЛЬТАЦІЯ
							</div>
							<div class="advantages-text">
								Цілодобові онлайн-консультанти
							</div>
						</div>	
					</div>

				</div>
			</div>
			
			
			<div class="clear-line"></div>

			<div class="made-in_parallax">
				<div class="parallax-text">
					Оригінальні карти вироблені у <br> З'єднаних Штатах Америки 
				</div>
			</div>

			<div class="clear-line"></div>

			<div class="new_products">
				<div class="container">
					
					<h1>НОВІ ТОВАРИ</h1>

							<!-- <div class="product">
								<img src="images/bicycle-seconds-cards.jpg" alt="">
								<div class="txt">
									<a class="txt1" href = "">BYCICLE STANDART</a>
									<div class="price">70$</div>
									<a class="purchase" href="">В КОРЗИНУ</a>
								</div>
							</div>

							<div class="product">
								<img src="images/bicycle-seconds-cards.jpg" alt="">
								<div class="txt">
									<a class="txt1" href = "">BYCICLE STANDART</a>
									<div class="price">70$</div>
									<a class="purchase" href="">В КОРЗИНУ</a>
								</div>
							</div>

							<div class="product">
								<img src="images/bicycle-seconds-cards.jpg" alt="">
								<div class="txt">
									<a class="txt1" href = "">BYCICLE STANDART</a>
									<div class="price">70$</div>
									<a class="purchase" href="">В КОРЗИНУ</a>
								</div>
							</div>


							<div class="product">
								<img src="images/bicycle-seconds-cards.jpg" alt="">
								<div class="txt">
									<a class="txt1" href = "">BYCICLE STANDART</a>
									<div class="price">70$</div>
									<a class="purchase" href="">В КОРЗИНУ</a>
								</div>
							</div>

							 <div class="product">
								<img src="images/bicycle-seconds-cards.jpg" alt="">
								<div class="txt">
									<a class="txt1" href = "">BYCICLE STANDART</a>
									<div class="price">70$</div>
									<a class="purchase" href="">В КОРЗИНУ</a>
								</div>
							</div>  -->	

							<?php
								for($i=count($json->products)-1; $i>=count($json->products)-5; $i--){
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
												<?php print_r($json->products[$i]->price); echo ' грн';?>
											</div>

											<a class="purchase" href="">В КОРЗИНУ</a>

										</div>

									</div>
							<?php
								}
							?>												
				</div>
			</div>

			<div class="clear-line"></div>

			<div class="slider_parallax">
				<div class="slider-wrapper">
					<div class="container">
						<div class="sl">
						    <div class="sl__slide">
						    	<div class="txt1">КОМБІНАЦІЇ</div>
						    	<div class="txt2">Количество комбинаций в стандартной игральной колоде равно 52!, или 8×10<sup>67</sup></div>
						    </div>
						    <div class="sl__slide">
						    	<div class="txt1">ГРОШІ</div>
						    	<div class="txt2">Первыми бумажными деньгами на территории современной Канады служили игральные карты
						    	</div>
						    </div>
						    <div class="sl__slide">
						    	<div class="txt1">«Гра не коштує свічок»</div>
						    	<div class="txt2">Выражение «игра не стоит свеч» пришло из речи картёжников, говоривших так об очень небольшом выигрыше, который не окупает стоимости свечей, сгоревших во время игры.</div>
						    </div>
						  </div>
					</div>
				</div>
			</div>

			<div class="manufacturer">
				<div class="container">
					
					<h1>ВИРОБНИКИ</h1>

						<!-- <div class="multiple-items">
							<?php
								for($i=0; $i<count($json->manufacturer); $i++){
							?>
								<a href="">
									<div class="sl__slide">
									<div class="man">
										<?php 
											echo $json->manufacturer[$i];
										?>
									</div>
									</div>
								</a>
							<?php
								}
							?>
						</div> 	 -->

						<div class="man">CARTAMUNDI</div>
						<div class="man">BEE</div>
						<div class="man">AVIATORS</div><br>
						<div class="man">BYCICLE</div>
						<div class="man">TALLY-HO</div>

				</div>
			</div>

			<div class="contactus">
				<div class="container">
					<div class="title">ЗВ'ЯЖІТЬСЯ З НАМИ</div>
				</div>
			</div>

			<footer>
				<div class="container">
					<ul>
						<li>Copyright © 2019 <b>CARDHOUSE</b></li>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="">About Us</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Contact Support</a></li>
					</ul>
				</div>
			</footer>

		</div>
	</div>

  <script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
  <script src="script/slick/slick.min.js"></script>
  <script src="script/script.js"></script><!-- 
  <script src="script/bootstrap.min.js"></script> -->

</body>
</html>