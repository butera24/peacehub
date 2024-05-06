<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PeaceHub</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        @vite(['resources/sass/blog.scss', 'resources/js/app.js']);

    </head>

<body>
    <section class="section-1">
        <header id="header">
            <div class="logo" style="cursor: pointer;">PEACE
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20"
                    fill="white">
                    <path
                        d="M288 167.2v-28.1c-28.2-36.3-47.1-79.3-54.1-125.2-2.1-13.5-19-18.8-27.8-8.3-21.1 24.9-37.7 54.1-48.9 86.5 34.2 38.3 80 64.6 130.8 75.1zM400 64c-44.2 0-80 35.9-80 80.1v59.4C215.6 197.3 127 133 87 41.8c-5.5-12.5-23.2-13.2-29-.9C41.4 76 32 115.2 32 156.6c0 70.8 34.1 136.9 85.1 185.9 13.2 12.7 26.1 23.2 38.9 32.8l-143.9 36C1.4 414-3.4 426.4 2.6 435.7 20 462.6 63 508.2 155.8 512c8 .3 16-2.6 22.1-7.9l65.2-56.1H320c88.4 0 160-71.5 160-159.9V128l32-64H400zm0 96.1c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16z" />
                </svg>
                HUB
            </div>


            <nav>
                <ul>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    @auth('student')
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    @endauth
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            @auth('student')
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" href=""
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off" style="color: red"></i>
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('user logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @else
            <a href="{{ route('loginpage') }}" id="loginBtn" class="signin-btn">Sign In</a>
            @endauth

        </header>

        <div class="text">PeaceHub <br>Blog </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog-card">
                <div class="header">
                    <div class="avatar">
                        <img src="user-avatar.jpg" alt="User Avatar">
                    </div>
                    
                    <div class="user-details">
                        <h3 class="username">John Doe</h3>
                        <span class="date">January 1, 2025</span>
                    </div>
                </div>
                <div class="content">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                </div>
                <div class="actions">
                    <div class="icon like">
                        <i class="fas fa-thumbs-up"></i>
                        <span class="count">10</span>
                    </div>
                    <div class="icon comment">
                        <i class="fas fa-comment"></i>
                        <span class="count">5</span>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Font Awesome Icons -->
    </section>

    <footer>
        <div class="footer-row">
            <div class="foot-col foot-1">
                <h1>PEACE<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="25" height="30"
                        fill="white">
                        <path
                            d="M288 167.2v-28.1c-28.2-36.3-47.1-79.3-54.1-125.2-2.1-13.5-19-18.8-27.8-8.3-21.1 24.9-37.7 54.1-48.9 86.5 34.2 38.3 80 64.6 130.8 75.1zM400 64c-44.2 0-80 35.9-80 80.1v59.4C215.6 197.3 127 133 87 41.8c-5.5-12.5-23.2-13.2-29-.9C41.4 76 32 115.2 32 156.6c0 70.8 34.1 136.9 85.1 185.9 13.2 12.7 26.1 23.2 38.9 32.8l-143.9 36C1.4 414-3.4 426.4 2.6 435.7 20 462.6 63 508.2 155.8 512c8 .3 16-2.6 22.1-7.9l65.2-56.1H320c88.4 0 160-71.5 160-159.9V128l32-64H400zm0 96.1c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16z" />
                    </svg>HUB</h1>
                <p>We are mental health experienced therapists that are passionate on our goal on empowering you
                    mentally with our wellness Journey</p>
                <input type="text" placeholder="Enter your Address for New Letter">
            </div>
            <div class="foot-col foot-2">
                <div>
                    <a href=""> About Us</a>
                    <a href=""> Stories</a>
                    <a href=""> Carrier</a>
                    <a href=""> Testimonies</a>
                </div>
                <p> Copyright &copy; PeaceHub 2024
                </p>
            </div>
            <div class="foot-col foot-3">
                <div>
                    <a href="">FAQ</a>
                    <a href=""> Prices</a>
                    <a href=""> Policy</a>
                    <a href=""> Support</a>
                </div>
            </div>
            <div class="foot-col foot-4">
                <div>
                    <a href=""> Phone</a>
                    <a href=""> Email</a>
                    <a href=""> Location</a>
                    <a href=""> Socials</a>
                </div>
                <div><a href="#header">Back To Top</a></div>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
