<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <script type="module" src="{{ asset('js/service.js') }}"></script>
</head>
<body>
    <div class="main">
        <header class="header" id="header">
            <nav class="navbar">
                <div class="logo">
                    <img src="{{ asset('Image/leaves.svg') }}" class="logo-img"/>
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
                            <li><a href="./homepage.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav-links">
                    <li><a href="./homepage.html">Home</a></li>
                            <li><a href="./about.html">About</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="hero">
                <div class="hero-content">
                    <h1>SERVICES</h1>
                </div>
            </div>
        </header>
        <!-- Services -->
        <div style="color:#FFFFFF">
            <br/>
            <span class="rounded-border">What We Offer</span>
            <p class="very-large-text">Lawn Care Fit For Royalty</p>
            <p>
                Avail all these services from our company<br/>
                Enjoy the discounted services
            </p>
        </div>
<!-- Popup for actions (adding/removing items) -->
<div id="popup" class="popup">
    <div class="popup-content">

        <div id="serviceForm" class="service-form" >
            <h3>Add New Service</h3>
            <input type="text" id="serviceName" placeholder="Service Name" />
            <input type="text" id="servicePrice" placeholder="Service Price" />
            <textarea id="serviceDescription" placeholder="Service Description"></textarea>
            <button id="addServiceBtn">Add Service</button>
        </div>
        <button id="closePopup">Close</button>
    </div>
</div>

        <div class="service-list">
            
        </div>

        <div style="margin: 20px;">
            <button id="addItemBtn">Add Item</button>
            <button id="removeItemBtn">Remove Last Item</button>
        </div>
        <!-- Service Table -->
		<span class="rounded-border"style="color:white">Details</span>
		<div style="margin-bottom:20px"></div><!--For Padding-->
        <div id ="table" class="table">
        </div>
		<div style="margin-bottom:25px"></div><!--For Padding-->
    <!-- Footer --> 
        <div class="footer-content">
            <div>&copy; 2024 LAWNCARE. All Rights Reserved.</div>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" aria-label="Facebook" class="icon facebook-icon"><img class="social"src="Image/facebook.svg"/></a>
                <a href="https://www.instagram.com" target="_blank" aria-label="Instagram" class="icon instagram-icon"><img class="social"src="Image/instagram.svg"></a>
                <a href="https://www.twitter.com" target="_blank" aria-label="Twitter" class="icon twitter-icon"><img class="social"src="Image/twitter.svg"></a>
            </div>
        </div>
    </div>
</body>
</html>