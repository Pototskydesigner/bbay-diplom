<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Продукт");
?>
	<main>
		<section class="product-card">
			<div class="container">
				<h1>MTB Hardtail 56737</h1>
				<div class="product-card__info-wrp">
					<div class="product-card__img-wrp">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/city-bike.png" alt="bike">
					</div>

					<form class="product-card__form" action="">
						<div class="product-card__form-wrp">
							<fieldset>
								<div class="product-card__form-title-wrp">
									<legend>Size</legend>
									<button type="button">Size guide</button>
								</div>
								<div class="product-card__form-radio-wrp">
									<input class="visually-hidden" type="radio" id="s-size" name="size" value="s-size">
									<label for="s-size">
										s
									</label>
									<input class="visually-hidden" type="radio" id="m-size" name="size" value="m-size" checked>
									<label for="m-size">
										m
									</label>
									<input class="visually-hidden" type="radio" id="l-size" name="size" value="l-size">
									<label for="l-size">
										l
									</label>
									<input class="visually-hidden" type="radio" id="xl-size" name="size" value="xl-size">
									<label for="xl-size">
										xl
									</label>
								</div>
							</fieldset>
							<fieldset>
								<div class="product-card__form-title-wrp">
									<legend>Colors</legend>
								</div>
								<div class="product-card__form-radio-wrp product-card__form-radio-wrp--size">
									<input class="visually-hidden" type="radio" id="black" name="color" value="black">
									<label for="black">
										black
									</label>
									<input class="visually-hidden" type="radio" id="white" name="color" value="white" checked>
									<label for="white">
										white
									</label>
								</div>
							</fieldset>
							<h3>availability</h3>
							<span>in stock</span>
							<p>$ 750.00</p>
						</div>
						<button type="button">add to favourites</button>
						<button type="submit">add to cart</button>
					</form>
				</div>
			</div>
		</section>
		<section class="information">
			<h2 class="visually-hidden">information</h2>
			<div class="container">
				<div class="information__wrp">
					<div class="information__images">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/info-1.jpg" alt="info-1">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/info-2.jpg" alt="info-2">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/info-3.jpg" alt="info-3">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/info-4.jpg" alt="info-4">
					</div>
					<div class="information__text">
						<div class="information__text-wrp">
							<h3>Characteristics</h3>
							<p>Bicycle, also called bike, two-wheeled steerable machine that is pedaled by the rider's feet.
								On
								a standard bicycle the wheels are mounted in-line in a metal frame, with the front wheel
								held in
								a rotatable fork. The rider sits on a saddle and steers by leaning and turning handlebars
								that
								are attached to the fork. With a carbon frame, this bike nimbly handles any terrain.
								Combining
								29” wheels in the front and 27.5” wheels in the rear ensures that you will never lose
								traction.
								A power bike for riders who are looking for an electrified warhorse as a companion.</p>
						</div>
						<div class="information__text-wrp">
							<h3>Features</h3>
							<ul>
								<li>Very lightweight frame, wheels and components.</li>
								<li>A drop (curled) handlebar, though some have a flat bar like a mountain bike.</li>
								<li>Narrow wheels and tires.</li>
								<li>A composite (carbon fiber) front fork.</li>
								<li>No front or rear suspension.</li>
								<li>Men's and women's styles and a wide range of sizes.</li>
							</ul>
						</div>
						<div class="information__text-wrp">
							<h3>Product information</h3>
							<div class="information__text-detailed-info-wrp">
								<h4>Drivetrain</h4>
								<p>High-precision, sturdy Microshift 8-speed shifter inner routine. Very comfortable design:
									the
									shifter is easy to operate regardless of hand size. Front Microshift derailleur and
									high-precision Microshift rear derailleur</p>
							</div>
							<div class="information__text-detailed-info-wrp">
								<h4>Crankset / cassette</h4>
								<p>Microshift CS-H081 11-34 cassette (11/13/15/18/21/24/28/34) Aluminum Triban crankset
									double
									chainring 50/34. 170 mm crank arm length
								</p>
							</div>
							<div class="information__text-detailed-info-wrp">
								<h4>Brakes</h4>
								<p>Promax DSK-300R disc brakes. 160 mm disc brakes at front and rear JAGWIRE
									anti-compression
									housing to ensure braking precision and efficiency Semi-metal pad</p>
							</div>
							<div class="information__text-detailed-info-wrp">
								<h4>Wheels</h4>
								<p>Triban Tubeless ready* wheels 6061T6 aluminum ETRTO dimensions: 622 x 17 C 28 mm high for
									greater lateral rigidity Crossed stainless thread lock spokes to improve rigidity (28
									front
									and 28 rear) *Conversion kit required, including 2 tubeless valves + 2 rim strips +
									bottle
									of anti-puncture liquid
								</p>
							</div>
							<div class="information__text-detailed-info-wrp">
								<h4>Tires</h4>
								<p>Triban protect: 700 x 28 Skin Wall puncture protection
								</p>
							</div>
							<div class="information__text-detailed-info-wrp">
								<h4>Saddle / seat post</h4>
								<p>New Triban ErgoFit saddle. Hammock design for greater comfort. Aluminum Triban seat post.
									Easy saddle adjustment Diameter: 27.2 mm. Length: 350 mm in M / L / XL, 250 mm in XS / S
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="review">
			<div class="container">
				<h2>Customer reviews</h2>
				<div class="review__wrp">
					<ul class="review__list">
						<li class="review__item">
							<h3>Great Bike</h3>
							<p>I bought this bike about 1.5 months ago if I recall properly, to this day I've got a little
								bit
								over 550km on it. The group set isn't the greatest, I've been having issues with it where it
								skips a cog sometimes, not sure why that might be. I also don't live near a store so I can't
								take it in, so I'll have to set if I can take it to a local bike shop I guess. Great bike
								tho,
								and if you're looking into getting something like this on a budget I would suggest it. I
								know I
								might not win any races, but I'm on it to ride and get excercise, so it meets my needs. Also
								the
								customers service is great and they helped me over the phone a lot.
							</p>
							<span>Leon</span>
							<time>July 2020</time>
						</li>
						<li class="review__item">
							<h3>Great Bike</h3>
							<p>I bought this bike about 1.5 months ago if I recall properly, to this day I've got a little
								bit
								over 550km on it. The group set isn't the greatest, I've been having issues with it where it
								skips a cog sometimes, not sure why that might be. I also don't live near a store so I can't
								take it in, so I'll have to set if I can take it to a local bike shop I guess. Great bike
								tho,
								and if you're looking into getting something like this on a budget I would suggest it. I
								know I
								might not win any races, but I'm on it to ride and get excercise, so it meets my needs. Also
								the
								customers service is great and they helped me over the phone a lot.
							</p>
							<span>Leon</span>
							<time>July 2020</time>
						</li>
					</ul>
					<button type="button">See all</button>
				</div>
			</div>
		</section>
		<section class="products">
			<div class="container">
				<h2>Related Items</h2>
				<div class="slider slick-good-slider">
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="#">Cycling Gloves, Adult</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="reviewed">
			<div class="container">
				<h2>Recently viewed</h2>
				<div class="slider slick-good-slider">
					<div class="slider__item">
						<div class="slider__item-wrp">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/good-1.jpg" alt="good-1">
							<div class="slider__item-content-wrp">
								<h3><a href="product.html">Bottle cage</a></h3>
								<p>$ 95.00</p>
								<p>Free shipping Free pick up</p>
							</div>
						</div>
						<button>order now</button>
					</div>
				</div>
			</div>
		</section>

	</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>