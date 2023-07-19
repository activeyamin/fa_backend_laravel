@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section explore countries  ========== -->
    <section id="why_study_abroad_banner">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home <i class="fa-solid fa-angle-right"></i></a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('ourstudents') }}" class="text-white">
                            Top 6 Study Abroad Destinations
                        </a>
                    </li> --}}
                </ol>
            </nav>
        </div>
    </section>

    <!-- ========== End Section explore countries ========== -->
    <!-- =============explore part start======== -->
    <section id="study_aboard_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-7">
                    <div class="title study_title_marg">
                        <h2 class="mb-3">Our students</h2>
                        <p class="mb-2">
                            Want to get to know our students better? Let us introduce you.
                        </p>
                    </div>
                    <p class="mb-2">
                        Our students come from across the globe and from many walks of life, however they all have one thing in common – they’ve had IDP’s help to achieve their dream of living and studying in a foreign country. To see what it’s like, meet a few students who made to move to study overseas.
                    </p>
                    <h4>Find your perfect city</h4>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_ind.jpg" alt="explore_coun_ind.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="{{ route('fastudyguide') }}">Step-by-step guide to international study</a>
                                <p class="my-3">The next thing I knew, I was on a plane to Melbourne. It was scary and over-whelming when I first got here. New faces, new streets, different food, found myself lost for a moment but then I thought to myself, coming here was my dream, I am here. What am I afraid of?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow">
                        <div class="col-lg-12 p-0">
                            <div class="study_aboard_bg_item  p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}/images/our_students.jpg" alt="our_students">
                                </div>
                                <div class="our_student_video_icon">
                                    <a class="my-video-links" data-autoplay="true" data-vbtype="video" href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i class="fa-solid fa-play"></i></a>
                                </div>
                                <div class="student_storie_title">
                                    <strong>Anna studying in New Zealand</strong><br>
                                    <span>Studying in New Zealand</span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row study_box_shadow">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_aust.jpg" alt="explore_coun_aust.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="{{ route('studentbenefitcard') }}">Benefits of overseas study</a>
                                <p class="my-3">
                                    After finishing my undergraduate degree in Malaysia and working in HR and logistics I became very interested in marketing and branding more specifically. That’s why I decided to study a Master of Marketing at RMIT.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- =======study success start========= -->
                    <div class="row mt-4 study_succ_marg">
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ1.jpg" alt="study_succ1.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5>
                                        <a href="{{ route('studentbenefitcard') }}">
                                            Benefits of overseas study
                                        </a>
                                    </h5>
                                    <p>
                                        It’s important that you feel ready before landing in a country far away from home.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ2.jpg" alt="study_succ2.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5>
                                        <a href="{{ route('studyabroadfaq') }}">
                                            We answer your frequently asked questions
                                        </a>
                                    </h5>
                                    <p>There’s a lot to know before deciding to study overseas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ3.jpg" alt="study_succ3.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="{{ route('getpersonaladvice') }}">Let's help you study abroad</a></h5>
                                    <p>We find a student the right place to study every 15 minutes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =======study success end========= -->
                </div>
                <div class="col-lg-5">
                    <div class="event_found_item">
                        <form action="#" method="post" class="form-control p-4">
                            <div class="title study_aboard_form_title">
                                <h2>Interested in studying abroad with FA?</h2>
                                <p>Enter your details below and we'll call you back when it suits you.</p>
                            </div>
                            <div class="mb-3 mb-4" style="display: flex;">
                                <input type="text" class="form-control form_input_marg mb-2" name="first_name" placeholder="First Name*">
                                <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="tel" class="form-control mb-2" name="phone_number" placeholder="Mobile Numbe* (+880)">
                            </div>
                            <div>
                                <!-- selected study start -->
                                <label class="form-label">Your preferred study destination</label>
                                <select name="study_degination" class="form-select">
                                    <option class="study_select_padd" value="" selected="selected">
                                        Please select</option>
                                    <option value="AU">Australia</option>
                                    <option value="CA">Canada</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="IE">Ireland</option>
                                </select><br>
                                <!-- selected study end -->
                                <!-- year selected start -->
                                <label class="control-label mb-3">
                                    When do you plan to study?</label>
                                <select name="years_select" class="form-select mb-4" id="">
                                    <option value="" selected="selected">
                                        Please select</option>
                                    <option value="Jul-2023">Jul 2023</option>
                                    <option value="Aug-2023">Aug 2023</option>
                                    <option value="Sep-2023">Sep 2023</option>
                                    <option value="Oct-2023">Oct 2023</option>
                                    <option value="Nov-2023">Nov 2023</option>
                                    <option value="Dec-2023">Dec 2023</option>
                                    <option value="Jan-2024">Jan 2024</option>
                                    <option value="Feb-2024">Feb 2024</option>
                                    <option value="Mar-2024">Mar 2024</option>
                                    <option value="Apr-2024">Apr 2024</option>
                                    <option value="May-2024">May 2024</option>
                                    <option value="Jun-2024">Jun 2024</option>
                                    <option value="Jul-2024">Jul 2024</option>
                                    <option value="Aug-2024">Aug 2024</option>
                                    <option value="Sep-2024">Sep 2024</option>
                                    <option value="Oct-2024">Oct 2024</option>
                                    <option value="Nov-2024">Nov 2024</option>
                                    <option value="Dec-2024">Dec 2024</option>
                                    <option value="Jan-2025">Jan 2025</option>
                                    <option value="Feb-2025">Feb 2025</option>
                                    <option value="Mar-2025">Mar 2025</option>
                                    <option value="Apr-2025">Apr 2025</option>
                                    <option value="May-2025">May 2025</option>
                                    <option value="Jun-2025">Jun 2025</option>
                                    <option value="Jul-2025">Jul 2025</option>
                                    <option value="Aug-2025">Aug 2025</option>
                                    <option value="Sep-2025">Sep 2025</option>
                                    <option value="Oct-2025">Oct 2025</option>
                                    <option value="Nov-2025">Nov 2025</option>
                                    <option value="Dec-2025">Dec 2025</option>
                                    <option value="Jan-2026">Jan 2026</option>
                                    <option value="Feb-2026">Feb 2026</option>
                                    <option value="Mar-2026">Mar 2026</option>
                                    <option value="Apr-2026">Apr 2026</option>
                                    <option value="May-2026">May 2026</option>
                                    <option value="Jun-2026">Jun 2026</option>
                                    <option value="Jul-2026">Jul 2026</option>
                                    <option value="Aug-2026">Aug 2026</option>
                                    <option value="Sep-2026">Sep 2026</option>
                                    <option value="Oct-2026">Oct 2026</option>
                                    <option value="Nov-2026">Nov 2026</option>
                                    <option value="Dec-2026">Dec 2026</option>
                                    <option value="Jan-2027">Jan 2027</option>
                                    <option value="Feb-2027">Feb 2027</option>
                                    <option value="Mar-2027">Mar 2027</option>
                                    <option value="Apr-2027">Apr 2027</option>
                                    <option value="May-2027">May 2027</option>
                                    <option value="Jun-2027">Jun 2027</option>
                                    <option value="Jul-2027">Jul 2027</option>
                                    <option value="Aug-2027">Aug 2027</option>
                                    <option value="Sep-2027">Sep 2027</option>
                                    <option value="Oct-2027">Oct 2027</option>
                                    <option value="Nov-2027">Nov 2027</option>
                                    <option value="Dec-2027">Dec 2027</option>
                                    <option value="Jan-2028">Jan 2028</option>
                                    <option value="Feb-2028">Feb 2028</option>
                                    <option value="Mar-2028">Mar 2028</option>
                                    <option value="Apr-2028">Apr 2028</option>
                                    <option value="May-2028">May 2028</option>
                                </select>
                                <!-- selected year end -->
                            </div>
                            <!-- form FA office start -->
                            <label class="control-label">Nearest FA Office</label>
                            <select id="" name="office_Name" class="form-select mb-4">
                                <option value="" selected="selected">
                                    Please select</option>
                                <option value="Chattogram ">Chattogram </option>
                                <option value="Dhaka &ndash; Dhanmondi">Dhaka &ndash; Dhanmondi</option>
                                <option value="Dhaka &ndash; Gulshan">Dhaka &ndash; Gulshan</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                            <!-- form FA office end -->
                            <!--form counselling start  -->
                            <label class="control-label">Preferred mode of counselling</label>
                            <select name="" class="form-select mb-4">
                                <option value="" selected="selected">
                                    Please select</option>
                                <option value="In-person">In-person</option>
                                <option value="Virtual Counselling">Virtual Counselling</option>
                            </select>

                            <!-- form counselling end -->
                            <!-- form founded start -->
                            <label class="control-label">How would you fund your education?</label>
                            <select name="" class="form-select mb-4">
                                <option value="" selected="selected">
                                    Please select</option>
                                <option value="01">Self-Funded</option>
                                <option value="02">Parents</option>
                                <option value="03">Seeking Scholarship</option>
                                <option value="06">Bank Loan</option>
                            </select>
                            <!-- form founded end -->

                            <div class="study_form_term_cond">
                                <label for="" class="form-label mb-2 mt-4">FA will not share your details with
                                    others
                                    without
                                    your permission:</label>
                                <div class="check_box mb-4">
                                    <input type="checkbox" class="styled-checkbox" name="check_box" />
                                    <label class="study_term_cond_mar">
                                        I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy
                                            policy</a></label>
                                </div>
                                <div class="check_box mb-4" style="display: flex;">
                                    <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox" />
                                    <label class="study_term_cond_mar">Please contact me by phone, email or SMS to
                                        assist
                                        with
                                        my enquiry</label>
                                </div>
                                <div class="check_box mb-4">
                                    <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                        class="styled-checkbox" />
                                    <label class="study_term_cond_mar">I would like to receive updates and offers
                                        from
                                        FA</label>
                                </div>
                            </div>
                            <button class="btn">
                                <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="title">
                <h2>Your next steps</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <a href="{{ route('findcourse') }}">
                            <div class="study_next_item_overlay">
                                <i class="fa-solid fa-graduation-cap study_next_icon "></i>
                                <p>Choose a subject and we’ll find courses that match your criteria.</p>
                                <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <!-- ===study form aboard item show bar start=== -->
                        <div class="study_form_item_show_js">
                            <a href="{{ route('getpersonaladvice') }}">
                                <div class="study_next_item_overlay">
                                    <i class="fa-solid fa-headphones-simple study_next_icon study_form_item_show_js"></i>
                                        <p>We’ll help you achieve your study abroad dreams. Find out how?</p>
                                    <i class="fa-solid fa-angle-right study_next_arro_icon study_form_item_show_js"></i>
                                </div>
                            </a>
                        </div>
                        <!-- ===study form aboard item show bar end=== -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============explore part end======== -->
@endsection
