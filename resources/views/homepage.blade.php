
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	</head>
	<body>
		<script src="{{ asset('js/homepage-details.js') }}"></script>
		<script src="{{ asset('js/homepage-colors.js') }}"></script>
		<script src="{{ asset('js/homepage-styles.js') }}"></script>
		<header class="header" id="header">
			<nav class="navbar">
				<div class="logo">
					<img src="{{ asset('Image/leaves.svg') }}"class="logo-img"/>
					<span style="vertical-align:middle">LAWNCARE</span>
				</div>
				<!-- Hamburger Icon -->
				<div class="hamburger-icon">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>

					<!-- Sidebar Navigation -->
					<div class="sidebar">
						<ul class="nav-links-sidebar">
							<li><a href="./about.html">About</a></li>
							<li><a href="./contact.html">Contact</a></li>
							<li><a href="./service.html">Services</a></li>
						</ul>
					</div>
				</div>
				<ul class="nav-links">
					<li><a href="./about.html">About</a></li>
					<li><a href="./contact.html">Contact</a></li>
					<li><a href="./service.html">Services</a></li>
				</ul>
			</nav>
			<div class="hero">
				<div class="hero-content">

					<div class="tagline-box" id="tag">
						<p class="tagline" >The Green Light to a Gorgeous Lawn</p>
					</div>
					<h1 >NOT JUST LAWN MOWING</h1>

				</div>
			</div>
		</header>

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
		<!-- Footer Section -->
		<footer>
			<div class="footer-content">
				<div>&copy; 2024 LAWNCARE. All Rights Reserved.</div>
				<div class="social-icons">
					<a href="https://www.facebook.com" target="_blank" aria-label="Facebook" class="icon facebook-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
							<path d="M22.675 0h-21.35C.59 0 0 .586 0 1.308v21.384C0 23.414.591 24 1.325 24h11.493v-9.293H9.167v-3.629h3.651V8.413c0-3.618 2.128-5.584 5.423-5.584 1.563 0 3.25.293 3.25.293v3.598h-1.831c-1.794 0-2.358 1.126-2.358 2.286v2.701h4.073l-.651 3.629h-3.422V24h6.703C23.409 24 24 23.414 24 22.692V1.308C24 .586 23.409 0 22.675 0z"/>
						</svg>
					</a>
					<a href="https://twitter.com" target="_blank" aria-label="Twitter" class="icon twitter-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
							<path d="M23.954 4.569c-.885.392-1.83.655-2.825.775 1.013-.607 1.794-1.566 2.165-2.724-.951.564-2.005.974-3.127 1.194-.895-.952-2.171-1.545-3.591-1.545-2.717 0-4.923 2.205-4.923 4.917 0 .386.045.763.127 1.124-4.092-.205-7.725-2.167-10.155-5.144-.426.727-.666 1.571-.666 2.477 0 1.707.87 3.213 2.188 4.096-.805-.025-1.563-.247-2.228-.616v.062c0 2.387 1.692 4.376 3.935 4.826-.413.112-.848.171-1.296.171-.316 0-.624-.031-.926-.086.624 1.95 2.433 3.374 4.58 3.415-1.677 1.314-3.785 2.095-6.076 2.095-.395 0-.788-.023-1.176-.067 2.177 1.393 4.767 2.208 7.548 2.208 9.055 0 14.003-7.505 14.003-14.003 0-.213-.004-.426-.012-.637.961-.694 1.795-1.562 2.458-2.548z"/>
						</svg>
					</a>
					<a href="https://www.youtube.com" target="_blank" aria-label="YouTube" class="icon youtube-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
							<path d="M23.498 6.186c-.278-1.037-1.078-1.837-2.088-2.087C19.453 4 12 4 12 4s-7.453 0-9.41.099c-1.01.25-1.81 1.05-2.088 2.087C0 8 0 12 0 12s0 4 .502 5.814c.278 1.037 1.078 1.837 2.088 2.087C4.547 20 12 20 12 20s7.453 0 9.41-.099c1.01-.25 1.81-1.05 2.088-2.087C24 16 24 12 24 12s0-4-.502-5.814zm-14.91 8.205V9.65l7.199 2.31-7.199 2.33z"/>
						</svg>
					</a>
				</div>
			</div>
		</footer>
	</body>
</html>
