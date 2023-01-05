<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPZA | Homepage</title>

    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Javascript -->
    <script src="js/homepage.js" defer></script>
    <!-- homepage CSS -->
    <link rel="stylesheet" href="css/homepage.css">
  </head>
  <body>
    <header class="fix">
        <video src="video/home-video.mp4" class="vid-bg" autoplay loop muted></video>
        <div class="nav-area">
            <nav class="nav">
            <i class="uil uil-bars navOpenBtn"></i>
                <a class="logo" href="#">Epza</a>

                <ul class="nav-links">
                    <i class="uil uil-times navCloseBtn"></i>
                    <li class="link"><a href="#">Home</a></li>
                    <li><a href="#">New</a></li>
                    <li><a href="#">Notification</a></li>
                    <li><a href="{{url('/login')}}">Login</a></li>
                    <li><a href="{{url('/register')}}">Register</a></li>
                   
                </ul>

                <i class="uil uil-search search-icon" id="searchIcon"></i>
                <div class="search-box">
                    <i class="uil uil-search search-icon"></i>
                    <input type="text" placeholder="Search here....">
                </div>
            </nav>
        </div>

        <div class="banner-text">
            <h2>Export Processing <span>Zones Authority</span></h2>
            <p>Welcome to the announcements electronic board websites.</p>
            <button class="btn"><a class="link_underline"  href="{{url('/home_dashboard')}}">Read More</a></button>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
  </body>
</html>
