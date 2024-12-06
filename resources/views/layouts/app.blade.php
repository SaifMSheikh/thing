
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token"content="{{csrf_token()}}">
  <title>@yield('title')</title>
@yield('css')
</head>
<body>

  <header class="header" id="header">
   @include('include.navbar')
    <div class="hero" id="title">

        <h1 style="font-size:70px">@yield('pageheading')</h1>

    </div>
    @yield('homepagehero')
  </header>
<main>
    @yield('content')
</main>

@include('include.footer')
</body>
</html>
