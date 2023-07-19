@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- =============event study_next_banner_part part start======== -->
    <section id="study_next_banner_part">
        <nav class="evnt_bradcrmb_marg"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item event_bread_col"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Best Study Abroad Programs for Bangladeshi Students</li>
            </ol>
        </nav>
    </section>
    <!-- =============event study_next_banner_part part end======== -->
    <!-- =============study next page courses part start======== -->
    <section id="study_next_courses_part">
        <div class="container text-center">
            <div class="title">
                <h2 class="my-2">Find a course</h2>
                <p>With so many courses and universities to choose from, deciding where and what to study abroad can be a
                    daunting task.
                    Don’t worry, we are here to guide you during the entire process. Our experienced counselors work with you to
                    understand
                    your goals and aspirations to help find the perfect fit for you. You can reach out to your nearest <a style="text-decoration: underline " href="{{ route('officelocation') }}">FA Office</a> for a
                    free counseling session anytime!</p>
            </div>
            <button class="btn btn-outline-secondary study_next_btn_col my-2">
                <a href="register.html" style="font-size: 18px; font-weight:500">Sign Up Now</a>
            </button>
            <div class="row">
                <div class="col-lg-12">
                    <div class="study_next_banner my-4">
                        <img class="canada_banner_shape" src="{{ asset('frontend_assets') }}./images/popular_shape.png" alt="popular_shape.png">
                        <h3>Discover your chance of success</h3>
                        <p>With FastLane, you can now get an instant "offer in principle" for the course you want to study at your dream
                            university. Please select a course from the below list to know more.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3"><a href="{{ route('viewallcourse') }}" class="study_title_under">Computing and IT</a></h2>
                        <ul class="p-0" style="overflow-y: scroll; height: 320px;">
                            <li><a href="{{ route('viewallcourse') }}"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Computer Engineering</a></li>
                            <li><a href="#">Computer Garphice</a></li>
                            <li><a href="#">Computer Science</a></li>
                            <li><a href="#">Data Analysis</a></li>
                            <li><a href="#">Game Development</a></li>
                            <li><a href="#">Information Technology</a></li>
                            <li><a href="#">IT Security</a></li>
                            <li><a href="#">Saftware Engineering</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcoursebiological') }}" class="study_title_under">Biological and Life Sciences</a></h2>
                        <ul class="p-0" style="overflow-y: scroll; height: 320px;">
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Biochemistry</a></li>
                            <li><a href="#">Biotechnology</a></li>
                            <li><a href="#">Computer Science</a></li>
                            <li><a href="#">Forensics</a></li>
                            <li><a href="#">Genetics</a></li>
                            <li><a href="#">Zoology</a></li>
                            <li><a href="#">Saftware Engineering</a></li>
                            <li><a href="#">Web Development</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcoursebuilding') }}" class="study_title_under">Building and Architecture</a></h2>
                        <ul class="p-0">
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Artificial Intelligence</a>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design </a></li>
                            <li><a href="#">Surveying</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Theoretical physics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcoursechemistry') }}" class="study_title_under">Chemistry</a></h2>
                        <ul class="p-0">
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Computer Engineering</a></li>
                            <li><a href="#">Computer Garphice</a></li>
                            <li><a href="#">Computer Science</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcourseaccounting') }}" class="study_title_under">Accounting</a></h2>
                        <ul class="p-0">
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Computer Engineering</a></li>
                            <li><a href="#">Computer Garphice</a></li>
                            <li><a href="#">Computer Science</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcourseecconomice') }}" class="study_title_under">Ecconomice</a></h2>
                        <ul class="p-0">
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Computer Engineering</a></li>
                            <li><a href="#">Computer Garphice</a></li>
                            <li><a href="#">Computer Science</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcourselawlegal') }}" class="study_title_under">Law and Legal Studies</a></h2>
                        <ul class="p-0">
                            <li><a href="{{ route('findcourse') }}"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Constitutional Law</a></li>
                            <li><a href="#">Business and Commercial Law</a></li>
                            <li><a href="#">Legal Studies</a></li>
                            <li><a href="#">Law</a></li>
                            <li><a href="#">Police Studies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="{{ route('viewallcourseagricalture') }}" class="study_title_under">Agriculture Science</a></h2>
                        <ul class="p-0">
                            <li><a href="{{ route('findcourse') }}"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Crop Science</a></li>
                            <li><a href="#">Food Science</a></li>
                            <li><a href="#">Horticulture and Viticulture</a></li>
                            <li><a href="#">Wool Science</a></li>
                            <li><a href="#">Animal</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="study_next_page_item">
                        <h2 class="mt-3 res_marg_h2"><a href="viewallcoursepolitical" class="study_title_under">Political and Social Science</a></h2>
                        <ul class="p-0">
                            <li><a href="{{ route('findcourse') }}"><i class="fa-solid fa-angle-right"></i> View all courses</a></li>
                            <li><a href="#">Gender Studies</a></li>
                            <li><a href="#">Human Rights</a></li>
                            <li><a href="#">Political Science</a></li>
                            <li><a href="#">International Affairs</a></li>
                            <li><a href="#">Political Science and Policy Studies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============study next page courses part end======== -->
    <!-- =============study next page customer saying part end======== -->
    <section id="study_customer_saying_part" class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="study_aus_item_res text-center">
                        <h3>What Our Customers Are Saying</h3>
                        <h4 class="my-2">534+ reviews</h4>
                        <div class="study_aut_icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                        </div>
                        <h5 class="mt-2">4.4/5</h5>
                        <button class="btn btn-warning study_aus_btn_col mt-3">
                            <a style="font-size: 18px;" href="help_study_show_js.html">Help me study aboard</a>
                        </button>
                    </div>
                    <div class="study_cus_say_item text-center">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="study_aus_item_res text-center">
                        <h3 class="text-info">Great support!!</h3>
                        <h6 class="my-2">Amazing place for educational counseling. I strongly recommend FA for your study partner.
                            especially, Afroz Jahan
                            Fredous (Apu) helped me a lot with the application process and explained step by step what would be needed. I
                            highly
                            appreciate Afroz Jahan Ferdous (Apu) for her excellent service.</h6>
                        <strong class="mt-3">Student from Gulshan, Dhaka</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============study next page customer saying part end======== -->
    <!-- ========== Start Section event form Part ========== -->
    <section id="study_part">
        <div class="title">
            <h2>Study Abroad with FA Bangladesh</h2>
            <h5>Fill in your details below to get a personalised advice</h5>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="study_img_item">
                    <div class="img">
                        <img src="{{ asset('frontend_assets') }}./images/student_cus_say_form.jpg" alt="student_cus_say_form.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="study_form_item">
                    <form action="#" method="post" class="form-control">
                        <div class="mb-3 mb-4" style="display: flex;">
                            <input type="text" class="form-control mb-2" name="first_name" placeholder="First Name*">
                            <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                        </div>
                        <div class="mb-3 mb-4">
                            <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                        </div>
                        <div class="mb-3 mb-4">
                            <input type="tel" class="form-control mb-2" name="phone_number" placeholder="Mobile Numbe* (+880)">
                        </div>
                        <div class="form_pos_resp" style="display: flex; position: relative; margin-top: 70px;">
                            <!-- selected study start -->
                            <label class="form-label mb-3 study_label_pos">Your preferred study destination</label>
                            <select name="study_degination" class="form-select mb-4">
                                <option class="study_select_padd" value="" selected="selected">
                                    Please select</option>
                                <option value="AU">Australia</option>
                                <option value="CA">Canada</option>
                                <option value="NZ">New Zealand</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="IE">Ireland</option>
                            </select>
                            <!-- selected study end -->
                            <!-- year selected start -->
                            <label class="control-label mb-3 when_study_label_pos">
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
                            <label for="" class="form-label mb-2 mt-4">FA will not share your details with others without your permission:</label>
                            <div class="check_box mb-4">
                                <input type="checkbox" class="styled-checkbox" name="check_box" />
                                <label class="study_term_cond_mar">
                                    I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy policy</a></label>
                            </div>
                            <div class="check_box mb-4">
                                <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox" />
                                <label class="study_term_cond_mar">Please contact me by phone, email or SMS to assist with my enquiry</label>
                            </div>
                            <div class="check_box mb-4">
                                <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                    class="styled-checkbox" />
                                <label class="study_term_cond_mar">I would like to receive updates and offers from FA</label>
                            </div>
                        </div>
                        <button class="btn study_form_btm_btn">
                            <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                        </button>
                    </form>
                </div>
            </div>
    </section>
    <!-- ===============================
        find course body end
    ===================================== -->
@endsection
