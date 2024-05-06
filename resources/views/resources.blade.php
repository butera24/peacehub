<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/resources.scss', 'resources/js/app.js']);
    <title>PeaceHub</title>
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
            <a href="#" id="loginBtn" class=" signin-btn">Sign In</a>
            @endauth

        </header>
    </section>

    <section class="section-2">
        <div class="left">
            <h1>Stress <br>Management</h1>
            <p>Stress is an inescapable part of modern life, but it's impacts can be managed or even minimized. Our
                Stress management program provides comprehesive support to help take control of your work and daily
                life.</p>
        </div>
        <div class="right"></div>
    </section>

    <section class="section-3">
        <div class="card card1"></div>
        <div class="card card2">
            <p>
                "2% of office workers suffer from stress" <br> -Physcological Studies
            </p>
        </div>
        <div class="card card3"></div>
    </section>

    <section class="section-4">
        <div class="left">
            <h1>What is it?</h1>
            <p>We understand that the weight of stress can have a toll on your mental wellness.Introducing our personal
                and group therapyfor the stress Management Physotic treatmet, a holistic that</p>
        </div>
        <div class="right">
            <p>empowers to regain control over your life and find lasting relief from the burdens of stress through our
                personalized assesment, practical coping techniques and regular therapy sessions.</p>
        </div>
    </section>

    <section class="section-5">
        <h1>What will you get?</h1>
        <div class="row">
            <div class="card">
                <div class="icon">
                    <?xml version="1.0" ?>
                    <!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                    <svg height="50px" id="Layer_1" fill="white" style="enable-background:new 0 0 512 512;"
                        version="1.1" viewBox="0 0 512 512" width="50px" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path d="M384,265H264v119h-17V265H128v-17h119V128h17v120h120V265z" />
                        </g>
                    </svg>
                </div>
                <h2>Improved mental Health</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <?xml version="1.0" ?><svg viewBox="0 0 512 512" width="30" height="30" fill="white"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Biceps">
                            <path
                                d="M376.7809,287.8908a105.6316,105.6316,0,0,1,4.9307,9.7747,12.6156,12.6156,0,0,1-7.9916,17.085,12.8146,12.8146,0,0,1-15.4685-7.14c-26.3737-59.7889-108.8917-73.8287-153.2552-25.4984a92.6432,92.6432,0,0,0-24.8194,52.6135,12.8591,12.8591,0,0,1-12.667,11.4747,12.685,12.685,0,0,1-12.6649-14.0252,119.248,119.248,0,0,1,50.1513-83.47V193.2006h68a34,34,0,0,0,34-34V96.2159a29.84,29.84,0,0,0-14.875-25.7553l-22.186-12.8351A42.19,42.19,0,0,0,219.02,64.3409l-88.9947,88.9947a76.2219,76.2219,0,0,0-17.6807,27.54l-56.8645,153.34a55.2822,55.2822,0,0,0,33.5746,71.4c44.4548,15.47,125.375,34.085,183.9412,34.085,28.9116-1.9486,56.9309-13.2579,85.7636-3.7374a324.569,324.569,0,0,0,34.6807,7.1377l-4.59-13.8551a12.8111,12.8111,0,0,1,8.5544-16.3886c6.6538-2,13.6216,2.3474,15.8231,8.9373l12.7685,38.2213h21.2913a12.7087,12.7087,0,0,0,12.7087-12.7087V291.1383a12.7871,12.7871,0,0,0-13.3519-12.7047A342.1659,342.1659,0,0,0,376.7809,287.8908Zm-58.0556,75.5651a226.9552,226.9552,0,0,1-85.34,7.48c-16.5185-2.0669-14.0553-26.82,2.6355-25.33a203.5,203.5,0,0,0,75.6492-6.63C327.9018,334.6,334.8,358.5527,318.7253,363.4559Z" />
                        </g>
                    </svg>
                </div>
                <h2>Improved mental Health</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <?xml version="1.0" ?>
                    <!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                    <svg height="30px" id="Layer_1" fill="white" style="enable-background:new 0 0 512 512;"
                        version="1.1" viewBox="0 0 512 512" width="30px" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M340.8,83C307,83,276,98.8,256,124.8c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6  L245.1,418l10.9,11l10.9-11l148.3-149.8c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z" />
                    </svg>
                </div>
                <h2>Improved mental Health</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
            </div>
            <div class="card">
                <div class="icon">
                    <?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 256 256;" version="1.1"
                        viewBox="0 0 256 256" width="30px" height="30px" fill="white" xml:space="preserve"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path
                                d="M131,53.5c-3-4.6-9.6-6.1-14.2-3.2c-4,2.5-5.7,7.5-4.2,12c0.1,0.4,0.3,0.9,0.5,1.3l5,25.3c-5.4,1.2-13.6,3-13.9,3.1   c-2.8,0.7-5.2,2.5-6.6,5c-1.8,3.3-1.7,7.3,0.3,10.5l27.2,42.9c1.5,2.3,3.8,3.9,6.4,4.5c0.8,0.2,1.5,0.3,2.3,0.3   c1.9,0,3.8-0.5,5.5-1.6c3.8-2.4,5.6-6.9,4.5-11c-0.2-1.1-2.4-15.7-4.3-27.5c5.9-1.5,12.7-3.3,13.4-3.5c2.4-0.8,4.4-2.5,5.6-4.8l0,0   c0.8-1.5,1.3-3.2,1.3-4.9c0-2-0.6-3.9-1.6-5.5L131,53.5z M149.6,102.1c-2.1,0.6-17.1,4.4-17.1,4.4l-4.5,1.1l0.7,4.5   c4.9,32,5,32.4,4.8,32.8l-27.1-43.2c0.8-0.2,18.6-4.1,18.6-4.1l4.8-1.1l-7.1-35.8l0.1-1.1l-0.5-0.8l27.2,43   C149.6,102,149.6,102,149.6,102.1L149.6,102.1z" />
                            <path
                                d="M214.5,76.1C214.5,76.1,214.5,76.1,214.5,76.1c-0.7-4-1.4-7-2.2-9.3c-12-35.7-45.2-59.9-82.7-60.2H129c-0.3,0-0.7,0-1,0   c-0.3,0-0.7,0-1,0h-0.7C88.9,7,55.7,31.1,43.7,66.8c-0.8,2.4-1.5,5.4-2.2,9.3c-2.6,14.9-1,29.9,4.9,43.4c0.2,0.5,0.4,1,0.6,1.4   c4.7,10.3,11.5,22.2,18.2,33.8c7.2,12.5,14.6,25.5,18.8,35.5c1.8,4.4,6.1,7.2,10.9,7.2h66.5c4.8,0,9-2.8,10.9-7.2   c4.2-10.1,11.6-23,18.8-35.5c6.6-11.5,13.5-23.5,18.1-33.7c0.2-0.5,0.4-1,0.6-1.4C215.5,106,217.2,91,214.5,76.1z M200.3,115.6   c-0.1,0.3-0.3,0.7-0.5,1.1c-4.5,9.9-11.2,21.6-17.7,32.9c-7.3,12.8-14.9,26-19.4,36.7c-0.2,0.6-0.8,1-1.5,1H94.8   c-0.7,0-1.3-0.4-1.5-1c-4.4-10.7-12-23.9-19.4-36.7c-6.5-11.3-13.2-23.1-17.8-33c-0.2-0.3-0.3-0.7-0.5-1   c-5.1-11.7-6.5-24.7-4.2-37.6c0.6-3.3,1.2-6,1.8-7.8c10.6-31.6,40-53,73.1-53.3h0.7c0.2,0,0.5,0,0.7,0c0.2,0,0.4,0,0.6,0   c0.2,0,0.5,0,0.7,0h0.6c33.1,0.3,62.5,21.7,73.1,53.3c0.6,1.8,1.2,4.4,1.8,7.8C206.8,90.8,205.4,103.8,200.3,115.6z" />
                            <path
                                d="M164.4,207.8c-2.8-0.5-5.4,1.3-5.9,4l-2.8,14.7h-5.6c-1.8,0-3.5,1-4.4,2.5c-3.7,6.3-10.5,10.1-17.7,10.1   c-7.2,0-14-3.9-17.7-10.1c-0.9-1.5-2.6-2.5-4.4-2.5h-5.6l-2.8-14.7c-0.5-2.7-3.1-4.6-5.9-4c-2.8,0.5-4.6,3.2-4,5.9l3.1,16.5   c0.7,3.8,4,6.5,7.8,6.5h4.7c5.7,7.9,15,12.6,24.8,12.6c9.8,0,19.1-4.8,24.8-12.6h4.7c3.8,0,7.1-2.7,7.8-6.5l3.1-16.5   C169,211,167.2,208.3,164.4,207.8z" />
                        </g>
                    </svg>
                </div>
                <h2>Improved mental Health</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
            </div>

        </div>

    </section>

    <section class="section-6">
        <div class="row-3">
            <dv class="left-ct">
                <button>#How It Works</button>
                <h2>Your Path <br> to Welleness</h2>
            </dv>
            <div class="right-ct">
                <div class="container-text">
                    <div class="circle">1</div>
                    <div class="text-content">
                        <h2>Assesment</h2>
                        <p>Our experienced therapists will assess and understand your mental health needs during
                            counselling
                            through some tests.</p>
                    </div>
                </div>


                <div class="container-text">
                    <div class="circle">2</div>
                    <div class="text-content">
                        <h2>Sessions</h2>
                        <p>We will decide on regular counselling or group support and execute basing on the menatl
                            health
                            test curated by our expert therapist</p>
                    </div>
                </div>


                <div class="container-text">
                    <div class="circle">3</div>
                    <div class="text-content">
                        <h2>Tracking</h2>
                        <p>The therapist assigned to your case will monitor and adjust yur therapy session progress to
                            make
                            sure you get the best experience</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="start">
        <h1>Ready to start your Journey <br>of mental Wellness</h1>

        <form action="process_form.php" method="post">
            <div class="row">
                <div class="input-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" placeholder="Enter your full name ..." required>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email address ..." required>
                </div>
            </div>

            <div class="row">
                <div class="input-group">
                    <label for="date">Consultation Date</label>
                    <input type="date" id="date" value="2023-08-08" required>
                </div>

                <div class="input-group">
                    <label for="issues">Consulting Issues</label>
                    <input id="issues" placeholder="Enter your consulting issues ..." required />
                </div>
            </div>

            <div class="row-1">
                <div class="last">
                    <div class="checkbox">
                        <input type="checkbox" id="newsletter">
                        <label for="newsletter">Send me updates through the monthly Newsletter.</label>
                    </div>
    
                    <div class="checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">By ticking this box, I have read the Patients Guideline and Terms of
                            Condition.</label>
                    </div>
                </div>
    
                <button type="submit">Book Now</button>
            </div>
        </form>


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



</body>

</html>
