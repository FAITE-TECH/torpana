<!DOCTYPE html>
<html>

<head>
	<title>TAPROBANA</title>
	<!-- CSS only -->
	<?php require('inc/links.php'); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="css/style.css" />

	<link rel="stylesheet" href="css/about.css" />
	<link rel="stylesheet" href="css/package.css" />

</head>

<body>

	<?php require('header.php'); ?>
	<!-- Swiper Carousal-->
	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="assets/places/hotel2.jpg" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="assets/images/carousel/2.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="assets/images/carousel/3.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="assets/images/carousel/4.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="assets/images/carousel/5.png" class="w-100 d-block" />
				</div>
				<div class="swiper-slide">
					<img src="assets/images/carousel/6.png" class="w-100 d-block" />
				</div>

			</div>

		</div>
	</div>

	<!-- check avilability form-->
	<div class="container availability-form">
		<div class="row">
			<div class="col-lg-12 bg-white shadow p-4 rounded">
				<h5 class="col-lg-3">Check Booking Availability</h5>
				<form>
					<div class="row align-items-end">
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-in</label>
							<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Check-in</label>
							<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500;">Adult</label>
							<select class="form-select shadow-none">

								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500;">Children</label>
							<select class="form-select shadow-none">

								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						<div class="col-lg-1 mb-lg-3 mt-2">
							<button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Our Rooms -->
	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="assets/images/rooms/1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Simple Room Name</h5>
						<h6 class="mb-4">$2000 per night </h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
						</div>

						<div class="guests mb-4">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								5 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>
						</div>
						<div class="rating mb-4">

							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>
						<div class="d-flex justify-content-evenly mb-2">
							<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="assets/places/hotel.jfif" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Simple Room Name</h5>
						<h6 class="mb-4">Ꝛ2000 per night </h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>
							<div class="guests mb-4">
								<h6 class="mb-1">Guests</h6>
								<span class="badge rounded-pill bg-light text-dark text-wrap">
									5 Adults
								</span>
								<span class="badge rounded-pill bg-light text-dark text-wrap">
									4 Children
								</span>

							</div>
							<div class="rating mb-4">

								<h6 class="mb-1">Rating</h6>
								<span class="badge rounded-pill bg-light">
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
								</span>
							</div>
							<div class="d-flex justify-content-evenly mb-2">
								<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
								<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="assets/hotel3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Simple Room Name</h5>
						<h6 class="mb-4">Ꝛ2000 per night </h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room Heater
							</span>

							<div class="guests mb-4">
								<h6 class="mb-1">Guests</h6>
								<span class="badge rounded-pill bg-light text-dark text-wrap">
									5 Adults
								</span>
								<span class="badge rounded-pill bg-light text-dark text-wrap">
									4 Children
								</span>
							</div>

							<div class="rating mb-4">

								<h6 class="mb-1">Rating</h6>
								<span class="badge rounded-pill bg-light">
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
									<i class="bi bi-star-fill text-warning"></i>
								</span>
							</div>
							<div class="d-flex justify-content-evenly mb-2">
								<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
								<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
			</div>
		</div>
	</div>

	<!-- Our Facilities-->

	<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

	<div class="container">
		<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="assets/images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="assets/images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="assets/images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="assets/images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="assets/images/Facilities/wifi.svg" width="80px">
				<h5 class="mt-3">Wifi</h5>
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities
					>>></a>
			</div>
		</div>
	</div>


	<?php require('footer.php') ?>
	<!-- JavaScript Bundle with Popper -->


	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".swiper-container", {
			spaceBetween: 30,
			effect: "fade",
			loop: true,
			autoplay: {
				delay: 3500,
				disableOnInteraction: false,
			}
		});

		var swiper = new Swiper(".swiper-testimonials", {
			effect: "coverflow",
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: "auto",
			slidesPerView: "3",
			loop: true,
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: false,
			},
			pagination: {
				el: ".swiper-pagination",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				640: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 2,
				},
				1024: {
					slidesPerView: 3,
				},
			}
		});
	</script>
</body>

</html>