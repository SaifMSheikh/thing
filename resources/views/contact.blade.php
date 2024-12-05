@extends('layouts.app')
@section('title','Contact')
@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css') }}">
<script type="module" src="{{ asset('js/contact.js') }}"></script>
@endsection
@section('pageheading','Contact')
@section('content')
<div class="contact-container" id="a">
        <div class="contact-card light-card">
			<img src="{{ asset('Image/phone.svg') }}"class="contact-icon"/>
            <h3>(+92) 333 3737157</h3>
			<p>Quick Service &amp; Expert Support,<br/>Available 24/7!</p>
            
        </div>

        <div class="contact-card dark-card" id="b">
			<img src="{{ asset('Image/mail.svg')}}"style="width:40px;height:40px;margin:10px;0px;"/>
            <h3>mail@lawn.com</h3>
			<p>Send Us Your Inquiries.<br/>We'd Love To Here From You!</p>
        </div>

        <div class="contact-card light-card">
			<img src="{{ asset('Image/address.svg') }}"class="contact-icon"/>
			<h3>Sher Shah Rd</h3>
			<p>Sher Shah Road, Multan Cantt, Multan.<br/>Next To Mcdonalds.</p>
        </div>
    </div>

    <div class="container" id="g">
        <div class="left-section">
            <h2>Our Working Time</h2>
            <p>We're here to assist you during our dedicated working hours. Whether you have questions about our services, need support, or want to schedule a consultation, feel free to reach out to us. Our team is committed to providing prompt and helpful responses to ensure you receive the best service possible.</p>
            <ul class="working-hours">
                <li><svg class="icon clock-icon"></svg> Monday - Friday : 7AM-5PM</li>
                <li><svg class="icon clock-icon"></svg> Saturday: 9AM-3PM</li>
            </ul>

            <h3>Location :</h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27592.504850759546!2d71.39883565!3d30.178191249999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b33d4cc95dbb3%3A0xc5dc139a9b62ab2!2sMultan%20Cantonment%2C%20Multan%2C%20Punjab!5e0!3m2!1sen!2s!4v1728032054288!5m2!1sen!2s" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>

        <div class="right-section">
          <form id="contactForm" class="contact-form" onsubmit="return validateForm(event)">
            <!-- Name field -->
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <span class="error" id="nameError"></span>
        
            <!-- Email field -->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
            <span class="error" id="emailError"></span>
        
            <!-- Phone Number field -->
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="923XXXXXXXXX" required>
            <span class="error" id="phoneError"></span>
        
            <!-- Service selection with label -->
            <label for="service" style="text-align: center; display: block;">Select a service from the dropdown</label>

            <div class="dropdown">
              <button class="dropdown-btn" id="dropdown-btn">Select a service</button>
              <div class="dropdown-menu" id="dropdown-menu">
              </div>
            </div>
        
            <!-- Submit button -->
            <button type="submit">Submit</button>
          </form>
        </div>
        <script src="{{ asset('js/formValidation.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
        

    
        
      
    </div>
   </div>


@endsection