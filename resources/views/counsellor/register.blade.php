<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - PeaceHub</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add custom styles here */
        .gradient-custom-2 {
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }
    </style>
</head>
<body>
    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">PeaceHub Registration</h4>
                                    <p class="small mb-0">Welcome to PeaceHub! Please fill out the registration form to create an account.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h2>PEACE<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="black" class="m-1">
                                            <path d="M288 167.2v-28.1c-28.2-36.3-47.1-79.3-54.1-125.2-2.1-13.5-19-18.8-27.8-8.3-21.1 24.9-37.7 54.1-48.9 86.5 34.2 38.3 80 64.6 130.8 75.1zM400 64c-44.2 0-80 35.9-80 80.1v59.4C215.6 197.3 127 133 87 41.8c-5.5-12.5-23.2-13.2-29-.9C41.4 76 32 115.2 32 156.6c0 70.8 34.1 136.9 85.1 185.9 13.2 12.7 26.1 23.2 38.9 32.8l-143.9 36C1.4 414-3.4 426.4 2.6 435.7 20 462.6 63 508.2 155.8 512c8 .3 16-2.6 22.1-7.9l65.2-56.1H320c88.4 0 160-71.5 160-159.9V128l32-64H400zm0 96.1c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16z" />
                                        </svg>HUB</h2>
                                    </div>
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        
                                        @csrf
                                        <!-- Full Name -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>

                                        <!-- Gender -->
                                        <div class="form-group">
                                            <select class="form-control" id="gender" name="gender" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                        </div>
                                        <!-- University ID -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="university_id" name="university_id" placeholder="University ID" required>
                                        </div>
                                        <!-- Major -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="major" name="major" placeholder="Major" required>
                                        </div>
                                        <!-- Year -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="year" name="year" placeholder="Year" required>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-register btn-block " style="background-color: rgb(70, 70, 240)">Register</button>
                                            <p class="text-muted mt-3">Already have an account? <a href="">Log in</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
