@extends('layouts.app')
@section('title', 'Services')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="module" src="{{ asset('js/service.js') }}"></script>
@endsection

@section('pageheading', 'Services')

@section('content')
    <div class="main">
        <!-- Services Section -->
        <div style="color:#FFFFFF">
            <br />
            <span class="rounded-border">What We Offer</span>
            <p class="very-large-text">Lawn Care Fit For Royalty</p>
            <p>
                Avail all these services from our company<br />
                Enjoy the discounted services
            </p>
        </div>

        <!-- Popup for Adding Services -->
        <div id="popup" class="popup" style="display: none;">
            <div class="popup-content">
                <div id="serviceForm" class="service-form">
                    <h3>Add New Service</h3>
                    <input type="text" id="serviceName" placeholder="Service Name" required />
                    <input type="text" id="servicePrice" placeholder="Service Price" required />
                    <textarea id="serviceDescription" placeholder="Service Description" required></textarea>
                    <button id="addServiceBtn">Add Service</button>
                </div>
                <button id="closePopup">Close</button>
            </div>
        </div>

        <!-- Service List (Cards) -->
        <div class="service-list"></div>

        <!-- Action Buttons -->
        <div style="margin: 20px;">
            <button id="addItemBtn">Add Item</button>
            <button id="removeItemBtn">Remove Last Item</button>
        </div>

        <!-- Service Table -->
        <span class="rounded-border" style="color:white">Details</span>
        <div style="margin-bottom:20px"></div> <!-- For Padding -->
        <div id="table" class="table"></div>
        <div style="margin-bottom:25px"></div> <!-- For Padding -->
    </div>
@endsection

@section('scripts')
    <script>
        // Pass CSRF Token to JavaScript
        window.csrfToken = "{{ csrf_token() }}";
    </script>
@endsection
