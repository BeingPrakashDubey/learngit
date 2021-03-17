<?php include 'header.php' ?>
<section class="ServiceDetails">
	<div class="container">
		<div class="Title">
			<h4 class="Color">Tour Details</h4>
			<h2>New Delhi &#8652; Jammu &amp; Kashmir </h2>
			<p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="TourDetailsImage">
					
					<div class="mySlides">
						<div class="numbertext">1 / 6</div>
						<img src="assets/images/1.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">2 / 6</div>
						<img src="assets/images/2.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">3 / 6</div>
						<img src="assets/images/3.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">4 / 6</div>
						<img src="assets/images/gal_1.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">5 / 6</div>
						<img src="assets/images/gal_2.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<div class="numbertext">6 / 6</div>
						<img src="assets/images/gal_3.jpg" style="width:100%">
					</div>

					<a class="prev" onclick="plusSlides(-1)">❮</a>
					<a class="next" onclick="plusSlides(1)">❯</a>

					<div class="caption-container">
						<p id="caption"></p>
					</div>

					<div class="row m-0">
						<div class="column">
							<img class="demo cursor" src="assets/images/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/images/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/images/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/images/gal_1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
						</div>
						<div class="column">
							<img class="demo cursor" src="assets/images/gal_2.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
						</div>    
						<div class="column">
							<img class="demo cursor" src="assets/images/gal_3.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
						</div>
					</div>
				</div>

				<script>
					var slideIndex = 1;
					showSlides(slideIndex);

					function plusSlides(n) {
						showSlides(slideIndex += n);
					}

					function currentSlide(n) {
						showSlides(slideIndex = n);
					}

					function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("demo");
						var captionText = document.getElementById("caption");
						if (n > slides.length) {slideIndex = 1}
							if (n < 1) {slideIndex = slides.length}
								for (i = 0; i < slides.length; i++) {
									slides[i].style.display = "none";
								}
								for (i = 0; i < dots.length; i++) {
									dots[i].className = dots[i].className.replace(" active", "");
								}
								slides[slideIndex-1].style.display = "block";
								dots[slideIndex-1].className += " active";
								captionText.innerHTML = dots[slideIndex-1].alt;
							}
						</script>

					</div>
					<div class="col-md-6">
						<div class="TourDetailsText">
							<div class="TourHeading">
								<h6>Incidunt nunc pulvinar sapien et ligula ullamcorper </h6>
								<h4>Mauritius Island, Africa</h4>
								<div class="single-tour-price">
									<div class="product-big-price-wrap"><span class="product-big-price">$790</span></div>
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum. laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<div class="Box mt-5">
					<div class="TourFacilities">
						<ul>
							<li><img src="assets/images/sun(1).svg" alt="Icon"> 7 Days</li>
							<li><img src="assets/images/moon(2).svg" alt="Icon"> 6 Nights</li>
							<li><img src="assets/images/wifi.svg" alt="Icon"> WIFI</li>
							<li><img src="assets/images/air-conditioner.svg" alt="Icon"> Air Condition</li>
							<li><img src="assets/images/suspension.svg" alt="Icon"> Suspension</li>
						</ul>
					</div>
				</div>
				<div class="TourDetails">
					<div class="row">
						<div class="col-md-8">
							<div class="DetailTab">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#Overview">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#menu1">Day 1</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#menu2">Day 2</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#menu3">Day 3</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#menu4">Day 4</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content mt-3">
									<div class="tab-pane  active" id="Overview">
										<div class="TourInclude TabView">
											<h6>What your tour price includes?</h6>
											<div class="row">
												<div class="col-md-6">
													<ul>
														<li>Any monument entrance fees, camera fees, guide charges.</li>
														<li>Tips and Porterage</li>
														<li>Transfer</li>
														<li>Any services not mentioned in the list</li>
													</ul>
												</div>
												<div class="col-md-6">
													<ul class="Times">
														<li>Any monument entrance fees, camera fees, guide charges.</li>
														<li>Tips and Porterage</li>
														<li>Transfer</li>
														<li>Any services not mentioned in the list</li>
													</ul>												
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="menu1">...</div>
									<div class="tab-pane fade" id="menu2">...</div>
									<div class="tab-pane fade" id="menu3">...</div>
									<div class="tab-pane fade" id="menu4">...</div>
								</div>
							</div>
						</div>
				<div class="col-md-4">
					<div class="Box"style="position: relative;top: -120px;">
						<div class="BookTour Shadow ">
							<h3><strong>$790</strong></h3>
							<p><small>Starting price per adult</small></p>
							<hr />
							<p>Passenger:</p>
							<div class="row">
								<div class="col-6">
									<div class="quantity">
										<p class="mb-0"><small>Child</small></p>
										<input type="number" min="1" max="9" step="1" value="1">
									</div>
								</div>
								<div class="col-6">
									<div class="quantity">
										<p class="mb-0"><small>Adult</small></p>
										<input type="number" min="1" max="9" step="1" value="1">
									</div>
								</div>
							</div>
							<hr />
							<button type="button" class="btn Shadow"> Book now !</button>
							<hr />
							<h6 class="text-center">Get our assistance for easy booking</h6>
							<p class="text-center mb-0"><small>Call us at  (Toll Free No.) </small></p>
							<h5 class="text-center">1800-2099-100 </h5>
							<hr />


						</div>
					</div>
				</div>
			</div>
		</section>
<!-- Start Package List -->
<section class="PackageList">
	<div class="container">
		<div class="Title">
			<h4 class="Color">holiday tour</h4>
			<h2>Holiday Activities</h2>
			<p>Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
		</div>
		<div class="PackageSlider slider">
			<div class="slide">
				<div class="SinglePackage">
					<div class="PackageImage">
						<img src="assets/images/holiday_1.jpg" alt="Image" />
					</div>
					<div class="PackageContent">
						<div class="row">
							<div class="col-7">
								<p>Greece, Santorini</p>
							</div>
							<div class="col-5">
								<p class="text-secondary text-right">hot price</p>
							</div>
						</div>
						<h4>tours in monaco</h4>
						<h6 class="text-secondary"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 485 rewies</h6>
						<p>Astro Palace Hotel & Suites</p>
						<p class="text-secondary">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
						<div class="col-12 d-block m-auto text-center p-0">
							<button type="button" class="btn">Details</button>
							<button type="button" class="btn Filled">Book</button>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="SinglePackage">
					<div class="PackageImage">
						<img src="assets/images/holiday_2.jpg" alt="Image" />
					</div>
					<div class="PackageContent">
						<div class="row">
							<div class="col-7">
								<p>Greece, Santorini</p>
							</div>
							<div class="col-5">
								<p class="text-secondary text-right">hot price</p>
							</div>
						</div>
						<h4>Luxury Hotel & SPA</h4>
						<h6 class="text-secondary"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 485 rewies</h6>
						<p>Luxury Hotel & SPA</p>
						<p class="text-secondary">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
						<div class="col-12 d-block m-auto text-center p-0">
							<button type="button" class="btn">Details</button>
							<button type="button" class="btn Filled">Book</button>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="SinglePackage">
					<div class="PackageImage">
						<img src="assets/images/holiday_3.jpg" alt="Image" />
					</div>
					<div class="PackageContent">
						<div class="row">
							<div class="col-7">
								<p>Greece, Santorini</p>
							</div>
							<div class="col-5">
								<p class="text-secondary text-right">hot price</p>
							</div>
						</div>
						<h4>Night Safari Adventure</h4>
						<h6 class="text-secondary"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 485 rewies</h6>
						<p>Astro Palace Hotel & Suites</p>
						<p class="text-secondary">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
						<div class="col-12 d-block m-auto text-center p-0">
							<button type="button" class="btn">Details</button>
							<button type="button" class="btn Filled">Book</button>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="SinglePackage">
					<div class="PackageImage">
						<img src="assets/images/holiday_1.jpg" alt="Image" />
					</div>
					<div class="PackageContent">
						<div class="row">
							<div class="col-7">
								<p>Night Safari Adventure</p>
							</div>
							<div class="col-5">
								<p class="text-secondary text-right">hot price</p>
							</div>
						</div>
						<h4>tours in monaco</h4>
						<h6 class="text-secondary"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 485 rewies</h6>
						<p>Astro Palace Hotel & Suites</p>
						<p class="text-secondary">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
						<div class="col-12 d-block m-auto text-center p-0">
							<button type="button" class="btn">Details</button>
							<button type="button" class="btn Filled">Book</button>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="SinglePackage">
					<div class="PackageImage">
						<img src="assets/images/holiday_4.jpg" alt="Image" />
					</div>
					<div class="PackageContent">
						<div class="row">
							<div class="col-7">
								<p>Greece, Santorini</p>
							</div>
							<div class="col-5">
								<p class="text-secondary text-right">hot price</p>
							</div>
						</div>
						<h4>tours in monaco</h4>
						<h6 class="text-secondary"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> 485 rewies</h6>
						<p>Astro Palace Hotel & Suites</p>
						<p class="text-secondary">Nunc cursus libero purus ac congue arcu cur sus ut sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
						<div class="col-12 d-block m-auto text-center p-0">
							<button type="button" class="btn">Details</button>
							<button type="button" class="btn Filled">Book</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Package List -->
		<?php include 'footer.php' ?>