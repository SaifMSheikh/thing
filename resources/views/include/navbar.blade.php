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
            <li><a href="{{ url('/') }}">Home</a></li> <!-- Link to home route -->
                <li><a href="{{ url('/about') }}">About</a></li> <!-- Link to about route -->
                <li><a href="{{ url('/contact') }}">Contact</a></li> <!-- Link to contact route -->
                <li><a href="{{ url('/service') }}">Services</a></li> <!-- Link to services route -->
          </ul>
          </div>
        </div>
      <ul class="nav-links">
      <li><a href="{{ url('/') }}">Home</a></li> <!-- Link to home route -->
      <li><a href="{{ url('/about') }}">About</a></li> <!-- Link to about route -->
      <li><a href="{{ url('/contact') }}">Contact</a></li> <!-- Link to contact route -->
       <li><a href="{{ url('/service') }}">Services</a></li> <!-- Link to services route -->
            </ul>
    </nav>