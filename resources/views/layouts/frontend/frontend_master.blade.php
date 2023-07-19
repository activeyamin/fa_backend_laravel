<!DOCTYPE html>
<html lang="en{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Montserrat start -->
    <link
        href="https://fonts.googleapis.com/css2?family=Buenard:wght@400;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- Montserrat end -->
    <!-- poppins font start -->
    <link
        href="https://fonts.googleapis.com/css2?family=Buenard:wght@400;700&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
        <!-- poppins font end -->
        <!-- raleway font start-->
        <link
            href="https://fonts.googleapis.com/css2?family=Buenard:wght@400;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&family=Nunito+Sans:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet">
        <!-- raleway font end -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend_assets') }}/images/fa_inter_logo.png">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/responsive.css">
    {{-- select2 nav search start--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- select2 nav search end--}}
    <!-- Custom Stylesheet -->
    <title>FA international</title>
</head>

<body>
    {{-- <div class="progress">
    </div> --}}
    <div class="responsive_nav_canvus_display_none">
        <button class="btn btn-primary js_nav_btn_hide" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fas fa-bars"></i> more</button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                <a class="navbar-brand" href="{{ url("/") }}">
                    <div class="logo" style="width: 100px">
                        <img style="width: 100%" src="{{ asset('frontend_assets') }}/images/fa_inter_logo.png" alt="fa_inter_logo.png">
                    </div>
                </a>
            </h5>
            <button type="button" class="btn-close nav_close_click_on_nav_btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body off_canvas_nav_bg_resp">


            <header>
                <div class="heade_without_con" style="position: relative;">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- start mega manu -->
                            <div class="header_item">
                                <ul class="header_list">
                                    <li class="heade_mega_menu_rela resp_bg_width">
                                        <a href="{{ route("studyaboard") }}" class="text-white heade_title_marg">Study abroad?
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <!-- start mega manu study -->

                                        <!-- end mega manu study -->
                                    </li>
                                        <!-- start mega manu explore -->
                                    <li class="heade_mega_menu_exp_list resp_bg_width">
                                        <a href="{{ route("explorecountries") }}" class="text-white heade_title_marg ">
                                            Explore countries
                                            <i class="fas fa-angle-down"></i>
                                        </a>

                                    </li>
                                        <!-- end mega manu explore -->
                                        <!-- start mega manu find -->
                                    <li class="head_mega_find_list resp_bg_width">
                                        <a href="{{ route("findcourse") }}" class="text-white heade_title_marg">
                                            Find a course <i class="fas fa-angle-down"></i>
                                        </a>

                                    </li>
                                        <!-- end mega manu find -->
                                        <!-- start mega manu what -->
                                    <li class="head_mega_what_list resp_bg_width">
                                        <a href="{{ route("whatwedo") }}" class="text-white heade_title_marg">
                                            What we do? <i class="fas fa-angle-down"></i>
                                            </i>
                                        </a>

                                    </li>
                                        <!-- end mega manu what -->
                                        <!-- start mega manu student -->
                                    <li class="head_mega_student_list resp_bg_width">
                                        <a href="{{ route('studenthealthcover') }}" class="text-white heade_title_marg">
                                            Student Essentials <i class="fas fa-angle-down"></i>
                                        </a>

                                    </li>
                                    <li class="head_mega_student_list resp_bg_width">
                                        <a href="{{ route('fafastlane') }}" class="text-white heade_title_marg">FA Fastlane</a>
                                    </li>
                                </ul>
                                    <!-- end mega manu student -->
                            </div>
                            <!-- end mega manu -->
                            <div class="header_icons btn bg-white">
                                <a href="https://www.facebook.com/fullstackdeveloperbdyamin/"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/frontend-developer-yamin/"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="https://twitter.com/mdyamin07812145"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        </div>
    </div>
    <!-- ========== Start Section Nav ========== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url("/") }}">
            <div class="logo">
                <img src="{{ asset('frontend_assets') }}/images/fa_inter_logo.png" alt="fa_inter_logo.png">
            </div>
        </a>
         <ul class="for_respon_nav_list_show">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('event') }}">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('event') }}">find us</a>
            </li>
        </ul>
        <button class="navbar-toggler resp_btn_hide" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon responsive_font"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('event') }}"><i class="fa-regular fa-calendar icon_font_upp"></i></a>
                    <a class="nav-link active" aria-current="page" href="{{ route('event') }}">Events</a>
                </li>
                <li class="nav-item nav_link_find">
                    <div style="cursor: pointer; color:dimgrey">
                        <i class="fa-solid fa-location-dot font_size resp_icon_hide"></i>
                    </div>
                    <h5 style="margin-left: 10px; text-transform:unset" class="resp_font_size">Find us</h5>
                    <div class="find_us_mega_manu">
                        <button type="button" class="btn btn-outline-success">
                            <a href="{{ route('officelocation') }}">Find Offices near you</a>
                        </button>
                        <div class="find_nav_scroll_height">
                            <strong>Others FA Website</strong>
                            <ul style="padding-left: 10px;" class="nav_mega_find_us_list_font">
                                <li style="display: block;">
                                    <a href="{{ url("/") }}">FA Bangladesh</a>
                                    <a href="{{ route("findusautralia") }}">FA Australia</a>
                                    <a href="{{ route('finduscanada') }}">FA Canada</a>
                                    <a href="{{ route('findusindia') }}">FA India</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            <form class="d-flex nav_form_left_pos">
                <div class="search_icon">
                    <i class="fa-solid fa-magnifying-glass search_icon_show"></i>
                </div>
                <input class="form-control search_long me-2 search_icon_show" type="search" placeholder="Search courses, universities, scholarships or events" aria-label="Search">

            </form>

            {{-- <a class="btn btn-sm bg-success text-white min_device_hide_visit_btn" href="{{ route('home') }}">Visit Dashboard</a> --}}
            <button type="submit" class="btn btn-outline-dark reg_btn text-white">
                <i class="fa-solid fa-user-plus text-white"></i>
                <a href="{{ route('register') }}">Register</a>
            </button>
        </div>
    </nav>
    <!-- ========== End Section Nav ========== -->
    <!-- ========== Start Section Search Part ========== -->
    <section id="search_part">
        <div class="container">
            <i class="fa-solid fa-xmark search_item_hide"></i>
            <div class="row nav_drop_bg">
                <div class="col-lg-12 nav_drop_padd mt-4">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Search for course
                            </button>
                            </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <label for="">Type or Select Study Label from bellow</label>
                                    <select class="form-control" id="search_course_multi_select" name="states[]" multiple="multiple" style="width: 100%; height: 100px">
                                        <option>Select Study Label</option>
                                        <option value="UND">Undergraduate</option>
                                        <option value="UNI">University Preparation</option>
                                        <option value="VO">Vocational (VET)</option>
                                        <option value="EN">English Language</option>
                                        <option value="SC">School</option>
                                    </select>
                                    <select class="form-control mt-4" id="search_sub_select" style="width: 100%">
                                        <option value="DO">Course Subject type...</option>
                                        <option value="DO">Computing And IT</option>
                                        <option value="UND">Law And Legal Studies</option>
                                        <option value="UND">Political And Social Science</option>
                                        <option value="UND">Biological And Life Sciences</option>
                                        <option value="UND">Building And Architecture</option>
                                        <option value="UND">Agriculture Science</option>
                                        <option value="UND">Ecconomice</option>
                                        <option value="UND">Accounting</option>
                                        <option value="UND">Chemistry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Find a University
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <select class="form-control" id="search_univer_multi_select" style="width: 100%;">
                                        <option>University Name type here...</option>
                                        <option value="AU">Australia</option>
                                        <option value="NEW">Newzealand</option>
                                        <option value="CA">Canada</option>
                                        <option value="USA">USA</option>
                                        <option value="IN">India</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Events
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <label for="">Type or Select Month... </label>
                                    <select class="form-control" id="search_month_multi_select" name="states[]" multiple="multiple" style="width: 100%;">
                                        <option>Select Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Favroary</option>
                                        <option value="3">March</option>
                                        <option value="4">Aprlil</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jully</option>
                                        <option value="8">Augest</option>
                                        <option value="9">Septembor</option>
                                        <option value="10">Octobar</option>
                                        <option value="11">Nobembar</option>
                                        <option value="12">Decembor</option>
                                    </select>
                                    <select class="form-control mt-4" id="search_country_select" style="width: 100%">
                                        <option value="DC">Select Destination Country</option>
                                        <option value="AU">Australia</option>
                                        <option value="CA">Canada</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="IE">India</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>

                    <div class="nav_btn_right">
                        <button type="submit" class="btn btn-primary btn-sm  bg-success">
                            <a href="{{ route('findcourse') }}">Find my Ideal Course</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="nav_Popular_course_searc">
                <h3 class="mb-2">Popular course searches</h3>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{ route('legalstudy') }}"> Law</a></button>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{ route('business') }}"> Business and Management</a></button>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="#"> Information Technology</a></button>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{ route('viewallcoursebuilding') }}">Architecture </a></button>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="{{ route('viewallcourseagricalture') }}">Agriculater</a></button>
            </div>
        </div>
    </section>
    <!-- ========== End Section Search Part ========== -->
    <!-- ========== Start Section Header Part ========== -->
    <header>
        <div class="heade_without_con header_btn_item_resp_hide" style="position: relative;">
            <div class="row">
                <div class="col-lg-12">
                    <!-- start mega manu -->
                    <div class="header_item header_dis_none_resp">
                        <ul class="header_list">
                            <li class="heade_mega_menu_rela resp_bg_width">
                                <a href="{{ route("studyaboard") }}" class="text-white heade_title_marg">Study abroad?
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <!-- start mega manu study -->
                                <div class="header_mega_menu mega_head_icon_pos">
                                    <ul class="head_sub_mega_menu_width" class="p-0">
                                        <li class="heade_mega_study_tow_list">
                                            {{-- <div class=" head_mega_study_tow_show">
                                                <ul class="p-0">
                                                    <li><a href="#">Study tow<i class="fa-solid fa-angle-right"></i></a></li>
                                                    <li><a href="#">Study tow</a></li>
                                                    <li><a href="#">Study tow</a></li>
                                                    <li><a href="#">Study tow</a></li>
                                                    <li><a href="#">Study tow</a></li>
                                                </ul>
                                            </div> --}}
                                            {{-- <i class="fa-solid fa-angle-right"></i> --}}
                                        </li>
                                        <li><a href="{{ route('ourstudents') }}">Our Students</a></li>
                                        <li><a href="{{ route('whystudyabroad') }}">Why study abroad?</a></li>
                                        <li><a href="{{ route('studentsafety') }}">Student Safety Guide</a></li>
                                        <li><a href="{{ route('studentbenefitcard') }}">Study abroad benefits</a></li>
                                        <li><a href="{{ route('readystudyabroad') }}">Are you ready to apply?</a></li>
                                        <li><a href="{{ route('studyabroadfaq') }}">Studying abroad FA QS</a></li>
                                        <li><a href="{{ route('chooisecourse') }}">Six reasons to choose FA</a></li>
                                        <li><a href="{{ route('fastudyguide') }}">FA guide to study abroad</a></li>
                                        {{-- <li><a href="{{ route('letterrecommention') }}">Letter of Recommendation</a></li> --}}
                                        {{-- <li><a href="{{ route('statementpurpose') }}">Statement of Purpose</a></li> --}}
                                    </ul>
                                </div>
                                <!-- end mega manu study -->
                            </li>
                                <!-- start mega manu explore -->
                            <li class="heade_mega_menu_exp_list resp_bg_width">
                                <a href="{{ route("explorecountries") }}" class="text-white heade_title_marg ">Explore countries <i class="fa-solid fa-angle-right"></i></a>
                                <div class="header_mega_menu head_mega_manu_exp_show">
                                    <ul class="explore_mega_menu_marg p-0">
                                        <li><a href="{{ route('studyusa') }}">Study in USA</a></li>
                                        <li><a href="{{ route('findusindia') }}">Study in India</a></li>
                                        <li><a href="{{ route('studycanada') }}">Study in Canada</a></li>
                                        <li><a href="{{ route('studyaustralia') }}">Study in Australia</a></li>
                                        <li><a href="{{ route('studynewzealand') }}">Study in Newzeanland</a></li>
                                    </ul>
                                </div>
                            </li>
                                <!-- end mega manu explore -->
                                <!-- start mega manu find -->
                            <li class="head_mega_find_list resp_bg_width">
                                <a href="{{ route("findcourse") }}" class="text-white heade_title_marg">Find a course <i class="fa-solid fa-angle-right"></i></a>
                                <div class="header_mega_menu head_mega_manu_find_show">
                                    <ul class="explore_mega_menu_marg p-0">
                                        <li><a href="{{ route('viewallcourseagricalture') }}">Agriculture</a></li>
                                        <li><a href="{{ route('findcourse') }}">Find a Course</a></li>
                                        <li><a href="{{ route('univercityranking') }}">University Ranking</a></li>
                                        <li><a href="{{ route('studyabroadintaks') }}">Study aboard intakes</a></li>
                                        <li><a href="{{ route('chooisecourse') }}">How to chose a course</a></li>
                                    </ul>
                                </div>
                            </li>
                                <!-- end mega manu find -->
                                <!-- start mega manu what -->
                            <li class="head_mega_what_list resp_bg_width">
                                <a href="{{ route("whatwedo") }}" class="text-white heade_title_marg">What we do?
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <div class="header_mega_menu head_mega_manu_what_show">
                                    <ul class="explore_mega_menu_marg p-0">
                                        <li><a href="{{ route('freevirtualconsul') }}">Virtual Office</a></li>
                                        <li><a href="{{ route('courseadvice') }}">Course Advice</a></li>
                                        <li><a href="{{ route('event') }}">Welcome Events</a></li>
                                        <li><a href="{{ route('studenthealthcover') }}">Student Essentials</a></li>
                                        <li><a href="{{ route('freevirtualconsul') }}">Free Counselling sessions</a></li>
                                        <li><a href="{{ route('visaapplicationass') }}">Visa Application Assistance</a></li>
                                    </ul>
                                </div>
                            </li>
                            {{-- start mega memu student essentials --}}
                            <li class="head_mega_student_list resp_bg_width">
                                <a href="{{ route('studenthealthcover') }}" class="text-white heade_title_marg">
                                    <i class="fa-solid fa-angle-right"></i>
                                    Student Essentials
                                </a>
                                <div class="header_mega_menu head_mega_manu_student_show">
                                    <ul class="explore_mega_menu_marg p-0">
                                        <li><a href="{{ route('studenthealthcover') }}">Student Health Cover</a></li>
                                        <li><a href="{{ route('accomendation') }}">Accomendation</a></li>
                                        <li><a href="{{ route('studentbanking') }}">Student Banking</a></li>
                                        <li><a href="{{ route('moneytransfar') }}">Money Transfar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li style="margin-left: 10px">
                                <a href="{{ route('fafastlane') }}" class="text-white heade_title_marg">FA Acceleration</a>
                            </li>
                        </ul>
                            <!-- end mega manu student -->
                    </div>
                    <!-- end mega manu -->
                    <div class="header_icons btn bg-white">
                        <a href="https://www.facebook.com/fullstackdeveloperbdyamin/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/frontend-developer-yamin/"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://twitter.com/mdyamin07812145"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== End Section Header Part ========== -->
{{-- frontend master body start --}}
@yield('frontend_content')
{{-- frontend master body end --}}
<!-- ========== Start Section Footer ========== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="footer_item">
                        <ul>
                            <li><a href="{{ route('studyaboard') }}"><h5> Study abroad</h5></a></li>
                            <li><a href="{{ route('event') }}">Events</a></li>
                            <li><a href="{{ route('studenthealthcover') }}">Student Essentials</a></li>
                            <li><a href="{{ route('studyabroadfaq') }}">Study abroad FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="footer_item">
                        <ul>
                            <li><a href="#"><h5>Useful links</h5></a></li>
                            <li><a href="{{ route('findcourse') }}">Find a course<li></a>
                                <li><a href="{{ route('chooisecourse') }}">How to choose a course</a></li>
                                <li><a href="{{ route('univercityranking') }}">QS World University Ranking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="footer_item">
                        <ul>
                            <li><a href="{{ route('officelocation') }}"><h5>Contact with FA</h5></a></li>
                            <li><a href="{{ route('aboutusfa') }}">About Us</a></li>
                            <li><a href="{{ route('visaapplicationass') }}">Visa Application</a></li>
                            <li><a href="{{ url('/') }}">Contact FA Bangladesh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div class="footer_copyright_item">
                    <strong class="copyright_stng copy_resp_font">Copyright © 2023 FA Education</strong>
                    <ul class="footer_copyright_list">
                        <li><a href="">Disclaimer | </a></li>
                        <li><a href="">Privacy Policy | </a></li>
                        <li><a href="">Terms Of Use | </a></li>
                        <li><a href="#">Investors</a></li>
                    </ul>
                    <div class="icons footer_icon_resp_hide">
                        <a href="https://www.facebook.com/fullstackdeveloperbdyamin/">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/frontend-developer-yamin/">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com/mdyamin07812145">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Start Section Favorite ========== -->
<!-- ===========End part Footer========== -->
<!-- ========== Start Section js ========== -->
<script src="{{ asset('frontend_assets') }}/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>
<!-- <script src="{{ asset('frontend_assets') }}/js/all.min.js"></script> -->
<script src="{{ asset('frontend_assets') }}/js/waypoints.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/venobox.min.js"></script>
<!-- <script src="{{ asset('frontend_assets') }}/js/jquery.counterup.min.js"></script> -->
<script src="{{ asset('frontend_assets') }}/js/jquery.progress.js"></script>
<script src="{{ asset('frontend_assets') }}/js/slick.min.js"></script>
<script src="{{ asset('frontend_assets') }}/js/script.js"></script>
{{-- select2 js search start --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


{{-- select2 js search end --}}

<!-- ========== End Section js ========== -->
</body>

</html>
