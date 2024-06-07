<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ABSU">
    <meta name="author" content="">
    <meta name="keyword" content="Abia State University Application form">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}">

    <title>ABSU</title>
    <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .customModal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1 !important; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .customModal-content {
            background-color: #fefefe;
            margin: 2% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 6px;
            z-index: 1 !important;
        }


        .closeBtn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closeBtn:hover,
        .closeBtn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .bg-cover {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
        }

        .sign-btn {
            background-color: #313131;
            color: #fff;
            border: 1px solid #ff5e14;
        }

        .sign-btn:hover {
            background: #fff;
            color: #313131;
        }

        .employer {
            display: none; /* Hide all by default */
        }

        .input-group {
            z-index: 1;
        }

        @media (min-width: 767px) {
            .show-only-mobile {
                display: none;
            }
        }
    </style>
</head>
<body>

<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div class="main">
    <section class="hero-section full-screen gray-light-bg">
        <div class="container-fluid px-0">
            <div class="row align-items-center justify-content-center">

                <div class="col-12 col-md-7 col-lg-6 col-xl-6 d-none d-lg-block">

                    <!-- Sidebar -->
                    <div class="bg-cover vh-100 ml-n3">
                        <div class="position-absolute login-signup-content">
                            <div class="position-relative text-white col-md-12 col-lg-7">
                                <img src="{{ asset('assets/img/logo.png') }}" width="80px" alt="logo" class="img-fluid"/></a><p>
                                <p class="lead">
                                    Abia State Unversity <br>
                                    Office of the registrar (Admissions) <br>
                                    Institute for Continuing Education (ICE) <br>
                                    Enugu Study Center <br>
                                    P.M.P 2000, Uturu <br>
                                    Abia State
                                </p>

                                {{-- <div class="action-btns download-btn mt-4">
                                    <a class="btn outline-white-btn" href="{{ route('users.dashboard') }}">Sign in</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6 px-lg-6">
                    <div class="login-signup-wrap px-4 px-lg-5 my-5">
                        <!-- Heading -->
                        <h1 class="text-center mb-1">
                            <img src="{{ asset('assets/img/logo.png') }}" width="40px" alt="logo" class="img-fluid"/> <br> Application Form
                        </h1>

                        <!-- Subheading -->
                        @if (session('failed'))
                            <div class="alert alert-danger">
                                {{ session('failed') }}
                            </div>
                            @else
                                <p class="text-muted text-center my-3">
                                    Abia State Unversity
                                    {{-- <a class="btn sign-btn border-radius" style="background: #fefefe; color:rgba(0, 0, 0, 0.8)" href="#">Make Payment</a> --}}
                                </p>
                                <p class="text-muted text-center show-only-mobile">
                                    Office of the registrar (Admissions) <br>
                                    Institute for Continuing Education (ICE) <br>
                                    Enugu Study Center <br>
                                    P.M.P 2000, Uturu <br>
                                </p>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Form -->
                        <form class="login-signup-form" method="POST" action="{{ route('store.application') }}" enctype="multipart/form-data">
                            @csrf





                            {{-- section 1 --}}
                            <div id="section1" class="section">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3" style="font-weight: 600">Personal Information</div>
                                    <div class="col-md-4">
                                        <!-- Fullname -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Fullname
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-user color-primary"></span>
                                                </div>
                                                <input type="text" name="fullname" required class="form-control" placeholder="Surname, Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label for="phone" class="pb-1">
                                                Mobile Number
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-mobile color-primary"></span>
                                                </div>
                                                <input type="text" id="phone" name="phone" required class="form-control" placeholder="Enter your Mobile number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                E-Mail
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-email color-primary"></span>
                                                </div>
                                                <input type="email" name="email" required class="form-control" placeholder="Enter your email">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <!-- gender -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Gender
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-user color-primary"></span>
                                                </div>
                                                <select type="text" name="gender" required class="form-control">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                DOB
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-calendar color-primary"></span>
                                                </div>
                                                <input type="date" name="dob" required class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                State
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-map color-primary"></span>
                                                </div>
                                                <select class="form-control" name="state" required id="stateSelect" onchange="updateLGAs()">
                                                    <option selected disabled>Select a state</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nasarawa">Nasarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamfara</option>
                                                    <option value="Federal Capital Territory">FCT Abuja</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- LGA -->
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Local Government Area
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-map color-primary"></span>
                                                </div>
                                                <select class="form-control" name="lga" required id="lgaSelect">
                                                    <option selected disabled>Choose your LGA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Address
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-map color-primary"></span>
                                                </div>
                                                <input type="text" class="form-control" name="address" required placeholder="Enter your address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn sign-btn border-radius mt-4 mb-3" onclick="nextSection('section1', 'section2')">Continue</button>
                            </div>






                            {{-- Section 2 --}}
                            <div id="section2" class="section" style="display: none;">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3" style="font-weight: 600">NOK(Next of Kin) & Prev. Exam</div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Next of Kin
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-user color-primary"></span>
                                                </div>
                                                <input type="text" name="nok" required class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Relationship with NOK
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-user color-primary"></span>
                                                </div>
                                                <input type="text" name="r_nok" required class="form-control" placeholder="Relationship">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                NOK Address
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-map color-primary"></span>
                                                </div>
                                                <input type="text" class="form-control" name="a_nok" required placeholder="Enter address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label for="phone" class="pb-1">
                                                NOK Phone Number
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-mobile color-primary"></span>
                                                </div>
                                                <input type="text" id="phone" name="phone_nok" required class="form-control" placeholder="Enter Mobile number">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Previous Exam No.
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-pencil color-primary"></span>
                                                </div>
                                                <input type="number" class="form-control" name="prev_exam_no" placeholder="Optional">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Previous Exam Type
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-info color-primary"></span>
                                                </div>
                                                <input type="text" name="prev_type_exam" class="form-control" placeholder="Optional">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="pb-1">
                                                Previous Exam Year
                                            </label>
                                            <!-- Input group -->
                                            <div class="input-group input-group-merge">
                                                <div class="input-icon">
                                                    <span class="ti-calendar color-primary"></span>
                                                </div>
                                                <input type="text" class="form-control" name="prev_exam_year" placeholder="Optional">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{-- btn continue and previous --}}
                                <div class="btn-group">
                                        <button type="button" class="btn sign-btn border-radius mt-4 mb-3" onclick="previousSection('section2', 'section1')">Previous</button>
                                        <button type="button" class="btn sign-btn border-radius mt-4 mb-3" onclick="nextSection('section2', 'section3')">Continue</button>
                                </div>
                            </div>








                            {{-- Section 3 --}}
                            <div id="section3" class="section" style="display: none;">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3" style="font-weight: 600">Programs</div>

                                    <div class="form-row w-100 m-0">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Program Type
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-list color-primary"></span>
                                                    </div>
                                                    <select name="progamme_type" required class="form-control">
                                                        <option>Regular Degree</option>
                                                        <option>Regular Part-Time Degree</option>
                                                        <option>Regular Part-Time PG</option>
                                                        <option>Weekend Degree</option>
                                                        <option>Weekend PG</option>
                                                        <option>Sandwich</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Choose center
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-list color-primary"></span>
                                                    </div>
                                                    <select name="center" required class="form-control">
                                                        <option>Enugu Center</option>
                                                        <option>Awgu Center</option>
                                                        <option>Nkanu Center</option>
                                                        <option>Nsukka Center</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Program Category
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-list color-primary"></span>
                                                    </div>
                                                    <select id="categorySelect" onchange="updateCourses()" name="progamme_category" required class="form-control">
                                                        <option  selected disabled>Select program</option>
                                                        <option value="degree">Degree</option>
                                                        <option value="med">M.ED</option>
                                                        <option value="pgd">PGD</option>
                                                        <option value="msc">M.SC.</option>
                                                        <option value="ma">MA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Course
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-list color-primary"></span>
                                                    </div>
                                                    <select id="courseSelect" name="course" required class="form-control">
                                                        <option value="">Select a course</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                                <div class="btn-group">
                                    <button type="button" class="btn sign-btn border-radius mt-4 mb-3" onclick="previousSection('section3', 'section2')">Previous</button>
                                        <button type="button" class="btn sign-btn border-radius mt-4 mb-3" onclick="nextSection('section3', 'section4')">Continue</button>
                                </div>

                            </div>






                            {{-- Section 4 --}}
                            <div id="section4" class="section" style="display: none;">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3" style="font-weight: 600">Attatchments</div>


                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    O.level Result (WAEC/NECO/NABTEB/A LEVEL)
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-gallery color-primary"></span>
                                                    </div>
                                                    <input type="file" accept=".png, .jpg" name="o_level_1" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    O.level Result 2 (Optional)
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-gallery color-primary"></span>
                                                    </div>
                                                    <input type="file" accept=".png, .jpg" name="o_level_2" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Jamb result
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-gallery color-primary"></span>
                                                    </div>
                                                    <input type="file" accept=".png, .jpg" name="jamb_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    FSLC/Testimonial (Optional)
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-gallery color-primary"></span>
                                                    </div>
                                                    <input type="file" accept=".png, .jpg" name="fslc" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Passport
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-gallery color-primary"></span>
                                                    </div>
                                                    <input type="file" accept=".png, .jpg" name="passport" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Label -->
                                                <label class="pb-1">
                                                    Other documents
                                                </label>
                                                <!-- Input group -->
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-gallery color-primary"></span>
                                                    </div>
                                                    <input type="file" accept=".png, .jpg" name="others" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>






                                {{-- <div class="form-check d-flex align-items-center text-center">
                                    <input type="checkbox" class="form-check-input mt-0 mr-3" id="exampleCheck1" required>
                                    <label class="form-check-label small" for="exampleCheck1">I agree your
                                        <button type="button" class="btn-sm btn-default border-0" data-modal="modal1">Terms and Conditions</button> and
                                        <button type="button" class="btn-sm btn-default border-0" data-modal="modal2">Privacy Policy</button></label>
                                </div> --}}

                                {{-- previous and submit --}}
                                <div class="btn-group">
                                    <button type="button" class="btn sign-btn border-radius mt-4 mb-3" onclick="previousSection('section4', 'section3')">Previous</button>
                                    <button type="submit" class="btn sign-btn border-radius mt-4 mb-3">Pay Now</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>


    </section>
</div>






<script>
    $(document).ready(function() {
        showSection('section1');
    });

    function showSection(section) {
    $('.section').hide();
    $('#' + section).show();
    }

    function nextSection(current, next) {
        // Perform validation for the current section
        if(validateSection(current)) {
            $('#' + current).hide();
            $('#' + next).show();
        } else {
            alert('Please fill out all required fields.');
        }
    }

    function previousSection(current, prev) {
    $('#' + current).hide();
    $('#' + prev).show();
    }

    /*Modify below to accept old() when return*/
    function validateSection(section) {
        var isValid = true;
        $('#' + section + ' input[required]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
            }
        });
        return isValid;
    }
</script>



<!--jQuery-->
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<!--Popper js-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--custom js-->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
{{-- state and lga --}}
<script src="{{ asset('assets/js/state_lga.js') }}"></script>

<script>
    const courses = {
        degree: [
            "B.Sc. Accountancy",
            "B.Sc. Management",
            "B.Sc. Marketing",
            "B.Sc. Banking & Finance",
            "B.Sc. Economics",
            "B.Sc. Sociology",
            "B.Sc. Political Science",
            "B.Sc. Public Administration",
            "B.Sc. Mass Communication",
            "B.Sc. Education Accountancy",
            "B.Sc. Business Education",
            "B.Sc. Education/Geography",
            "B.Sc. Environmental Resources/Management",
            "B.A. English",
            "B.A. History and Int'l Relations",
            "B.A. Education/Igbo",
            "B.A. Education/Linguistics Igbo",
            "B.A. Education/Library and Information Science",
            "B.A. French",
            "B.A. Religion",
            "B.A. Philosophy",
            "B.A. Education English",
            "B.A. Education French",
            "B.A. Education Government",
            "B.A. Education Religion",
            "B.A. Social Studies Education",
            "B.Ed. Guidance and Counselling"
        ],
        med: [
            "Education Mgt .& Planning",
            "English Education",
            "Education Measurement and Evaluation",
            "Education Psychology",
            "Curriculum Studies",
            "Guidance & Counselling",
            "Mathematics of Education",
            "French Education",
            "History Education",
            "Political Science Education",
            "Library & Information Science Education",
            "Accountancy Education"
        ],
        pgd: [
            "Management",
            "Accountancy",
            "Education",
            "Mass Communication",
            "Marketing",
            "Public Administration",
            "Court Interpreting",
            "Banking & Finance",
            "History & International Relations",
            "Church Interpreting"
        ],
        msc: [
            "Accountancy",
            "Management",
            "Marketing",
            "Finance",
            "Political Science",
            "Public Administration",
            "Banking & Finance",
            "Library & Information Science",
            "Economics",
            "Sociology"
        ],
        ma: [
            "Applied Linguistics",
            "Mass Communication",
            "English Literature",
            "Foreign Language Translation"
        ]
    };

    function updateCourses() {
        const categorySelect = document.getElementById('categorySelect');
        const courseSelect = document.getElementById('courseSelect');
        const selectedCategory = categorySelect.value;

        // Clear previous options
        courseSelect.innerHTML = '<option value="">Select a course</option>';

        if (selectedCategory && courses[selectedCategory]) {
            courses[selectedCategory].forEach(course => {
                const option = document.createElement('option');
                option.value = course;
                option.textContent = course;
                courseSelect.appendChild(option);
            });
        }
    }
</script>
</body>

</html>
