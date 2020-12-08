@extends('layout.mainlayout')
@section('content')		
		<!-- Home Banner -->
		<section class="section section-search">
				<div class="container-fluid col-md-6" style="float: right;">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Put healthcare back in your hands.</h1>
							<p>From Telemedicine to Lav Services, EpiqMD has your medical care covered.</p>
						</div>
						<div class="row" style="justify-content: center;">
							<div class="btn-start" style="margin-right: 10px;">
								<button type="button" class="btn btn-block">Get Started</button>
							</div>
							<div class="btn-howwork">
								<button type="button" class="btn btn-block">How It Works</button>
							</div>
						</div>
					</div>
						<!-- Search -->
						<!-- <div class="search-box">
							<form action="search">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location">
									<span class="form-text">Based on your Location</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
									<span class="form-text">Ex : Dental or Sugar Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div> -->
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<section class="section home-tile-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9 m-auto">
							<div class="section-header text-center">
							    <h3>Accesible healthcare for everyone.</h3>
								<h2>No insurance required.</h2>
							</div>
							<div class="row">
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content">
											<div>
												<h3 class="card-title mb-0">Telemedicine</h3>
												<!-- <a href="search" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Book Now</a> -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content">
											<div>
												<h3 class="card-title mb-0">Telewellness</h3>
												<!-- <a href="pharmacy-search" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Find Now</a> -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content">
											<div>
											<h3 class="card-title mb-0">Lab Services</h3>
												<!-- <a href="javascript:void(0);" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Coming Soon</a> -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content">
											<div>
												<h3 class="card-title mb-0">Prescription Discounts</h3>
												<!-- <a href="search" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Book Now</a> -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content">
											<div>
												<h3 class="card-title mb-0">Medical & Legal Advisory</h3>
												<!-- <a href="pharmacy-search" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Find Now</a> -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content">
											<div>
											<h3 class="card-title mb-0">Diet & Nutrition</h3>
												<!-- <a href="javascript:void(0);" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Coming Soon</a> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			  
			<!-- Clinic and Specialities -->
			<section class="section section-primarcare">
					<div class="container-fluid col-md-6" style="float:left">
					<div class="section-header text-center">
						<h2>COVID-19, Cold & Flu, Allergies.</h2>
						<p class="sub-title">During this busy season, EpiqMD is here for you when you need it most 24/7, 365 access from anywhere.</p>
					</div>
					<div class="btn-start" style="text-align: -webkit-center;">
						<button type="button" class="btn btn-block" style="width: auto;">About Primary Care</button>
					</div>
				</div>   
			</section>	 
			<!-- Clinic and Specialities -->
			<section class="section section-telemedicine">
					<div class="container-fluid col-md-6" style="float:left">
					<div class="section-header text-center">
					<h2 style="color: #219b92;">Telemedicine.</h2>
						<p class="sub-title">Telehealth is the distribution of health-related services and information via electronic information and telecommunication technologies. It allows long-distance patient and clinician contact, care, advice, reminders, education, intervention, monitoring, and remote admissions</p>
					</div>
					<div class="btn-learnmore" style="text-align: -webkit-center;">
						<button type="button" class="btn btn-block" style="width: auto;">Larn More</button>
					</div>
				</div>   
			</section>
			<section class="section section-telewellness">
					<div class="container-fluid col-md-6" style="float:right">
					<div class="section-header text-center">
					<h2 style="color: #219b92;">Telewellness.</h2>
						<p class="sub-title">By combining aggressive lifestyle enhancements along with cutting-edge medical therapies, we make it possible for people to reach levels of sustainable wellness ...</p>
					</div>
					<div class="btn-learnmore" style="text-align: -webkit-center;">
						<button type="button" class="btn btn-block" style="width: auto;">Larn More</button>
					</div>
				</div>   
			</section>
			<section class="section section-prescription">
					<div class="container-fluid col-md-6" style="float:left">
					<div class="section-header text-center">
					<h2>Prescription Discounts.</h2>
						<p class="sub-title">You simply pay a discounted cash price for your prescription medications. This is often cheaper than using your insurance and paying a copay. In some cases, SingleCare users can get an average savings of 80% off prescription prices.</p>
					</div>
					<div class="btn-learnmore" style="text-align: -webkit-center;">
						<button type="button" class="btn btn-block" style="width: auto;">Larn More</button>
					</div>
				</div>   
			</section>
			<section class="section section-labservice">
					<div class="container-fluid col-md-6" style="float:right">
					<div class="section-header text-center">
					<h2 style="color: #219b92;">Lab Service.</h2>
						<p class="sub-title">As a managed service, Lab Services gives you automatic provisioning and management of your lab's underlying infrastructure. Just prepare the right lab ...</p>
					</div>
					<div class="btn-learnmore" style="text-align: -webkit-center;">
						<button type="button" class="btn btn-block" style="width: auto;">Larn More</button>
					</div>
				</div>   
			</section>
			</div>
	   @endsection
	  