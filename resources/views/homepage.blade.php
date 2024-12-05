@extends('layouts.app')	
@section('title','Homepage')
@section('css')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endsection
@section('homepagehero')
<div class="hero">
				<div class="hero-content">

					
					<div class="tagline-box" id="tag">
						<p class="tagline" >The Green Light to a Gorgeous Lawn</p>
					</div>
					<h1 >NOT JUST LAWN MOWING</h1>
				</div>
			</div>
@endsection

@section('content')

		<script src="{{ asset('js/homepage-details.js') }}"></script>
		<script src="{{ asset('js/homepage-colors.js') }}"></script>
		<script src="{{ asset('js/homepage-styles.js') }}"></script>
	
		<div class="about-us-body colors-light">
			<!-- Left Column -->
			<div class="left-column">
				<svg id="color-btn"onclick="toggle_color_scheme()"onmouseover="button_select(this)"onmouseout="button_deselect(this)"style="float:right"fill="#A9C857"fill-opacity="0.5"width="30px"height="30px"viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg"><path d="M12.022,22a10.017,10.017,0,0,0,9.929-8.632,4.828,4.828,0,0,0-.47-2.895C18.738,5.26,11.019,12.475,11.02,6c0-2.794,0-4-2-4C4,2,2,7.694,2,12A10.011,10.011,0,0,0,12.022,22ZM15.5,12A2.5,2.5,0,1,1,13,14.5,2.5,2.5,0,0,1,15.5,12ZM9,16.5A1.5,1.5,0,1,1,7.5,15,1.5,1.5,0,0,1,9,16.5ZM6.5,6A1.5,1.5,0,1,1,5,7.5,1.5,1.5,0,0,1,6.5,6Zm-1,4.5A1.5,1.5,0,1,1,4,12,1.5,1.5,0,0,1,5.5,10.5Z"/></svg>
				<div class="tagline-outer-box">
					<div class="tagline-box-about-us">
						<div class="tagline-about-us">
							<span style="color:var(--col-accent)">For A Greener Yard</span>
						</div>
					</div>
				</div>

				<h1>Your Choice For a Beautiful Lawn</h1>
				<p>
				A green and well-maintained lawn plays a crucial role in creating a peaceful environment. 
				It enhances the beauty of your outdoor space, providing a serene backdrop for relaxation and recreation. Lush greenery not only promotes mental well-being but also contributes to cleaner air and a healthier ecosystem. A well-kept lawn invites 
				nature, offering a tranquil retreat where you can unwind and connect with the outdoors.
				</p>
				<!--a href="/About/about.html" class="cta-btn"><span class="arrow-circle">&#10132;</span> Learn More </a-->
				<!--Show/Hide Details Button (Arrow)-->
				<svg id="show-btn" onclick="toggle_details()" onmouseover="button_select(document.querySelector('#show-btn-inner'))" onmouseout="button_deselect(document.querySelector('#show-btn-inner'))" width="50px" height="50px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione-monotone" preserveAspectRatio="xMidYMid meet"><path id="show-btn-inner" fill="#A9C857" fill-opacity="0.5" d="M32 2C15.432 2 2 15.432 2 32c0 16.568 13.432 30 30 30s30-13.432 30-30C62 15.432 48.568 2 32 2zm1.693 46V37.428H15V27.143h18.693V16L49 32L33.693 48z"></path></svg>			
			</div>
			<!-- Vertical Dashed Line -->
			<div class="vertical-dashed-line"></div>
			<!-- Right Column -->
			<div class="right-column">
				<div class="icon-section" id="b">
					<div class="icon-box" id="i">

						<h3>25 Years of Service</h3>
						<p>With over two decades of experience, we are your trusted partners in lawn care.</p>
					</div>

					<div class="icon-box" id="i">

						<h3>Beyond Lawn Mowing</h3>
						<p>We offer a variety of services to cater to all your outdoor needs, ensuring your space is always at its best.</p>
					</div>

					<div class="icon-box">

						<h3>Expanding Our Reach</h3>
						<p>Now expanding from Multan to a national level, we're bringing our expertise to more customers.</p>
					</div>
				</div>
			</div>
		</div>



		<!-- Service cards -->
		<div class="service-cards-section">
			<div class="heading">
				<h1>SERVICES</h1>
			</div>
			<div class="cards-wrapper">
				<div class="card">
					<img src="{{ asset('Image/mowing.jpg') }}"" alt="Lawn Mowing" class="card-image">
					<div class="card-content">
						<div class="card-info">
							<span><i class="fas fa-check-circle"></i> 250+ Clients</span>
							<span class="dashed-divider"></span>
							<span>PKR 25k</span>
						</div>
						<div class="card-title">
							<h2>Lawn Mowing</h2>
						</div>
						<p class="card-description">Our professional lawn mowing service ensures a pristine and healthy lawn, enhancing your home’s curb appeal.</p>
						<a  href="/Service/service.html" class="cta-btn"><span class="arrow-circle">&#10132;</span> Learn More </a>
					</div>
				</div>

				<div class="card">
					<img src="{{ asset('Image/planting.jpeg') }}" alt="Planting" class="card-image">
					<div class="card-content">
						<div class="card-info">
							<span><i class="fas fa-check-circle"></i> 250+ Clients</span>
							<span class="dashed-divider"></span>
							<span>PKR 25k</span>
						</div>
						<div class="card-title">
							<h2>Planting & Landscaping </h2>
						</div>
						<p class="card-description">We offer expert planting services that create stunning outdoor spaces tailored to your preferences.</p>
						<a  href="/Service/service.html" class="cta-btn"><span class="arrow-circle">&#10132;</span> Learn More </a>
					</div>
				</div>

				<div class="card">
					<img src="{{ asset('Image/pool.jpg') }}" alt="Spa and Pool" class="card-image">
					<div class="card-content">
						<div class="card-info">
							<span><i class="fas fa-check-circle"></i> 250+ Clients</span>
							<span class="dashed-divider"></span>
							<span>PKR 25k</span>
						</div>
						<div class="card-title">
							<h2>Spa & Pool Servies </h2>
						</div>
						<p class="card-description">Our team specializes in designing serene spa and pool settings, turning your backyard into a relaxing oasis.</p>
						<a  href="/Service/service.html" class="cta-btn"><span class="arrow-circle">&#10132;</span> Learn More </a>
					</div>
				</div>

				<div class="card">
					<img src="{{ asset('Image/bbq.avif') }}" alt="BBQ" class="card-image">
					<div class="card-content">
						<div class="card-info">
							<span><i class="fas fa-check-circle"></i> 250+ Clients</span>
							<span class="dashed-divider"></span>
							<span>PKR 25k</span>
						</div>
						<div class="card-title">
							<h2>BBQ</h2>
						</div>
						<p class="card-description">We offer expert BBQ tailored according to your taste. Mouth watering food and melting flavours.</p>
						<a  href="/Service/service.html" class="cta-btn"><span class="arrow-circle">&#10132;</span> Learn More </a>
					</div>
				</div>

			</div>
		</div>
		<!-- Main Content Section -->
		<div class="testimonial-section">
			<div class="container-block">
				<div class="block" >
					<h1 class="my-heading">Testimonials</h1>
					<p>We take pride in delivering exceptional lawn care services to our valued customers. Here’s what some of our satisfied clients have to say about their experiences with us.</p>
				</div>

				<div class="testimonials">
					<div class="testimonial">
						<span class="quote-mark">”</span>
						<br>
						<br>
						<p class="quote">...Lawncare transformed my yard into a beautiful oasis! Their attention to detail and commitment to quality service truly set them apart. I couldn’t be happier!"
						</p>
						<br> <br>

						<div class="rating">
							<span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
						</div>
						<div class="user-info">
							<img src="{{ asset('Image/profile.webp') }}" alt="Anisa">
							<p class="name">Anisa</p>
						</div>
					</div>

					<div class="testimonial">
						<span class="quote-mark">”</span>
						<br>
						<br>
						<p class="quote">...I’ve tried several lawn care companies, but none have matched the professionalism and expertise of 
						Lawncare. My lawn has never looked better, and the team is always friendly and responsive!"</p>

						<div class="rating">
							<span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
						</div>
						<div class="user-info">
							<img src="{{ asset('Image/profile.webp') }}" alt="Ariana">
							<p class="name">Ariana</p>
						</div>
					</div>

					<div class="testimonial">
						<span class="quote-mark">”</span>
						<br>
						<br>
						<p class="quote">... Fantastic service! The team at Lawncare did an incredible job with my 
						landscaping. They listened to my needs and delivered beyond my expectations. Highly recommend!"</p>
						<br><br>
						<div class="rating">
							<span>★</span><span>★</span><span>★</span><span>★</span>
						</div>
						<div class="user-info">
							<img src="{{ asset('Image/profile.webp') }}" alt="Azalea">
							<p class="name">Azalea</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id='style-btn-super'>
			<span id='style-btn'onclick='toggle_style()'>Change Text Style</span>
			<img src="{{ asset('Image/reset.svg') }}"id='reset-btn'onclick='reset_style()'/>
		</div>


@endsection