<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PeaceHub</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css']);
    {{-- .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%,-50%);
        left: 50%;
        top: 50%;
    }
    .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }
    .shape:first-child {
        background: linear-gradient(
            #1845ad,
            #23a2f6
        );
        left: -80px;
        top: -80px;
    }
    .shape:last-child {
        background: linear-gradient(
            to right,
            #ff512f,
            #f09819
        );
        right: -30px;
        bottom: -80px;
    }
    form {
        height: 520px;
        width: 400px;
        background-color: rgba(255,255,255,0.13);
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        padding: 50px 35px;
    }
    form * {
        font-family: 'Poppins',sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }
    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }
    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }
    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }
    ::placeholder {
        color: #e5e5e5;
    }
    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
    .social {
        margin-top: 30px;
        display: flex;
    }
    .social div {
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255,255,255,0.27);
        color: #eaf0fb;
        text-align: center;
    }
    .social div:hover {
        background-color: rgba(255,255,255,0.47);
    }
    .social .fb {
        margin-left: 25px;
    }
    .social i {
        margin-right: 4px;
    }
  </style> --}}
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
                    <li><a href="/about ">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <a href="" id="signin" class="signin-btn">Sign
                In</a>
        </header>

        <div class="row">
            <div class="col column-1">
                {{-- <div class="menu">
                    <div class="menu-item item-1">Counselling</div>
                    <div class="menu-item item-2">Group Therapy</div>
                </div> --}}
                {{-- <div class="card">
                    <div class="card-title">
                        Join our active healthy community
                        <p>As easy as a click away</p>
                    </div>
                    <div class="card-icons">
                        <div class="icons">
                            <img src="{{ asset('images/1108.jpg') }}" alt="">
                            <img src="{{ asset('images/1108.jpg') }}" alt="">
                            <img src="{{ asset('images/1108.jpg') }}" alt="">
                        </div>
                        <div class="plus">+</div>
                    </div>
                </div> --}}
                <div class="context">
                    <h1 class="text-7xl" style="line-height: 1.1">A Journey to <br> Mental Wellness</h1>
                </div>
            </div>
            <div class="col column-2">
                {{-- <div class="cta">
                    <button class="cta-button">Healthy Mind</button>
                    <div class="background"></div>
                </div> --}}
                <button class="btngetStarted">Get Started</button>
            </div>
            <div class="col column-3">
                {{-- <div class="vcard">
                    <p>Welcome to PeaceHub. Join us <br> on our transformative journey <br>towards lasting peace</p>
                </div> --}}
                <div class="calender">
                    <div class="cal-head">
                        <div class="title">Book <br>Schedule</div>
                        <div class="view-all">View All</div>
                    </div>
                    <div class="schedule-grid">
                        <!-- Repeat this div for each day -->
                        <div class="day"></div>
                        <div class="day"></div>
                        <div class="day">3</div>
                        <div class="day"></div>
                        <div class="day"></div>
                        <div class="day">6</div>
                        <div class="day"></div>
                        <!-- ... other days -->
                    </div>
                    <div class="schedule-grid" style="margin-left: 15px">
                        <!-- Repeat this div for each day -->
                        <div class="day"></div>
                        <div class="day">9</div>
                        <div class="day"></div>
                        <div class="day"></div>
                        <div class="day">10</div>
                        <div class="day"></div>
                        <div class="day"></div>
                        <!-- ... other days -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2">

        <div class="left-section">
            <button class="btn-1">Book Now</button>
            <button class="btn-2">Check Availability</button>
        </div>

        <div class="right-section">

            <h1>You Deserve to be <br> Mentally Healthy</h1>
            <p>Discover the heart behind our mental health platform. At our core, we are a compassionate community
                of experts dedicated to guiding you on your journey to emotional well-being and resilience.</p>
            <button>Get Started</button>

            <!-- Confidentiality -->
            <div class="row-2">
                <div class="feature-card confidentiality">
                    <div class="img">
                        <div class="img"><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" height="30px" id="Privacy" version="1.1" viewBox="0 0 512 512" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="135.103" x2="376.8968" y1="471" y2="229.2062"><stop offset="0" style="stop-color:#FF7BAC"/><stop offset="1" style="stop-color:#00FFFF"/></linearGradient><path d="M371.994,461.68H140.007c-18.966,0-34.34-15.375-34.34-34.34V272.867  c0-18.966,15.374-34.34,34.34-34.34h231.987c18.965,0,34.339,15.375,34.339,34.34V427.34  C406.333,446.305,390.959,461.68,371.994,461.68z" fill="url(#SVGID_1_)"/><path d="M377.521,224.297h-40v-53.116c0-44.587-36.274-80.861-80.86-80.861c-44.587,0-80.861,36.274-80.861,80.861  v53.116h-40v-53.116c0-66.643,54.218-120.861,120.861-120.861c66.643,0,120.86,54.218,120.86,120.861V224.297z" fill="#3F5EAB"/><path d="M291,327.844c0-19.33-15.67-35-35-35s-35,15.67-35,35c0,10.8,4.895,20.453,12.582,26.873l-11.732,41.986  h68.01l-11.677-41.788C286.007,348.496,291,338.754,291,327.844z" fill="#3F5EAB"/></svg></div>
                    </div>
                    <h4>Confidentiality</h4>
                    <p>Your privacy is sacred; we maintain the highest level of confidentiality.</p>
                </div>

                <!-- Accessibility -->
                <div class="feature-card accessibility">
                    <div class="img">
                        <div class="img"><?xml version="1.0" ?><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"><title/><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm-.5,3A1.5,1.5,0,1,1,10,6.5,1.5,1.5,0,0,1,11.5,5ZM14,18H13a2,2,0,0,1-2-2V12a1,1,0,0,1,0-2h1a1,1,0,0,1,1,1v5h1a1,1,0,0,1,0,2Z" fill="#464646"/></svg></div>
                    </div>
                    <h4>Accesibility</h4>
                    <p>Accessible mental health support for all backgrounds and areas.</p>
                </div>

                <!-- Community -->
                <div class="feature-card community">
                    <div class="img"><?xml version="1.0" ?><svg height="30px" id="svg8" version="1.1" viewBox="0 0 24 24" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs2"><rect height="20px" id="rect2504" width="20px" x="-1.1008456" y="289.81766"/></defs><g id="g2111" style="stroke-width:0.956082" transform="matrix(1.0459139,0,0,1.045958,-0.5509673,-0.54909117)"><path d="m -67.951172,-26.626953 c -1.504935,0 -2.734374,1.230724 -2.734375,2.736328 0,0.837434 0.387563,1.580795 0.984375,2.083984 -0.787148,0.31867 -1.468286,0.845415 -1.978516,1.517579 -0.212196,-0.169546 -0.439246,-0.317708 -0.683593,-0.433594 0.356628,-0.37021 0.580078,-0.864892 0.580078,-1.414063 0,-1.141817 -0.952071,-2.068359 -2.101563,-2.068359 -1.149491,0 -2.105468,0.926542 -2.105468,2.068359 0,0.552112 0.227394,1.049121 0.58789,1.419922 -1.017818,0.483582 -1.779429,1.427053 -1.951172,2.589844 l -0.08594,0.574219 H -58.4668 l -0.08398,-0.574219 c -0.17167,-1.162299 -0.932002,-2.106071 -1.949219,-2.589844 0.359489,-0.370712 0.585938,-0.868258 0.585938,-1.419922 0,-1.141817 -0.954024,-2.068359 -2.103516,-2.068359 -1.149492,0 -2.103516,0.926542 -2.103516,2.068359 0,0.548723 0.223473,1.043945 0.580078,1.414063 -0.244991,0.116116 -0.472861,0.2636 -0.685546,0.433594 -0.509827,-0.67107 -1.188597,-1.199013 -1.97461,-1.517579 0.596812,-0.503189 0.986329,-1.24655 0.986328,-2.083984 0,-1.505604 -1.231393,-2.736329 -2.736329,-2.736328 z m -5.933594,3.423828 c 0.621385,0 1.103516,0.47765 1.103516,1.066406 0,0.588757 -0.482131,1.066406 -1.103516,1.066407 -0.621384,0 -1.103515,-0.477651 -1.103515,-1.066407 0,-0.588755 0.482131,-1.066406 1.103515,-1.066406 z m 11.867188,0 c 0.621385,0 1.103516,0.477651 1.103516,1.066406 0,0.588756 -0.482131,1.066406 -1.103516,1.066407 -0.621385,0 -1.101563,-0.47765 -1.101563,-1.066407 0,-0.588756 0.480178,-1.066406 1.101563,-1.066406 z m -5.933594,2.050781 c 1.60498,5.56e-4 2.838499,1.118265 3.337891,2.591797 h -6.677735 c 0.499908,-1.473702 1.734435,-2.592138 3.339844,-2.591797 z" id="path1315" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1" transform="matrix(0.95610164,0,0,0.95606133,77.014912,38.766484)"/><path d="m -78.632812,-38.445312 v 7.947265 h 8.375 l 2.251953,2.746094 2.330078,-2.746094 h 8.308593 v -7.947265 z m 3.341796,2.359374 h 14.582032 v 1.070313 h -14.582032 z m 0,2.085938 h 10.714844 v 1.072266 h -10.714844 z" id="path1943" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:stroke fill markers;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1" transform="matrix(0.95610164,0,0,0.95606133,77.014912,38.766484)"/></g></svg></div>
                    <h4>Community</h4>
                    <p>We foster a supportive community where you can connect and share.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-3">
        <div class="header">
            <button>#Services</button>
            <h1>Our Mental <br> Health Services</h1>
            <p>Explore our diverse services designed to nurture your mental health. From online counseling to
                self-care tools, we offer a holistic approach to help you achieve the emotional balance and strength
                you deserve.</p>
        </div>

        <div class="counseling">
            <div class="image">
                <div class="info">
                    <h5>Counseling</h5>
                    <p>One-on-one sessions with our expert and experienced mental health therapists.</p>
                </div>
                <button>Get Started</button>
            </div>
            <div class="group-therapy">
                Group Therapy
            </div>
            <div class="crisis-helpline">
                Crisis Helpline
            </div>
        </div>



    </section> --}}

    <section class="section-4">
        <button id="btn-head">#issues</button>
        <h3>Common Mental Health<br>Issues We Address</h3>
        <div class="issues">
            <div class="issue-card depression">

                <h2>Depression</h2>
                <p>Learn about coping strategies and seek professional help.</p>
            </div>
            <div class="issue-card anger">
                <h2>Anger Issues</h2>
                <p>Learn about coping strategies and seek professional help.</p>
            </div>
            <div class="issue-card anxiety">
                <h2>Anxiety</h2>
                <p>Learn about coping strategies and seek professional help.</p>
            </div>
        </div>
        <button id="btn-foot">Learn More</button>
    </section>

    <section class="section-5">
        <div class="row-3">
            <dv class="left-ct">
                <button>#How It Works</button>
                <h2>Your Path <br> to Wellness</h2>
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

    <section class="section-6">
        <div class="left-6">
            <h3>Ready to emback on your <br>journey of welless</h3>
            <p>Start your mental health transformation with our experienced therapists <br> today. Get to be in your
                ultimate inner peace and lasting well-being with <br>our programs, tailored special to your mental needs
            </p>
            <button>Get Started</button>
        </div>
        <div class="right-6">
            <div class="upper-image"></div>
            <div class="lower-image">
                <div class="discounts d1">#LetsStayHealthy</div>
                {{-- <div class="discounts d2">50% <br>Discount</div> --}}
            </div>
        </div>
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

    !-- Modal -->
    {{-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="background">
                        <div class="shape"></div>
                        <div class="shape"></div>
                    </div>
                    <form>
                        <h3>Login Here</h3>
                        <label for="username">Username</label>
                        <input type="text" placeholder="Email or Phone" id="username">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" id="password">
                        <button>Log In</button>
                        <div class="social">
                            <div class="go"><i class="fab fa-google"></i> Google</div>
                            <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to open modal on Sign In link click -->
    <script>
      $(document).ready(function(){
        $('#signin').click(function(e){
          e.preventDefault(); // Prevent default link behavior
          $('#loginModal').modal('show');
        });
      });
    </script> --}}

    
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Script to open modal on Sign In link click -->
    <script>
        $(document).ready(function(){
          $('#signin').click(function(e){
            e.preventDefault(); // Prevent default link behavior
            $('#loginModal').modal('show');
          });
        });
      </script>
</body>

</html>
