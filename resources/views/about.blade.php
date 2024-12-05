@extends('layouts.app')
@section('title','About Us')
@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <link rel="stylesheet" href="{{ asset('css/about2.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endsection

@section('pageheading','About Us')
@section('content')

<section class="about-section" >
    <h3>About Our Company</h3>
    <h1>Transforming Your Outdoor Space <br> with Our Unmatched Service.</h1>
    <div class="content">
        <div class="text-box">
            <p>We take pride in being a premier lawn care company, focused on enhancing outdoor spaces to create beautiful, healthy, and sustainable landscapes. Our skilled team of lawn care experts is committed to providing exceptional services tailored to the specific needs of each client.</p>
            <p>Whether you're aiming to boost the curb appeal of your home or ensure the professional upkeep of your commercial property, We are here to make your vision a reality.</p>
        </div>
        <div class="info-cards">
          <div class="card">
              <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
              </div>
              <h2>Local</h2>
          </div>
          <div class="card">
              <div class="icon">
                  <i class="fas fa-star"></i>
              </div>
              <h2>Quality</h2>
          </div>
          <div class="card">
              <div class="icon">
                  <i class="fas fa-concierge-bell"></i>
              </div>
              <h2>Services</h2>
          </div>
      </div>
         <div class="text-box">
            <p>We strive to create vibrant, thriving outdoor spaces for a greener, healthier Tulsa. Our dedication to excellence and cultivating trust and valued relationships is deep-rooted within our community. Establishing and caring for beautiful lawns is our purpose and our strength.</p>
        </div>
    </div>
</section>

<section class="why-choose">
  <h3>Experience your Lawn's Real Potential</h3>
  <h1>Why choose Us</h1>
  <div class="info-cards-why-choose">
      <div class="card-why-choose">
          <div class="icon">
              <i  class="fas fa-leaf"></i>
          </div>
          <h2>Mission</h2>
          <p>Proud to be your locally owned and family operated lawn company.</p>
      </div>
      <div class="card-why-choose">
          <div class="icon">
              <i class="fas fa-eye"></i>
          </div>
          <h2>Vision</h2>
          <p>We offer the highest quality of customer service from the phone to the field.</p>
      </div>
      <div class="card-why-choose">
          <div class="icon">
              <i class="fas fa-handshake"></i>
          </div>
          <h2>Promise</h2>
          <p>All things lawn under one name. We have you covered.</p>
      </div>
  </div>
</section>
@endsection